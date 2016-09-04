<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Create_contract extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'Create New Contract';
		$this->load->view('create_contract',$data);
	}
}