<?php

  function isDirector($data){
    if($data[2]){
      $data[2]="Réalisateur";
    }else{
      $data[2]="Acteur";
    }
    return $data;
  }

  function chooseActors($bdd){
    for($i=1;$i<=2;$i++){
      $actors = $bdd->query('SELECT p.firstname, p.lastname, mp.role, pic.path FROM person p, moviehasperson mp, personhaspicture pp, picture pic  WHERE p.id_person = mp.id_person AND p.id_person = pp.id_person AND pp.id_picture = pic.id_picture AND p.id_person = "'.($i+1).'"');
      $actors = $actors->fetch();
      echo getBlock('personInfos', isDirector($actors));
    }
  }
?>

<h2 class="padding-standard no-margin bg-darkred color-white border-radius-right">Acteurs préférés</h2>
<article class="centered-text">
    <?php chooseActors($bdd) ?>
</article>
