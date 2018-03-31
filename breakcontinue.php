<?php

#For loop
for($i = 1; $i < 4; $i++){
  for($j = 1; $j < 4; $j++){
    if($i == 1 && $j == 1){
      echo "Continue inner loop when I = $i and J = $j <br>";
      continue;
    }
    if( $i == 2 && $j == 1){
      echo "Break inner loop when i = $i and j = $j <br>";
      break;
    }
      echo "Running both $i and $j <br>";
  }
}




 ?>
