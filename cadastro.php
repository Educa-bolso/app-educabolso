<?php  
  include('conexao.php');

  if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repetirSenha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repetirSenha = $_POST['repetirSenha'];

    if ($senha !== $repetirSenha) {
      echo "<script>alert('As senhas não conferem.');
      window.location.href = 'cadastro.php';
      </script>";
    }

    $sql = "select email from usuarios where email = '$email'";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      echo "
        <script>
          alert('Este email já foi cadastrado!');   
        </script>";
       
    } else {
      $senhacripto = md5($senha);

      $sql = "insert into usuarios (nome, email, senha) values ('$nome', '$email', '$senhacripto')";

      $connection->query($sql);

      echo "<script>window.location.href = 'index.php';</script>";

    }

  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastre-se</title>

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/cadastro.css" />
  </head>
  <body>
    <main>
      <div class="card">
        <h1>Cadastre-se</h1>

        <form action="" method="POST">
          <input type="text" name="nome" placeholder="Digite o seu nome" required />
          <input type="email" name="email" placeholder="Digite o seu email" required />
          <input type="password" name="senha" placeholder="Digite a sua senha" required />
          <input type="password" name="repetirSenha" placeholder="Confirme a sua senha"required />

          <button type="submit">Cadastre-se</button>
          <a href="./index.php">Já possui cadastro? Realize o login.</a>
        </form>
      </div>
    </main>
  </body>
</html>
