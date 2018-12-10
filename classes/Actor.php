<?php

class Actor extends Person{
  private $role;

  public function __construct($id){
    parent::__construct($id);
    $this->role = "Acteur";
  }

  public function get_role(){
    return $this->role;
  }
}
?>
