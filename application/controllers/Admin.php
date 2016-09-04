<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller 
{
	
	public function index()
	{
		$this->load->model('Admin_model');
$data = array('results' => $this->Admin_model->view_reps(), 'page_title' => 'Admin');
		//$title['page_title'] = 'Manage Admin Tasks';
		$this->load->view('Admin_view', $data);
	}
	public function success() {
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('rep_name', 'Name', 'required');
		// $data = array('id' =>'', 'rep_name' => '$rep_name');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_view');
		}
		else
		{
			$this->Admin_model->add_reps();
		}
			
	}
}