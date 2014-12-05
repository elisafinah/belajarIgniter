<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class C_login extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}
	
	function index(){
		$this->load->view('login/index');
	}
	
	function cek_login(){
		if($_POST){
			$this->form_validation->set_rules('username','username'.'required|trim|xss_clean');
			$this->form_validation->set_rules('password','password'.'required|trim|xss_clean');
			
			if($this->form_validation->run() == FALSE){
				redirect('');
			}
			
			$username = $this->input->post('username');
			$password = $this->encrypt->sha1($this->input->post('password'));
			
			$login = $this->m_login->login("where username = '$username' and password= '$password'")->result_array();
			if($login != NULL)
			{
				$data = array(
					'username'		=> $login[0]['username'],
					'password'		=> $login[0]['password'],
					
				);
				$this->session->set_userdata('login',$data);
				redirect('admin');
			}
			
			else{
				echo "Salah Bu";
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
		