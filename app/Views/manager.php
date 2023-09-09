<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <form action="<?php echo base_url('add_jantes')?>" method="post" enctype="multipart/form-data">
        <div class="container-md text-center">
            <label class="form-label" for="Nome">Nome do produto</label>
            <input class="form-control" type="text" name="Nome">
        </div>

        <div class="container-md text-center">
            <label class="form-label" for="Ano">Ano</label>
            <input class="form-control" type="text" name="Ano">
        </div>

        <div class="container-md text-center">
            <label class="form-label" for="Fabricante">Fabricante</label>
            <input class="form-control" type="text" name="Fabricante">
        </div>

        <div class="container-md text-center">
            <label class="form-label" for="Cor">Cor</label>
            <input class="form-control" type="text" name="Cor">
        </div>

        <div class="container-md text-center">
            <label class="form-label" for="Preco">Preco</label>
            <input class="form-control" type="text" name="Preco">
        </div>

        <div class="container-md text-center">
            <label class="form-label" for="Imagem">Imagem do produto</label>
            <input class="form-control" type="file" name="Imagem">
        </div>

        <div class="container-md text-center">
            <label class="form-label" for="submeter">button</label>
            <input class="form-control btn btn-danger" type="submit" value="submeter">
        </div>


    </form>



    
</body>
</html>