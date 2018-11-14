<?php
require './classes/Person.php';

class Director extends Person{
  private $role;

  public function __construct(){
    $this->role = "Réalisateur";
  }

  public function get_role(){
    return $this->role;
  }
}
?>
