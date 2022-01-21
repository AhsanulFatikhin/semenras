<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_home extends CI_Model{
	
    public function gethome($where="")
    {
    	$data = $this->db->query('select * from home '.$where);
    	return $data->result_array();
    }
    
}