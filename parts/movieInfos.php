<?php

  $movie = $bdd->query('SELECT p.path, m.releaseDate, m.synopsis, m.rating FROM movie m, picture p, moviehaspicture mp WHERE m.id_movie = mp.id_movie AND mp.id_picture = p.id_picture AND m.id_movie = 1');
  $movie = $movie->fetch();

?>

<main class="main-main">
    <figure class="poster-and-description">
      <img class="img-standard" src="<?php echo $movie[0] ?>" alt="Affiche du Film">
    <figcaption>
      <span class="display-block">Date de sortie : <time datetime="<?php echo $movie[1] ?>"><?php echo $movie[1] ?></time></span>
      <span class="display-block">Note (<?php echo $movie[3] ?>/5) : <meter value="<?php echo ($movie[3]*0.2) ?>" low=".2" high=".8" optimum="1"></meter></span>
      </figcaption>
  </figure>
  <section>
    <h2>Synopsis :</h2>
    <article class="width-90 centered-element">
      <?php echo $movie[2] ?>
    </article>
  </section>
</main>
