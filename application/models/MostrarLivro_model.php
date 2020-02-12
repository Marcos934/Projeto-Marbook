<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class MostrarLivro_model extends CI_Model {

  

public function exibirTudo() {

      
       $query =  $this->db->query("SELECT * FROM marbookc_marbookDate.ExibirLivros");     
        return $query->result();

}

   

}
