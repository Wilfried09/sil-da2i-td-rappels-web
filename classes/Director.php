<?php

class Director extends Person{
  private $role;

  public function __construct($id){
    parent::__construct($id);
    $this->role = "Réalisateur";
  }

  public function get_role(){
    return $this->role;
  }
}
?>
