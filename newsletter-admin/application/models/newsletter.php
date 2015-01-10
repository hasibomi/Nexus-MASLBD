<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Model {
	/**
	 * Send newsletter
	 */
	 public function send_newsletter() {
	 	$message = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1">
	<title>MASL Newsletter</title>
</head>
<body>
	<div class="container" style="background: #F1F1F1; max-width: 600px; margin: auto; padding: 20px; border-radius: 7px;">
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr style="background: url('.base_url().'public/images/logo.png) #2F7D3D no-repeat; color: #fff; height: 100px;">
				<td style="padding: 10px 10px 0 10px; text-align: right; border-radius: 5px 5px 0 0; vertical-align: bottom" colspan="2">
					<h2 style="font-family: "Comic Sans MS", cursive, sans-serif">MASL</h2>
				</td>
			</tr>
			<tr>
				<td width="30%" bgcolor="#E6E6E6" style="padding: 12px; vertical-align: top">
					<h4 style="border-bottom: 1px solid #000">Userful Links</h4>

					<ul style="margin: 0; padding: 0 0 0 17px">
						<li><a href="/home.php" style="color: #2F7D3D; line-height: 23px;">Home</a></li>
						<li><a href="/services.php" style="color: #2F7D3D; line-height: 23px;">Services</a></li>
						<li><a href=/business.php"" style="color: #2F7D3D; line-height: 23px;">Business code of conduct</a></li>
						<li><a href="/network.php" style="color: #2F7D3D; line-height: 23px;">Our network</a></li>
						<li><a href="/form.php" style="color: #2F7D3D; line-height: 23px;">Useful Forms</a></li>
						<li><a href="/association.php" style="color: #2F7D3D; line-height: 23px;">Association</a></li>
						<li><a href="/sector.php" style="color: #2F7D3D; line-height: 23px;">Sector</a></li>
						<li><a href="/contact.php" style="color: #2F7D3D; line-height: 23px;">Contact details</a></li>
					</ul>
				</td>
				<td width="70%" bgcolor="#fff" style="padding: 12px; vertical-align: top">
					' . $this->input->post('message') . '
				</td>
			</tr>
			<tr bgcolor="#333">
				<td colspan="2" style="padding: 1px 12px 1px 12px; border-radius: 0 0 7px 7px; color: #fff; font-size: 12px;">
					<table cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td width="270" style="vertical-align: top">
								<p style="line-height: 12px">Lorem ipsum dolor sit amet.</p>
								<p style="line-height: 12px"><a href="http://www.nexusitzone.com" style="color: #fff">Nexus IT Zone</a> Lorem ipsum dolor sit amet.</p>
							</td>
							<td width="430" style="text-align: right; vertical-align: top">
								<address>
									<p style="line-height: 12px">Address</p>
									<p style="line-height: 12px">Here there here there</p>
									<p style="line-height: 12px">Here there here there</p>
								</address>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>';
		$subject = $this->input->post('subject');
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: newsletter@masl.co';
		
	 	$this->db->select('email');
		$query = $this->db->get('subscription');
		
		foreach ($query->result() as $row) {
			$address = $row->email;
			
			mail($address, $subject, $message, $headers);
			
			$this->db->set(array('newsletter' => $message, 'subject' => $subject));
			
			$update = $this->db->update('subscription');
			
			if ($update) {
				$this->session->set_flashdata('event', '<p class="alert alert-success">Email has been sent</p>');
			} else {
				$this->session->set_flashdata('event', '<p class="alert alert-danger">Error occured. Please try after sometime</p>');
			}
		}
		
		redirect('home/send_letter');
	 }
	 
	 // Delete subscriber
	 public function delete_subscriber($id)
	 {
		 $this->db->where(["id" => $id]);
		 $query = $this->db->delete("subscription");
		 
		 if($query)
		 {
			 $this->session->set_flashdata("event", "<p class='alert alert-success'>Subscriber deleted</p>");
		 }
		 else
		 {
			$this->session->set_flashdata('event', '<p class="alert alert-danger">Error occured. Please try after sometime</p>');
		} 
		
		redirect('home/email_list');
	 }
}
