<?php



defined('BASEPATH') OR exit('No direct script access allowed');


class ResultadoBuscas_model extends CI_Model {

    public function pesquisarLivro($buscarLivro, $Filtro) {


        switch ($Filtro) {
            case "titulo":
                //mostra livros por Titulo

                $query = $this->db->query(" SELECT VENDA.Preco, LIVRO.idLivro, LIVRO.Autor, LIVRO.Nome, LIVRO.Descricao_Basica, ESTOQUE.qtd_livro FROM LIVRO INNER JOIN VENDA ON VENDA.idLivro = LIVRO.idLivro inner join ESTOQUE on ESTOQUE.idLivro = LIVRO.idLivro and LIVRO.Nome LIKE '%$buscarLivro%' and ESTOQUE.qtd_livro > 0 ");
                return $query->result();

            //mostra preço dos livros por Titulo




            case "autor" :
                $query = $this->db->query("SELECT VENDA.Preco, LIVRO.idLivro, LIVRO.Autor, LIVRO.Nome, LIVRO.Descricao_Basica, ESTOQUE.qtd_livro FROM LIVRO INNER JOIN VENDA ON  LIVRO.idLivro = VENDA.idLivro inner join ESTOQUE on ESTOQUE.idLivro = LIVRO.idLivro and LIVRO.Autor LIKE '%$buscarLivro%' and ESTOQUE.qtd_livro > 0");
                return $query->result();



            case "genero":

                $query = $this->db->query("SELECT VENDA.Preco , LIVRO.idLivro, LIVRO.Autor, LIVRO.Nome, LIVRO.Descricao_Basica, ESTOQUE.qtd_livro FROM LIVRO INNER JOIN GENERO ON GENERO.Num_Genero = LIVRO.Genero INNER JOIN VENDA on LIVRO.idLivro = VENDA.idLivro inner join ESTOQUE on ESTOQUE.idLivro = LIVRO.idLivro and GENERO.Tipo LIKE '%$buscarLivro%' and ESTOQUE.qtd_livro > 0");
                return $query->result();
                
                /*   //mostra livros por genero
                  $ResultadoDaBusca = mysqli_query($mysqli, "SELECT GENERO.Tipo, LIVRO.* FROM LIVRO INNER JOIN GENERO ON GENERO.Num_Genero = LIVRO.Genero and GENERO.Tipo LIKE '%$buscarLivro%'");

                  //mostra preço dos livros por genero
                  $mostrarPreco = mysqli_query($mysqli, "select VENDA.Preco from LIVRO inner join VENDA on VENDA.idLivro = LIVRO.idLivro inner join GENERO on GENERO.Num_Genero= LIVRO.Genero and GENERO.Tipo like '%$buscarLivro%' ");

                 */



               
        }

        /* header("location: buscarLivro.php"); */
    }

}
