<?php 

// Store Functions are doctrine functions

require_once(APPPATH."models/Entities/AppUserRegister.php");
class Start_model extends CI_Model  {
   
   var $em;
   
   function __construct(){  
      parent::__construct();  
	  $this->em = $this->doctrine->em;
   }    
   
  
   public function test($tb){
       $query= $this->db->get($tb);
      $row=$query->result_array();
      return $row; 
       
   }
   
   /****************************************************
    *  call to create login
    ****************************************************/
   public function registerIt($details)
   {
   	$done=0;
   	$dt=array();
   	$dt['firstName']	=$fname=$details['firstName']  ;
   	$dt['lastName'] 	=$lname=$details['lastName'] ;
   	$dt['email']		=$email=$details['email'] ;
   	$dt['password'] 	=$password=md5($details['password']);
   	$dt['now']			=$now = date("YmdHis");
   	$dt['record_hash']	=$record_hash=md5($email.$now);
   	$dt['uniqueId'] 	=$uniqueId= hexdec( substr(md5($fname.$lname.$now.$email), 0, 10) );
	$udata=$this->map_registerIt($dt);	//print_r($udata);
  	 if($udata){
					$this->create_login($udata);
   					$done=1;
  		 } 
   
   return $done;
   }
   
   /****************************************************
    *  call to validate login
    ****************************************************/
   
   public function logMeIn($details)
   {
   	$done=0;
   	$dt=array();
   	$done=$this->validate_logIn($details);
   return $done;
   }
   
   /****************************************************
    *  func to validate login
    ****************************************************/
   
   public function validate_logIn($details){
   	$is_valid=FALSE;
   	$u_data = $this->em->getRepository('Entities\AppUserData')->findOneBy(array('regEmailId' => $details['email']));
   	if($u_data){
   		//dump_it($details);
   		//dump_it($u_data->getRegEmailId());
   		if(md5($details['password']) == $u_data->getRegPassword() ){
   			$is_valid=TRUE;
   			$this->create_login($u_data);
   		}
   	}
   	return $is_valid;
   }
   
   
   function map_registerIt($data){
	   $id=0;
	   $rg = new Entities\AppUserRegister();
       $rg->setregEmailId($data['email']);
       $rg->setRegUniqueId($data['uniqueId']);
       $rg->setRegRecordhash($data['record_hash']);
       $rg->setRegUserName($data['email']);
       $rg->setRegEmailId($data['email']);
       $rg->setRegPassword($data['password']);
       $rg->setRegFirstname($data['firstName']);
       $rg->setRegLastname($data['lastName']);
       $rg->setRegNow($data['now']);
       
       $rd = new Entities\AppUserdata();
       $rd->setRegUniqueId($data['uniqueId']);
       $rd->setRegRecordhash($data['record_hash']);
       $rd->setRegUserName($data['email']);
       $rd->setRegEmailId($data['email']); 
       $rd->setRegPassword($data['password']);
       $rd->setDataFirstname($data['firstName']);
       $rd->setDataLastname($data['lastName']);
       $rg->addUserData($rd);
         
        try {
            //save to database
            $this->em->persist($rg);
          	$this->em->persist($rd);
            $this->em->flush();
            $id=$rg->getregId();
        }
        catch(Exception $err){
            die($err->getMessage());
        }
        return $rd; 
   }
   
   
   
   /****************************************************
    *  call to set session and cookie
    ****************************************************/
   
   function create_login(Entities\AppUserData $sdata){
   	$uqi=$sdata->getRegUniqueId();
   	$reH=$sdata->getRegRecordhash();
   	$dId=$sdata->getDataId();
   	
   	$st=new stdClass();
   	$st->uqi=$uqi;
   	$st->reH=$reH;
   	$st->u_email=$sdata->getRegEmailId();
   	$st->u_fname=$sdata->getDataFirstname();
   	$st->u_lname=$sdata->getDataLastname();
   	
   	$uchash=substr(md5(date("YmdHis")), 0, 10);
   	$COOKIE_EXPIRY_IN_DAYS = COOKIE_EXPIRY_IN_DAYS;
   	
   	$ld = new Entities\AppLoginData();
   	$ld->setDataId($dId);
   	$ld->setRegRecordhash($reH);
   	$ld->setLogdCookieHash($uchash);
   	
   	//print_r($sdata);exit;
   //	$this->session->sess_destroy();
   	$this->session->set_userdata(array("u_data"=>$st,"is_logged"=>TRUE));
   	$ld->setSessId($this->session->session_id);
   	//var_dump($this->session->is_logged);
   	try {
   		//save to database
   		$this->em->persist($ld);
   		$this->em->flush();
   	}
   	catch(Exception $err){
   		die($err->getMessage());
   	}
   	
   	// cookie
   	$data=array("uiq"=>$uqi,"uchash"=>$uchash);
   	$cookie = array(
   			'name'   => LOGIN_COOKIE,
   			'value'  => json_encode($data),
   			'expire' => time()+(3600*24*$COOKIE_EXPIRY_IN_DAYS)
   	);
   	set_cookie($cookie);
   }
   function logMeOut(){
   	$sess=session_id();
   	$u_data = $this->em->getRepository('Entities\AppLoginData')->findOneBy(array('sessId' => $sess));
   	if($u_data){
	   	$u_data->setLogdRemark('logging out');
	   	
	   	try {
	   		//save to database
	   		$this->em->persist($u_data);
	   		$this->em->flush();
	   	}
	   	catch(Exception $err){
	   		die($err->getMessage());
	   	}
   	}
   
   	$this->session->sess_destroy();
   	delete_cookie(LOGIN_COOKIE);
   	return TRUE;
   }
}