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
    <meta name="author" content="Coinacademe Team">
    <meta name="description" content="Learning, Practice skills, Education Section">

    <meta property="og:title" content="Coin Academe">
    <meta property="og:type" content="Education, Learning, Practice and Earning">
    <meta property="og:url" content="<?php echo base_url();?>">
    <meta property="og:image" content="<?php echo base_url();?>assets/css/images/cover1.jpg">
    <meta property="og:site_name" content="Coinacademe - Learn, Study, Enhance Skills and Ean Bitcoin">
    <meta property="og:description" content="Learning, Practice skills, Education Section and Eran Bitcoin for free .Combination of study, enhancements and etc">
    <meta property="fb:app_id" content="">
    
	<link rel="icon" href="assets/css/images/icon-logo.png">
    <link rel="stylesheet" type="text/css" href="assets/metro/css/metro-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/metro/css/metro-bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="assets/metro/css/iconFont.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body class="metro">
	<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="100" style="width: 100%;">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>
<div>
	<div class="header">
    	<?php $this->load->view($header);?>
    </div>
    <div>
    	<?php $this->load->view($content);?>
    </div>
    <div class="footer" style="border-top: 1px solid #ddd;background: #563e7d">
    	<?php $this->load->view($footer);?>
    </div>
    <div id="fb-root"></div>
</div>
<!---<script type="text/javascript" src="assets/js/core/core.js"></script>--->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=151550335046016&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script type="text/javascript" src="assets/js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="assets/metro/js/metro-dropdown.js"></script>
<script type="text/javascript" src="assets/metro/js/metro-listview.js"></script>
<script type="text/javascript" src="assets/metro/js/metro.min.js"></script>

<script type="text/javascript" src="assets/js/site/global_config.js"></script>
<script type="text/javascript" src="assets/js/site/front-end-animation.js"></script>
<script type="text/javascript" src="assets/js/scrollbar.js"></script>
<script type="text/javascript" src="assets/js/do.js"></script>
<script type='text/javascript'>
	<?php if($this->uri->segment(2) == 'cycle' || 'social' || 'help'){
			echo '$(document).ready(function(){ $("html, body").animate({ scrollTop: $("#'.$this->uri->segment(2).'").offset().top},500);});';
			}
	?>
</script>
</body>
</html>