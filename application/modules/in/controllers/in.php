<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class In extends MX_Controller {
	
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
	public function u()
	{
		$data = array(
			'title'	=>'Coinacademe | '.ucfirst($this->session->userdata('email')).'',
			'header'=>'includes/header',
			'footer'=>'includes/footer',
		);
		
		$this->db->where('user_type',$this->session->userdata('user_type'));
		$this->db->where('id',$this->session->userdata('id'));
		$get = $this->db->get('users');
		$row = $get->row();
		if($row->status == '00')
		{
			$data['title'] = 'Coinacademe | Verify your acount.';
			$data['content'] = 'pages/verification';	
		}
		else
		{
			$this->db->where('status','publish');
			$this->db->order_by('exam_count','DESC');
			$data['articles'] = $this->db->get('article');
			$data['content'] = 'pages/front2';
		}
		$this->load->view('template/template',$data);
	}
	public function profile()
	{
		$data['title'] = 'U Profile | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/settings';
		
		$this->db->where('id',$this->session->userdata('id'));
		$get = $this->db->get('users');
		$row = $get->row();
		
		$this->load->view('template/template',$data);
	}
	public function settings()
	{
		$data['title'] = 'U Settings | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/settings';
		
		if($_GET['tab'] == 'myacount') $data['title'] = 'U Acount | Coinacademe';
		if($_GET['tab'] == 'payments') $data['title'] = 'U Payments | Coinacademe';
		if($_GET['tab'] == 'notifications') $data['title'] = 'U Notifications | Coinacademe';
		if($_GET['tab'] == 'security') $data['title'] = 'U Security | Coinacademe';
		if($_GET['tab'] == 'feedback') $data['title'] = 'U Feedback | Coinacademe';
		
		$this->db->where('id',$this->session->userdata('id'));
		$get = $this->db->get('users');
		$row = $get->row();
		
		$this->load->view('template/template',$data);
	}
	public function article()
	{
		$data['title'] = 'Article Title Here | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/article';
		
		$this->db->where('id',$this->session->userdata('id'));
		$get = $this->db->get('users');
		$row = $get->row();
		
		$this->load->view('template/template',$data);
	}
	public function start()
	{
		$data['title'] = 'Article Title Here | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/test_paper';
		
		$this->db->where('id',$this->session->userdata('id'));
		$get = $this->db->get('users');
		$row = $get->row();
		
		$this->load->view('template/template',$data);
	}
	private function is_logged_in()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->session->userdata('user_type') == '11')
			{
				$this->db->where('id',$this->session->userdata('id'));
				$this->db->where('email',$this->session->userdata('email'));
				$this->db->where('user_type',$this->session->userdata('user_type'));
				$check = $this->db->get('users');
				$row = $check->row();
				if($this->session->userdata('login_key') != $row->login_key)
				{
					redirect('in/suspicious?warning='.sha1('true').'');
				}
				return true;
			}
			else
			{
				show_404();
			}
		}
		else
		{
			redirect(base_url());
		}
	}
	
}
