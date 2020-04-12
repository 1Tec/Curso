<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livros_model extends CI_Model {
    
public function listarLivros()
{
 
 // Pesquisa data especifica.
   //$this->db->where('data_cadastro', '2020-04-01');

// ordenar ASC = crescdente  DESC = decrescente
  $this->db->order_by('data_cadastro', 'ASC');

//pesquisar somente 1 id.
  //$this->db->where('id', 2);


// retorna resultado dos livros
    $query = $this->db->get('livros');
  return $query->result();
}


// passar o resitro como id no navegador info/1 2...
public function getById($id=NULL)
{

if ($id) {

  $this->db->select('livros.*, resumo.resumo');
  $this->db->from('livros');
  $this->db->join('resumo', 'livros.id = resumo.id_livro', 'left');

  $this->db->where('livros.id', $id);
  $this->db->limit(1);
  $query = $this->db->get();
  return $query->row();



}

}


public function buscar_data()
{

echo "Estou aqui";

}







}

