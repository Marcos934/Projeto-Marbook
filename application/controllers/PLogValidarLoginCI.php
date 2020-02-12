<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PLogValidarLoginCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('posLogCliente/ValidarLogin_model');
        $resul['identificador'] = $this->ValidarLogin_model->ValidaLogin($this->input->post('email'), $this->input->post('senha'));
        
        $this->load->view('posLog/redirect',$resul);        
       
       
    }

}
