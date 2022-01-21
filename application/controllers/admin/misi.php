<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Misi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_profil','mymodel');
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function misi()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_profil->getmisi();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/misi/misi',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_misi()
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/misi/add_misi');
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_misi()
	{
		$misi = $_POST['misi'];
		$data_insert = array (
				'misi' => $misi
			);
		$res = $this->mymodel->insert_data('misi', $data_insert);
		redirect('admin/misi/misi');
	}
	public function edit_misi($idmisi)
	{
		$current_user = $this->session->userdata('User');
		$misi = $this->model_profil->getmisi("where idmisi = '$idmisi'");
		$data = array(
				"idmisi" => $misi[0]['idmisi'],
				"misi" => $misi[0]['misi'],
				);
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/misi/edit_misi',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_misi()
	{
		$idmisi = $_POST['idmisi'];
		$misi = $_POST['misi'];
		$data_update = array (
				'misi' => $misi
			);
		$where = array('idmisi' => $idmisi);
		$res = $this->mymodel->update_data('misi',$data_update,$where);
		if($res>=1){
		redirect('admin/misi/misi');
		}
	}
	public function hapus_misi($idmisi)
	{
		$where = array('idmisi' => $idmisi);
		$res = $this->mymodel->deletedata('misi',$where);
		redirect('admin/misi/misi');
	}

}
