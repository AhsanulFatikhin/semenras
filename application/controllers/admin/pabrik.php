<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pabrik extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_pabrik','mymodel');
        
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function pabrik()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_pabrik->getpabrik();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/pabrik/pabrik',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function data_pabrik()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_pabrik->getpabrik();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/pabrik/data_pabrik',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_pabrik()
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/header_back');
		$this->load->view('admin/pabrik/add_pabrik');
		$this->load->view('admin/footer_back');
		}
	}
	public function do_insert_pab()
	{
		$nama = $_POST['nama'];
		$facebook = $_POST['facebook'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$telfon = $_POST['telfon'];
		$deskripsi = $_POST['deskripsi'];
		$instagram = $_POST['instagram'];
		$google = $_POST['google'];
		$yahoo = $_POST['yahoo'];
		$proyek_selesai = $_POST['proyek_selesai'];
		$pemasaran = $_POST['pemasaran'];
		$kepuasan = $_POST['kepuasan'];
		$data_insert = array (
				'nama' => $nama,
				'facebook' => $facebook,
				'alamat' => $alamat,
				'email' => $email,
				'telfon' => $telfon,
				'deskripsi' => $deskripsi,
				'instagram' => $instagram,
				'google' => $google,
				'yahoo' => $yahoo,
				'proyek_selesai' => $proyek_selesai,
				'kepuasan' => $kepuasan,
				'pemasaran' => $pemasaran,

			);
		$res = $this->mymodel->insert_data('pabrik', $data_insert);
		redirect('admin/pabrik/data_pabrik');
	}
	public function edit_pabrik($idpabrik)
	{
		$current_user = $this->session->userdata('User');
		$pabrik = $this->model_pabrik->getpabrik("where idpabrik = '$idpabrik'");
		$data = array(
				"idpabrik" => $pabrik[0]['idpabrik'],
				"nama" => $pabrik[0]['nama'],
				"facebook" => $pabrik[0]['facebook'],
				"alamat" => $pabrik[0]['alamat'],
				"email" => $pabrik[0]['email'],
				"telfon" => $pabrik[0]['telfon'],
				"deskripsi" => $pabrik[0]['deskripsi'],
				"instagram" => $pabrik[0]['instagram'],
				"google" => $pabrik[0]['google'],
				"yahoo" => $pabrik[0]['yahoo'],
				"proyek_selesai" => $pabrik[0]['proyek_selesai'],
				"pemasaran" => $pabrik[0]['pemasaran'],
				"kepuasan" => $pabrik[0]['kepuasan'],
				);
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/pabrik/edit_pabrik',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_pabrik()
	{
		$idpabrik = $_POST['idpabrik'];
		$nama = $_POST['nama'];
		$facebook = $_POST['facebook'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$telfon = $_POST['telfon'];
		$deskripsi = $_POST['deskripsi'];
		$instagram = $_POST['instagram'];
		$google = $_POST['google'];
		$yahoo = $_POST['yahoo'];
		$proyek_selesai = $_POST['proyek_selesai'];
		$pemasaran = $_POST['pemasaran'];
		$kepuasan = $_POST['kepuasan'];
		$data_update = array (
				'nama' => $nama,
				'facebook' => $facebook,
				'alamat' => $alamat,
				'email' => $email,
				'telfon' => $telfon,
				'deskripsi' => $deskripsi,
				'instagram' => $instagram,
				'google' => $google,
				'yahoo' => $yahoo,
				'proyek_selesai' => $proyek_selesai,
				'kepuasan' => $kepuasan,
				'pemasaran' => $pemasaran,

			);
		$where = array('idpabrik' => $idpabrik);
		$res = $this->mymodel->update_data('pabrik',$data_update,$where);
		redirect('admin/pabrik/data_pabrik');
		if($res>=1){
		redirect('admin/pabrik/data_pabrik');
		}
	}
	public function hapus_pabrik($idpabrik)
	{
		$where = array('idpabrik' => $idpabrik);
		$res = $this->mymodel->deletedata('pabrik',$where);
		redirect('admin/pabrik/data_pabrik');
	}

}
