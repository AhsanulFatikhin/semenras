<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_pegawai extends CI_Model{
	
    public function getpegawai($where="")
    {
    	$data = $this->db->query('select * from pegawai '.$where);
    	return $data->result_array();
    }
    
}