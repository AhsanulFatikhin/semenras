<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_project extends CI_Model{
	
    public function getproject($where="")
    {
    	$data = $this->db->query('select * from project '.$where);
    	return $data->result_array();
    }
    public function getprojectfoto($where="")
    {
    	$data = $this->db->query('select * from project join foto_project on project.idproject = foto_project.idproject '.$where);
    	return $data->result_array();
    }

    
}