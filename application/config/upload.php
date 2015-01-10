<?php 
	$random = rand(000000000,999999999);
	$config['upload_path'] = 'assets/images/article_images/';
	$config['allowed_types'] = '|jpeg|jpg|png|gif';
	$config['file_name'] = 'IMG_'.$random.'';
	$config['overwrite']  = true;
	$config['max_size']	= '0';
	$config['max_width']  = '0';
	$config['max_height']  = '0';
	$config['remove_spaces'] = TRUE;
?>