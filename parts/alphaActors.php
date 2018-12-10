<?php

$nb = $bdd->query('SELECT COUNT(*) FROM (SELECT DISTINCT p.lastname FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person) AS tmp');
$nb = $nb->fetch();

 function displayActors($nb,$bdd){
   $return = '';
   for($i=1;$i<=$nb[0];$i=$i+1){
     $data = $bdd->query('SELECT DISTINCT p.firstname, p.lastname FROM person p, moviehasperson mp WHERE p.id_person = mp.id_person AND mp.role = 0 AND p.id_person = "'.$i.'"');
     $data = $data->fetch();
     if($data[0] != ''){
       $return = $return."<li><a href='./actor.php'>".$data[0]." ".$data[1]."</a></li>";
     }
   }
   return $return;
 }

?>

<div class="centered-element">
  <h2>Acteurs</h2>
  <ul>

    <?= displayActors($nb,$bdd) ?>

  </ul>
</div>
