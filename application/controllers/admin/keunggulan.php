<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keunggulan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_keunggulan','mymodel','model_product');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function keunggulan()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_keunggulan->getkeunggulan();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/keunggulan/keunggulan',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_keunggulan()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_keunggulan->getkeunggulan();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$data['product'] = $this->model_product->getproduct();
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/keunggulan/add_keunggulan',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_keunggulan()
	{
		$idproduk = $_POST['idproduct'];
		$nama = $_POST['nama'];
		$data_insert = array (
				'keunggulan' => $nama,
				'idproduk' => $idproduk
			);
		$res = $this->mymodel->insert_data('keunggulan', $data_insert);
		redirect('admin/keunggulan/keunggulan');
	}
	public function edit_keunggulan($idkeunggulan)
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$keunggulan = $this->model_keunggulan->getkeunggulan("where idkeunggulan = '$idkeunggulan'");
		$data = array(
				"idkeunggulan" => $keunggulan[0]['idkeunggulan'],
				"nama" => $keunggulan[0]['keunggulan'],
				"idproduk" => $keunggulan[0]['idproduk'],
				);
		$data['product'] = $this->model_product->getproduct();
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/keunggulan/edit_keunggulan',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_keunggulan()
	{
		$idkeunggulan = $_POST['idkeunggulan'];
		$idproduk = $_POST['idproduct'];
		$nama = $_POST['nama'];
		$data_update = array (
				'keunggulan' => $nama,
				'idproduk' => $idproduk
			);
		$where = array('idkeunggulan' => $idkeunggulan);
		$res = $this->mymodel->update_data('keunggulan',$data_update,$where);
		redirect('admin/keunggulan/keunggulan');
		if($res>=1){
		redirect('admin/keunggulan/keunggulan');
		}
	}
	public function hapus_keunggulan($idkeunggulan)
	{
		$where = array('idkeunggulan' => $idkeunggulan);
		$res = $this->mymodel->deletedata('keunggulan',$where);
		redirect('admin/keunggulan/keunggulan');
	}

}
