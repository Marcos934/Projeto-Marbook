<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarLogin_model extends CI_Model {

    public function ValidaLogin($email, $senha) {

        $query = $this->db->query("SELECT   idCLIENTE, Nome FROM  CLIENTE WHERE    Email = '$email' AND Senha = '$senha' LIMIT 1");
        return $query->result();
    }

}
