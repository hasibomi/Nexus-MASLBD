<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<title>Admin login | MASL BD</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" type="text/css" />
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/signin.css" type="text/css" />
	
	<!-- Icon -->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/images/icon.png" />
</head>
<body>
	
	<center>
		<img src="<?php echo base_url(); ?>/public/images/logo.png" alt="" class="form-signin-heading" />
		<h2 class="form-signin-heading">Please sign in</h2>
		
		<div class="col-md-4 col-md-offset-4">
			<?php echo $this->session->flashdata('error'); ?>
		</div>
	</center>
	
	<!-- Form start -->
	<?php echo form_open('login/validate_credential', 'class="form-signin"')?>
	
		<?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required')); ?>
		
		<?php echo form_input(array('type' => 'password', 'name' => 'password', 'placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')); ?>
		
		<?php echo form_submit(array('name' => 'submit', 'value' => 'Login', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
	
	<?php echo form_close(); ?>
	<!-- /form -->
	
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.11.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
	
</body>
</html>