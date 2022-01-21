<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Google extends CI_Controller {

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
	public function google()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_medsos->getgooglepegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/google/google',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_google()
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
		$this->load->view('admin/google/add_google',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_google()
	{
		$idpegawai = $_POST['idpegawai'];
		$nama_google = $_POST['nama_google'];
		$data_insert = array (
				'nama_google' => $nama_google,
				'idpegawai' => $idpegawai
			);
		$res = $this->mymodel->insert_data('google', $data_insert);
		redirect('admin/google/google');
	}
	public function edit_google($idgoogle)
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$google = $this->model_medsos->getgooglepegawai("where idgoogle = '$idgoogle'");
		$data = array(
				"idgoogle" => $google[0]['idgoogle'],
				"nama_google" => $google[0]['nama_google'],
				"idpegawai" => $google[0]['idpegawai'],
				);
		$data['pegawai'] = $this->model_pegawai->getpegawai();
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/google/edit_google',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_google()
	{
		$idgoogle = $_POST['idgoogle'];
		$idpegawai = $_POST['idpegawai'];
		$nama_google = $_POST['nama_google'];
		$data_update = array (
				'nama_google' => $nama_google,
				'idpegawai' => $idpegawai
			);
		$where = array('idgoogle' => $idgoogle);
		$res = $this->mymodel->update_data('google',$data_update,$where);
		redirect('admin/google/google');
		if($res>=1){
		redirect('admin/google/google');
		}
	}
	public function hapus_google($idgoogle)
	{
		$where = array('idgoogle' => $idgoogle);
		$res = $this->mymodel->deletedata('google',$where);
		redirect('admin/google/google');
	}

}
