<main class="main-main">
    <figure class="poster-and-description">
      <img class="img-standard" src="<?php echo $movies[1]->get_path() ?>" alt="Affiche du Film">
    <figcaption>
      <span class="display-block">Date de sortie : <time datetime="<?php echo $movies[1]->get_date() ?>"><?php echo $movies[1]->get_date() ?></time></span>
      <span class="display-block">Note (<?php echo $movies[1]->get_rating() ?>/5) : <meter value="<?php echo ($movies[1]->get_rating()*0.2) ?>" low=".2" high=".8" optimum="1"></meter></span>
      </figcaption>
  </figure>
  <section>
    <h2>Synopsis :</h2>
    <article class="width-90 centered-element">
      <?php echo $movies[1]->get_synopsis() ?>
    </article>
  </section>
</main>
