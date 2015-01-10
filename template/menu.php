<?php
$menu_link = basename($_SERVER['PHP_SELF'], '.php');

$inex = "";
$audit = "";
$certification = "";
$inex = "";
$environment = "";
$goods = "";
$standard = "";
$business = "";
$network = "";
$form = "";
$association = "";
$newsletter = "";
$contact = "";
$services = "";

if($menu_link == 'index')
{
	$index = 'active';
}
else if ($menu_link == 'audit')
{
	$audit = 'active';
}
else if ($menu_link == 'certification')
{
	$certification = 'active';
}
else if ($menu_link == 'environment')
{
	$environment = 'active';
}
else if ($menu_link == 'goods_inspection')
{
	$goods = 'active';
}
else if ($menu_link == 'standard')
{
	$standard = 'active';
}
else if ($menu_link == 'business')
{
	$business = 'active';
}
else if ($menu_link == 'network')
{
	$network = 'active';
}
else if ($menu_link == 'form')
{
	$form = 'active';
}
else if ($menu_link == 'association')
{
	$association = 'active';
}
else if ($menu_link == 'newsletter')
{
	$newsletter = 'active';
}
else if ($menu_link == 'sector')
{
	$sector = 'active';
}
else if ($menu_link == 'contact')
{
	$contact = 'active';
}
else if ($menu_link == 'services')
{
	$services = 'active';
}
?>
<br/>
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
        <li class="<?php echo $index; ?>"><a href="index.php">Home</a></li>
        <li class="dropdown <?php echo $audit; ?> <?php echo $certification; ?> <?php echo $environment; ?> <?php echo $goods; ?> <?php echo $standard; ?> <?php echo $services; ?>">
            <a href="services.php" id="dropdown" class="dropdown-toggle" data-toggle="dropdown">Services</a>
            <ul class="dropdown-menu">
                <li class="<?php echo $audit;?>"><a href="audit.php">Audit service</a></li>
                <li class="<?php echo $certification; ?>"><a href="certification.php">Certification Service </a></li>
        		<li class="<?php echo $environment; ?>"><a href="environment.php">Environmental testing service</a></li>
                <li class="<?php echo $goods; ?>"><a href="goods_inspection.php">Goods Inspection Service</a></li>
                <li class="<?php echo $standard; ?>"><a href="standard.php">Standard Service</a></li>
            </ul>
        </li>
        <li class="<?php echo $business; ?>"><a href="business.php">Business code of conduct</a></li>
        <li class="<?php echo $network; ?>"><a href="network.php">Our network</a></li>
        <li class="<?php echo $form; ?>"><a href="form.php">Useful Forms</a></li>
        <li class="<?php echo $association; ?>"><a href="association.php">Association</a></li>
        <li class="<?php echo $newsletter; ?>"><a href="newsletter/">Newsletter</a></li>
        <li class="<?php echo $sector; ?>"><a href="sector.php">Sector</a></li>
        <li class="<?php echo $contact; ?>"><a href="contact.php">Contact details</a></li>
      </ul>
      <a href="http://masl.co:2095"><button class="btn btn-default navbar-btn" type="button">Web Mail</button></a>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </div>
</nav>
<!-- Menu End -->