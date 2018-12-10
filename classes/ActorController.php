<?php

class ActorController{
  private $actors = [];

  public function __construct(){
    $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
    $nb = $bdd->query('SELECT COUNT(*) FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 0');
    $nb = $nb->fetch();
    for($i=0;$i<$nb;$i=$i+1){
      $this->actors[$i] = new Actor($i);
    }
  }

  public function get_actors(){
    return $this->actors;
  }
}

?>
