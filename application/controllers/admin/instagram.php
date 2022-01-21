<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instagram extends CI_Controller {

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
	public function instagram()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_medsos->getigpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/instagram/instagram',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_instagram()
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
		$this->load->view('admin/instagram/add_instagram',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_instagram()
	{
		$idpegawai = $_POST['idpegawai'];
		$nama_ig = $_POST['nama_ig'];
		$data_insert = array (
				'nama_ig' => $nama_ig,
				'idpegawai' => $idpegawai
			);
		$res = $this->mymodel->insert_data('instagram', $data_insert);
		redirect('admin/instagram/instagram');
	}
	public function edit_instagram($idinstagram)
	{
		$current_user = $this->session->userdata('User');
		$instagram = $this->model_medsos->getigpegawai("where idinstagram = '$idinstagram'");
		$data = array(
				"idinstagram" => $instagram[0]['idinstagram'],
				"nama_ig" => $instagram[0]['nama_ig'],
				"idpegawai" => $instagram[0]['idpegawai'],
				);
		$data['pegawai'] = $this->model_pegawai->getpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/instagram/edit_instagram',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_instagram()
	{
		$idinstagram = $_POST['idinstagram'];
		$idpegawai = $_POST['idpegawai'];
		$nama_ig = $_POST['nama_ig'];
		$data_update = array (
				'nama_ig' => $nama_ig,
				'idpegawai' => $idpegawai
			);
		$where = array('idinstagram' => $idinstagram);
		$res = $this->mymodel->update_data('instagram',$data_update,$where);
		redirect('admin/instagram/instagram');
		if($res>=1){
		redirect('admin/instagram/instagram');
		}
	}
	public function hapus_instagram($idinstagram)
	{
		$where = array('idinstagram' => $idinstagram);
		$res = $this->mymodel->deletedata('instagram',$where);
		redirect('admin/instagram/instagram');
	}

}
