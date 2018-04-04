<?php
if( isset( $_POST['definition']))
{
  $definition = $_POST['definition'];
}
else{
  $definition = NULL ;
}

#Response Stament
if ($definition != NULL)
{
  if ($definition != 'Scipting')
  { echo "$definition is incorrect"; }
  else
  {  echo "$definition is correct"; }}
  else
  {  echo "You must select one answer"; }

 ?>
