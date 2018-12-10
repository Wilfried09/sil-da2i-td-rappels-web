<main class="main-main">
    <figure class="poster-and-description">
      <img class="img-standard" src="<?= $movies[0]->get_path() ?>" alt="Affiche du Film">
    <figcaption>
      <span class="display-block">Date de sortie : <time datetime="<?= $movies[0]->get_date() ?>"><?= $movies[0]->get_date() ?></time></span>
      <span class="display-block">Note (<?= $movies[0]->get_rating() ?>/5) : <meter value="<?= ($movies[0]->get_rating()*0.2) ?>" low=".2" high=".8" optimum="1"></meter></span>
      </figcaption>
  </figure>
  <section>
    <h2>Synopsis :</h2>
    <article class="width-90 centered-element">
      <?= $movies[0]->get_synopsis() ?>
    </article>
  </section>
</main>
