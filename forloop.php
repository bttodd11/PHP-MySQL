<?php
#Statements for loop
for($i = 1; $i < 4; $i++)
{
  echo "<dt> Outer loop Iteration $i";

  #Nested loop
  for($j =1; $j < 9; $j++)
  {
  echo "<dd> Inside Loop Iteration $j";}

}

 ?>
