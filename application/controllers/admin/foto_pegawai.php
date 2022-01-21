<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_pegawai extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_pegawai','mymodel','model_foto_pegawai');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Foto_pegawai()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_foto_pegawai->getfotopegawai();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/Foto_pegawai/Foto_pegawai',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_pegawai/';
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
            $data_insert = array (
				'foto' => $foto,
			);
		$res = $this->mymodel->insert_data('foto_pegawai', $data_insert);
            redirect('admin/foto_pegawai/foto_pegawai');
        }
    }
	public function add_foto_pegawai()
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_pegawai/add_foto_pegawai',array('error' => ' ' ));
		$this->load->view('admin/footer_back');
		}
	}
	public function hapus_foto_pegawai($idfoto_pegawai)
	{
		$where = array('idfoto_pegawai' => $idfoto_pegawai);
		$res = $this->mymodel->deletedata('foto_pegawai',$where);
		redirect('admin/foto_pegawai/foto_pegawai');
	}



}
