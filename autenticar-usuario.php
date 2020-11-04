<?php
  include('conexao.php');
  session_start();


  if (strlen($_POST['email']) > 3 && strlen($_POST['senha']) > 3) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $connection->query($sql);

    $usuarios = mysqli_fetch_assoc($result);

    if (!$usuarios) {
      echo "<script>alert('Email ou senha estão incorretos!')</script>";
    }

    $_SESSION['id'] = $usuarios['id'];
    $_SESSION['nome'] = $usuarios['nome'];
    $_SESSION['email'] = $usuarios['email'];
    $_SESSION['senha'] = $usuarios['senha'];

    header('Location: inicio.php');
  } else {
    echo "
    <script>
      alert('Email ou senha inválidos!');
      location.href = 'index.php';
    </script>";
  }
?>
