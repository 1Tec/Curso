<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula18 extends CI_Controller {


    public function index()
	{

		//carregar o helper funcoes_helper
        //$this->load->helper('string');
        //echo random_string('alnum',16);

        $this->load->helper('security');
$senha = 'ABC_587';

echo do_hash($senha); //SHA1
echo '<br />';
echo do_hash($senha, 'md5');


}
    
    
	
}


