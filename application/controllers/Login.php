<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
	}

	public function index(){
		$this->login();
    }

    public function login(){
		$this->load->view('login/login');
	}
	
	public function logincheck(){
        $post = $this->input->post();
        $this->load->library('session');
        if($post['email']=="hikari.kudo@neo-career.co.jp"){
			$login['loginfrag']="1";
			$this->session->set_userdata($login);
        }
        if($post['email']=="hayami.meguro@neo-career.co.jp"){
            $login['loginfrag']="2";
            $this->session->set_userdata($login);
        }
        redirect(base_url()."bug/toplist");
        exit;
    }
}
?>
