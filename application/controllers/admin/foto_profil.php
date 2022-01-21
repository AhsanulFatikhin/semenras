<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_profil extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_profil','mymodel','model_foto_profil');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Foto_profil()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_foto_profil->getfotoprofil();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/Foto_profil/Foto_profil',array('data' => $data));
		$this->load->view('admin/footer_back');
	}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_profil/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
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
            $idprofil = $_POST['idprofil'];
            $data_insert = array (
				'foto' => $foto,
				'idprofil' => $idprofil	,		
			);
		$res = $this->mymodel->insert_data('foto_profil', $data_insert);
            redirect('admin/foto_profil/foto_profil');
        }
    }
	public function add_foto_profil()
	{
		$current_user = $this->session->userdata('User');
		$data['profil'] = $this->model_profil->getprofil();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_profil/add_foto_profil',$data,array('error' => ' ' ));
		$this->load->view('admin/footer_back');
	}
	}
	public function hapus_foto_profil($idfoto_profil)
	{
		$where = array('idfoto_profil' => $idfoto_profil);
		$res = $this->mymodel->deletedata('foto_profil',$where);
		redirect('admin/foto_profil/foto_profil');
	}



}
