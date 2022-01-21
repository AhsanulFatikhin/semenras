<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_foto_project extends CI_Model{
	
    public function getfotoproject($where="")
    {
    	$data = $this->db->query('select * from foto_project '.$where);
    	return $data->result_array();
    }
    
}