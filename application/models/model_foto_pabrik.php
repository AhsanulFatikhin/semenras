<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_foto_pabrik extends CI_Model{
	
    public function getfotopabrik($where="")
    {
    	$data = $this->db->query('select * from foto_pabrik '.$where);
    	return $data->result_array();
    }
    public function getfotoheader($where="")
    {
    	$data = $this->db->query('select * from foto_header '.$where);
    	return $data->result_array();
    }
    public function getfotofooter($where="")
    {
    	$data = $this->db->query('select * from foto_footer '.$where);
    	return $data->result_array();
    }
    public function getfotobg($where="")
    {
    	$data = $this->db->query('select * from foto_bg '.$where);
    	return $data->result_array();
    }
    public function getfotoheadermobile($where="")
    {
        $data = $this->db->query('select * from foto_header_mobile '.$where);
        return $data->result_array();
    }
}