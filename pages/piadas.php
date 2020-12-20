<?php

    include(__DIR__ . '/../database/Database.php');

    if(isset($_GET['palavra_chave']) && !empty($_GET['palavra_chave'])) {
        $palavraChave = $_GET['palavra_chave'];

        $query = $pdo->query("SELECT * FROM piadas WHERE titulo LIKE '%{$palavraChave}%'");
    } else {
        $query = $pdo->query("SELECT * FROM piadas");
    }
    
    $piadas = $query->fetchAll();


?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">O que você procura?</h1>
        <form action="" method="get">
            <div class="form-group mt-5">
                <input type="hidden" name="page" value="piadas">
                <input type="text" name="palavra_chave" class="form-control" placeholder="Ex.: Bêbado, Joãozinho, etc...">                
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <?php if(isset($_GET['palavra_chave']) && !empty($_GET['palavra_chave'])): ?>

            <div class="row">
                <div class="col-md">
                    <h2>Buscando por: <?php echo $_GET['palavra_chave']; ?></h2>
                </div>
            </div>

        <?php endif; ?>

        <div class="row">

            <?php if(count($piadas) > 0): ?>
                <?php foreach($piadas as $piada): ?>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">
                            <h3><?php echo $piada['titulo']; ?></h3>
                            <p><?php echo $piada['texto']; ?></p>
                        </p>
                    </div>
                    </div>
                </div>

                <?php endforeach; ?>
            <?php else: ?>

                <div class="col-md">
                    <h2>Não foram encontradas piadas!</h2>
                </div>
            
            <?php endif; ?>

        </div>
    </div>
</div>