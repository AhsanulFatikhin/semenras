<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_daya_sebar extends CI_Model{
	
    public function getdayasebar($where="")
    {
    	$data = $this->db->query('select * from daya_sebar '.$where);
    	return $data->result_array();
    }
    
}