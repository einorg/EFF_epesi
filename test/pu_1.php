<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
<?php
/**
Plik testowy
 */
if(!empty($_REQUEST)){
  echo "recieved $_REQUEST \n</br>";
  print_r($_REQUEST);
} else {
  echo 'Empty $_REQUEST</br>';
}
if(!empty($_FILES)){
  echo "recieved $_FILES \n</br>";
  print_r($_FILES);
} else {
  echo 'Empty $_FILES</br>';
}
if(!empty($_GET)){
  echo "recieved $_GET \n</br>";
  print_r($_GET);
} else {
  echo 'Empty $_GET</br>';
}
if(!empty($_POST)){
  echo "recieved $_POST \n</br>";
  print_r($_POST);
} else {
  echo 'Empty $_POST</br>';
}
?>
  </body>
</html>
<!-- comment -->
