<?php

spl_autoload_register(function($class) {
    include './classes/'.$class.'.php';
});

use Movie as Movie;
use Director as Director;
use Actor as Actor;

function getBlock($file, $data = []){
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
  }catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  $nbMovies = $bdd->query('SELECT id_movie FROM movie');
  $nbMovies = $nbMovies->fetch();//Contient deux id sur 5 présents dans la base de donnée

  $nbDirectors = $bdd->query('SELECT p.id_person FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 1');
  $nbDirectors = $nbDirectors->fetch();

  $nbActors = $bdd->query('SELECT p.id_person FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 0');
  $nbActors = $nbActors->fetch();
  var_dump($nbMovies);

  $movies=getAllMovies($nbMovies);
  $directors=getAllDirectors($nbDirectors);
  $actors=getAllActors($nbActors);

  require './parts/'.$file.'.php';
}

function getAllMovies($nbMovies){
  $movies = [];
  $nb=count($nbMovies);
  for($i=0;$i<$nb;$i++){
      $movies[$i]= new Movie($nbMovies[$i]);
  }
  return $movies;
}

function getAllDirectors($nbDirectors){
  $directors = [];
  $nb=count($nbDirectors);
  for($i=0;$i<$nb;$i++){
      $directors[$i]= new Director($nbDirectors[$i]);
  }
  return $directors;
}

function getAllActors($nbActors){
  $actors = [];
  $nb=count($nbActors);
  for($i=0;$i<$nb;$i++){
      $actors[$i]= new Actor($nbActors[$i]);
  }
  return $actors;
}

?>
