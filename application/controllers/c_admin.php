<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin extends CI_Controller {
	
	
	function __construct(){
		parent::__construct();

	if($this->session->userdata('login') != TRUE)
		{
			redirect('login');
		}
	}
	
	function index(){
		$this->load->view('admin/index');
	}
}
