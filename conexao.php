<?php 
  $localhost = "localhost";
  $usuario = "root";
  $senha = "";
  $database = "educabolso";

  $conexao = mysqli_connect($localhost, $usuario, $senha, $database);

  if (!$conexao) {
    die ("Falha no banco de dados: " . mysqli_connect_error());
  }
?>