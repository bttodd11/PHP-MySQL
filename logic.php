<?php
#Statements
$yes = TRUE; $no = FALSE ;

$result = ($no && $no) ? 'TRUE' : 'FALSE';
echo "NO and No returns $result <br>";

$result = ($yes && $no ) ? 'TRUE' : 'FALSE';
echo "Yes and NO returns $result <br>";

$result = ($yes && $yes ) ? 'TRUE' : 'FALSE';
echo "Yes and Yes returns $result <br>";


$result = ($no || $no ) ? 'TRUE' : 'FALSE';
echo "No or No returns $result <br>";

$result = ($yes || $no ) ? 'TRUE' : 'FALSE';
echo "Yes and No returns $result <br>";

$result = ($yes || $yes ) ? 'TRUE' : 'FALSE';
echo "Yes and Yes returns $result <br>";

$result = ( ! $yes ) ? 'TRUE' : 'FALSE';
echo "NOT Yes returns $result <br>";


 ?>
