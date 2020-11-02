<?php 
<<<<<<< HEAD
  $localhost = "localhost";
  $usuario = "root";
  $senha = "";
  $database = "educabolso";

  $conexao = mysqli_connect($localhost, $usuario, $senha, $database);

  if (!$conexao) {
    die ("Falha no banco de dados: " . mysqli_connect_error());
=======
  $connection = mysqli_connect('localhost', 'root', '', 'educabolso');

  if (!$connection) {
    die ("A conexão não foi realizada" . mysqli_connect_error());
>>>>>>> 8cf99a4af6a7ddae6d2eaebc785da378d70efcc3
  }
?>