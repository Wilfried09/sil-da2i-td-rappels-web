<?php

class HomeController{
  private $content;

  public function __construct(){
    $this->content =
    "<?php require './config.php'; ?>
    <!DOCTYPE html><html lang='fr'><?php getBlock('headInfos'); getBlock('bodyIndex'); ?></html>";
  }

  public function get_content(){
    return $this->content;
  }
}
?>
