<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div   class="navbar navbar-dark bg-blue  box-shadow " style="border:#05325f 2px solid" >
        <div style="background-color:#fafafa" class="container d-flex justify-content-between" >
            <nav class=" navbar-brand d-flex align-items-center " style=" color: #05325f "> 
                <a href="<?php echo base_url() . 'BuscarLivroCI'; ?>" class="d-flex align-items-center " style=" color: #05325f "> 
                <img class="mr-sm-2" src="<?php base_url(); ?>assets/img/iconMarbook2.png" alt="iconMarbook2" style=" width:80px; height: 60px; margin-top: 1%">

                <strong id="topo" style=" word-spacing: -1px ; font-size: 1.0em">Olá,</strong></a>
                <nav  style="position: static; margin-left: 2px; word-spacing:  -2px ; font-size: 1.0em">  
                    <button type="button" style="border:#05325f 1px solid; color:#05325f " class="btn btn-light my-1 my-sm-1" data-toggle="modal" data-target="#myModal">

                        Faça login

                    </button>
                </nav>
            </nav>               


            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon bg-dark" style="border: #05325f 1px solid; "></span>

            </button>  

        </div>


        <!---->


    </div>

</header>



<main role="main">

    <section class="jumbotron text-center bg-blue" style="border:#05325f 1px solid; margin-top: -3px ">
        <div class="container align-items-center ">
            <h1 class="jumbotron-heading" style="color: white">Busque seu livro desejado!</h1>
            <form   class=" form-inline my-2 my-lg-0" method="POST" action="<?php echo base_url() . 'ResultadoBuscasCI'; ?>">
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



    <!-- Button trigger modal--> 


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header btn-success" >                    
                    <h4 class="modal-title align-center" style="color: white" id="myModal">LOGIN</h4>
                </div>
                <div class="modal-body ">
                      <h3 style="text-align: center"> Já Sou Cadastrado</h3>
                    <div class="container d-flex justify-content-between " >                      
                        <form class="align-center form-inline"  action="<?php echo base_url() .'PLogValidarLoginCI';?>" method="post" >
                            Email: &nbsp;
                            <input type="email" name="email" style="width: 100%" class="form-control"  >
                            &nbsp;Senha: &nbsp;
                            <input type="password" name="senha" style="width: 100% "class="form-control" ><br><br>                            
                            <input class="btn btn-outline-success " type="submit" value="Entrar" style="width: 50%"  />

                        </form>                        
                    </div>
                    <hr class="my-4" size="2px">                  

                    <div class="container d-flex justify-content-between " >
                        <button type="button" style="border:#05325f 1px solid; color:#05325f ; width: 100%" class="btn btn-outline-primary my-1 my-sm-1" data-toggle="modal" data-target="#myModal2">  Ainda Não sou Cadastrado </button>


                    </div>


                    <br><br>   
                    <a href="#">Esqueci a senha</a>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                  
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header btn-success" >                    
                    <h4 class="modal-title align-center" style="color: white" id="myModal">LOGIN</h4>
                </div>
                <div class="modal-body ">
                    <div class="container d-flex justify-content-between " >
                        <form class="align-center form-inline" action="PLogValidarLoginCI" >
                            Email: &nbsp;
                            <input type="text" name="Email" style="width: 100%" class="form-control"  >
                            &nbsp;Senha: &nbsp;
                            <input type="password" name="senha" style="width: 100% "class="form-control" ><br><br>                            
                            <input type="button" class="btn btn-outline-success " value="Entrar" style="width: 50%"  />

                        </form>                        
                    </div>
                    <br><br>   
                    <a href="#">Esqueci a senha</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>                  
                </div>
            </div>
        </div>
    </div>
