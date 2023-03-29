<?php
$pintado1 = 1;
$pintado2 = 5;
$elementos = array();
$posicao = 0;
  for($i = 1; $i <= 5; $i++){
    
    for ($j = 1; $j <= 5; $j++) { 
      if ($pintado1 === $j || $pintado2 === $j) {
        array_push($elementos,"*");
      } else {
        array_push($elementos,".");
      }
      echo($elementos[$posicao]);
      $posicao += 1;
      

    }
    echo("\n");
    $pintado1 += 1;
    $pintado2 -= 1;




    

}
?>