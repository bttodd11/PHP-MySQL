<?php
#Global Variable
$number = 5;

function square($number)
{ $result = $number * $number;
  echo "$number Squared is $result<br>";
}

function cube($number)
{ $result = $number * 3 ;
echo "$number Cubed is $result<br>";
}

square(3);
cube(4);
square($number);
cube($number);
 ?>
