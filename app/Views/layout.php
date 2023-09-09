<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

    <style>
    
        .bg-azulescuro {
            background-color: #046;
        }

        .bg-zinzaclaro {
            background-color: #ddd;
        }
    </style>


</head>

<body class="">

<!-- cabecalho -->

    <header class="afastarnav">
        <!-- header -->

        <nav class="navbar navbar-expand-md bg-light navbar-transparente fixed-top p-3">
            <div class="conteiner-fluid"></div>
            <h1 class="navbar-text">Venda de pecas de Automoveis</h1>
            <ul class="navbar-nav"><a class="navbar-brand" href="/"><img src="assets/img/Honda/honda-logo-honda-icon-free-free-vector.jpg" style="width: 100px; height:100px;" alt=""></a>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contactos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Login</a></li>


            </ul>


            </div>

        </nav>
    </header>

    <!-- fim do cabecalho -->

<!-- inicio do corpo -->
    <section class="conteiner-fluid afastar1">


        <?php $this->renderSection('content') ?>
    </section>
    <!-- fim do corpo -->

<!-- inicio do rodape -->
  <div class="">

  <footer class="container-fluid ">
        <div class="text-white bg-dark text-center p-5 rounded">

            <div>
                <a class="foot_link" href="/">Vendadepecasdeautomoveis.com</a>
            </div>

            <div>
                <h1>Av.angola</h1>
                <h5>Copyright 2023 Trust Mufasa Company Ltd all rights reserved</h5>

            </div>
            <div>
                <form action="">
                    <div class="m-3">
                        <label class="form-label">Tel</label>
                        <button class="btn btn-danger" type="button">841340036</button>

                    </div>

                    <div class="form-group">
                        <label class="form-label" for="">Email</label>
                        <button class="btn btn-danger" type="button">paulinomufanequisso@gmail.com</button>

                    </div>
                </form>

            </div>

        </div>
    </footer>


  </div>
    <!-- fim do rodape -->





</body>

</html>