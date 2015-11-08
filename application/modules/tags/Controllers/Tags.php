<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends MY_Controller {

	private $is_logged = FALSE;
	private $cok = 0;
	private $cok_hash = 0;
	private $uqi = 0;
	private $template_data;
	
	public function __construct() {
		parent::__construct();
		$this->template_data=new stdClass();
		
		$this->load->helper('url');
	//	$this->load->model('tags/tags_model');
	//	$this->check_for_user();
	}
	public function index()
	{
		$this->load->view('tags.php');
	}
	public function board() {
		
		$this->load->view('html/home.html');
	}
	
}

