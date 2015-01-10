<?php

class Test extends MX_Controller{

	public function index(){
		
		
		  $this->load->library('email');
		  $this->email->set_newline("\r\n");
		  $this->email->from('COINACADEME.COM'); // change it to yours
		  $this->email->to('ryandingle09@gmail.com'); // change it to yours
		  $this->email->subject('Verify your coinacademe acount.');
		  $data = array( 'message' => "");
    	  $email = $this->load->view('mails/user-verify', $data, TRUE);
		  $this->email->message( $email );
		
		  if($this->email->send())
		 {
		  echo 'Email sent.';
		  $this->load->view('mails/user-verify');
		 }
		 else
		{
		 show_error($this->email->print_debugger());
		}
	}
	public function course_form()
	{
		$this->load->view('test/courseform');
	}

}

?>