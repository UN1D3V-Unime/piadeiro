<?php

    if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {

        if(move_uploaded_file(
            $_FILES['arquivo']['tmp_name'], 
            __DIR__ . '/../uploads/' . $_FILES['arquivo']['name'])
        ) {
            $alerta = "Arquivo enviado com sucesso!";
        } else {
            $alerta = "Ocorreu um erro ao tentar enviar o seu arquivo!";
        }

    }

?>
<section class="jumbotron text-center">
    <div class="container">
        
        <h1 class="jumbotron-heading">Minha Conta</h1>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-5">

                        <h3><?php echo $alerta ?? ''; ?></h3>

                        <label>Escolha um arquivo em sua computador</label>
                        <input type="file" name="arquivo">               

                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</section>