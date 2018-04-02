<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bug extends CI_Controller {
    public function __construct(){
    parent::__construct();
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->database();
	$this->load->library('session');
	}
	/*public function bugs(){
	$post = $this->input->post();
	$this->load->library('session');
	if($post['email']=="hikari.kudo@neo-career.co.jp"){
			$login['loginfrag']="1";
			$this->session->set_userdata($login);
	}	
	redirect(base_url()."mypage/index");
	exit;
	}*/
    
    //b1：バグ一覧ページ
    public function toplist(){
		$ret = $this->session->userdata('loginfrag');
		if($ret=="1"){
            $this->load->view('toplist_b1');
        //echo "ログインしています";
		}
		else{
		redirect(base_url()."login/login");
		exit;
		}
	}
    //b2
    /*
     public function (){
     
     $this->load->view('');
     }
    */
    //b3
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b4
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b5
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b6
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b7
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b8
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b9：マスタ設定
    public function master(){
        
        $this->load->view('master_b9');
    }
    //b10ユーザー一覧ページ
     public function user(){
         $this->load->model('bug_model');
         $ret=$this->bug_model->user();
         $data['user']=$ret;
         $this->load->view('user_b10',$data);
     }
    
    //b11ユーザー作成ページ
     public function useradd(){
     $this->load->view('useradd_b11');
     }
    //b12ユーザー完了ページ
     public function userdone(){
         $post=$this->input->post();
         $data['name']=$post['name'];
         $data['mail']=$post['mail'];
         $data['pass']=$post['pass'];
         $this->db->trans_start();
         $this->db->insert('user',$data);
         $this->db->trans_complete();
         $this->load->view('userdone_b12',$post);
     }
    //b13ユーザー詳細ページ
     public function userdetail($user_id=false){
         if ($user_id == false) {
             redirect(base_url('bug/user'));
             eixt;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->userdetail($user_id);
         $data['userdetail']=$ret['userdetail'];
         $this->load->view('userdetail_b13',$data);
     }
    //b14ユーザー編集
     public function useredit($user_id=false){
         if ($user_id == false) {
             redirect(base_url('bug/user'));
             eixt;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->useredit($user_id);
         $data['useredit']=$ret['useredit'];
         $this->load->view('useredit_b14',$data);
     }
    //b15ユーザー編集完了
     public function userupdate(){
         $post=$this->input->post();
         $data['name'] =$post['name'];
         $data['mail'] =$post['mail'];
         $data['pass'] =$post['pass'];
         $user_id =$post['user_id'];
         $this->db->trans_start();
         $this->db->set($data);
         $this->db->where('user_id',$user_id);
         $ret=$this->db->update('user');
         $this->db->trans_complete();
         if($ret==true){
             $this->load->view('userupdate_b15');
         }
         else{
             redirect(base_url()."bug/useredit/".$user_id);
         }
     }
    //b16重要度一覧ページ
     public function importance(){
         
         $this->load->view('importance_b16');
     }
    
    //b17
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b18
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b19
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b20
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b21
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b22ステータス一覧ページ
     public function status(){
     
         $this->load->view('status_b22');
     }
    //b23
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b24
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b24
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b25
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b26
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b27
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b28：チケット種類一覧
     public function ticket(){
     
         $this->load->view('ticket_b28');
     }
    //b29
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b30
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b31
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b32
    /*
     public function (){
     
     $this->load->view('');
     }
     */
    //b33
    /*
     public function (){
     
     $this->load->view('');
     }
     */
}
?>



