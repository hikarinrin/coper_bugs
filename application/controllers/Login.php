<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->database();

	}

  public function login()
	{
		$this->load->view('welcome_message');
	}
	
	public function bugs()
	{
	$post = $this->input->post();
	$this->load->library('session');
	if($post['email']=="hikari.kudo@neo-career.co.jp"){
			$login['loginfrag']="1";
			$this->session->set_userdata($login);
	}	
	redirect(base_url()."bug/toplist");
	exit;
	}
}
?>
