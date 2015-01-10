<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index() {
		$this->load->view('login');
	}
	
	/**
	 * Validate credentials to login
	 */
	 public function validate_credential() {
	 	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		$this->form_validation->set_rules('email', 'Email', 'required|xss-clean|trim|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required|xss-clean|trim');
		
		// Check the input fields are not blank
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$this->load->model('login_model');
			
			$login = new Login_model;
			
			$login->login_success();
			
			redirect('home');
		}
	 }
	 
	 /**
	  * Logout page
	  */
	  public function logout() {
	  	if ($this->session->userdata('is_loged_in') == true) {
	  		$this->session->sess_destroy();
			redirect('login');
	  	} else {
	  		echo "You are not loged in";
	  	}
	  }
}
