<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class New_note extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'Create New To Do Note';
		$this->load->view('new_note',$data);
	}
}