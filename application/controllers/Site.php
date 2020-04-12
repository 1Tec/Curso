

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

	// Carregar as variaveis global para site.php todos os pf.
	public function __construct()
	{
		parent::__construct();

		// carregar o model Livros_model.php
		$this->load->model('livros_model', 'livros');

		//carregar o helper funcoes_helper
		$this->load->helper('funcoes_helper', 'funcoes');
	}


	public function index()
	{

		//Titulo
		$data['titulo'] = 'aula usando bootstrap4';

		$this->load->view('layout/topo', $data);
		$this->load->view('site/conteudo');
		$this->load->view('layout/rodape');
	}


	public function livros()
	{
		//Titulo
		$data['titulo'] = 'Lista de Livros';



		//carrega dados do banco de dados
		$data['livros'] = $livros = $this->livros->listarLivros();

		// Listar a tabela livros
		// echo 'pre';
		// print_r($livros);



		$this->load->view('layout/topo', $data);
		$this->load->view('livros/index');
		$this->load->view('layout/rodape');
	}

	public function info($id = NULL)
	{
		if ($id == NULL) {

			echo 'Voce precisa passar uma id valida!';
		} else {


			$query = $this->livros->getById($id);

			if ($query) {

				$data['titulo'] = $query->nome_livro;
				$data['info']   = $query;

				$this->load->view('layout/topo', $data);
				$this->load->view('livros/info');
				$this->load->view('layout/rodape');
			} else {

				echo 'Voce precisa passar uma id valida!';
			}
		}
	}


	public function formulario()
	{

		$data['titulo'] = 'Aula Helper Form';

		//carregar helper form
		$this->load->helper('form');



		$this->load->view('layout/topo', $data);
		$this->load->view('formulario/index');
		$this->load->view('layout/rodape');
	}


	public function senha()
	{

		$data['titulo'] = 'Aula Helper Form - Senha';

		//carregar helper form
		$this->load->helper('form');



		$this->load->view('layout/topo', $data);
		$this->load->view('formulario/senha');
		$this->load->view('layout/rodape');
	}

	public function enviar()
	{

		//mostrar no pre
		if ($this->input->post()) {
			echo '<pre>';
			print_r($this->input->post());
		}
	}


	public function validar()
	{

		$data['titulo'] = 'Boblioteca Form_validation';

		//carregar helper form
		$this->load->helper('form');

		//carregamento da biblioteca Form_Validation
		$this->load->library('form_validation');

		//Validacao formulairo nome.
$this->form_validation->set_rules('nome','Nome', 'required|min_length[3]');

		//Validacao formulairo email.
		$this->form_validation->set_rules('email','E-Mail', 'required|valid_email', 
		array('valid_email'=>'Voce deve passar um email valido!'));

		//Validacao formulairo codigo.
		$this->form_validation->set_rules('codigo','Código', 'numeric', 
		array('numeric'=>'Voce deve passar somente numeros!'));

		//Validacao formulairo senha.
		$this->form_validation->set_rules('senha','Senha', 'trim|required|min_length[6]|max_length[8]', 
		array(
			'required'=>'voce deve passar uma senha',
			'min_length'=>'No minimo 6 letras',
			'max_length'=>'No maximo 6 letras'
	));

		//Validacao formulairo senha2 comparacao.
		$this->form_validation->set_rules('senha2','Repetir Senha', 'required|matches[senha]',
		array(
			'required'=>'Voce deve preencher o campo repita senha',
			'matches'=>'Senha Nao Confere'
			
	
	));



if ($this->form_validation->run() == TRUE)  {
	echo 'Formulario validado com sucesso!';
} else {



	$this->load->view('layout/topo', $data);
		$this->load->view('formulario/validar');
		$this->load->view('layout/rodape');
	}

}

}
