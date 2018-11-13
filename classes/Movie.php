<?php
class Movie {
  private $id;
  private $title;
  private $date;
  private $synopsis;
  private $rating;

  public function __construct($id){
    $movie = $bdd->query('SELECT * FROM movie WHERE id_movie = "'.$id.'"');
    $movie = $movie->fetch();
    $this->id = $movie[0];
    $this->title = $movie[1];
    $this->date = $movie[2];
    $this->$synopsis = $movie[3];
    $this->$rating = $movie[4];
  }

  public get_id(){
    return $this->id
  }

  public get_title(){
    return $this->title
  }

  public get_date(){
    return $this->date
  }

  public get_synopsis(){
    return $this->synopsis
  }

  public get_rating(){
    return $this->rating
  }
}
?>
