<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OnBoard extends MY_Controller {

	private $is_logged = FALSE;
	private $cok = 0;
	private $cok_hash = 0;
	private $uqi = 0;
	private $template_data;
	
	public function __construct() {
		parent::__construct();
		$this->template_data=new stdClass();
		
		$this->load->helper('url');
		$this->load->model('onBoard/onBoard_model');
		$this->check_for_user();
	}
	public function index()
	{
		// dump_it($this->session);
		if($this->session->is_logged){
			$this->template_data->is_logged=$this->session->is_logged;
			$this->template_data->u_fname=$this->session->u_data->u_fname;
			$this->template_data->u_lname=$this->session->u_data->u_lname;
			$this->template_data->u_email=$this->session->u_data->u_email;
		}else{
			$this->template_data->is_logged=0;
		}
		$this->load->view('onBoard',$this->template_data);
	}
	public function board() {
		
		$this->load->view('html/home.html');
	}
	
	public function contact() {
		$this->load->view('html/contact.html');
	}
	
	public function about() {
		$this->load->view('html/about.html');
	}
	protected function check_for_user() {
		$this->cok=json_decode(get_cookie(LOGIN_COOKIE));
		//$this->session->is_logged=false;
		if($this->session->is_logged){
			
		}else{
			//print_r($this->cok);	 //var_dump($_SESSION);
			if(isset($this->cok)){
				if(property_exists($this->cok,'uiq'))
				$ud=$this->onBoard_model->cookie_loadUser($this->cok);
				if($ud){
					$this->load->model('start/start_model');
					$is_register=$this->start_model->create_login($ud);
				}
			}
			
		}
	}
}

