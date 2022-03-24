<?php 
class User_model extends CI_model{
	
	function add_user($formArray)
	{
		$this->db->insert('users',$formArray);
	}
	
	
}
	
?>	