<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_header_mobile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('mymodel','model_foto_pabrik');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Foto_header_mobile()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_foto_pabrik->getfotoheadermobile();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_header_mobile/foto_header_mobile',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_logo_header_mobile/';
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
		$res = $this->mymodel->insert_data('foto_header_mobile', $data_insert);
            redirect('admin/foto_header_mobile/foto_header_mobile');
        }
    }
	public function add_foto_header_mobile()
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_header_mobile/add_foto_header_mobile',array('error' => ' ' ));
		$this->load->view('admin/footer_back');
		}
	}
	public function hapus_foto_header_mobile($idfoto_header_mobile)
	{
		$where = array('idfoto_header_mobile' => $idfoto_header_mobile);
		$res = $this->mymodel->deletedata('foto_header_mobile',$where);
		redirect('admin/foto_header_mobile/foto_header_mobile');
	}



}
