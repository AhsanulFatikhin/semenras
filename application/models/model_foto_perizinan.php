<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_foto_perizinan extends CI_Model{
	
    public function getfotoperizinan($where="")
    {
    	$data = $this->db->query('select * from foto_perizinan '.$where);
    	return $data->result_array();
    }
    
}