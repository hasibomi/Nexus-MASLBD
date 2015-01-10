<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Newsletter extends CI_Controller {
    	public function index() {
    		$this->load->helper(array('form','url'));
			$this->load->library(array('form_validation', 'session'));
    		$this->load->view('newsletter');
    	}
		
		// Subscribe
		public function subscribe() {
			$this->load->library('form_validation');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			
			$this->form_validation->set_rules('full_name', 'Full name', 'required|xss-clean|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|xss-clean|trim|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'required|xss-clean|trim');
			
			// Form validation
			
			if ($this->form_validation->run() == FALSE) {
				$this->index();
			} else {
				// Store in database and send email to admin
				$this->load->model('subscription');
				
				$subscription = new Subscription();
				
				$subscription->subscribe();
				
				$this->index();
			}
		}
    }