<?php

  session_start();

  if(isset($_SESSION['autorizado'])) {
    header('location: index.php');
    exit();
  } else {

    include(__DIR__ . '/database/Database.php');

    if(isset($_POST['username']) && isset($_POST['senha'])) {
        
        $username = $_POST['username'];
        $senha = $_POST['senha'];

        $query = $pdo->query("SELECT * FROM usuarios WHERE username = '{$username}' AND senha = '{$senha}'");

        $usuario = $query->fetch();

        if($usuario) {
            $_SESSION['autorizado'] = true;
            $_SESSION['id_usuario'] = $usuario['id'];
            header('location: index.php');
            exit();
        }
    }

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
      </div>
    </header>

    <main role="main">

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <form action="" method="post">
                        <div class="form-group mt-5">

                            <h3><?php echo $alerta ?? ''; ?></h3>

                            <label for="">Login</label>
                            <input type="text" name="username" class="form-control">  

                            <label for="" class="mt-3">Senha</label>
                            <input type="password" name="senha" class="form-control">                

                        </div>
                        <button type="submit" class="btn btn-primary">Logar</button>
                    </form>
                </div>
            </div>
        </div>

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