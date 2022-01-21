<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('');
        
    }
	public function project()
	{
		{
		$this->load->view('pages/header_pages');
		$this->load->view('pages/project');
		$this->load->view('pages/footer_pages');
		}
	}
	
}
