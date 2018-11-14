<?php
class Person{
  private $id;
  private $firstname;
  private $lastname;
  private $birthdate;
  private $biography;

  public function __construct($id){
    $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
    $person = $bdd->query('SELECT * FROM person WHERE id_person = "'.$id.'"');
    $person = $person->fetch();
    $this->id = $person[0];
    $this->firstname = $person[1];
    $this->lastname = $person[2];
    $this->birthdate = $person[3];
    $this->biography = $person[4];
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
}
