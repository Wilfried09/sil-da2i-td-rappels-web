<?php

$nb = $bdd->query('SELECT COUNT(*) FROM (SELECT DISTINCT p.lastname FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person) AS tmp');
$nb = $nb->fetch();

 function displayDirectors($nb,$bdd){
   $return = '';
   for($i=1;$i<=$nb[0];$i=$i+1){
     $data = $bdd->query('SELECT DISTINCT p.firstname, p.lastname FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 1 AND p.id_person = "'.$i.'"');
     $data = $data->fetch();
     if($data[0] != ''){
       $return = $return."<li>".$data[0]." ".$data[1]."</li>";
     }
   }
   return $return;
 }

?>

<div class="display-inline left-text">
  <h2>Réalisateurs</h2>
  <ul>

    <?php echo displayDirectors($nb,$bdd) ?>

  </ul>
</div>
