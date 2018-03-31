<?php
#Global variable
$result = 5 + 5;

#Square function
function square(){
  $result = 5 + 5;
  echo "Local Square Result = $result<br>";
}

#Cube function
function cube(){
  $result = 5 * 5 * 5;
  echo "Local Cube Result = $result<br>";
}

echo "Global Variable: $result <br>";
square();
cube();
 ?>
