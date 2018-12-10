<?php

class DirectorController{
    private $directors = [];

    public function __construct(){
      $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
      $nb = $bdd->query('SELECT COUNT(*) FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 1');
      $nb = $nb->fetch();
      for($i=0;$i<$nb;$i=$i+1){
        $this->directors[$i] = new Director($i);
      }
    }

    public function get_directors(){
      return $this->directors;
    }
}

?>
