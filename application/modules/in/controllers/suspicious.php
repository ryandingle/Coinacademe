<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suspicious extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		if($_GET['warning'] == sha1('true')){
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			delete_cookie("ci_session");
			
			$this->load->view('pages/suspicious');
		}else{
			show_404();
		}
	}
	
}
