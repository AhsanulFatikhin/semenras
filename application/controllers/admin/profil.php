<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_profil','mymodel','model_pabrik');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function profil()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_profil->getprofil();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/profil/profil',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function data_profil()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_profil->getprofil();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/profil/data_profil',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_profil()
	{
		$current_user = $this->session->userdata('User');
		$data['pabrik'] = $this->model_pabrik->getpabrik();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/profil/add_profil',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_profil()
	{
		$idpabrik = $_POST['idpabrik'];
		$sejarah = $_POST['sejarah'];
		$deskripsi = $_POST['deskripsi'];
		$proyek_selesai = $_POST['proyek_selesai'];
		$pemasaran = $_POST['pemasaran'];
		$kepuasan = $_POST['kepuasan'];
		$data_insert = array (
				'sejarah' => $sejarah,
				'deskripsi' => $deskripsi,
				'idpabrik' => $idpabrik,
				'proyek_selesai' => $proyek_selesai,
				'kepuasan' => $kepuasan,
				'pemasaran' => $pemasaran,
			);
		$res = $this->mymodel->insert_data('profil', $data_insert);
		redirect('admin/profil/data_profil');
	}
	public function edit_profil($idprofil)
	{
		$current_user = $this->session->userdata('User');
		$profil = $this->model_profil->getprofil("where idprofil = '$idprofil'");
		$data = array(
				"idprofil" => $profil[0]['idprofil'],
				"sejarah" => $profil[0]['sejarah'],
				"deskripsi" => $profil[0]['deskripsi'],
				"proyek_selesai" => $profil[0]['proyek_selesai'],
				"pemasaran" => $profil[0]['pemasaran'],
				"kepuasan" => $profil[0]['kepuasan'],
				"idpabrik" => $profil[0]['idpabrik'],
				);
		$data['pabrik'] = $this->model_pabrik->getpabrik();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/profil/edit_profil',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_profil()
	{
		$idprofil = $_POST['idprofil'];
		$idpabrik = $_POST['idpabrik'];
		$sejarah = $_POST['sejarah'];
		$deskripsi = $_POST['deskripsi'];
		$proyek_selesai = $_POST['proyek_selesai'];
		$pemasaran = $_POST['pemasaran'];
		$kepuasan = $_POST['kepuasan'];
		$data_update = array (
				'sejarah' => $sejarah,
				'deskripsi' => $deskripsi,
				'idpabrik' => $idpabrik,
				'proyek_selesai' => $proyek_selesai,
				'kepuasan' => $kepuasan,
				'pemasaran' => $pemasaran,
			);
		$where = array('idprofil' => $idprofil);
		$res = $this->mymodel->update_data('profil',$data_update,$where);
		redirect('admin/profil/data_profil');
		if($res>=1){
		redirect('admin/profil/data_profil');
		}
	}
	public function hapus_profil($idprofil)
	{
		$where = array('idprofil' => $idprofil);
		$res = $this->mymodel->deletedata('profil',$where);
		redirect('admin/profil/data_profil');
	}

}
