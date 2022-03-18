<?php
  $servername = "localhost:3306";
  $db_username = "cchs_jgreen";
  $db_password = "eagles";
  $db_database = "cchs_jgreen";
  $conn = new mysqli($servername, $db_username, $db_password, $db_database);
  if($conn->connect_error){
      echo("Failed to connect: ".$conn->connect_error);
      exit();
  }
?>