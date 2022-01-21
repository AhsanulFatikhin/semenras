<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_pabrik','mymodel','model_pegawai','model_foto_pegawai','model_medsos');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function pegawai()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_pegawai->getpegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/pegawai/pegawai',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_pegawai()
	{
		$data['pabrik'] = $this->model_pabrik->getpabrik();
		$data['foto_pegawai'] = $this->model_foto_pegawai->getfotopegawai();
		$this->load->view('admin/header_back');
		$this->load->view('admin/pegawai/add_pegawai',$data);
		$this->load->view('admin/footer_back');
	}
	public function insert_pegawai()
	{
		$idpabrik = $_POST['idpabrik'];
		$idfoto_pegawai = $_POST['idfoto_pegawai'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$data_insert = array (
				'idpabrik' => $idpabrik,
				'idfoto_pegawai' => $idfoto_pegawai,
				'nama' => $nama,
				'alamat' => $alamat
			);
		$res = $this->mymodel->insert_data('pegawai', $data_insert);
		redirect('admin/pegawai/pegawai');
	}
	public function medsos_pegawai($idpegawai)
	{
		$pegawai = $this->model_pegawai->getpegawai("where idpegawai = '$idpegawai'");
		$data = array(
				"idpegawai" => $pegawai[0]['idpegawai'],
				"nama" => $pegawai[0]['nama'],
				"alamat" => $pegawai[0]['alamat'],
				"idfoto_pegawai" => $pegawai[0]['idfoto_pegawai'],
				"idpabrik" => $pegawai[0]['idpabrik'],
				);
		$data['pabrik'] = $this->model_pabrik->getpabrik();
		$data['foto_pegawai'] = $this->model_foto_pegawai->getfotopegawai();
		$data['medsos'] = $this->model_medsos->getmedsos();
		$data['medsos_pegawai'] = $this->model_medsos->getmedsospegawai();
		$this->load->view('pages/header_page');
		$this->load->view('pages/home_pages',$data);
		$this->load->view('pages/footer_pages');
	}
	public function update_pegawai()
	{
		$idpegawai = $_POST['idpegawai'];
		$idfoto_pegawai = $_POST['idfoto_pegawai'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$idpabrik = $_POST['idpabrik'];
		$data_update = array (
				'idpabrik' => $idpabrik,
				'idfoto_pegawai' => $idfoto_pegawai,
				'nama' => $nama,
				'alamat' => $alamat
			);
		$where = array('idpegawai' => $idpegawai);
		$res = $this->mymodel->update_data('pegawai',$data_update,$where);
		redirect('admin/pegawai/pegawai');
		if($res>=1){
		redirect('admin/pegawai/pegawai');
		}
	}
	public function hapus_pegawai($idpegawai)
	{
		$where = array('idpegawai' => $idpegawai);
		$res = $this->mymodel->deletedata('pegawai',$where);
		redirect('admin/pegawai/pegawai');
	}

}
