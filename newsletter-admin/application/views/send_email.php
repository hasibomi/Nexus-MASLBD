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
		<div class="container-fluid">
			
			<div class="row">
				<h2>Send newsletter</h2>
				<hr />
			</div>
			<!-- /.row -->
			
			<div class="row">
				
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						<h3 class="panel-title">Newsletter</h3>
					</div>
					<div class="panel-body">
						
						<?php
						echo $this->session->flashdata('event');
						?>
						
						<?php echo form_open('home/send_letter')?>
						
							<div class="form-group">
								<div class="row">
									<div class="col-md-2">
										<label for="subject">Subject</label>
									</div>
									<div class="col-md-10">
										<?php echo form_input(array('name' => 'subject', 'class' => 'form-control', 'placeholder' => 'Subject', 'required' => 'required')); ?>
									</div>
									<div class="col-md-10">
										<?php echo form_error('subject'); ?>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="row">
									<div class="col-md-2">
										<label for="message">Message</label>
									</div>
									<div class="col-md-10">
										<?php echo form_textarea(array('name' => 'message', 'class' => 'form-control', 'placeholder' => 'Message', 'required' => 'required', 'id' => 'message_box')); ?>
									</div>
									<div class="col-md-10">
										<?php echo form_error('message'); ?>
									</div>
								</div>
							</div>
							<!-- /.form-group -->
							
							<div class="form-group">
								<div class="row">
									<?php echo form_submit(array('name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary col-md-4 pull-right'));?>
								</div>
							</div>
							<!-- /.form-group -->
						
						<?php echo form_close(); ?>
						
					</div>
					<!-- /.panel.panel-body -->
					
				</div>
				<!-- /.panel.panel-primary -->
				
			</div>
			<!-- /.row -->
			
		</div>

<!-- Footer -->
<?php $this->load->view('template/footer'); ?>