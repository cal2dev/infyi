<?php 
class userData_map {
	public  $fname='';
	public  $lname='';
	public  $name='';
	public  $user_name='';
	public  $userReg_email_id='';
	public  $userReg_password='';
	
	
	public function __construct($data) {
		$this->fname=$data->userData_firstname;
		$this->lname=$data->userData_lastname;
	}
	
	public function getFname() {
		return $this->fname;
	}
	
	public function setFname($lname) {
		$this->lname = $lname;
	}
}