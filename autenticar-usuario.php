<?php
  session_start();

  include('conexao.php');

  if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "select email from usuarios where email = '$email' and senha = '$senha'";

    $result = $connection->query($sql);

    $usuarios = mysqli_fetch_all($result);

    $_SESSION['nome'] = $usuarios[0][1];
    $_SESSION['email'] = $usuarios[0][2];
    $_SESSION['senha'] = $usuarios[0][3];

    header('Location: inicio.php');
  } else {
    echo "
    <script>
      alert('Email ou senha inválidos!');
      location.href = 'index.php';
    </script>
  ";
  }
?>
