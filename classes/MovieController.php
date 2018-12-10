<?php

class MovieController{
  private $movies = [];

  public function __construct(){
    $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
    $nb = $bdd->query('SELECT COUNT(*) FROM movie m');
    $nb = $nb->fetch();
    for($i=0;$i<$nb;$i=$i+1){
      $this->movies[$i] = new Movie($i);
    }
  }

  public function get_movies(){
    return $this->movies;
  }
}

?>
