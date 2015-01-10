<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<link rel="canonical" href="<?php echo base_url();?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
	<title><?php echo $title;?></title>
    <base href="<?php echo base_url();?>" />
    <meta name="keywords" content="Learning, Education, Earn while educate" />
    <meta name="author" content="Coinacademe Team">
    <meta name="description" content="Learning, Practice skills, Education Section">

    <meta property="og:title" content="Coin Academe">
    <meta property="og:type" content="Education, Learning, Practice and Earning">
    <meta property="og:url" content="<?php echo base_url();?>">
    <meta property="og:image" content="<?php echo base_url();?>assets/css/images/cover1.jpg">
    <meta property="og:site_name" content="Coinacademe - Learn, Study, Enhance Skills and Ean Bitcoin">
    <meta property="og:description" content="Learning, Practice skills, Education Section. Combination of study, enhancements and etc">
    <meta property="fb:app_id" content="">
    <?php
		echo '<link rel="icon" href="assets/css/images/icon-logo.png">';
		if(!$this->session->userdata('logged_in'))
		{
			echo 
			'
			<link rel="stylesheet" type="text/css" href="assets/metro/css/metro-bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="assets/metro/css/metro-bootstrap-responsive.min.css">
			<link rel="stylesheet" type="text/css" href="assets/metro/css/iconFont.min.css">
			<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
			';
		}
		else
		{
			echo 
			'
				<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
				<link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
				<link href="assets/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
				<link href="assets/admin/css/plugins/timeline/timeline.css" rel="stylesheet">
				<link href="assets/admin/css/sb-admin.css" rel="stylesheet">
				
				<script src="assets/admin/js/jquery-1.10.2.js"></script>
			';
		}
	?>
</head>
<body 
<?php if(!$this->session->userdata('logged_in'))
	echo 'class="metro" style="background-color: rgb(240, 240, 240);"';
?>
>
<?php
	if(!$this->session->userdata('logged_in'))
	{
		echo
		'
			<div>
				<div class="header">
					'.$this->load->view($header).'
				</div>
				<div>
					'.$this->load->view($content).'
				</div>
				<div class="footer" style="border-top: 1px solid #ddd;background: #563e7d">
					'.$this->load->view($footer).'
				</div>
			</div>
		';
	}
	else
	{
		echo
		'
			'.$this->load->view($header).'
			'.$this->load->view($content).'
		';
	}
?>
<?php 
	if(!$this->session->userdata('logged_in'))
	{
		echo 
		'
		<script type="text/javascript" src="assets/js/core/core.js"></script>
		<script type="text/javascript" src="assets/metro/js/metro-dropdown.js"></script>
		<script type="text/javascript" src="assets/metro/js/metro.min.js"></script>
		';
	}
	else
	{
		echo
		'
			<script src="assets/admin/js/bootstrap.min.js"></script>
			<script src="assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
			<script src="assets/admin/js/plugins/morris/raphael-2.1.0.min.js"></script>
			<script src="assets/admin/js/plugins/morris/morris.js"></script>
			<script src="assets/admin/js/sb-admin.js"></script>
			<script src="assets/admin/nicedit/nicEdit.js" type="text/javascript"></script>
			<script src="assets/admin/nicedit/do.js" type="text/javascript"></script>
			<script src="assets/js/site/global_config.js"></script>
			<script src="assets/admin/js/back-end-prototype.js"></script>
		';
	}
?>
</body>
</html>