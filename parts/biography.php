<?php
  $columbus = $bdd->query('SELECT firstname, lastname, biography FROM person WHERE lastname="Columbus"');
  $columbus = $columbus->fetch();
?>

<main>
    <figure class="width-100 centered-text display-inline">
      <img class="img-standard" src="./Ressources/CC.jpg" alt="Photo de Christopher Columbus">
      <figcaption><?php echo $columbus[0]." ".$columbus[1] ?></figcaption>
    </figure>
    <h2 class="padding-standard no-margin bg-darkred color-white border-radius-right">Biographie</h2>
    <article class="width-90 centered-element">
      <?php echo $columbus[2] ?>
    </article>

    <?php getBlock('filmography');?>
</main>
