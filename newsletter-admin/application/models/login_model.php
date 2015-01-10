<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function login_success() {
		$data['email'] 		= $this->input->post('email');
		$data['password']	= md5($this->input->post('password'));
		
		$query = $this->db->get_where('admin', array('email' => $data['email'], 'password' => $data['password']));
		
		if ($query->num_rows() == 1) {
			foreach ($query->result() as $row) {
			
				$id = $row->id;
				$email = $row->email;
				$name = $row->full_name;
				
				$userdata = array('full_name' 	=> $name,
								  'id' 		  	=> $id,
								  'email' 	  	=> $email,
								  'is_loged_in' => true,
								 );
				
				$this->session->set_userdata($userdata);
			}
		} else {
			$this->session->set_flashdata('error', '<p class="alert alert-danger">Wrong email or password</p>');
			
			redirect('login/validate_credential');
		}
	}
}
