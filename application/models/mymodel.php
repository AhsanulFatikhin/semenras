<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mymodel extends CI_Model{
	function __construct(){
		parent::__construct();

		$this->load->library('email');
	}
    public function cari($yangdicari)
    {
        $query = $this->db->query("select * from obat where obat.nama like '%$yangdicari%'");

         return $query->result();
    }
    public function login($nama,$paswordx){
        $query = $this->db->query("select * from admin where
            nama = '".$nama."' and 
            password = '".$paswordx."' limit 1 ");
        
        return $query->result();
    }
    public function insert_data($tabelName, $data)
    {
    	$res = $this->db->insert($tabelName, $data);
    	return $res;
    }
    public function update_data($tabelName, $data, $where)
    {
    	$res = $this->db->update($tabelName, $data, $where);
    	return $res;
    }
    public function deletedata($tabelName, $where)
    {
    	$res = $this->db->delete($tabelName, $where);
    	return $res;
    }
     public function getadmin($where="")
    {
        $data = $this->db->query('select * from admin '.$where);
        return $data->result_array();
    }
}