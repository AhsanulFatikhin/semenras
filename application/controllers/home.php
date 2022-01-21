<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
         $this->load->library('session');
         $this->load->model('mymodel');
        
    }

	public function index()
	{
		$this->load->view('pages/header_pages');
		$this->load->view('pages/home_pages');
		$this->load->view('pages/footer_pages');
	}
	public function login()
	{
		$this->load->view('login');
		
	}
	public function proses_login(){
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$paswordx = $password;
		// $selected_user = $this->mymodel->login($nama,$password);

		// $login = mysql_query("select * from admin where nama='$nama' and password='$password'");
		// $cek = mysql_num_rows($login);
		// if($cek > 0){
		// 	session_start();
		// 	$_SESSION['nama'] = $nama;
		// 	$_SESSION['status'] = "login";
		// 	redirect('admin/pegawai/pegawai');
		// }
		// else{
		// 	 redirect('home/login');
		// }
		// $q = $this->db->query("select * from admin where nama='$nama' and password='$paswordx'");
		// if($q->num_rows() == 1){
		// 	$username = $q->row()->nama;
		$selected_user = $this->mymodel->login($nama,$paswordx);
        if($selected_user == null){
			
			redirect('home/login');
		}
		else{
			$this->session->set_userdata(array('User' => $selected_user));
			// $this->session->set_userdata('nama',$username);
			redirect('admin/pegawai/pegawai');
		}
        // if($selected_user == null){
        //      $this->session->set_flashdata('msg','<span class="text-danger">Oops! Your Username / Password invalid !!! </span>');
        //      echo '<script>alert("Username / password anda salah!");</script>';
        //      redirect('home/login');
        // }else{
        // 	$this->session->set_userdata(array('User' => $selected_user));
        //     redirect('admin/pegawai/pegawai');

        // }
	}
	public function logout($id)
	{
		$this->session->sess_destroy();
		redirect('home/login');
	}
	public function admin()
	{
		$current_user = $this->session->userdata('User');
		$data = $this->mymodel->getadmin();
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/admin/admin',array('data' => $data));
		$this->load->view('admin/footer_back');
		}
	}
	public function add_admin()
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/admin/add_admin');
		$this->load->view('admin/footer_back');
		}
	}
	public function insert_admin()
	{
		$nama = $_POST['nama'];
		$password = md5($_POST['password']);
		$data_insert = array (
				'nama' => $nama,
				'password' => $password
			);
		$res = $this->mymodel->insert_data('admin', $data_insert);
		redirect('home/admin');
	}
	public function edit_admin($idadmin)
	{
		$current_user = $this->session->userdata('User');
		if($current_user == null)
		{
			redirect('home/login');
		}
		else
		{
		$admin = $this->mymodel->getadmin("where idadmin = '$idadmin'");
		$data = array(
				"idadmin" => $admin[0]['idadmin'],
				"nama" => $admin[0]['nama'],
				"password" => $admin[0]['password'],
				);
		$this->load->view('admin/header_back',array('current_user' => $current_user ));
		$this->load->view('admin/admin/edit_admin',$data);
		$this->load->view('admin/footer_back');
		}
	}
	public function update_admin()
	{
		$idadmin = $_POST['idadmin'];
		$password = md5($_POST['password']);
		$nama = $_POST['nama'];
		$data_update = array (
				'nama' => $nama,
				'password' => $password
			);
		$where = array('idadmin' => $idadmin);
		$res = $this->mymodel->update_data('admin',$data_update,$where);
		redirect('home/admin');
		if($res>=1){
		redirect('home/admin');
		}
	}
	public function hapus_admin($idadmin)
	{
		$where = array('idadmin' => $idadmin);
		$res = $this->mymodel->deletedata('admin',$where);
		redirect('home/admin');
	}

}
