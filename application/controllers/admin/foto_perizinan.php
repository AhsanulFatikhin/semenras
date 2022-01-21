<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class foto_perizinan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_profil','mymodel','model_foto_perizinan');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function foto_perizinan()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_foto_perizinan->getfotoperizinan();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_perizinan/foto_perizinan',array('data' => $data));
		$this->load->view('admin/footer_back');
	}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_perizinan/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        }else{
        	$data = $this->upload->data();
            $foto = base_url("assets/foto_perizinan/". $data['raw_name']. $data['file_ext']); 
            // $foto = $_POST['foto'];
            $idprofil = $_POST['idprofil'];
            $data_insert = array (
				'foto' => $foto,
				'idprofil' => $idprofil	,		
			);
		$res = $this->mymodel->insert_data('foto_perizinan', $data_insert);
            redirect('admin/foto_perizinan/foto_perizinan');
        }
    }
	public function add_foto_perizinan()
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
		$this->load->view('admin/foto_perizinan/add_foto_perizinan',$data,array('error' => ' ' ));
		$this->load->view('admin/footer_back');
	}
	}
	public function hapus_foto_perizinan($idfoto_perizinan)
	{
		$where = array('idfoto_perizinan' => $idfoto_perizinan);
		$res = $this->mymodel->deletedata('foto_perizinan',$where);
		redirect('admin/foto_perizinan/foto_perizinan');
	}



}
