<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_medsos extends CI_Model{
	
    public function getmedsos($where="")
    {
    	$data = $this->db->query('select * from medsos '.$where);
    	return $data->result_array();
    }
    public function getmedsospegawai($where="")
    {
    	$data = $this->db->query('select * from medsos_pegawai '.$where);
    	return $data->result_array();
    }
    public function getfbpegawai($where="")
    {
        $data = $this->db->query('select * from facebook '.$where);
        return $data->result_array();
    }
    public function getigpegawai($where="")
    {
        $data = $this->db->query('select * from instagram '.$where);
        return $data->result_array();
    }
    public function getgooglepegawai($where="")
    {
        $data = $this->db->query('select * from google '.$where);
        return $data->result_array();
    }
    public function getpathpegawai($where="")
    {
        $data = $this->db->query('select * from path '.$where);
        return $data->result_array();
    }
    public function gettwitterpegawai($where="")
    {
        $data = $this->db->query('select * from twitter '.$where);
        return $data->result_array();
    }
}