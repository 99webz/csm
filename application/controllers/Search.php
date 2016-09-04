<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Search extends CI_Controller 
{
	
	public function index()
	{
		$this->load->model('search_model');
		$data = array('page_title'=> 'Search Results', 'query' => $this->search_model->search());
		$this->load->view('search_view',$data);
	}
}