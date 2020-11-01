<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'educabolso');

  if (!$connection) {
    die ("A conexão não foi realizada" . mysqli_connect_error());
  }
?>