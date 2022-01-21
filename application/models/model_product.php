<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_product extends CI_Model{
	
    public function getproduct($where="")
    {
    	$data = $this->db->query('select * from product '.$where);
    	return $data->result_array();
    }
    
}