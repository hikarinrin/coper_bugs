<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {


	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->database();
	$this->load->library('session');
	}

	/*public function bugs()
	{
	$post = $this->input->post();
	$this->load->library('session');
	if($post['email']=="hikari.kudo@neo-career.co.jp"){
			$login['loginfrag']="1";
			$this->session->set_userdata($login);
	}	
	redirect(base_url()."mypage/index");
	exit;
	}*/

	public function index(){
		$ret = $this->session->userdata('loginfrag');
		if($ret=="1"){
		echo "ログインしています";
		}
		else{
		redirect(base_url()."login/login");
		exit;
		}	
	}

}
?>



