<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_project extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_project','mymodel','model_pabrik');
        
    }
	public function detail_project($idproject)
	{
		$project = $this->model_project->getproject("where idproject = '$idproject'");
		$data = array(
				"idproject" => $project[0]['idproject'],
				"nama" => $project[0]['nama'],
				"alamat" => $project[0]['alamat'],
				"luas" => $project[0]['luas'],
				"tahun" => $project[0]['tahun'],
				"biaya" => $project[0]['biaya'],
				"arsitek" => $project[0]['arsitek'],
				"deskripsi" => $project[0]['deskripsi'],
				"idpabrik" => $project[0]['idpabrik'],
				);	
		$data['foto_project'] = $this->model_foto_project->getfotoproject();
		$this->load->view('pages/header_pages');
		$this->load->view('pages/detail_project',$data);
		$this->load->view('pages/footer_pages');
		
	}
	

}
