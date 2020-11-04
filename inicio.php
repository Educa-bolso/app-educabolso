<?php 
  session_start();
  
  include('conexao.php');

  if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
  }

  $user_id = $_SESSION['id'];
  $nome = $_SESSION['nome'];

  if (isset($_POST['conta']) && isset($_POST['valor']) && isset($_POST['vencimento'])) {
    $conta = $_POST['conta'];
    $valor = $_POST['valor'];
    $vencimento = $_POST['vencimento'];

    $sql = "insert into contasfixas (conta, valor, vencimento, user_id) values ('$conta', '$valor', '$vencimento', $user_id)";

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
    <link rel="stylesheet" href="./css/style.css" />
    <title>Educa Bolso</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container position-relative">
          <header class="w-100 d-flex">
                <a href="inicio.php">
                  <img style="width: 80px; height: 80px" src="./assets/logo.png" alt="Menu" />
                </a>
              <div class="buscar">
                <form action="">
                  <input
                    type="text"
                    name="buscar"
                    id="buscar"
                    placeholder="O que você está procurando?"
                  />

                  <input class="btn btn-success" type="submit" value="Buscar">
                </form>
              </div>
                

              <div class="botoes">
                <a href="#">
                  <img src="./assets/bate-papo.svg" alt="Chat" />
                </a>
              
                <a href="#">
                  <img src="./assets/nivel.svg" alt="Chat" />
                </a>
                <a href="#">
                  <img src="./assets/notificacao.svg" alt="Notificação" />
                </a>
              </div>

              <div class=" minha-conta">
                <img src="./assets/avatar.png" alt="Foto de perfil" />
                <div class="informacao">
                  <strong>Eu</strong>
                  <button>
                  <img
                    src="./assets/arrow-down.svg"
                    alt="Informações do perfil"
                  />
                  </button>
                </div>
              </div>
              
          </header>

          <div class="caixa-perfil position-absolute">
          <span>Gastadora incontrolável</span>
            <a href="#">Meu perfil</a>
            <a href="#">Minhas conquistas</a>
            <a class="btn btn-danger" href="sair.php">Sair</a>
          </div>
          
      </div>

        <main class="container mt-4 w-md-12" >
          
          <section class="cards row w-100 ml-0">
            <div id="card-grande" class="card col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <h3 style="color: #7159c1">CONTAS FIXAS</h3>

              <div  class="image-card">
                <img
                  src="./assets/img_calculator.svg"
                  alt="Quais são as sua contas fixas?"
                />
              </div>
            </div>
              
              <div id="menor" class="card menores col-xl-3 col-lg-3 col-md-3 col-sm-6 m-auto">
                <h3>Aprenda a gerenciar o seu dinheiro!</h3>

                <div class="image-card">
                  <img src="./assets/future.svg" alt="Saiba Mais!" />
                </div>
              </div>
              <div id="menor" class="card menores col-xl-3 col-lg-3 col-md-3 col-sm-6 m-auto">
                <h3>Metas</h3>
                <div class="image-card">
                  <img
                    src="./assets/plaining.svg"
                    alt="Quais seus planos para o futuro?"
                  />
                </div>
              </div>
              
          </section>

          <section class="contas-fixas w-100">
            <h4>Contas fixas</h4>
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
              <h4>Contas cadastradas</h4>

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
                      $sql = "select * from contasfixas where user_id = '$user_id'";

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

    <script src="./scripts/index.js"></script>
  </body>
</html>
