<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_produk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('model_project','mymodel','model_pabrik');
        
    }

	public function detail_produk($idproduct)
	{
		$product = $this->model_product->getproduct("where idproduct = '$idproduct'");
		$data = array(
				"idproduct" => $product[0]['idproduct'],
				"nama" => $product[0]['nama'],
				"berat" => $product[0]['berat'],
				"dayarekat" => $product[0]['dayarekat'],
				"idpabrik" => $product[0]['idpabrik'],
				);
		$this->load->view('pages/header_pages');
		$this->load->view('pages/detail_produk',$data);
		$this->load->view('pages/footer_pages');
	}
	

}
