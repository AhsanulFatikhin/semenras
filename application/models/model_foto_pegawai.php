<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_foto_pegawai extends CI_Model{
	
    public function getfotopegawai($where="")
    {
    	$data = $this->db->query('select * from foto_pegawai '.$where);
    	return $data->result_array();
    }
    
}