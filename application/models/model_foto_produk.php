<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_foto_produk extends CI_Model{
	
    public function getfotoproduk($where="")
    {
    	$data = $this->db->query('select * from foto_product '.$where);
    	return $data->result_array();
    }
    public function getfotopenggunaan($where="")
    {
    	$data = $this->db->query('select * from foto_penggunaan '.$where);
    	return $data->result_array();
    }
    public function getfotodetailproduk($where="")
    {
        $data = $this->db->query('select * from foto_detail_product '.$where);
        return $data->result_array();
    }
    
}