<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atividades_c extends CI_Controller {
	function __construct(){
		parent::__construct(); // inheriting all (helpers, libs) from parent calling the constructor
		//$this->load->library('Auth');
		$this->load->helper('url');
		//$this->Auth->CheckAuth($this->router->fetch_class(), $this->router->fetch_method());
		$this->load->model('Atividades_m', 'atividadesmodel');
		// Load session library
		$this->load->library('session');
	}
  public function index(){
    $dados['atividades'] = $this->atividadesmodel->listaratividades();
    $this->load->view('Header_v',$dados);
    $this->load->view('ApenasVozInicial');
    $this->load->view('Atividades_v',$dados);

  }
  public function insert(){
    $dados['nome'] = $this->input->post('q');

    $this->atividadesmodel->insert($dados);
    $dados['inserido'] = $this->input->post('q');
    $dados['atividades'] = $this->atividadesmodel->listaratividades();
    $this->load->view('Header_v',$dados);
    $this->load->view('VozDadoInserido',$dados);
    $this->load->view('Atividades_v',$dados);
  }


}
?>
