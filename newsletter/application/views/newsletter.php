<!-- Header -->
<?php $this->load->view('template/header.php'); ?>

<div class="container">
	<div class="row">
	  <div class="col-md-10"><img src="<?php echo base_url(); ?>public/images/logo.png" width="85" height="75"/></div>
	  <div class="col-md-2">
	  	<?php // <h1>MASL</h1> ?>
	  </div>
	</div>

<!-- Menu -->
<?php $this->load->view('template/menu.php'); ?>

<!-- Slider -->
<?php $this->load->view('template/slider.php'); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->

  <div class="container">
  	
  	<div class="col-md-2" style="margin-left: -3.5%">
  		<img src="<?php echo base_url(); ?>public/images/Communication-email-green-icon.png" alt="" />
  	</div>
  	
    <h1 style="margin-left: 16.5%;">Sign up for our Newsletter</h1>
    
    <br />
    
    <p style="margin-left: 16.5%;">
    	We are working to make things better. You can get notified by subscribing below.
    </p>
    
    <br />
    
    <hr />
    
    <br />
    
    <?php echo $this->session->flashdata('call_back'); ?>
    
    <?php echo form_open('newsletter/subscribe'); ?>
    
    <form action="newsletter_submit.php" method="post" accept-charset="utf-8">
    
	    <div class="form-group col-md-offset-2">
	    	<div class="row">
	    		<div class="col-md-2">
	    			<?php echo form_label('Full name', 'full_name')?>
	    		</div>
	    		<div class="col-md-4">
	    			<?php echo form_input(array('type' => 'text', 'name' => 'full_name', 'class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => 'Full name'))?>
	    		</div>
	    		<div class="col-md-4">
	    			<?php echo form_error('full_name'); ?>
	    		</div>
	    	</div>
	    </div>
	    
	    <div class="form-group col-md-offset-2">
	    	<div class="row">
	    		<div class="col-md-2">
	    			<?php echo form_label('Email', 'email'); ?>
	    		</div>
	    		<div class="col-md-4">
	    			<?php echo form_input(array('type' => 'email', 'name' => 'email', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email'))?>
	    		</div>
	    		<div class="col-md-3">
	    			<?php echo form_error('email'); ?>
	    		</div>
	    	</div>
	    </div>
	    
	    <div class="form-group col-md-offset-2">
	    	<div class="row">
	    		<div class="col-md-2">
	    			<?php echo form_label('Message', 'message')?>
	    		</div>
	    		<div class="col-md-4">
	    			<?php echo form_textarea(array('name' => 'message', 'placeholder' => 'Message', 'class' => 'form-control', 'required' => 'required'))?>
	    		</div>
	    		<div class="col-md-4">
	    			<?php echo form_error('message'); ?>
	    		</div>
	    	</div>
	    </div>
	    
	    <div class="form-group">
	    	<div class="row">
	    		<div class="col-md-offset-4 col-md-2">
	    			<?php echo form_submit(array('class' => 'btn btn-info', 'value' => 'Subscribe', 'name' => 'submit'))?>
	    		</div>
	    	</div>
	    </div>
    
    <?php echo form_close(); ?>
    
  </div>
  
  <!-- Footer -->
  <?php $this->load->view('template/footer.php'); ?>