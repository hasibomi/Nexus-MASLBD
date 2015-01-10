<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscription extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	/**
	 * Storing data in database and sending email to site admin
	 */
	 public function subscribe() {
	 	$full_name = $this->input->post('full_name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		
		$data = array('id' => '', 'full_name' => $full_name, 'email' => $email, 'message' => $message);
		
		$query = $this->db->insert('subscription', $data);
		
		if ($query) {
			$this->load->library('session');
			$this->load->helper('url');
			
			mail($email, 'MASL Subscription', 'Thank you for subscribing', 'DoNotReply@masl.co');
			
			$this->session->set_flashdata('call_back', '<p class="alert alert-success">Thank you for subscribing.</p>');
			redirect('newsletter/subscribe');
		} else {
			$this->load->library('session');
			$this->load->helper('url');
			
			$this->session->set_flashdata('call_back', '<p class="alert alert-danger">Error occured. Please try after sometime.</p>');
			redirect('newsletter/subscribe');
		}
	 }
}
