<?php
  function displayPeople($directors, $actors){
    $all = [];
    $y = 0;
    for($j=0;$j<=count($directors);$j++){
      $all[$y]=$directors[$j];
      $y++;
    }
    for($k=0;$k<=count($actors);$k++){
      $all[$y]=$actors[$k];
      $y++;
    }

    for($i=0;$i<count($all);$i++){
      if($i <count($all)-1){
        $var = "<hr class='display-desktop'>";
      }else{
        $var = '';
      }
      getBlock('personInfos', $all[$i+1]);
      echo $var;
    }
  }
?>



<aside class="centered-text margin-right-standard border-radius-standard display-inline bg-black color-white box-shadow-standard">
    <h2 class="padding-standard no-margin bg-darkred color-white border-radius-standard">Casting :</h2>
      <hr class="no-margin">
      <div class="align-tablet">
        <?php displayPeople($directors, $actors);?>
      </div>
</aside>
