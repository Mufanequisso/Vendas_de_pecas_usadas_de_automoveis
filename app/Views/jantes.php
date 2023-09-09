<?php $this->extend('layout')?>
<?php $this->Section('content')?>



    <?php

    if(count($jantes)==0):
    ?>

    <?php else: ?>

         <!-- parte1 -->
         
             <?php foreach($jantes as $jante):?>

                <div class="w-70 text-white bg-light rounded m-3">
            <div class="bg-dark m-3">
                <h1></h1>
                <h3>adicionado em: <?= $jante->adicionado_em?></h3>
            </div>




                <div class="m-3 w-70 d-flex text-dark text-center">
                <img src="<?php echo "uploads/".$jante->imagem ?>" width="750px " height="550px" alt="">

                <table class="table table-bordered table-hover table-striped ampliar">
                    <tbody>

                        <tr>
                            <td class="bg-danger p-5">Fabricante</td>
                            <td class="p-3"><?= $jante->fabricante?></td>

                        </tr>

                        <tr>
                            <td class="bg-danger p-5">Ano de lancamento</td>
                            <td class="p-5"><?= $jante->ano?></td>

                        </tr>

                        <tr>
                            <td class="bg-danger p-5">Cor da Jante</td>
                            <td class="p-5"><?= $jante->cor?></td>
                        </tr>
                        <tr>
                            <td class="bg-danger p-5">Preco</td>
                            <td class="p-5"><?= $jante->preco?></td>
                        </tr>
                    </tbody>
                </table>


            </div>
            <!-- botao -->
            <div class="d-flex justify-content-center mt-5 p-5">
                <button class="btn btn-danger p-5">Comprar</button>

            </div>

             <?php endforeach;?>
            
    <p>numero de items<strong><?= count($jantes) ?></strong></p>

    <?php endif; ?>
       


<?php $this->endSection()?>
