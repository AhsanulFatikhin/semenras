<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Path extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_medsos','mymodel','model_pegawai');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function path()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_medsos->getpathpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/path/path',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_path()
	{
		$current_user = $this->session->userdata('User');
		$data['pegawai'] = $this->model_pegawai->getpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/path/add_path',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_path()
	{
		$idpegawai = $_POST['idpegawai'];
		$nama_path = $_POST['nama_path'];
		$data_insert = array (
				'nama_path' => $nama_path,
				'idpegawai' => $idpegawai
			);
		$res = $this->mymodel->insert_data('path', $data_insert);
		redirect('admin/path/path');
	}
	public function edit_path($idpath)
	{
		$current_user = $this->session->userdata('User');
		$path = $this->model_medsos->getpathpegawai("where idpath = '$idpath'");
		$data = array(
				"idpath" => $path[0]['idpath'],
				"nama_path" => $path[0]['nama_path'],
				"idpegawai" => $path[0]['idpegawai'],
				);
		$data['pegawai'] = $this->model_pegawai->getpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/path/edit_path',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_path()
	{
		$idpath = $_POST['idpath'];
		$idpegawai = $_POST['idpegawai'];
		$nama_path = $_POST['nama_path'];
		$data_update = array (
				'nama_path' => $nama_path,
				'idpegawai' => $idpegawai
			);
		$where = array('idpath' => $idpath);
		$res = $this->mymodel->update_data('path',$data_update,$where);
		redirect('admin/path/path');
		if($res>=1){
		redirect('admin/path/path');
		}
	}
	public function hapus_path($idpath)
	{
		$where = array('idpath' => $idpath);
		$res = $this->mymodel->deletedata('path',$where);
		redirect('admin/path/path');
	}

}
