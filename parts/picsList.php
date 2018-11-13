<?php
  $nb = $bdd->query('SELECT COUNT(id_person) FROM person');
  $nb = $nb->fetch();

  function isDirector($data){
    if($data[2]){
      $data[2]="Réalisateur";
    }else{
      $data[2]="Acteur";
    }
    return $data;
  }

  function displayPeople($nb, $bdd){
    $return = '';
    for($i=0;$i<$nb[0];$i=$i+1){
      if($i < $nb[0]-1){
        $var = "<hr class='display-desktop'>";
      }else{
        $var = '';
      }
      $data = $bdd->query('SELECT p.firstname, p.lastname, mp.role, pic.path FROM person p, moviehasperson mp, personhaspicture pp, picture pic  WHERE p.id_person = mp.id_person AND p.id_person = pp.id_person AND pp.id_picture = pic.id_picture AND p.id_person = "'.($i+1).'"');
      $data = $data->fetch();
      $return = $return.getBlock('personInfos', isDirector($data));
      echo $return;
      echo $var;
    }
  }
?>



<aside class="centered-text margin-right-standard border-radius-standard display-inline bg-black color-white box-shadow-standard">
    <h2 class="padding-standard no-margin bg-darkred color-white border-radius-standard">Casting :</h2>
      <hr class="no-margin">
      <?php echo displayPeople($nb, $bdd);?>
</aside>
