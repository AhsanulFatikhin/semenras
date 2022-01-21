<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_pabrik','mymodel','model_product');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function product()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_product->getproduct();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/product/product',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function data_product()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_product->getproduct();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/product/data_product',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_product()
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
		$this->load->view('admin/product/add_product',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_product()
	{
		$idpabrik = $_POST['idpabrik'];
		$nama = $_POST['nama'];
		$berat = $_POST['berat'];
		$dayarekat = $_POST['dayarekat'];
		$pengertian = $_POST['pengertian'];
		$deskripsi = $_POST['deskripsi'];
		$data_insert = array (
				'idpabrik' => $idpabrik,
				'nama' => $nama,
				'berat' => $berat,
				'dayarekat' => $dayarekat,
				'pengertian' => $pengertian,
				'deskripsi' => $deskripsi
			);
		$res = $this->mymodel->insert_data('product', $data_insert);
		redirect('admin/product/data_product');
	}
	public function edit_product($idproduct)
	{
		$current_user = $this->session->userdata('User');
		$product = $this->model_product->getproduct("where idproduct = '$idproduct'");
		$data = array(
				"idproduct" => $product[0]['idproduct'],
				"nama" => $product[0]['nama'],
				"berat" => $product[0]['berat'],
				"dayarekat" => $product[0]['dayarekat'],
				"pengertian" => $product[0]['pengertian'],
				"deskripsi" => $product[0]['deskripsi'],
				"idpabrik" => $product[0]['idpabrik'],
				);
		$data['pabrik'] = $this->model_pabrik->getpabrik();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/product/edit_product',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_product()
	{
		$idproduct = $_POST['idproduct'];
		$idpabrik = $_POST['idpabrik'];
		$nama = $_POST['nama'];
		$berat = $_POST['berat'];
		$dayarekat = $_POST['dayarekat'];
		$pengertian = $_POST['pengertian'];
		$deskripsi = $_POST['deskripsi'];
		$data_update = array (
				'idpabrik' => $idpabrik,
				'nama' => $nama,
				'berat' => $berat,
				'dayarekat' => $dayarekat,
				'pengertian' => $pengertian,
				'deskripsi' => $deskripsi
			);
		$where = array('idproduct' => $idproduct);
		$res = $this->mymodel->update_data('product',$data_update,$where);
		redirect('admin/product/data_product');
		if($res>=1){
		redirect('admin/product/data_product');
		}
	}
	public function hapus_product($idproduct)
	{
		$where = array('idproduct' => $idproduct);
		$res = $this->mymodel->deletedata('product',$where);
		redirect('admin/product/data_product');
	}

}
