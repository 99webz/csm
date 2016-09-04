<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function index()
 {
 	$this->load->model('Login_model');
 	$data['results'] = $this->Login_model->get_users();
 	$this->load->view('login_view',$data);
	//$this->load->model('Login_model');
	

	
 }

}

?>