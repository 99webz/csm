<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Transactions extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'View All transactions';
		$this->load->view('transactions',$data);
	}
}