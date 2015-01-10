<!-- Header -->
<?php include 'template/header.php';?>

<div class="container">
	<div class="row">
	  <div class="col-md-10"><img src="images/logo.png" width="85" height="75"/></div>
	  <div class="col-md-2">
	  	<?php // <h1>MASL</h1> ?>
	  </div>
	</div>

<!-- Menu -->
<?php include 'template/menu.php'; ?>

<!-- Slider -->
<?php include 'template/slider.php'; ?>

<!-- Main jumbotron for a primary marketing message or call to action -->

  <div class="container">
  	
  	<div class="col-md-2" style="margin-left: -3.5%"><img src="images/Communication-email-green-icon.png" alt="" /></div>
  	
    <h1 style="margin-left: 16.5%;">Sign up for our Newsletter</h1>
    
    <br />
    
    <p style="margin-left: 16.5%;">
    	We are working to make things better. You can get notified by subscribing below.
    </p>
    
    <br />
    
    <hr />
    
    <br />
    
    <form action="newsletter_submit.php" method="post" accept-charset="utf-8">
    
	    <div class="form-group col-md-offset-2">
	    	<div class="row">
	    		<div class="col-md-2"><label for="fname">Full name</label></div>
	    		<div class="col-md-4">
	    			<input type="text" name="fname" placeholder="Full name" class="form-control" required autofocus/>
	    		</div>
	    	</div>
	    </div>
	    
	    <div class="form-group col-md-offset-2">
	    	<div class="row">
	    		<div class="col-md-2"><label for="email">Email</label></div>
	    		<div class="col-md-4"><input type="email" placeholder="Email" class="form-control" required autofocus></div>
	    	</div>
	    </div>
	    
	    <div class="form-group col-md-offset-2">
	    	<div class="row">
	    		<div class="col-md-2"><label for="message">Message</label></div>
	    		<div class="col-md-4"><textarea name="message" rows="8" cols="40" class="form-control" placeholder="Let us know your feedback" required autofocus></textarea></div>
	    	</div>
	    </div>
	    
	    <div class="form-group">
	    	<div class="row">
	    		<div class="col-md-offset-4 col-md-2"><button class="btn btn-info" type="submit">Subscribe</button></div>
	    	</div>
	    </div>
    
    </form>
    
  </div>
  
  <!-- Footer -->
  <?php include 'template/footer.php'; ?>