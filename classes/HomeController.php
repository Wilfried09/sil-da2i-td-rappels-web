<?php

class HomeController{
  private $movies;
  private $directors;
  private $actors;

  public function __construct(){
    $this->movies = new MovieController();
    $this->directors = new DirectorController();
    $this->actors = new ActorController();
    getBlock('alphaMovies', $this->$movies);
    getBlock('alphaDirectors', $this->directors);
    getBlock('alphaActors', $this->$actors);
  }


}

?>
