<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends MX_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->library(array('upload','email','image_lib'));
		$this->load->config(array('form_validation','upload','image_lib','pagination'));
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		show_404();
	}
	public function is_ajax_validation()
	{
		$define = $_GET['define'];
		//post article validation
		if($define == 'article')
		{
			$this->form_validation->set_rules('article-title','Title','required|trim|xss_clean');
			$this->form_validation->set_rules('article-content','Content','required|trim|xss_clean');
			$this->form_validation->set_rules('question-count','Questions','required|trim|xss_clean');
			for($a = 1;$a <= $_POST['question-count'];$a++)
			{
				$this->form_validation->set_rules('question_'.$a.'','Question '.$a.'','required|trim|xss_clean');
				$this->form_validation->set_rules('question_choice_a'.$a.'','Choice A '.$a.'','required|trim|xss_clean');
				$this->form_validation->set_rules('question_choice_b'.$a.'','Choice B '.$a.'','required|trim|xss_clean');
				$this->form_validation->set_rules('question_choice_c'.$a.'','Choice C '.$a.'','required|trim|xss_clean');
				$this->form_validation->set_rules('question_choice_d'.$a.'','Choice D '.$a.'','required|trim|xss_clean');
				$this->form_validation->set_rules('real_answer_'.$a.'','Real Choice # '.$a.'','required|trim|xss_clean');
			}
			
			if ($this->form_validation->run() == FALSE)
			{ 
				$error = '<div class="alert alert-danger">
							<strong>Failed to Published!</strong><br />
							<p>
								<small>'.validation_errors().'</small>
							</p>
							</div>';
				echo json_encode(array('st'=>0,'msg'=>$error));
			}
			else
			{
				
				$error = 'Validating...... ... ...';
				echo json_encode(array('st'=>1,'msg'=>$error));
			} 
		}
	}
	public function action_request()
	{
		//define action variables
		$action = $_GET['action'];
		$action_param = $_GET['define'];
		
		//action insert
		if($action == 'insert')
		{
			if($action_param == 'category' && $_POST['category'] != '')
			{
				$values = array(
					'category_name'=>$this->security->xss_clean($_POST['category']),
					'category_parent'=>$this->security->xss_clean($_POST['category_parent']),
				);
				$check = $this->db->insert('category',$values);
				
				$cat_id = $this->db->insert_id();
				$this->db->where('category_id',$cat_id);
				$get = $this->db->get('category');
				echo json_encode($get->result());
				exit();
			}
			else show_404();
		}
		//action get
		if($action == 'getdata')
		{
			if($action_param == 'category')
			{
				$this->db->order_by('category_name','ASC');
				$get = $this->db->get('category');
				echo json_encode($get->result());
				exit();
			}
			if($action_param == 'category_to_update')
			{
				$this->db->where('category_id',$_GET['item_id']);
				$get = $this->db->get('category');
				echo json_encode($get->result());
				exit();
			}
		}
		//action edit
		if($action == 'edit')
		{
			
		}
		//action update
		if($action == 'update')
		{
			if($action_param == 'w_settings')
			{
				$this->form_validation->set_rules('f_name','First Name','trim|xss_clean');
				$this->form_validation->set_rules('l_name','Last Name','trim|xss_clean');
				$this->form_validation->set_rules('email','Email Address','trim|xss_clean');
				$this->form_validation->set_rules('password','Password','required|trim|xss_clean');
				$this->form_validation->set_rules('password2','Repeat Password','required|trim|xss_clean|matches[password]');
				if($this->form_validation->run() == FALSE)
				{ 
					$error = '<div class="alert alert-danger">
								<strong>Failed to save changes! </strong><br />
								<p>
									<small>'.validation_errors().'</small>
								</p>
								</div>';
					echo json_encode(array('st'=>0,'msg'=>$error));
				}
				else
				{
					$fname = $this->security->xss_clean($this->security->xss_clean($_POST['f_name']));
					$lname = $this->security->xss_clean($this->security->xss_clean($_POST['l_name']));
					$email = $this->security->xss_clean($this->security->xss_clean($_POST['email']));
					$password = $this->security->xss_clean($this->security->xss_clean(sha1($_POST['password'])));
					if($email == ''){$email = $this->session->userdata('email');}
					if($fname == ''){$fname = $this->session->userdata('fname');}
					if($lname == ''){$lname = $this->session->userdata('lname');}
					$new_acount = array(
						'email'=>$email,
						'f_name'=>$fname,
						'l_name'=>$lname,
						'password'=>$password,
					);
					$this->db->where('id',$this->session->userdata('id'));
					$this->db->where('user_type',$this->session->userdata('user_type'));
					$check = $this->db->update('users',$new_acount);
					if(!$check)
					{
						$error = '<div class="alert alert-danger">
								<strong>Failed to save changes! </strong><br />
								<p>
									<small>Contact software developer!</small>
								</p>
								</div>';
						echo json_encode(array('st'=>0,'msg'=>$error));
					}
					else
					{
						$this->db->where('email',$email);
						$this->db->where('password',$password);
						$this->db->where('user_type',22);
						$user = $this->db->get('users');
						$row = $user->row();
						$data = array(
								'logged_in'		=>TRUE,
								'id'			=>$row->id,
								'email'			=>$row->email,
								'f_name'		=>$row->f_name,
								'l_name'		=>$row->l_name,
								'status'		=>$row->status,
								'active'		=>$row->active,
								'login_key'		=>$row->login_key,
								'user_type'		=>$row->user_type,
						);
						$this->session->set_userdata($data);
						
						$error = '<div class="alert alert-info">
								<strong>Saving Changes.... </strong><br />
								</div>';
						echo json_encode(array('st'=>1,'msg'=>$error));
					}
				}
			}
			if($action_param == 'category')
			{
				$this->form_validation->set_rules('category_name_edit','Category Name','required|trim|xss_clean');
				$this->form_validation->set_rules('parent_category_edit','Category Parent','required|trim|xss_clean');
				if($this->form_validation->run() == FALSE)
				{ 
					$error = '<div class="alert alert-danger">
								<strong>Failed to save changes! </strong><br />
								<p>
									<small>'.validation_errors().'</small>
								</p>
								</div>';
					echo json_encode(array('st'=>0,'msg'=>$error));
				}
				else
				{
					$data = array(
						'category_name'=> $_POST['category_name_edit'],
						'category_parent'=> $_POST['parent_category_edit']
					);
					$this->db->where('category_id',$_GET['id']);
					$check = $this->db->update('category',$data);
					
					if(!$check)
					{
						$error = '<div class="alert alert-danger">
								<strong>Failed to save changes! </strong><br />
								<p>
									<small>Contact software developer!</small>
								</p>
								</div>';
						echo json_encode(array('st'=>0,'msg'=>$error));
					}
					else
					{
						$error = '<div class="alert alert-info">
								<strong>Saving Changes.... </strong><br />
								</div>';
						echo json_encode(array('st'=>1,'msg'=>$error));
					}
				}	
			}
		}
		//action delete
		if($action == 'delete')
		{
			if($action_param == 'category')
			{
				$categories = $this->security->xss_clean($this->security->xss_clean($_POST['checker']));
				foreach($categories as $category){
					$data_category = array(
						'category_id'=>$category,
					);
					$this->db->delete('category',$data_category);
					
					$this->db->set('category_id',1);
					$this->db->where('category_id',$category);
					$this->db->update('category_relationships');
				}
			}
			if($action_param == 'category_seperate_delete')
			{
				$category = $this->security->xss_clean($this->security->xss_clean($_POST['delete']));
				$data_category = array(
					'category_id'=>$category,
				);
				$this->db->delete('category',$data_category);
				
				$this->db->set('category_id',1);
				$this->db->where('category_id',$category);
				$this->db->update('category_relationships');
			}
			if($action_param == 'article')
			{
				$articles = $this->security->xss_clean($this->security->xss_clean($_POST['checker']));
				foreach($articles as $article){
					$data_article = array(
						'article_id'=>$article,
					);
					$this->db->delete('article',$data_article);
					
					//delete questions
					$this->db->where('article_id',$article);
					$this->db->delete('exam_questions');
					//delete category relations
					$this->db->where('category_post',$article);
					$this->db->delete('category_relationships');
				}
			}
			if($action_param == 'article_seperate_delete')
			{
				$article = $this->security->xss_clean($this->security->xss_clean($_POST['delete']));
				$data_article = array(
					'article_id'=>$article,
				);
				$this->db->delete('article',$data_article);
				
				//delete questions
				$this->db->where('article_id',$article);
				$this->db->delete('exam_questions');
				//delete category relations
				$this->db->where('category_post',$article);
				$this->db->delete('category_relationships');
			}
			//else show_404();
		}
		else return false;
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