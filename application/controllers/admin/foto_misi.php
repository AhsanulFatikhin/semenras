<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class foto_misi extends CI_Controller {

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
	public function foto_misi()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_profil->getfotomisi();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_misi/foto_misi',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_misi/';
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
            $idmisi = $_POST['idmisi'];
            $data_insert = array (
				'foto' => $foto,
				'idmisi' => $idmisi,
			);
		$res = $this->mymodel->insert_data('foto_misi', $data_insert);
            redirect('admin/foto_misi/foto_misi');
        }
    }
	public function add_foto_misi()
	{
		$current_user = $this->session->userdata('User');
		$data['misi'] = $this->model_profil->getmisi();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_misi/add_foto_misi',$data,array('error' => ' ' ));
		$this->load->view('admin/footer_back');
		}
	}
	public function hapus_foto_misi($idfoto_misi)
	{
		$where = array('idfoto_misi' => $idfoto_misi);
		$res = $this->mymodel->deletedata('foto_misi',$where);
		 redirect('admin/foto_misi/foto_misi');
	}



}
