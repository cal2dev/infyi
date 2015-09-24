<?php 
/* if(!function_exists('k'))
{
  function k($msg,$code) {
		$message = array("error" => count($msg),"message" =>$msg);
		$this->response($message, $code); // 200 being the HTTP response code for success
	}
} */
if(!function_exists('dev_escape'))
{
	function dev_escape($arr) {
		
	}
}

function filterParameters($array) {
	$ci =& get_instance();//print_r($ci);
	// Check if the parameter is an array
	if(is_array($array)) {
		// Loop through the initial dimension
		foreach($array as $key => $value) {
			// Check if any nodes are arrays themselves
			if(is_array($array[$key]))
				// If they are, let the function call itself over that particular node
				$array[$key] = $this->filterParameters($array[$key]);

			// Check if the nodes are strings
			if(is_string($array[$key]))
				// If they are, perform the real escape function over the selected node
				$array[$key] = mysqli_real_escape_string($ci->db->conn_id,$array[$key]);
		}
	}
	// Check if the parameter is a string
	if(is_string($array)){
		// If it is, perform a  mysql_real_escape_string on the parameter
		$array = mysql_real_escape_string($array);
		$invalid_characters = array("$", "%", "#", "<", ">", "|");
		$array = str_replace($invalid_characters, "", $array);
	}
	// Return the filtered result
	return $array;

}
function dump_it($val,$exit=0){
		echo "<pre>";
			print_r($val);
		echo "</pre>";
		if($exit==1){
			exit;
		}
}