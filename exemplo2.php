<?php
$posicao = 0;
$elementos = array();

for ($i=1; $i <= 5; $i++) { 
  for ($j=1; $j <= 7; $j++) { 

    if($i === 2 && ($j!== 1 && $j!== 7)){
      array_push($elementos,"*");

    } else if($j===4){
      array_push($elementos,"*");
    } else {
      array_push($elementos,".");
    }
    echo($elementos[$posicao]);
    $posicao += 1;
  }
  echo("\n");
}
?>