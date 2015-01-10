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
				<h2>Subscriber list</h2>
				
				<hr />
                
                <?= $this->session->flashdata("event"); ?>
				
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						<h3 class="panel-title">Subscriber list</h3>
					</div>
					
					<div class="panel-body">
						
						<div class="table-responsive">
							<table class="table table-hover table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th colspan="2">Email</th>
										<th>Message</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$query = $this->db->get('subscription');
										
										if ($query->num_rows() == 0) {
											echo '<tr><td colspan="3">No email found</td></tr>';
										}
										
										foreach ($query->result() as $key => $row) :
										?>
											<tr>
												<td><?php echo $key + 1; ?></td>
												<td><?php echo $row->email; ?></td>
                                                <td><a class="btn btn-danger btn-xs" href="<?= site_url("home/subscribers/delete_subscribe/" . $row->id); ?>"><span class="glyphicon glyphicon-trash"></span> Delete </a></td>
												<td><?php echo $row->message; ?></td>
											</tr>
											<?php
										endforeach;
									?>
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
						
					</div>
					<!-- /.panel-body -->
					
				</div>
				<!-- /.panel.panel-primary -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->

<!-- Footer -->
<?php $this->load->view('template/footer'); ?>