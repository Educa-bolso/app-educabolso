<?php
  include('conexao.php');
  session_start();


  if (strlen($_POST['email']) && strlen($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $connection->query($sql);

    $usuarios = mysqli_fetch_assoc($result);
  
    $_SESSION['id'] = $usuarios['id'];
    $_SESSION['nome'] = $usuarios['nome'];
    $_SESSION['email'] = $usuarios['email'];

    header('Location: inicio.php');
  } else {
    echo "<script>alert('Preencha os campos.');
    location.href = 'index.php';
    </script>";
  }

