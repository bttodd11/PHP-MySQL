<?php
#Variables assigned
$numbers = 2; $letters ="B";


#Adding break in the cases makes it so that it checks the cases before it gets to the
#default

switch($numbers)
{
  case 0 : echo "Number is 0 <br>"; break ;
  case 1 : echo "Number is 1 <br>"; break ;
  case 2 : echo "Number is 2 <br>"; break ;
  default : echo "We could not identify this number <br>";
}

switch($letters)
{
  case 'A' : echo "Letter is A <br>"; break ;
  case 'B' : echo "Letter is B <br>"; break ;
  case 'C' : echo "Letter is C <br>"; break ;
  default : echo "We could not identify this letter <br>";
}

switch($letters)
{
  case 'A' : case 'B' : case 'CD' : echo "Confimed Letter <br>"; break ;
  default : echo "The letters are either A-B-C <br>";
}
 ?>
