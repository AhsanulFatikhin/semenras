<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_background extends CI_Controller {

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
	public function Foto_background()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_foto_pabrik->getfotobg();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_background/foto_background',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_background/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
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
		$res = $this->mymodel->insert_data('foto_bg', $data_insert);
            redirect('admin/foto_background/foto_background');
        }
    }
	public function add_foto_background()
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_background/add_foto_background',array('error' => ' ' ));
		$this->load->view('admin/footer_back');
		}
	}
	public function hapus_foto_background($idfoto_bg)
	{
		$where = array('idfoto_bg' => $idfoto_bg);
		$res = $this->mymodel->deletedata('foto_bg',$where);
		redirect('admin/foto_background/foto_background');
	}



}
