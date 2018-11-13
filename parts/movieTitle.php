<?php
  $title = $bdd->query('SELECT title FROM movie');
  $title = $title->fetch();
?>

<header>
  <h1>Cinémane</h1>
</header>
