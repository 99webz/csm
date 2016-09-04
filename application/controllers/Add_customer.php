<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_customer extends CI_Controller {

	public function index() {
		$data['page_title'] = 'Add New Customer';
		$this->load->view('add_customer', $data);
	}
}