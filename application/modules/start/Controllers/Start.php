<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends REST_Controller {

	protected $msg = [];
	
	public function __construct() {
		parent::__construct();
		//$this->load->helper("form");
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('start/start_model');
	}
	public function index_get()
	{
		$this->login_get(); 
	}
	
	
	/****************************************************
	 *  Function to login page
	 ****************************************************/
	function login_get() {
		$this->load->view('login.php');
	}
	
	
	/****************************************************
	 *  Function to login
	 ****************************************************/
	
	function login_post() {
		$msg=array();
		$is_log=0;
		$post_val= $this->input->post('data') ;
	//	dump_it($post_val);
		if($post_val){
			$this->form_validation->set_data($post_val);
			if ($this->form_validation->run('login') == FALSE) {
				$err=$this->form_validation->error_array();
				if(isset($err['password']))	$msg[]=PASS_ERROR;
				if(isset($err['email']))	$msg[]=PASS_DUP;
				$this->responser($msg,400);
			} else {
				$is_log=$this->start_model->logMeIn(filterParameters($post_val));
				if($is_log){
					$msg[]=LOG_SUC;
					$this->responser($msg,200);
				}else{
					$msg[]=LOG_ERROR;
					$this->responser($msg,400);
				}
			}
		}
	}
	
	/****************************************************
	 *  Function to load signup page
	 ****************************************************/
	function signup_get() {
		$this->load->view('signup.php');
	}
	
	
	/****************************************************
	 *  Function to signup
	 ****************************************************/
	
	function signup_post() {
		$msg=array();
		$is_register=0;
		$post_val= $this->input->post('data') ;  // for payload var $this->_post_args
	//	print_r($this->load->model('start/start_model'));
		
		//$tb=$this->start_model->test(USER_REG);
		//print_r($post_val);exit;
		//$tb=$this->load_model;
		
	//	print_r($this->Start_model);
		
		if($post_val){ 
			$this->form_validation->set_data($post_val);
			//$this->form_validation->set_error_delimiters('<div style=color:red;>', '</div>');
			//$this->form_validation->set_message('is_unique', 'Error Message');
			if ($this->form_validation->run('signup') == FALSE) {
				$err=$this->form_validation->error_array();
				if(isset($err['password']))	$msg[]=PASS_ERROR;
				if(isset($err['email']))	$msg[]=PASS_DUP;
				$this->responser($msg,400);
			} else { 
				$is_register=$this->start_model->registerIt(filterParameters($post_val));
				if($is_register){
					$msg[]=REG_SUC;
					// $ck=get_cookie(LOGIN_COOKIE);
					//echo"==>";print_r($ck);
					$this->responser($msg,200);
				}else{
					$this->responser($msg,400);
				}
			}
		}
		//$this->response($message, 200); // 200 being the HTTP response code for success
	}
	function responser($msg,$code) {
	//	$message = array("error");
		$message = array("nos" => count($msg),"message" =>$msg);
		$this->response($message, $code); // 200 - for success, 400 - error
	}
	
	/****************************************************
	 *  Function to Logout
	 ****************************************************/
	
	function logout_get() {
		$msg=array();
		$is_logout=$this->start_model->logMeOut();
		if($is_logout){
			$msg[]='Logout Success';
			// $ck=get_cookie(LOGIN_COOKIE);
			//echo"==>";print_r($ck);
			$this->responser($msg,200);
		}else{
			$this->responser($msg,400);
		}
	}
}
