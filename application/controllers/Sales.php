<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Sales extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'Sales Report';
		$this->load->view('sales',$data);
	}
}