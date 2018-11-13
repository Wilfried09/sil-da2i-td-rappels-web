<?php
class Director extends Person{
  private $role;

  public function __construct(){
    $this->role = "Réalisateur";
  }

  public get_role(){
    return $this->role
  }
}
?>
