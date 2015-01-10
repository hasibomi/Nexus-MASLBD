<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Index page for admin
 */
class Home extends CI_Controller {
	
	public function index() {
		if ($this->session->userdata('is_loged_in') == true) {
			$this->load->view('home');
		} else {
			redirect('login');
		}
	}
	
	/**
	 * Subscriber list page
	 */
	 public function email_list() {
	 	if ($this->session->userdata('is_loged_in') == true) {	
			$this->load->view('email_list');
		} else {
			redirect('login');
		}
	 }
	 
	 // Delete Subscriber
	 public function subscribers()
	 {
		 if ($this->session->userdata('is_loged_in') == true)
		 {
			 $id = $this->uri->segment(4);
			 $this->load->model('newsletter');
			 $this->newsletter->delete_subscriber($id);
		 }
		 else
		 {
			redirect('login');
		}
	 }
	 
	 /**
	  * Newsletter send page
	  */
	  public function send_email() {
	 	if ($this->session->userdata('is_loged_in') == true) {	
			$this->load->view('send_email');
		} else {
			redirect('login');
		}
	 }
	  
	  /**
	   * Send newsletter
	   */
	   public function send_letter() {
	   	$this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
		
		$this->form_validation->set_rules('message', 'Message', 'required|trim|xss-clean');
		$this->form_validation->set_rules('subject', 'Subject', 'required|trim|xss-clean');
		
		if ($this->form_validation->run() == false) {
			$this->send_email();
		} else {
			$this->load->model('newsletter');
			
			$newsletter = new Newsletter;
			
			$newsletter->send_newsletter();
			
			$this->send_email();
		}
	   }
}
