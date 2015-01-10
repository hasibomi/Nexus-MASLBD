  <br>
  
  <hr>
  
  <div class="col-md-12">
  	<ul class="footer">
  		<div class="col-md-9" style="margin-top: 1%">
	  		<li><a href="#">Sitemap</a></li>
	       <!-- <li> <strong>|</strong></li>-->
	  		<li><a href="#">Privacy</a></li>
	        <!--<li> <strong>|</strong></li>-->
	  		<li><a href="#">Contact us</a></li>
	  	</div>
	  	<div class="col-md-3" style="margin-top: -.2%">
	      	<li><a href="www.facebook.com"><img src="images/social-media-icons/fb.png" /></a></li>
	  		<li><a href="www.twitter.com"><img src="images/social-media-icons/tw.png"/></a></li>
	  		<li><a href="www.google.com"><img src="images/social-media-icons/g+.png"/></a></li>
      	</div>
  	</ul>
  </div>
  <br />
  <br>

  <hr>
  
  <!--footer -->
  <nav class="navbar  navbar-static-bottom" role="navigation">
    <div class="container">
      <p> Copyright © 2014 MASLBD. All Rights Reserved. <span class="navbar-right">Designed & Developed by <strong><a href="http://nexusitzone.com/">Nexus IT Zone</a></strong></span></p>
    </div>
  </nav>
</div>
  <!-- footer end -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf-8">
	$('#dropdown').mouseover( function() {
		$(this).removeAttr('data-toggle');

		$('.dropdown-menu').show();
		
		$('.dropdown-menu').mouseover( function() {
			$(this).show();
		});
		
		$('.dropdown-menu').mouseout( function() {
			$(this).hide();
		});
	});
	
	$('#dropdown').mouseout( function() {
		$('.dropdown-menu').hide();
	});
</script>
</body>
</html>