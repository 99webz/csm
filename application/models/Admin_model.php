<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Admin tasks main class
*/
class Admin_model extends CI_Model{

public function view_reps() {
	$query = $this->db->query("SELECT rep_name FROM sales_rep");
	return $query->result();
}
	public function add_reps(){
 	$id=$this->input->post('id');
 	$rep_name=$this->input->post('rep_name');
 	$data = array('id' => $id, 'rep_name' => $rep_name);
	$this->db->insert('data',$data); 
}
}