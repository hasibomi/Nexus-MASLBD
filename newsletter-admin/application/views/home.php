<!-- Header -->
<?php $this->load->view('template/header'); ?>

	<!-- Main container -->
	<div class="container">
		
		<div class="row">
			<div class="col-md-10">
				<img src="<?php echo base_url(); ?>public/images/logo.png" alt="MASL BD logo" width="85" height="75" />
			</div>
			<div class="col-md-2">
				<h1>MASL</h1>
			</div>
		</div>
		
		<!-- Menu bar -->
		<?php $this->load->view('template/menu'); ?>
		
		<!-- Main content -->
		<div class="container">
			<div class="row">
				<h2>This is a dashboard</h2>
			</div>
		</div>


<!-- Footer -->
<?php $this->load->view('template/footer'); ?>