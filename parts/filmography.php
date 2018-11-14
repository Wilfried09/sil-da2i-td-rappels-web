<?php
  function displayFilm($movies){
    for($i=1;$i<=count($movies);$i=$i+1){
      getBlock('filmGallery', $movies[$i]);
    }
  }

?>


<section>
  <h2 class="padding-standard no-margin bg-darkred color-white border-radius-right">Filmographie</h2>
  <article class="centered-text">
   <?php displayFilm($movies) ?>
 </article>
</section>
