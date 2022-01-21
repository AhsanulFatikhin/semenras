<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_project extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_project','mymodel','model_foto_project');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function foto_project()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_foto_project->getfotoproject();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_project/foto_project',array('data' => $data));
		$this->load->view('admin/footer_back');
	}
	}
    public function aksi_upload(){
        $config['upload_path']          = './assets/foto_project/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000024;
        $config['max_height']           = 170068;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        }else{
        	$data = $this->upload->data();
            $foto = $data['raw_name']. $data['file_ext']; 
            // $foto = $_POST['foto'];
            $idproject = $_POST['idproject'];
            $data_insert = array (
				'foto' => $foto,
				'idproject' => $idproject,
			);
		$res = $this->mymodel->insert_data('foto_project', $data_insert);
            redirect('admin/foto_project/foto_project');
        }
    }
	public function add_foto_project()
	{
		$current_user = $this->session->userdata('User');
		$data['project'] = $this->model_project->getproject();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/foto_project/add_foto_project',$data,array('error' => ' ' ));
		$this->load->view('admin/footer_back');
	}
	}
	public function edit_foto_project($idfoto_project)
	{
		$foto_project = $this->model_foto_project->getfotoproject("where idfoto_project = '$idfoto_project'");
		$data = array(
				"idfoto_project" => $foto_project[0]['idfoto_project'],
				"foto" => $foto_project[0]['foto'],
				"idproject" => $foto_project[0]['idproject'],
				);
		$data['project'] = $this->model_project->getproject();
		$this->load->view('admin/header_back');
		$this->load->view('admin/foto_project/edit_foto_project',$data);
		$this->load->view('admin/footer_back');
	}
	public function update_foto_project()
	{
		$config['upload_path']          = './assets/foto_project/';
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
            $idfoto_project = $_POST['idfoto_project'];
            $idproject = $_POST['idproject'];
            $data_update = array (
				'foto' => $foto,
				'idproject' => $idproject,
			);
		$where = array('idfoto_project' => $idfoto_project);
		$res = $this->mymodel->update_data('foto_project',$data_update,$where);
		redirect('admin/foto_project/foto_project');
		if($res>=1){
		redirect('admin/foto_project/foto_project');
		}
	}
	}
	public function hapus_foto_project($idfoto_project)
	{
		$where = array('idfoto_project' => $idfoto_project);
		$res = $this->mymodel->deletedata('foto_project',$where);
		redirect('admin/foto_project/foto_project');
	}



}
