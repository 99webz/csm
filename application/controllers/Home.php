<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
public function index() {
	   $this->data['title'] = "Login To Continue";
	   $this->load->view('login',$this->data);
	
}
}



