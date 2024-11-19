<?php
/**
Plik testowy
 */
if(!empty($_SERVER)){
  //echo "</br></br>\n\nrecieved _SERVER ";
  //print_r($_SERVER);
} else {
  //echo "</br></br>\n\nEmpty _REQUEST";
}

if(!empty($_POST)){
  echo "</br></br>\n\nrecieved _POST";
  print_r($_POST);
} else {
  echo "</br></br>\n\nEmpty _POST";
}

if(!empty($_FILES)){
  echo "</br></br>\n\nrecieved _FILES";
  print_r($_FILES);
} else {
  echo "</br></br>\n\nEmpty _FILES";
}

if(!empty($_GET)){
  echo "</br></br>\n\nrecieved _GET";
  print_r($_GET);
} else {
  echo "</br></br>\n\nEmpty _GET";
}
if(!empty($_REQUEST)){
  echo "</br></br>\n\nrecieved _REQUEST";
  print_r($_REQUEST);
} else {
  echo "</br></br>\n\nEmpty _REQUEST";
}
?>