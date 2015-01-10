<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		redirect('in/u');
	}
	public function all()
	{
		$this->db->get('course');
	}
	public function mycourse()
	{
		$this->db->where('c_holder',$this->session->userdata('id'));
		$this->db->get('course');
	}
	public function new_course()
	{
		if($this->form_validation->run() == FALSE){
			echo 'mal';
		}
		else{
			$data = array(
				'c_title'		=> $this->input->post('c_title'),
				'c_content'		=> $this->input->post('c_content'),
				'c_cover'		=> $this->input->post('c_cover'),
				'c_holder'		=> $this->session->userdata('id'),
				'c_price'		=> $this->input->post('c_price'),
				'c_privacy'		=> $this->input->post('c_privacy'),
				'c_category'	=> $this->input->post('c_category'),
				'c_summary'		=> $this->input->post('c_summary'),
			);
			$this->db->insert('course',$data);
		}
	}
	private function is_logged_in()
	{
		if($this->session->userdata('logged_in')) return true;
		else redirect(base_url());
	}
	
}
