<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PLogReservarCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {

        $this->load->model('posLogCliente/Reservar_model');
        $cont = $this->Reservar_model->MaxReserva($_SESSION['usuario']);
        //$cont +=1 ;
        //     echo $cont;

        if ($cont == 3) {
            // echo 'LIMITE DA RESERVA';
            $pagina['sinal'] = TRUE;
        } else if ($cont < 4) {
         //   echo $cont;
            $pagina['reserva'] = $this->Reservar_model->reservar($this->input->post('idCliente'), $this->input->post("nomeLivro"));
            $pagina['sinal'] = FALSE;
     
         
        }




        $this->load->model('MostrarLivro_model');
        $pagina['tudo'] = $this->MostrarLivro_model->exibirTudo();

        $this->load->model('posLogCliente/perfilCliente_model');
        $pagina['perfil'] = $this->perfilCliente_model->exibirNome($_SESSION['usuario']);
        $this->load->view('includes/html_header');
        $this->load->view('posLog/html_barraLog', $pagina);
        $this->load->view('posLog/visualizarLivros', $pagina);
        $this->load->view('includes/html_footer');
      //  header("Refresh: 2000 ");
    }

}
