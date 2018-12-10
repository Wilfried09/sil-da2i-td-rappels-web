<?php

?>

<main>
    <figure class="width-100 centered-text display-inline">
      <img class="img-standard" src="./Ressources/CC.jpg" alt="Photo de Christopher Columbus">
      <figcaption><?= $directors[0]->get_firstname()." ".$directors[0]->get_lastname() ?></figcaption>
    </figure>
    <h2 class="padding-standard no-margin bg-darkred color-white border-radius-right">Biographie</h2>
    <article class="width-90 centered-element">
      <?= $directors[0]->get_biography() ?>
    </article>

    <?php getBlock('filmography');?>
</main>
