<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_pabrik extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_pabrik','mymodel','model_foto_pabrik');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Foto_pabrik()
	{
		$data = $this->model_foto_pabrik->getfotopabrik();
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/Foto_pabrik/Foto_pabrik',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
   public function aksi_upload(){
        $config['upload_path']          = './assets/foto_pabrik/';
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
            $gambar = $data['raw_name']. $data['file_ext']; 
            // $foto = $_POST['foto'];
            $idpabrik = $_POST['idpabrik'];
            $data_insert = array (
				'foto' => $gambar,
				'idpabrik' => $idpabrik,		
			);
		$res = $this->mymodel->insert_data('foto_pabrik', $data_insert);
            redirect('admin/foto_pabrik/foto_pabrik');
        }
    }
	public function add_foto_pabrik()
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
		$this->load->view('admin/foto_pabrik/add_foto_pabrik',$data,array('error' => ' ' ));
		$this->load->view('admin/footer_back');
		}
	}
	public function hapus_foto_pabrik($idfoto_pabrik)
	{
		$where = array('idfoto_pabrik' => $idfoto_pabrik);
		$res = $this->mymodel->deletedata('foto_pabrik',$where);
		redirect('admin/foto_pabrik/foto_pabrik');
	}



}
