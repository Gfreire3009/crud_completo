<?php
//DELETAR OS PETS 
    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM cadastro WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cadastro WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    
  ?>  
    header('Location: listar.php');
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
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
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
          <a class="navbar-brand mx-auto"></a></a>
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
            <a class="nav-item nav-link" id="contact-menu" href="cadastro.php">Cadastro</a>
          </div>
        </div>
      </nav>
    </div>
    </header>
<!--CABECALHO FIM-->

<!--FORMULARIO INICIO-->
<main>
    <h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
        <div class="container">
      <div class="box">
        <fieldset>
          <div class="form-group">
            <div id="contact-area">
              <div class="col-md-12">
                <h4 class="main-title">Cadastro Deletado</h4>
              </div>
            </div>

<div id="contact-area">
            <div class="col-md-12">
              <a class="btn btn-outline-secondary btn-lg"" href="listar.php" role="button">Retornar</a>
            </div>
            </div>
  </main>
<!--FORMULARIO FIM-->

<script src="js/scripts.js"></script>
</boddy>
</html>
