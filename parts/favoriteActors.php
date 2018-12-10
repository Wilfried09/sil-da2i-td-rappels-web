<?php

  function chooseActors($bdd){
    $actors= [];
    $nbActors = $bdd->query('SELECT DISTINCT p.id_person FROM person p, moviehasperson mp, personhaspicture pp, picture pic  WHERE p.id_person = mp.id_person AND p.id_person = pp.id_person AND pp.id_picture = pic.id_picture AND mp.role = 0');
    $nbActors = $nbActors->fetchAll(PDO::FETCH_COLUMN);
    for($i=0;$i<count($nbActors);$i=$i+1){
        echo getBlock('personInfos', new Actor($nbActors[$i]));
    }
  }
?>

<h2 class="padding-standard no-margin bg-darkred color-white border-radius-right">Acteurs préférés</h2>
<article class="centered-text">
    <?php chooseActors($bdd) ?>
</article>
