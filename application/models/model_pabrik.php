<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_pabrik extends CI_Model{
	
    public function getpabrik($where="")
    {
    	$data = $this->db->query('select * from pabrik '.$where);
    	return $data->result_array();
    }
    
}