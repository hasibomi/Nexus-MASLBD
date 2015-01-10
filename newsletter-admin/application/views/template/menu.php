<br/>
<?php
$menu = basename($this->input->server('PHP_SELF'), 'php');

$home = "";
$email_list = "";
$send_email = "";

if ($menu == 'home') {
	$home = 'active';
} else if ($menu == 'email_list') {
	$email_list = 'active';
} else if ($menu == 'send_email' || $menu == 'send_letter') {
	$send_email = 'active';
}
?>
<!-- Menu Start -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?= $home; ?>"><a href="<?php echo site_url('home'); ?>">Home</a></li>
        <li class="<?= $email_list; ?>"><a href="<?php echo site_url('home/email_list'); ?>">Subscriber List</a></li>
        <li class="<?= $send_email; ?>"><a href="<?php echo site_url('home/send_email'); ?>">Send newsletter</a></li>
      </ul>
      <a href="<?= site_url('login/logout')?>"><button class="btn btn-default navbar-btn btn-danger navbar-right" type="button" data-title="Logout"><i class="glyphicon glyphicon-off"></i></button></a>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </div>
</nav>
<!-- Menu End -->