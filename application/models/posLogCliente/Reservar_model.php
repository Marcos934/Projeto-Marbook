<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reservar_model extends CI_Model {

    public function reservar($idCliente, $nomeLivro) {

        if ($nomeLivro == null) {
            return;
        } else {

            return $query = $this->db->query("call ReservarLivro($idCliente,'$nomeLivro')");
        }
    }

    public function MaxReserva($idCliente) {
        $query = $this->db->query("
SELECT CLIENTE.idCLIENTE, LIST_ESPERA.idCliente FROM marbookc_marbookDate.CLIENTE inner join LIST_ESPERA on LIST_ESPERA.idCliente = CLIENTE.idCLIENTE where CLIENTE.idCliente = $idCliente");

        return $query->num_rows();
    }

}
