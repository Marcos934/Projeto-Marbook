  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header>

            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">Olá</h4>
                            <p class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seja bem vindo ao Marbook, aqui você pode buscar o livro desejado, criar uma lista de reserva, doar , comprar ou solicitar uma venda que você queira fazer.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contato</h4>
                            <ul class="list-unstyled">
                                <li><a class="text-white">(92) 99498 - 3696</a></li>
                                <li><a class="text-white">(92) 99146 - 1245</a></li>
                                <li><a class="text-white">marbook.sebode<wbr/>livros<wbr/>@gmail.com</a></li>
                                <a class="nav-link btn btn-outline-light" href="<?php base_url()?>ExibirLivrosCI">SAIR</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div   class="navbar navbar-dark bg-blue  box-shadow " style="border:#05325f 2px solid" >
                <div style="background-color:#fafafa" class="container d-flex justify-content-between" >
                    <nav class=" navbar-brand d-flex align-items-center " style=" color: #05325f "> 
                        <a  href="<?php echo base_url().'PLogResultadoBuscasCI'; ?>" class="d-flex align-items-center " style=" color: #05325f ">
                        <img class="mr-sm-2" src="<?php base_url();?>assets/img/iconMarbook2.png" alt="iconMarbook2" style=" width:80px; height: 60px; margin-top: 1%">
                          <?php foreach ($perfil as $nomecli) : ?>
                        <strong id="topo" style=" word-spacing: -1px ; font-size: 1.0em">Olá,</strong></a>
     <nav style="position: static; margin-left: 3px; word-spacing:  -2px ; font-size: 1.0em">&nbsp;<?php echo strstr($nomecli->Nome, ' ', true); ?></nav>
                        <?php endforeach; ?>
                    </nav>              
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon bg-dark" style="border: #05325f 1px; "></span>
                    </button>


                </div>
            </div>
        </header>

        <main role="main">

            <section class="jumbotron text-center bg-blue" style="border:#05325f 1px solid; margin-top: -3px ">
                <div class="container align-items-center ">
                    <h1 class="jumbotron-heading" style="color: white">Busque seu livro desejado!</h1>
                    <form   class=" form-inline my-2 my-lg-0" method="POST" action="<?php echo base_url().'PLogResultadoBuscasCI';?>">
                        <input name="buscarLivro" class="form-control mr-sm-2" pattern="[a-zA-Z\s @ A-Za-zÀ-ú0-9., -]+$" type="text" style="width: 100%" placeholder="Digite o nome do livro" aria-label="Search">
                        <button style="border-color: #00BFFF" class="btn btn-outline-success my-2 my-sm-2" type="submit">Buscar</button>
                        <select name="FiltroPesquisa" class="btn btn-outline-success my-2 my-sm-2" style="border-color: #00BFFF; margin-left: 4px; padding-top: 7px;" >
                            <option value="titulo">Título</option>
                            <option value="autor">Autor(a)</option>
                            <option value="genero">Gênero</option>                                   
                        </select> 
                    </form>


                    <p class=" lead text-muted"></p>

                    <!--
                                    <p>
                                        <a href="#" class="btn btn-primary my-2">Main call to action</a>
                                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                                    </p>
                                </div>
                    -->
                </div>
            </section>



