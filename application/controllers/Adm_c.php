<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_c extends CI_Controller {
	function __construct(){
		parent::__construct(); // inheriting all (helpers, libs) from parent calling the constructor
		//$this->load->library('Auth');
		$this->load->helper('url');
		//$this->Auth->CheckAuth($this->router->fetch_class(), $this->router->fetch_method());
		$this->load->model('Adm_m', 'admmodel');
		// Load session library
		$this->load->library('session');

	}
	public function index()	{

		$this->load->view('Adm_v');
	}
	public function checklogin(){
		$login = $this->input->post('login');
		$senha = $this->input->post('senha');
		$dados["adm"] = $this->admmodel->checklogin($login,$senha);
		if(count($dados["adm"]) == 1){
			//inicia a session data para enviar os dados do usuário lugado durante a sessão
			$session_data = array(
				'id' => $dados["adm"][0]->id,
				'login' => $dados["adm"][0]->login,
				'nome' => $dados["adm"][0]->nome,
				'matricula' => $dados["adm"][0]->matricula,
				'email' => $dados["adm"][0]->email
			);
			$this->session->set_userdata('logged_in', $session_data);
			$this->load->view('Paineladm_v',$dados);
			//$this->load->view('Footer_v',$dados);
		}else{
			$this->session->set_flashdata('error', 'Login ou senha, inválidos.');
			redirect($this);
		}
	}
	public function logout(){
		// Removing session data
		$sess_array = array(
			'id' => '',
			'login' => '',
			'nome' => '',
			'matricula' => '',
			'email' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$this->session->set_flashdata('success', 'Logout realizado com sucesso.');
		header('location:'.base_url()."index.php/Adm_c");
		//$this->load->view('Adm_v',$data);

	}
	public function mainmenu(){
		$this->load->view('Paineladm_v');
		//$this->load->view('Footer_v');
	}

	public function admscrud(){
		$dados["adm"] = $this->admmodel->listaradms();
		$this->load->view('Header_v');
		$this->load->view('Listaradms_v',$dados);
		//$this->load->view('Footer_v');
	}
	public function adicionaradm(){
		$this->load->view('Header_v');
		$this->load->view('Adicionaradm_v');
	}
	public function adicionandoadm(){
		$dados['login'] = $this->input->post('login');
		$dados['senha'] = $this->input->post('senha');
		$dados['nome'] = $this->input->post('nome');
		$dados['matricula'] = $this->input->post('matricula');
		$dados['email'] = $this->input->post('email');

		$this->admmodel->adicionandoadm($dados);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Cadastro do usuário '.$dados['login'].' realizado com sucesso.');
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}else{
			$this->session->set_flashdata('error', 'Cadastro não finalizado. Contacte o administrador.');
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}
	}
	public function deletaradm($id){
		$dados['adm'] = $this->admmodel->procurandoadm($id);
		$this->admmodel->deletaradm($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Usuário: '.$dados['adm']['login'].' excluído com sucesso.');
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}else{
			$this->session->set_flashdata('error', 'Exclusão não finalizada. Contacte o administrador.');
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}

	}
	public function editaradm(){
		$id = $this->uri->segment(3);
		$dados['adm'] = $this->admmodel->procurandoadm($id);
		$this->load->view('Header_v');
		$this->load->view('Editandoadm_v', $dados);
	}
	public function atualizandoadm(){
		$id = $this->input->post('id');
		$dados['login'] = $this->input->post('login');
		$dados['senha'] = $this->input->post('senha');
		$dados['nome'] = $this->input->post('nome');
		$dados['matricula'] = $this->input->post('matricula');
		$dados['email'] = $this->input->post('email');
   	$infos['adm'] = $this->admmodel->procurandoadm($id);
		$this->admmodel->atualizandoadm($dados,$id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Usuário: '.$infos['adm']['login'].' atualizado com sucesso.');
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}else{
			$this->session->set_flashdata('error', 'Edição não finalizada. Contacte o administrador.');
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}

	}


	public function editaradmlogado(){
		$id = $this->uri->segment(3);
		$dados['adm'] = $this->admmodel->procurandoadm($id);
		$this->load->view('Header_v');
		$this->load->view('Alterandodadospessoais_v', $dados);
	}
	public function atualizandoadmlogado(){
		$id = $this->input->post('id');
		$dados['login'] = $this->input->post('login');
		$dados['senha'] = $this->input->post('senha');
		$dados['nome'] = $this->input->post('nome');
		$dados['matricula'] = $this->input->post('matricula');
		$dados['email'] = $this->input->post('email');
		$infos['adm'] = $this->admmodel->procurandoadm($id);
		$this->admmodel->atualizandoadm($dados,$id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Usuário: '.$infos['adm']['login'].' atualizado com sucesso.');

			//como já há uma sessão iniciada, então o id e o login serão os mesmos, pois o usuário não pode alterar isso
			//o nome o login e a matrícula serã recebidos do input do usário caso haja alteração
			//os valores da sessão serão alterados para que haja modificação na parte superior da view
			$session_data = array(
				'id' => $this->session->userdata['logged_in']['id'],
				'login' => $this->session->userdata['logged_in']['login'],
				'nome' => $dados['nome'],
				'matricula' => $dados['matricula'],
				'email' => $dados['email']
			);

			$this->session->set_userdata('logged_in', $session_data);
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}else{
			$this->session->set_flashdata('error', 'Edição não finalizada. Contacte o administrador.');
			header('location:'.base_url()."index.php/Adm_c/admscrud");
		}

	}




}
?>
