<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Delivery extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'Pending Deliveries';
		$this->load->view('delivery',$data);
	}
}