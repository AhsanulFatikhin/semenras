<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_keunggulan extends CI_Model{
	
    public function getkeunggulan($where="")
    {
    	$data = $this->db->query('select * from keunggulan '.$where);
    	return $data->result_array();
    }
    
}