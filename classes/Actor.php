<?php
class Actor extends Person{
  private $role;

  public function __construct(){
    $this->role = "Acteur";
  }

  public get_role(){
    return $this->role
  }
}
?>
