<?php 

class OnBoard_model extends CI_Model  {
	
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
    *  Function to load user on cookie 
    ****************************************************/
   public function cookie_loadUser($cookie_data,$sec_hash=''){
   	$uiq=$cookie_data->uiq;
   	$uchash=$cookie_data->uchash;
   	
	$ckeck_fr_valid_hash = $this->em->getRepository('Entities\AppLoginData')->findOneBy(array('logdCookieHash' => $uchash));
	   if($ckeck_fr_valid_hash){
	   	$usd=$this->get_userData($uiq);
	   }else{
	   	$usd=FALSE;
	   }
   	return $usd;
   }
   
   /****************************************************
    *  Function to get Entities\AppUserData Object
    ****************************************************/
   public function get_userData($val){
   
   	if(ctype_digit($val)){
   		$get_hs = $this->em->getRepository('Entities\AppUserData')->findOneBy(array('regUniqueId' => $val));
   	}else{
   		$get_hs = $this->em->getRepository('Entities\AppUserData')->findOneBy(array('regRecordhash' => $val));
   	}
   	
  //	\Doctrine\Common\Util\Debug::dump($get_hs);
   	if($get_hs){
   		 $hs=$get_hs;
   	}else{
   		 $hs=FALSE;
   	}
   	return $hs;
   }
   
   
}
