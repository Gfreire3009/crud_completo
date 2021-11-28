// projeto em desenvolvimento
<!--Conexão php com o Banc-->
<?php
// PAGINA PARA LISTAR OS PETS 

if (!empty($_GET['id'])); {
  include_once('config.php');
  $id = $_GET['id'];
  //buscar no banco de dados
  //buscar no banco de dados
  $sqlSelect = "SELECT * FROM cadastro WHERE id=$id";
  $result = $conexao->query($sqlSelect);
  //verificar o cadasatro existe  
  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {
      $id = $user_data['id'];
      $nome = $user_data['nome'];
      $pet = $user_data['pet'];
      $raca = $user_data['raca'];
      $sexo = $user_data['sexo'];
      $idade = $user_data['idade'];
      $Obs = $user_data['Obs'];
    }
  } else {
    header('Location: listar.php');
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Julia Vets</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<body>
  <header class="bg-dark">
    <div class="container" id="nav-container">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="img/logo.png" alt="">
        </a>

        <div class="col-md-6 offset-md-3">
          <a class="navbar-brand mx-auto"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="index.html">Home</span></a>
            <a class="nav-item nav-link" id="contact-menu" href="Cadastro.php">Cadastro</a>
            <a class="nav-item nav-link" href="sistema.php">Pets</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--CABECALHO FIM-->

  <!--FORMULARIO INICIO  -->
  <main>
    <div class="container">
      <div class="box">
        <fieldset>
          <div class="form-group">
            <div id="contact-area">
              <div class="col-md-12">
                <h4 class="main-title">Editar Cadastro de Pets</h4>
              </div>
            </div>
            <form class="form-horizontal" action="SaveEdit.php" method="POST">
              <!--ULITIZAR A FUNÇÃO PARA MOSTRAR NA ""TELA" OS PETS PARA EDITAR <?php echo $id; ?>" -->
              <div class="form-group">
                <label class="col-sm-2 control-label">id</label>
                <div class="col-sm-12">
                  <input type="text" name="nome" class="form-control" id="id" value="<?php echo $id; ?>" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Nome do Tutor</label>
                <div class="col-sm-12">
                  <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $nome; ?>" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Nome do Pet</label>
                <div class="col-sm-12">
                  <input type="text" name="pet" class="form-control" id="pet" value="<?php echo $pet; ?>" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Raça do Pet</label>
                <div class="col-sm-12">
                  <input type="text" name="raca" class="form-control" id="raca" value="<?php echo $raca; ?>" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sexo do Pet</label>
                <div class="col-sm-12">
                  <input type="text" name="sexo" class="form-control" id="sexo" value="<?php echo $sexo; ?>" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Idade do Pet</label>
                <div class="col-sm-12">
                  <input type="text" name="idade" class="form-control" id="idade" value="<?php echo $idade; ?>" placeholder=" ">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Observações Gerais</label>
                <div class="col-sm-12">
                  <input type="text" name="Obs" class="form-control" id="Obs" value="<?php echo $Obs; ?>" placeholder="">
                </div>
              </div>
          </div>

          <div id="contact-area">
            <div class="col-md-12">
              <input type="hidden" name="id" value="<?php echo $id; ?>">

              <!--<input type="submit" name="update" id="update"></div>-->
              <button type="submit" name="update" id="update" class="btn btn-outline-secondary btn-lg">Editar</button>
            </div>
          </div>
        </fieldset>
        </form>
      </div>
    </div>
  </main>
  <!--FORMULARIO FIM-->
  <footer>
    <div id="contact-area">
      <div class="row">
        <div class="col-md-12">
          <h4 class="main-title">Entre em contato conosco</h4>
        </div>
        <div class="col-md-4 contact-box">
          <i class="fas fa-phone"></i>
          <p><span class="contact-tile">Ligue para:</span> (21)00000-000</p>
          <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
        </div>
        <div class="col-md-4 contact-box">
          <i class="fas fa-envelope"></i>
          <p><span class="contact-tile">Envie um email:</span>juliavets.com.br</p>
        </div>
        <div class="col-md-4 contact-box">
          <i class="fas fa-map-marker-alt"></i>
          <p><span class="contact-tile">Venha nos visitar</span> Rua Roque barbosa 300 (Rio de Janeiro)</p>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <script src="js/scripts.js"></script>
  </boddy>

</html>
