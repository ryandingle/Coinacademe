<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		$data['title'] 		= 'Welcome to Coinacademe';
		$data['header'] 	= 'includes/header';
		$data['content'] 	= 'pages/front';
		$data['footer'] 	= 'includes/footer';
		
		$this->load->view('template/template',$data);
	}
	public function social()
	{
		$this->index();
	}
	public function cycle()
	{
		$this->index();
	}
	public function help()
	{
		$this->index();
	}
	public function login()
	{
		$data['title'] = 'Login | Coincademe';
		$data['header'] = 'includes/header';
		$data['content'] = 'pages/login';
		$data['footer'] = 'includes/footer';
		$data['notice'] = "";	
		
		$this->load->view('template/template',$data);
	}
	public function Register()
	{
		$data['title'] = 'Registration | Coincademe';
		$data['header'] = 'includes/header';
		$data['content'] = 'pages/register';
		$data['footer'] = 'includes/footer';
		
		$this->load->view('template/template',$data);
	}
	private function is_logged_in()
	{
		if($this->session->userdata('logged_in') && $this->session->userdata('user_type') == '11')
		{
			redirect('in');
		}
		else
		{
			return true;
		}
	}
}
