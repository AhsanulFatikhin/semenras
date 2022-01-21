<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_profil extends CI_Model{
	
    public function getprofil($where="")
    {
    	$data = $this->db->query('select * from profil '.$where);
    	return $data->result_array();
    }
     public function getvisi($where="")
    {
    	$data = $this->db->query('select * from visi '.$where);
    	return $data->result_array();
    }
     public function getmisi($where="")
    {
    	$data = $this->db->query('select * from misi '.$where);
    	return $data->result_array();
    }
     public function getfotomisi($where="")
    {
    	$data = $this->db->query('select * from foto_misi '.$where);
    	return $data->result_array();
    }
    
}