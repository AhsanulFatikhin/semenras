<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

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
	public function visi()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->model_profil->getvisi();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/visi/visi',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_visi()
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/visi/add_visi');
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_visi()
	{
		$visi = $_POST['visi'];
		$data_insert = array (
				'visi' => $visi
			);
		$res = $this->mymodel->insert_data('visi', $data_insert);
		redirect('admin/visi/visi');
	}
	public function edit_visi($idvisi)
	{
		$current_user = $this->session->userdata('User');
		$visi = $this->model_profil->getvisi("where idvisi = '$idvisi'");
		$data = array(
				"idvisi" => $visi[0]['idvisi'],
				"visi" => $visi[0]['visi'],
				);
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/visi/edit_visi',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_visi()
	{
		$idvisi = $_POST['idvisi'];
		$visi = $_POST['visi'];
		$data_update = array (
				'visi' => $visi
			);
		$where = array('idvisi' => $idvisi);
		$res = $this->mymodel->update_data('visi',$data_update,$where);
		redirect('admin/visi/visi');
		if($res>=1){
		redirect('admin/visi/visi');
		}
	}
	public function hapus_visi($idvisi)
	{
		$where = array('idvisi' => $idvisi);
		$res = $this->mymodel->deletedata('visi',$where);
		redirect('admin/visi/visi');
	}

}
