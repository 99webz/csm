<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Invoice extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'Customer Invoice Generator';
		$this->load->view('invoice',$data);
	}
}