<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_reps extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->model('Admin_model');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('rep_name', 'Rep_name', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_view');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
}
?>