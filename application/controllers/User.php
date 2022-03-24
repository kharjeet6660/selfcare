<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function login(){
      $this->load->view('login');
    }
    

    function loginvalidate(){
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ( $this->form_validation->run() == TRUE){
       $this->load->view('list');
    }
    else{
     $this->load->view('login');
      }
     }
	
	public function index()
	{
		$this->load->view('index');
		
	}
	

	public function  sendmail()
	{
	
	 $this->load->library('email');
	 
      $email=$this->input->post('email');
      $name=$this->input->post('name');
      $subject=$this->input->post('subject');
      $phone=$this->input->post('phone');
      $message=$this->input->post('message');

        //$email=\config\services::email();
      $this->email->from('company@gmail.com');
      $this->email->to('kharjeet6660@gmail.com');
      $this->email->subject($subject);
        $this->email->message('Thanks for supporting us.');
        

       $mail= $this->email->send();

      if($mail){
      	echo "mail sent successfully";
     
      	$this->load->model('User_model');
      	
      	$formdata=array('name'=>$name, 'email'=>$email,'subject'=>$subject,'phone'=>$phone,'message'=>$message);
        $this->User_model->add_user($formdata);
      }
      else{
      	echo "mail not sent";
      }
	
}
}
?>
