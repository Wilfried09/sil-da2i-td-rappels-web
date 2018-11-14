<?php
class Movie {
  private $id;
  private $title;
  private $date;
  private $synopsis;
  private $rating;
  private $path;

  public function __construct($id){
    $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
    $movie = $bdd->query('SELECT m.id_movie, m.title, m.releaseDate, m.synopsis, m.rating, pic.path FROM movie m, moviehaspicture mp, picture pic WHERE m.id_movie = mp.id_movie AND mp.id_picture = pic.id_picture AND m.id_movie = "'.$id.'"');
    $movie = $movie->fetch();
    $this->id = $movie[0];
    $this->title = $movie[1];
    $this->date = $movie[2];
    $this->synopsis = $movie[3];
    $this->rating = $movie[4];
    $this->path = $movie[5];
  }

  public function get_id(){
    return $this->id;
  }

  public function get_title(){
    return $this->title;
  }

  public function get_date(){
    return $this->date;
  }

  public function get_synopsis(){
    return $this->synopsis;
  }

  public function get_rating(){
    return $this->rating;
  }

  public function get_path(){
    return $this->path;
  }
}
?>
