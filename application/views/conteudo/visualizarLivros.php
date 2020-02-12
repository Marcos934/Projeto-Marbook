
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




<div class="album py-5 bg-light" style="margin-top: -30px">



    <table class = "container" style="margin-top: -20px;">            

        <tr class="row" style="margin-top: -10px; padding-bottom: -10% ;" >
            <?php foreach ($tudo as $rows_busca) : ?>
                <td class = "col-md-3">
                    <div class = "card mb-4 box-shadow"/>
                    <img class = "card-img-top" src = "<?php echo base_url() . "assets/img_livros/{$rows_busca->idLivro}.jpg"; ?>" alt = "<?php echo $rows_busca->Nome; ?>" title = "<?php echo $rows_busca->Nome; ?>" />
                    <div class="card-body">
                        <p class = "card-text"><?php echo "<b>" . $rows_busca->Nome . "</b><br>"; ?></p>
                        <!--<p><?php // echo "Preço : " . $rows_busca->Preco . "<br>";      ?> </p> -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group-vertical"   style="width: 100%">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-default btn-outline-info" data-toggle="modal" data-target="#myModal3<?php echo $rows_busca->idLivro; ?>">
                                    Visualizar <wbr> detalhes 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal3<?php echo $rows_busca->idLivro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <button style="border: #00BFFF 1px solid;" class="btn btn-disabled my-2 my-sm-2">Necessário Login</button>

                                            </div>
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
</div>












