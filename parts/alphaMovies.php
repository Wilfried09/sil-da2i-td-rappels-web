<?php

$nb = $bdd->query('SELECT COUNT(*) FROM movie');
$nb = $nb->fetch();

 function displayMovies($nb,$bdd){
   $return = '';
   for($i=1;$i<=$nb[0];$i=$i+1){
     $data = $bdd->query('SELECT title FROM movie WHERE id_movie = "'.$i.'"');
     $data = $data->fetch();
     $return = $return."<li><a href='./movie.php'>".$data[0]."</a></li>";
   }
   return $return;
 }

?>

<div class="centered-element">
  <h2>Films</h2>
  <ul>

    <?php echo displayMovies($nb,$bdd) ?>

  </ul>
</div>
