<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter extends CI_Controller {

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
	public function twitter()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_medsos->gettwitterpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/twitter/twitter',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_twitter()
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
		$this->load->view('admin/twitter/add_twitter',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_twitter()
	{
		$idpegawai = $_POST['idpegawai'];
		$nama_twitter = $_POST['nama_twitter'];
		$data_insert = array (
				'nama_twitter' => $nama_twitter,
				'idpegawai' => $idpegawai
			);
		$res = $this->mymodel->insert_data('twitter', $data_insert);
		redirect('admin/twitter/twitter');
	}
	public function edit_twitter($idtwitter)
	{
		$current_user = $this->session->userdata('User');
		$twitter = $this->model_medsos->gettwitterpegawai("where idtwitter = '$idtwitter'");
		$data = array(
				"idtwitter" => $twitter[0]['idtwitter'],
				"nama_twitter" => $twitter[0]['nama_twitter'],
				"idpegawai" => $twitter[0]['idpegawai'],
				);
		$data['pegawai'] = $this->model_pegawai->getpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/twitter/edit_twitter',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_twitter()
	{
		$idtwitter = $_POST['idtwitter'];
		$idpegawai = $_POST['idpegawai'];
		$nama_twitter = $_POST['nama_twitter'];
		$data_update = array (
				'nama_twitter' => $nama_twitter,
				'idpegawai' => $idpegawai
			);
		$where = array('idtwitter' => $idtwitter);
		$res = $this->mymodel->update_data('twitter',$data_update,$where);
		redirect('admin/twitter/twitter');
		if($res>=1){
		redirect('admin/twitter/twitter');
		}
	}
	public function hapus_twitter($idtwitter)
	{
		$where = array('idtwitter' => $idtwitter);
		$res = $this->mymodel->deletedata('twitter',$where);
		redirect('admin/twitter/twitter');
	}

}
