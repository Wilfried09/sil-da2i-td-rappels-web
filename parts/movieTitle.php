<?php
  $title = $bdd->query('SELECT title FROM movie');
  $title = $title->fetch();
?>

<header>
  <h1><?php echo $title[0] ?></h1>
</header>
