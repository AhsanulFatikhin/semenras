<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_project','mymodel','model_pabrik');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function project()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_project->getproject();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/project/project',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function data_project()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_project->getproject();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/project/data_project',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_project()
	{
		$idpabrik = $_POST['idpabrik'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$luas = $_POST['luas'];
		$tahun = $_POST['tahun'];
		$biaya = $_POST['biaya'];
		$arsitek = $_POST['arsitek'];
		$deskripsi = $_POST['deskripsi'];
		$data_insert = array (
				'nama' => $nama,
				'alamat' => $alamat,
				'luas' => $luas,
				'tahun' => $tahun,
				'arsitek' => $arsitek,
				'biaya' => $biaya,
				'deskripsi' => $deskripsi,
				'idpabrik' => $idpabrik
			);
		$res = $this->mymodel->insert_data('project', $data_insert);
		redirect('admin/project/data_project');
	}
	public function add_project()
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
		$this->load->view('admin/project/add_project',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function edit_project($idproject)
	{
		$current_user = $this->session->userdata('User');
		$project = $this->model_project->getproject("where idproject = '$idproject'");
		$data = array(
				"idproject" => $project[0]['idproject'],
				"nama" => $project[0]['nama'],
				"alamat" => $project[0]['alamat'],
				"luas" => $project[0]['luas'],
				"tahun" => $project[0]['tahun'],
				"biaya" => $project[0]['biaya'],
				"arsitek" => $project[0]['arsitek'],
				"deskripsi" => $project[0]['deskripsi'],
				"idpabrik" => $project[0]['idpabrik'],
				);
		$data['pabrik'] = $this->model_pabrik->getpabrik();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/project/edit_project',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_project()
	{
		$idproject = $_POST['idproject'];
		$idpabrik = $_POST['idpabrik'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$luas = $_POST['luas'];
		$tahun = $_POST['tahun'];
		$biaya = $_POST['biaya'];
		$arsitek = $_POST['arsitek'];
		$deskripsi = $_POST['deskripsi'];
		$data_update = array (
				'nama' => $nama,
				'alamat' => $alamat,
				'luas' => $luas,
				'biaya' => $tahun,
				'arsitek' => $arsitek,
				'biaya' => $biaya,
				'deskripsi' => $deskripsi,
				'idpabrik' => $idpabrik
			);
		$where = array('idproject' => $idproject);
		$res = $this->mymodel->update_data('project',$data_update,$where);
		redirect('admin/project/data_project');
		if($res>=1){
		redirect('admin/project/data_project');
		}
	}
	public function hapus_project($idproject)
	{
		$where = array('idproject' => $idproject);
		$res = $this->mymodel->deletedata('project',$where);
		redirect('admin/project/data_project');
	}

}
