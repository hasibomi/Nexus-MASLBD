<?php
$menu_link = basename($_SERVER['PHP_SELF'], '.php');

$title = '';

if($menu_link == 'index')
{
	$title = 'Home';
}
else if ($menu_link == 'audit')
{
	$title = 'Audit Service';
}
else if ($menu_link == 'certification')
{
	$title = 'Certification Service';
}
else if ($menu_link == 'environment')
{
	$title = 'Environmental Testing Service';
}
else if ($menu_link == 'goods_inspection')
{
	$title = 'Goods Inspection Service';
}
else if ($menu_link == 'standard')
{
	$title = 'Standard Service';
}
else if ($menu_link == 'business')
{
	$title = 'Business Code of Conduct';
}
else if ($menu_link == 'network')
{
	$title = 'Our Network';
}
else if ($menu_link == 'form')
{
	$title = 'Useful forms';
}
else if ($menu_link == 'association')
{
	$title = 'Association';
}
else if ($menu_link == 'newsletter')
{
	$title = 'Newsletter';
}
else if ($menu_link == 'sector')
{
	$title = 'Sector';
}
else if ($menu_link == 'contact')
{
	$title = 'Contact';
}
else if ($menu_link == 'services')
{
	$title = 'Our services';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icon.png" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?php echo $title; ?></title>
</head>

<body>