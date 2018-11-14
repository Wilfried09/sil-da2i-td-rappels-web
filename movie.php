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
  $nb = $bdd->query('SELECT COUNT(*) FROM movie');
  $nb = $nb->fetch();
  $nbMovies = $nb[0];

  $nb = $bdd->query('SELECT COUNT(*) FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 1');
  $nb = $nb->fetch();
  $nbDirectors = $nb[0];

  $nb = $bdd->query('SELECT COUNT(*) FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 0');
  $nb = $nb->fetch();
  $nbActors = $nb[0];

  $movies=getAllMovies($nbMovies);
  $directors=getAllDirectors($nbDirectors);
  $actors=getAllActors($nbActors);

  require './parts/'.$file.'.php';
}

function getAllMovies($nb){
  $movies = [];
  for($i=1;$i<=$nb[0]+1;$i=$i+1){
      $movies[$i]= new Movie($i);
  }
  return $movies;
}

function getAllDirectors($nb){
  $directors = [];
  for($i=1;$i<=$nb[0]+1;$i=$i+1){
      $directors[$i]= new Director($i);
  }
  return $directors;
}

function getAllActors($nb){
  $actors = [];
  for($i=1;$i<=$nb[0]+1;$i=$i+1){
      $actors[$i]= new Actor($i);
  }
  return $actors;
}

?>

<!DOCTYPE html>
<html lang="fr">
    <?php getBlock('headInfos'); getBlock('bodyMovie'); ?>
</html>
