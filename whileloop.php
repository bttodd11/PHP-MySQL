<?php
# Number Array
$numbers = array( 10, 20, 30);

echo "<dt> While Loop:";

# The while loop
$i = 0;
while($i < 3)
{
   echo "<dd> Element $i = $numbers[$i]";
   $i++;
}
echo "<dt> Do While Loop:";

#The Do While Loop
$i = 0;
do {
  echo "<dd> Element $i = $numbers[$i]";
  $i++;
}
while( $i < 3);
 ?>
