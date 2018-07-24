<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Atividades_m extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database("hackaton");
	}

  public function listaratividades(){
    $this->db->select('*');
    $this->db->from('atividades');
    return $this->db->get()->result();
  }
	public function insert($dados){
		$this->db->insert("atividades", $dados);
	}

}

?>
