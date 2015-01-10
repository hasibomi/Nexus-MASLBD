<?php
$option = basename($this->input->server('PHP_SELF'), 'php');

$title = "";

if ($option == 'home') {
	$title = 'Home | MASL Admin';
} else if ($option == 'email_list') {
	$title = 'Subscriber list | MASL Admin';
} else if ($option == 'send_email' || $option == 'send_letter') {
	$title = 'Send Newsletter | MASL Admin';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/images/icon.png" />
	<link href="<?= base_url(); ?>public/redactor/redactor.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?= $title; ?></title>
</head>

<body>