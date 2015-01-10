<?php

$config = array( 
	'acounts/login' => array(
		array(
			'field'=>'user-email',
			'label'=>'<font class="fg-blue">Email Address</font>',
			'rules'=>'trim|xss_clean|required|valid_email|unique'
		),
		array(
			'field'=>'user-password',
			'label'=>'<font class="fg-blue">Password</font>',
			'rules'=>'trim|xss_clean|required'
		)
	),
	
	'acounts/register' => array(
		array(
			'field'=>'user-email',
			'label'=>'<font class="fg-blue">Email Address</font>',
			'rules'=>'required|valid_email|trim|xss_clean|callback_email_check'
		),
		array(
			'field'=>'user-password',
			'label'=>'<font class="fg-blue">Password</font>',
			'rules'=>'required|trim|xss_clean|min_length[6]'
		),
		array(
			'field'=>'user-password2',
			'label'=>'<font class="fg-blue">Repeat Password</font>',
			'rules'=>'trim|xss_clean|required|matches[user-password]'
		),
	),
	
	
	'post_article' => array(
		array(
			'field'=>'article-title',
			'label'=>'Title',
			'rules'=>'required|valid_email|trim|xss_clean'
		),
		array(
			'field'=>'user-password',
			'label'=>'<font class="fg-blue">Password</font>',
			'rules'=>'required|trim|xss_clean|min_length[6]'
		),
		array(
			'field'=>'user-password2',
			'label'=>'<font class="fg-blue">Repeat Password</font>',
			'rules'=>'trim|xss_clean|required|matches[user-password]'
		),
	)
);

;?>