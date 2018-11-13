<?php
class Person{
  private $id;
  private $firstname;
  private $lastname;
  private $birthdate;
  private $biography;

  public function __construct($id){
    $person = $bdd->query('SELECT * FROM person WHERE id_person = "'.$id.'"');
    $person = $person->fetch();
    $this->id = $person[0];
    $this->firstname = $person[1];
    $this->lastname = $person[2];
    $this->birthdate = $person[3];
    $this->biography = $person[4];
  }

  public get_id(){
    return $this->id
  }

  public get_firstname(){
    return $this->firstname
  }

  public get_lastname(){
    return $this->lastname
  }

  public get_birthdate(){
    return $this->birthdate
  }

  public get_biography(){
    return $this->biography
  }
}
