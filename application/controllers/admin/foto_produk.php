<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class foto_produk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_product','mymodel','model_foto_produk');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function foto_produk()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_foto_produk->getfotoproduk();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_produk/foto_produk',array('data' => $data));
		$this->load->view('admin/footer_back');
	}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_produk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 10024;
        $config['max_height']           = 7068;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        }else{
        	$data = $this->upload->data();
            $foto = $data['raw_name']. $data['file_ext']; 
            // $foto = $_POST['foto'];
            $idproduct = $_POST['idproduct'];
            $data_insert = array (
				'foto' => $foto,
				'idproduct' => $idproduct,
			);
		$res = $this->mymodel->insert_data('foto_product', $data_insert);
            redirect('admin/foto_produk/foto_produk');
        }
    }
	public function add_foto_produk()
	{
		$current_user = $this->session->userdata('User');
		$data['product'] = $this->model_product->getproduct();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_produk/add_foto_produk',$data,array('error' => ' ' ));
		$this->load->view('admin/footer_back');
	}
	}
	public function hapus_foto_produk($idfoto_product)
	{
		$where = array('idfoto_product' => $idfoto_product);
		$res = $this->mymodel->deletedata('foto_product',$where);
		redirect('admin/foto_produk/foto_produk');
	}



}
