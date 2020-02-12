<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ResultadoBuscasCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {

        if ($this->input->post()) {
            
            function removerEspacos($str) {
                $inicio = ltrim($str);
                $fim = rtrim($inicio);
                return $fim;
            }
            $buscarLivro = removerEspacos($this->input->post('buscarLivro'));
           if (empty($buscarLivro)) {
               $buscarLivro='%';
           }

            $this->load->model('ResultadoBuscas_model');
            $pesquisa['pesq'] = $this->ResultadoBuscas_model->pesquisarLivro($buscarLivro, $this->input->post("FiltroPesquisa"));
            $this->load->view('includes/html_header');
            $this->load->view('includes/html_barra');
            $this->load->view('conteudo/resultadoBuscas', $pesquisa);
            $this->load->view('includes/html_footer');
        } else {
            $this->load->model('MostrarLivro_model');
            $pagina['tudo'] = $this->MostrarLivro_model->exibirTudo();
            $this->load->view('includes/html_header');
            $this->load->view('includes/html_barra');
            $this->load->view('conteudo/visualizarLivros', $pagina);
            $this->load->view('includes/html_footer');
        }
    }

}
