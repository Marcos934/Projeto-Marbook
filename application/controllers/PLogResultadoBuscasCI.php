<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PLogResultadoBuscasCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {
        $this->load->model('ResultadoBuscas_model');
        $this->load->model('posLogCliente/perfilCliente_model');
        $this->load->model('posLogCliente/Reservar_model');
        $pagina['perfil'] = $this->perfilCliente_model->exibirNome($_SESSION['usuario']);
        $num = $_SESSION['usuario'];
        $cont = $this->Reservar_model->MaxReserva($num);
        //echo $cont;
        if ($cont == 3) {
            // echo 'LIMITE DA RESERVA';
            $pagina['sinal'] = TRUE;
        } else if ($cont < 4) {
            // echo $cont;
            $pagina['reserva'] = $this->Reservar_model->reservar($this->input->post('idCliente'), $this->input->post("nomeLivro"));

            $pagina['sinal'] = FALSE;
            //  header("Refresh: 2000 ");
        }

        if ($this->input->post()) {

            function removerEspacos($str) {
                $inicio = ltrim($str);
                $fim = rtrim($inicio);
                return $fim;
            }

            $buscarLivro = removerEspacos($this->input->post('buscarLivro'));
            if (empty($buscarLivro)) {
                $buscarLivro = '%';
            }            
            

            $pesquisa['pesq'] = $this->ResultadoBuscas_model->pesquisarLivro( $buscarLivro , $this->input->post("FiltroPesquisa"));
            $this->load->view('includes/html_header');
            $this->load->view('posLog/html_barraLog', $pagina);
            $this->load->view('posLog/resultadoBuscas', $pesquisa);
            $this->load->view('includes/html_footer');
        } else {
            redirect('/PLogReservarCI');
        }
    }

}
