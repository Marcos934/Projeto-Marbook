<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ExibirLivrosCI extends CI_Controller {

   public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    session_start();
   }
    public function index() {
        $this->load->model('MostrarLivro_model');       
        session_destroy();   
        $pagina['tudo'] = $this->MostrarLivro_model->exibirTudo();     
        
      

        $this->load->view('includes/html_header');
        $this->load->view('includes/html_barra');
        $this->load->view('conteudo/visualizarLivros', $pagina);
        $this->load->view('includes/html_footer');
     
      
      
    }

}
