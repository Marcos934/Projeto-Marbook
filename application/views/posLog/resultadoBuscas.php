
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap core CSS -->

<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">



<!-- Custom styles for this template -->

<link href="<?php echo base_url(); ?>/assets/css/album.css" rel="stylesheet">



<!-- outros CSS -->

<link href="<?php echo base_url(); ?>/assets/css/carousel.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">




<?php foreach ($perfil as $nomecli): endforeach; ?>

<div class="album py-5 bg-light" style="margin-top: -30px">



    <table class = "container" style="margin-top: -20px;">            

        <tr class="row" style="margin-top: -10px; padding-bottom: -10% ;" >
            <?php foreach ($pesq as $rows_busca) : ?>
                <td class = "col-md-3">
                    <div class = "card mb-4 box-shadow"/>
                    <img class = "card-img-top" src = "<?php echo base_url() . "assets/img_livros/{$rows_busca->idLivro}.jpg"; ?>" alt = "<?php echo $rows_busca->Nome; ?>" title = "<?php echo $rows_busca->Nome; ?>" />
                    <div class="card-body">
                        <p class = "card-text"><?php echo "<b>" . $rows_busca->Nome . "</b><br>"; ?></p>
                        <!--<p><?php // echo "Preço : " . $rows_busca->Preco . "<br>";        ?> </p> -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group-vertical"   style="width: 100%">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-default btn-outline-info" data-toggle="modal" data-target="#myModal<?php echo $rows_busca->idLivro; ?>">
                                    Visualizar <wbr> detalhes 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $rows_busca->idLivro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-blue">
                                                <h4 class="modal-title align-center" style="color: white"  id="myModalLabel">Detalhes de <?php echo $rows_busca->Nome; ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <strong>Titulo: </strong><?php echo $rows_busca->Nome . "<br>"; ?>
                                                <strong>Autor(a): </strong><?php echo $rows_busca->Autor . "<br>"; ?>
                                                <strong>Descricao: </strong><?php echo $rows_busca->Descricao_Basica . "<br>"; ?>
                                                <nav class="align-right ">
                                                    <strong> Preço: </strong>
                                                    <?php
                                                    if (($rows_busca->Preco) == 0) {

                                                        echo " Grátis  <br>";
                                                    } else {

                                                        echo "R$ " . $rows_busca->Preco . "<br>";
                                                    }
                                                    ?></nav>


                                            </div>
                                            <form method="POST" action="<?php echo base_url() . 'PLogReservarCI'; ?>">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

                                                    <input name="idCliente" type="hidden" value="<?php echo $nomecli->idCLIENTE; ?>" />


                                                    <input name="nomeLivro" type="hidden" value="<?php echo $rows_busca->Nome; ?>" />
                                                   <?php if( $sinal == FALSE):  ?>
                                                        <button style="border-color: #00BFFF;" class="btn btn-outline-success my-2 my-sm-2" type="submit" />Reservar</button>

                                                    <?php endif; if ($sinal == TRUE): ?>
                                                <input style="border-color: #00BFFF;" class="btn btn-disabled my-2 my-sm-2" disabled value ='LIMITE DE RESERVA' />
                                                    <?php endif; ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Mais detalhes</button>
                                     <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>-->
                                </div>


                            </div>                    
                        </div>
                </td>

            <?php endforeach; ?> 

        </tr>    

    </table>   
    <?php if (empty($rows_busca)): ?>                            
                    <div class=" form-control">
                        <nav class="text-center alert-danger"> 
                            <br>
                            <img src="<?php base_url() ?> assets/img/iconMarbook.png" alt="marbookIMG"  style="height: 75px"  ><br>    
                            <strong>Nenhum resultado obtido</strong><br><br>
                            <p>Certifique-se de que tudo foi digitado corretamente ou a aplicação do filtro está correta!</p>  <br> 
                        </nav>


                    </div>
                <?php endif; ?>

</div>












