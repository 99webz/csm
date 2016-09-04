<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_customers extends CI_Controller {

	public function index() {
		$data['page_title'] = 'View All Customer';
		$this->load->view('view_customers', $data);
	}
}