<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_foto_profil extends CI_Model{
	
    public function getfotoprofil($where="")
    {
    	$data = $this->db->query('select * from foto_profil '.$where);
    	return $data->result_array();
    }
    public function getfotonomerprofil($where="")
    {
    	$data = $this->db->query('select * from foto_nomer_profil '.$where);
    	return $data->result_array();
    }
    
}