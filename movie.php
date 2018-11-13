<?php
function getBlock($file, $data = []){
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=bddmovie;charset=utf8', 'root', '');
  }catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  require './parts/'.$file.'.php';
}
?>

<!DOCTYPE html>
<html lang="fr">
    <?php getBlock('headInfos'); getBlock('bodyMovie'); ?>
</html>
