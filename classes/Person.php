<?php
class Person{
  private $id;
  private $firstname;
  private $lastname;
  private $birthdate;
  private $biography;
  private $path;
  private $role;

  public function __construct($id, $role){
    $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
    $person = $bdd->query('SELECT p.id_person, p.firstname, p.lastname, p.birthdate, p.biography, pic.path, mp.role FROM person p, personhaspicture pp, picture pic, moviehasperson mp WHERE p.id_person = pp.id_person AND pp.id_picture = pic.id_picture AND p.id_person = "'.$id.'" AND mp.role ="'.$role.'" ');
    $person = $person->fetch();
    $this->id = $person[0];
    $this->firstname = $person[1];
    $this->lastname = $person[2];
    $this->birthdate = $person[3];
    $this->biography = $person[4];
    $this->path = $person[5];
    $this->role = ($person[6]==0 ? "Acteur" : "Réalisateur");
  }

  public function get_id(){
    return $this->id;
  }

  public function get_firstname(){
    return $this->firstname;
  }

  public function get_lastname(){
    return $this->lastname;
  }

  public function get_birthdate(){
    return $this->birthdate;
  }

  public function get_biography(){
    return $this->biography;
  }

  public function get_path(){
    return $this->path;
  }

  public function get_role(){
    return $this->role;
  }
}
