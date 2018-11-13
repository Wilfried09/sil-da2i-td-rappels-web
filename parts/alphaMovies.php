<?php

$nb = $bdd->query('SELECT COUNT(*) FROM movie');
$nb = $nb->fetch();

 function displayMovies($nb,$bdd){
   $return = '';
   for($i=1;$i<=$nb[0];$i=$i+1){
     $data = $bdd->query('SELECT title FROM movie WHERE id_movie = "'.$i.'"');
     $data = $data->fetch();
     $return = $return."<li>".$data[0]."</li>";
   }
   return $return;
 }

?>

<div class="display-inline left-text">
  <h2>Films</h2>
  <ul>

    <?php echo displayMovies($nb,$bdd) ?>

  </ul>
</div>
