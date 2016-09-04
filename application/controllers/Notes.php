<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Notes extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'All To Do Notes';
		$this->load->view('notes',$data);
	}
}