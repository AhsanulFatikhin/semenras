<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook extends CI_Controller {

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
	public function facebook()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_medsos->getfbpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/facebook/facebook',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_facebook()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_medsos->getfbpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$data['pegawai'] = $this->model_pegawai->getpegawai();
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/facebook/add_facebook',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_facebook()
	{
		$idpegawai = $_POST['idpegawai'];
		$nama_fb = $_POST['nama_fb'];
		$data_insert = array (
				'nama_fb' => $nama_fb,
				'idpegawai' => $idpegawai
			);
		$res = $this->mymodel->insert_data('facebook', $data_insert);
		redirect('admin/facebook/facebook');
	}
	public function edit_facebook($idfacebook)
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$facebook = $this->model_medsos->getfbpegawai("where idfacebook = '$idfacebook'");
		$data = array(
				"idfacebook" => $facebook[0]['idfacebook'],
				"nama_fb" => $facebook[0]['nama_fb'],
				"idpegawai" => $facebook[0]['idpegawai'],
				);
		$data['pegawai'] = $this->model_pegawai->getpegawai();
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/facebook/edit_facebook',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_facebook()
	{
		$idfacebook = $_POST['idfacebook'];
		$idpegawai = $_POST['idpegawai'];
		$nama_fb = $_POST['nama_fb'];
		$data_update = array (
				'nama_fb' => $nama_fb,
				'idpegawai' => $idpegawai
			);
		$where = array('idfacebook' => $idfacebook);
		$res = $this->mymodel->update_data('facebook',$data_update,$where);
		redirect('admin/facebook/facebook');
		if($res>=1){
		redirect('admin/facebook/facebook');
		}
	}
	public function hapus_facebook($idfacebook)
	{
		$where = array('idfacebook' => $idfacebook);
		$res = $this->mymodel->deletedata('facebook',$where);
		redirect('admin/facebook/facebook');
	}

}
