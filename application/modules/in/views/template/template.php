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
    <meta name="keywords" content="Learning, Education, Eran while educate" />
    <meta name="author" content="Coinacamademe.com">
    <meta name="description" content="Learning, Practice skills, Education Section">

    <meta property="og:title" content="Coin Academe">
    <meta property="og:type" content="Education, Learning, Practice and Earning">
    <meta property="og:url" content="<?php echo base_url();?>">
    <meta property="og:image" content="<?php echo base_url();?>assets/images/cover4.jpg">
    <meta property="og:site_name" content="Coinacademe - Learn, Study, Enhance Skills and Ean Bitcoin">
    <meta property="og:description" content="Combination of study, enhancements and etc">
    <meta property="fb:app_id" content="">
    
  	<link rel="icon" href="assets/css/images/icon-logo.png" />
    <!--<link rel="stylesheet" type="text/css" href="assets/css/scrollbar.css" />-->
    
    <!--<link rel="stylesheet" type="text/css" href="assets/twitter/css/bootstrap-theme.min.css" />-->
    <link rel="stylesheet" type="text/css" href="assets/twitter/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/admin/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="assets/twitter/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/twitter/dashboard.css">
</head>
<body>
	<?php $this->load->view($header);?>
    <?php $this->load->view($content);?>
    <?php $this->load->view($footer);?>
    
<script type="text/javascript" src="assets/js/pace.min.js"></script>
<script type="text/javascript" src="assets/js/core/core.js"></script>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script type="text/javascript" src="assets/twitter/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/scrollbar.js"></script>
<script type="text/javascript" src="assets/js/site/global_config.js"></script>
<script type="text/javascript" src="assets/admin/js/back-end-prototype.js"></script>
</body>
</html>