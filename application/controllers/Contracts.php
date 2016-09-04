<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Contracts extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'View All Contract';
		$this->load->view('contracts',$data);
	}
}