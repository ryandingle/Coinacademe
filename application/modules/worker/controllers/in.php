<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class In extends MX_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->library(array('upload','email','image_lib'));
		$this->load->config(array('form_validation','upload','image_lib','pagination'));
		$this->load->helper(array('string','security'));
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		$user;
		if($this->session->userdata('f_name') == '' || $this->session->userdata('l_name') == '') $user = $this->session->userdata('email');
		else $user = $this->session->userdata('f_name').' '.$this->session->userdata('l_name');
		
		$data['title'] = 'Welcome '.$user.' | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/dashboard';
		$data['validation'] = '';
		
		$this->load->view('template/template',$data);
	}
	public function menu()
	{
		$data['title'] = 'Welcome Name here | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/menus';
		$data['validation'] = '';
		
		if($_GET['tab'] == 'published')
		{
			$data['title'] = 'Published Articles | Coinacademe';
		}
		if($_GET['tab'] == 'drafts') $data['title'] = 'Drafts | Coinacademe';
		if($_GET['tab'] == 'new_article') $data['title'] = 'New Article | Coinacademe';
		if($_GET['tab'] == 'categories') $data['title'] = 'Categories | Coinacademe';
		if($_GET['tab'] == 'tags') $data['title'] = 'Tags | Coinacademe';
		if($_GET['tab'] == 'statistics') $data['title'] = 'Statistics | Coinacademe';
		if($_GET['tab'] == 'settings') $data['title'] = 'Settings | Coinacademe';
		
		$this->load->view('template/template',$data);
	}
	public function action()
	{
		$data['title'] = 'Hello '.$this->session->userdata('email').' | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/dashboard';
		$data['validation'] = '';
		//insert
		if($_GET['command'] == 'insert')
		{
			$this->form_validation->set_rules('article-title','Title','required|trim|xss_clean');
			$this->form_validation->set_rules('article-content','Content','required|trim|xss_clean');
			
			if($this->form_validation->run() == FALSE)
			{
				$data['title'] = 'New Article | Coinacademe';
				$data['content'] = 'pages/menus';
				$data['validation'] = 
				'
					<div class="alert alert-danger">
					<strong>Failed to Published!</strong><br />
					<p>
						<small>'.validation_errors().'</small>
					</p>
					</div>
				';
			}
			else
			{
				$category = $this->input->post('article-category');
				if (!$this->upload->do_upload())
				{
					$article = array(
						'author'		=>$this->session->userdata('id'),
						'content'		=>$this->input->post('article-content'),
						'title'			=>$this->input->post('article-title'),
						'status'		=>$_GET['do'],
						'cover_img'		=>'sample-img.png',
					);	
					$insert = $this->db->insert('article',$article);
					$post_id = $this->db->insert_id();
					if(!$insert)
					{
						return false;
					}
					else
					{
						for($qs=1;$qs<=$this->input->post('question-count');$qs++)
						{
							$data_qs = array(
								'article_id' => $post_id,
								'q1' 	=>$this->security->xss_clean(trim($_POST['question_'.$qs.''])),
								'q1a' 	=>$this->security->xss_clean(trim($_POST['question_choice_a'.$qs.''])),
								'q1b' 	=>$this->security->xss_clean(trim($_POST['question_choice_b'.$qs.''])),
								'q1c' 	=>$this->security->xss_clean(trim($_POST['question_choice_c'.$qs.''])),
								'q1d' 	=>$this->security->xss_clean(trim($_POST['question_choice_d'.$qs.''])),
								'qans' 	=>$this->security->xss_clean(trim($_POST['real_answer_'.$qs.''])),
							);
							$this->db->insert('exam_questions',$data_qs);
						}
						
						$categories = $this->security->xss_clean($this->input->post('category'));
						foreach($categories as $category){
							$data_category = array(
								'category_id'=>$category,
								'category_post'=>$post_id,
							);
							$this->db->insert('category_relationships',$data_category);
						}
					}
					redirect('worker/in/menu?tab=new_article&term=none');
				}
				else
				{
					$datas = $this->upload->data();
					$article = array(
						'author'		=>$this->session->userdata('id'),
						'content'		=>$this->input->post('article-content'),
						'title'			=>$this->input->post('article-title'),
						'status'		=>$_GET['do'],
						'cover_img'		=>$datas['file_name'],
					);	
					$insert = $this->db->insert('article',$article);
					$post_id = $this->db->insert_id();
					if(!$insert)
					{
						return false;
					}
					else
					{
						for($qs=1;$qs<=$this->input->post('question-count');$qs++)
						{
							$data_qs = array(
								'article_id' => $post_id,
								'q1' 	=>$this->security->xss_clean(trim($_POST['question_'.$qs.''])),
								'q1a' 	=>$this->security->xss_clean(trim($_POST['question_choice_a'.$qs.''])),
								'q1b' 	=>$this->security->xss_clean(trim($_POST['question_choice_b'.$qs.''])),
								'q1c' 	=>$this->security->xss_clean(trim($_POST['question_choice_c'.$qs.''])),
								'q1d' 	=>$this->security->xss_clean(trim($_POST['question_choice_d'.$qs.''])),
								'qans' 	=>$this->security->xss_clean(trim($_POST['real_answer_'.$qs.''])),
							);
							$this->db->insert('exam_questions',$data_qs);
						}
						
						$categories = $this->security->xss_clean($this->input->post('category'));
						foreach($categories as $category){
							$data_category = array(
								'category_id'=>$category,
								'category_post'=>$post_id,
							);
							$this->db->insert('category_relationships',$data_category);
						}
					}
					
					redirect('worker/in/menu?tab=new_article&term=done');
				}
			}
		}
		//edit -get
		if($_GET['command'] == 'edit')
		{
		
		}
		//delete
		if($_GET['command'] == 'delete')
		{
		
		}
		
		$this->load->view('template/template',$data);
	}
	private function is_logged_in()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->session->userdata('user_type') == '22')
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
			redirect('worker');
		}
	}
}