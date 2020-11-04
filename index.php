<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
