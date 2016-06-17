<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{	
		$this->load->model('user_model');
		$session = $this->session->userdata('isLogin');
		$user = $this->session->userdata('username');
		$data['user'] = $this->user_model->userData($user);
		if($session == true)
		{
			$this->load->view('siswa/home', $data);
		}else
		redirect('login');
	}

	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}		              
}	
