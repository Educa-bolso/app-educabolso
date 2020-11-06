<?php
  include('conexao.php');
  session_start();


  if (strlen($_POST['email']) > 3 && strlen($_POST['senha']) > 3) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      $usuarios = mysqli_fetch_assoc($result);
  
      $_SESSION['id'] = $usuarios['id'];
      $_SESSION['nome'] = $usuarios['nome'];
      $_SESSION['email'] = $usuarios['email'];
  
      header('Location: inicio.php');
    } else {
      echo "<script>alert('Email ou senha inválidos.');
      location.href = 'index.php';
      </script>";
    }
  } else {
    echo "<script>alert('Preencha os campos.');
    location.href = 'index.php';
    </script>";
  }

