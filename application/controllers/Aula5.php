<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula5 extends CI_Controller {

	public function index()
	{
       
       //Parametros
       $data['titulo']         = 'Titulo Aula 5a';
       $data['conteudo']       = 'Hoje estamos aprendendo a trabalhar com Views';
       $data['titulo_pagina']  = 'Aula #5';
        // Carrega uma View
        $this->load->view('aula5_view', $data);
	}

 public function pagina($pagina=NULL)
{

    $data['titulo']  = 'Aula com varias views';
    $data['conteudo']  = 'Hoje estamos aprendendo a trabalhar com Views';
    $data['rodape']  = 'Todos os direitos reservados';


    $this->load->view('layout/topo', $data);
    
    if ($pagina == 'contato') {
        $this->load->view('site/contato', $data);
    }    
    
    if ($pagina == NULL) {
        $this->load->view('site/conteudo', $data);
    }    
    


    $this->load->view('layout/rodape', $data);
}


}



