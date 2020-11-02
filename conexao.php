<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'educabolso');

  if (!$connection) {
    die ("A conexão com o banco de dados falhou!" . mysqli_connect_error());
  }
?>