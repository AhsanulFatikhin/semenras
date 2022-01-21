<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_petunjuk extends CI_Model{
	
    public function getpetunjuk($where="")
    {
    	$data = $this->db->query('select * from petunjuk '.$where);
    	return $data->result_array();
    }
    
}