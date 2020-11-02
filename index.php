<?php include('conexao.php');

  if (isset($_POST['conta']) && isset($_POST['valor']) && isset($_POST['vencimento'])) {
    $conta = $_POST['conta'];
    $valor = $_POST['valor'];
    $vencimento = $_POST['vencimento'];

    $sql = "insert into contasfixas (conta, valor, vencimento) values ('$conta', '$valor', '$vencimento')";

    $connection->query($sql);
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
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
    <link rel="stylesheet" href="style.css" />
    <title>Educa Bolso</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container-xl w-100 h-100">
        <div id="header-box">
          <header class="w-100">
            <a href="#">
              <img src="./assets/menu.svg" alt="Menu" />
            </a>

            <div class="buscar">
              <input
                type="text"
                name="buscar"
                id="buscar"
                placeholder="O que você está procurando?"
              />
              <img src="./assets/search.svg" alt="Buscar" />
            </div>

            <div class="botoes">
              <a href="#">
                <img src="./assets/notification.svg" alt="Notificação" />
              </a>
              <a href="#">
                <img src="./assets/chat.svg" alt="Chat" />
              </a>
              <a href="#">
                <img src="./assets/chat.svg" alt="Chat" />
              </a>
            </div>

            <div class="minha-conta">
              <img src="./assets/avatar.jpg" alt="Foto de perfil" />
              <div class="informacao">
                <strong>Bia Kim</strong>
                <span>Gastadora incontrolável</span>
              </div>

              <button id="botao">
                <img
                  src="./assets/arrow-down.svg"
                  alt="Informações do perfil"
                />
              </button>
            </div>
          </header>

          <div class="caixa-perfil">
            <a href="#">Meu perfil</a>
            <a href="#">Minhas conquistas</a>
            <a href="#">Sair</a>
          </div>
        </div>

        <main>
          <section class="cards">
            <div class="card">
              <h3>Quais são as suas contas fixas?</h3>

              <div class="image-card">
                <img
                  src="./assets/img_calculator.svg"
                  alt="Quais são as sua contas fixas?"
                />
              </div>
            </div>
            <div class="card-menores">
              <div class="card menores">
                <h3>Quais seus planos para o futuro?</h3>
                <div class="image-card">
                  <img
                    src="./assets/plaining.svg"
                    alt="Quais seus planos para o futuro?"
                  />
                </div>
              </div>
              <div class="card menores">
                <h3>Aprenda a controlar os seus gastos financeiros!</h3>

                <div class="image-card">
                  <img src="./assets/future.svg" alt="Saiba Mais!" />
                </div>
              </div>
            </div>
          </section>

          <section class="contas-fixas">
            <h4>Contas fixas</h4>
            <hr />
            <form action="" method="post">
              <label for="conta">Conta:</label>
              <input type="text" name="conta" id="conta" />

              <label for="valor">Valor:</label>
              <input type="text" name="valor" id="valor" />

              <label for="vencimento">Vencimento:</label>
              <input type="date" name="vencimento" id="vencimento" />

              <input type="submit" value="Salvar" />
            </form>

            <div class="card-contas">
              <h5>Contas cadastradas</h5>
              <hr />

              <div class="card-info">
                <table class="table border-0 table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nome da conta</th>
                      <th>Valor</th>
                      <th>Vencimento</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql = "select * from contasfixas";

                      $result = $connection->query($sql); 
                      
                      if ($result->num_rows >0) { 
                        while($rows = $result->fetch_assoc()) { 
                    
                    ?>

                    <tr>
                      <td><?php echo $rows['conta'] ?></td>
                      <td>R$<?php echo $rows['valor'] ?></td>
                      <td><?php echo $rows['vencimento'] ?></td>
                    </tr>

                    <?php
                }
              }
            ?>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>

    <script src="./scripts/index.js"></script>
  </body>
</html>
