<?php
  $username=$_REQUEST["username"];
  if(empty($username)) {
    echo "Error ao introducir datos. Faltan datos.";
  }
   else {
    echo "Hola $username";
  }
?>