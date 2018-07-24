<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adm_m extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database("projetofmf");
	}
	public function checklogin($login, $senha){
		$this->db->select('*');
		$this->db->from("adm");
		$this->db->where('adm.login', $login);
		$this->db->where('adm.senha', $senha);
		return $this->db->get()->result();

	}
	public function listaradms(){
		$this->db->select('*');
		$this->db->from('adm');
		return $this->db->get()->result();
	}
	public function get_adm_id($id){
		$this->db->select('*');
		$this->db->from("adm");
		$this->db->where('adm.id', $id);
		return $this->db->get()->result();
	}
	public function get_adm_login($login){
		$this->db->select('adm.id');
		$this->db->from("adm");
		$this->db->where('adm.login', $login);
		return $this->db->get()->result();
	}
	public function adicionandoadm($dados){
		$this->db->insert("adm", $dados);
	}
	public function deletaradm($id){
		$this->db->where('adm.id', $id);
		$this->db->delete('adm');
	}
	public function procurandoadm($id){
		$query = $this->db->get_where('adm',array('id'=>$id));
		return $query->row_array();
	}
	public function atualizandoadm($dados,$id){
		$this->db->select('*');
		$this->db->from("adm");
		$this->db->where('adm.id',$id);
		return $this->db->update('adm',$dados);
	}
}

?>
