<?php
  $nb = $bdd->query('SELECT COUNT(m.id_movie) FROM movie m, moviehaspicture mp WHERE m.id_movie = mp.id_movie AND mp.type = 0');
  $nb = $nb->fetch();


  function displayFilm($nb, $bdd){
    $return = '';
    for($i=0;$i<$nb[0];$i=$i+1){
      $data = $bdd->query('SELECT m.title, p.path FROM movie m, picture p, moviehaspicture mp  WHERE m.id_movie = mp.id_movie AND mp.id_picture = p.id_picture AND m.id_movie = 2 AND mp.type != 1');
      $data = $data->fetch();
      $return = $return.getBlock('filmGallery', $data);
      if($i != $nb[0]){
        $return = $return."<hr class='display-desktop'>";
      }
    }
    return $return;
  }

?>


<section>
  <h2 class="padding-standard no-margin bg-darkred color-white border-radius-right">Filmographie</h2>
  <article class="centered-text">
   <?php displayFilm($nb, $bdd) ?>
 </article>
</section>
