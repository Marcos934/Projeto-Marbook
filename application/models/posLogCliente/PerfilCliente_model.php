<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class PerfilCliente_model extends CI_Model {

    public function exibirNome($id) {

        $query = $this->db->query("SELECT * FROM marbookc_marbookDate.CLIENTE where CLIENTE.idCliente = '$id' limit 1");
        return $query->result();
    }



}
