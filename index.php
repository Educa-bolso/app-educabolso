<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/login.css" />

    <title>Entre ou cadastre-se</title>
  </head>
  <body>
    <main>
      <section class="painel-login">
        <div class="card">
          <img src="./assets/logo.png" alt="Educa Bolso">
          <h1>Fazer login</h1>

          <form action="autenticar-usuario.php" method="POST">
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="senha" placeholder="Senha" />

            <button type="submit">Entrar</button>
          </form>

          <a href="cadastro.php">Ainda não possui cadastro? Clique aqui</a>
        </div>
        
      </section>

      <section class="painel-imagem">
        <img src="./assets/calculator-background.svg" alt="Login" />
      </section>
    </main>
  </body>
</html>
