<?php

  session_start();

  if(isset($_GET['acao']) && $_GET['acao'] == 'sair') {
    $_SESSION = [];
    session_destroy();
    header('location: login.php');
  }

  if(!isset($_SESSION['autorizado'])) {
    header('location: login.php');
    exit();
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>O piadeiro, o site que é uma piada!</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para este template -->
    <link href="assets/css/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Piadeiro</strong>
          </a>
        </div>
        <div class="container d-flex justify-content-start">
          <a href="./index.php" class="navbar-brand d-flex align-start">
            <strong>Home</strong>
          </a>
          <a href="./index.php?page=piadas" class="navbar-brand d-flex align-start">
            <strong>Piadas</strong>
          </a>
          <a href="./index.php?page=quem_somos" class="navbar-brand d-flex align-start">
            <strong>Quem somos?</strong>
          </a>
          <a href="./index.php?page=envie" class="navbar-brand d-flex align-start">
            <strong>Envie a sua</strong>
          </a>
          <a href="./index.php?acao=sair" class="navbar-brand d-flex align-start">
            <strong>Sair</strong>
          </a>
        </div>
      </div>
    </header>

    <main role="main">

      <?php

      $page = $_GET['page'] ?? 'home';

      include(__DIR__ . './pages/' . $page . '.php');

      ?>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p>Piadeiro 2020 &copy; Todos os direitos reservados.</p>
        <p>O melhor site de piadas conhecidos pelo homem e pelos macacos</p>
      </div>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>