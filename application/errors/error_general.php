<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo base_url();?>" />
<title>Warning !</title>
	<?php
	echo '<link rel="icon" href="assets/css/images/icon-logo.png">';
	echo '<link rel="stylesheet" href="assets/metro/css/metro-bootstrap.min.css">';
	echo '<link rel="stylesheet" href="assets/metro/css/metro-bootstrap-responsive.min.css">';
	echo '<link rel="stylesheet" href="assets/metro/css/iconFont.min.css">';
	echo '<link rel="stylesheet" href="assets/css/custom.css">';
	?>
</head>
<body class="metro">
	<div class="container">
    	<div class="span12 padding20" style="padding: 100px;border: 1px solid #ccc;margin: 0px auto;margin-top: 80px;">
        	<h1><?php echo $heading; ?> <i class="icon-warning"></i></h1>
            <br /><br />
            <p>
            	<?php echo $message; ?>
            </p>
            <br /><br />
            <br /><br />
            <br /><br />
            <p class="text-center"><small><a href="http://coinacademe.com">©2014 coinacademe.com</a></small></p>
        </div>
    </div>
</body>
</html>