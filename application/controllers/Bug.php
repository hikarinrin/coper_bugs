<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bug extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('table');
	}
	/*public function logincheck(){
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
  public function toplist($page = 1){
      if ($page > 1) {
        $start = ($page * 10) -10;
  } else {
        $start = 0;
  }

  $this->db->select('bug.title, ticket.type, status.status, bug.update_date,bug.bug_id');
  $this->db->from('bug');
  $this->db->join('bug_ticket_relation', 'bug.bug_id = bug_ticket_relation.bug_id');
  $this->db->join('ticket', 'bug_ticket_relation.ticket_id = ticket.ticket_id');
  $this->db->join('bug_status_relation', 'bug.bug_id = bug_status_relation.bug_id');
  $this->db->join('status', 'bug_status_relation.status_id = status.status_id');
  $this->db->limit(10, $start);
  $query = $this->db->get();
  $data['bugs'] = $query->result_array();

  $page_num = $this->db->get("bug")->num_rows();
 
    $data['pagination'] = ceil($page_num / 10);
    
  $this->load->view('toplist_b1',$data);
  }
		/*$ret = $this->session->userdata('loginfrag');
        if($ret=="1"){
            $this->load->model('bug_model');
            $ret=$this->bug_model->toplist();
            $data['buglist'] = $ret;
            /*$data['buglist'] = $ret['detail'];
            $data['ticket']=$ret['ticket'];
            $data['ticketlist']=$ret['ticketlist'];
            $data['importance']=$ret['importance'];
            $data['importancelist']=$ret['importancelist'];
            $data['status']=$ret['status'];
            $data['statuslist']=$ret['statuslist'];
            $this->load->view('toplist_b1',$data);
        //echo "ログインしています";
        }else if($ret==2){
            $this->load->model('bug_model');
            $ret=$this->bug_model->toplist();
            $data['buglist'] = $ret;
            /*$data['buglist'] = $ret['detail'];
            $data['ticket']=$ret['ticket'];
            $data['ticketlist']=$ret['ticketlist'];
            $data['importance']=$ret['importance'];
            $data['importancelist']=$ret['importancelist'];
            $data['status']=$ret['status'];
            $data['statuslist']=$ret['statuslist'];
            $this->load->view('toplist_b1',$data);
            }else{
            redirect(base_url()."login/login");
		exit;
		}
    }*/
    //b2：バグ作成
     public function add(){
         $this->load->model('bug_model');
         $ret=$this->bug_model->add();
         $data['ticket']=$ret['ticket'];
         $data['device']=$ret['device'];
         $data['importance']=$ret['importance'];
         $data['status']=$ret['status'];
         $this->load->view('add_b2',$data);
     }
    //b3：バグ作成完了
     public function done(){
        /*if ($bug_id == false) {
             redirect(base_url('bug/toplist'));
             exit;
         }*/
         $post=$this->input->post();
         $data['title']=$post['title'];
         $data['URL']=$post['URL'];
         $data['CACOO']=$post['CACOO'];
         $data['content']=$post['content'];
         $this->db->trans_start();
         $this->db->insert('bug',$data);
         $new_bug_id=$this->db->insert_id();
         foreach($post['ticket'] as $key2 => $val2){
             $data2['ticket_id']=$val2;
             $data2['bug_id']=$new_bug_id;
             $this->db->insert('bug_ticket_relation',$data2);
         }
         foreach($post['device'] as $key3 => $val3){
             $data3['device_id']=$val3;
             $data3['bug_id']=$new_bug_id;
             $this->db->insert('bug_device_relation',$data3);
         }
         foreach($post['importance'] as $key4 => $val4){
             $data4['importance_id']=$val4;
             $data4['bug_id']=$new_bug_id;
             $this->db->insert('bug_importance_relation',$data4);
         }
         foreach($post['status'] as $key5 => $val5){
             $data5['status_id']=$val5;
             $data5['bug_id']=$new_bug_id;
             $this->db->insert('bug_status_relation',$data5);
         }
         $result = $this->db->trans_complete();

         if ($result == TRUE) {
             $this->load->view('done_b3',$data);
         } else{
            redirect(base_url('bug/toplist'));
            exit;
         }
         /*$path = APPPATH . '../images';
         $config['upload_path']= $path;
         $config['allowed_types']='gif|jpg|png';
         $config['file_name'] = $new_bug_id . '.jpg';
         $this->load->library('upload', $config);
         $this->upload->do_upload('photo');
         $error = $this->upload->display_errors();
         $this->load->view('done_b3',$post);*/
     }
    //b4バグ詳細
     public function detail($bug_id=false){
         if ($bug_id == false) {
             redirect(base_url('bug/toplist'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->detail($bug_id);
         if($ret['detail']==false){
             redirect(base_url('bug/toplist'));
             exit;
         }
         $data['detail']=$ret['detail'];
         $data['ticket']=$ret['ticket'];
         $data['ticketlist']=$ret['ticketlist'];
         $data['device']=$ret['device'];
         $data['devicelist']=$ret['devicelist'];
         $data['importance']=$ret['importance'];
         $data['importancelist']=$ret['importancelist'];
         $data['status']=$ret['status'];
         $data['statuslist']=$ret['statuslist'];
         $data['image_path'] = base_url().'images/'.$bug_id.'.jpg';
         $this->load->view('detail_b4',$data);
     }

    //b5バグ編集
     public function edit($bug_id = false){
         if ($bug_id == false){
             redirect(base_url('bug/toplist'));
             eixt;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->edit($bug_id);
         if($ret['info']==false){
             redirect(base_url('bug/toplist'));
             exit;
         }
         $data['info'] =$ret['info'] ;
         $data['ticket']=$ret['ticket'];
         $data['ticketlist']=$ret['ticketlist'];
         $data['device']=$ret['device'];
         $data['devicelist']=$ret['devicelist'];
         $data['importance']=$ret['importance'];
         $data['importancelist']=$ret['importancelist'];
         $data['status']=$ret['status'];
         $data['statuslist']=$ret['statuslist'];
         $this->load->view('edit_b5',$data);
     }

    //b6バグ編集完了
     public function update(){
         $post=$this->input->post();
         $data['title']=$post['title'];
         $data['URL']=$post['URL'];
         $data['CACOO']=$post['CACOO'];
         $data['content']=$post['content'];
         $bug_id =$post['bug_id'];
         $this->db->trans_start();
         $this->db->where('bug_id',$bug_id);
         $this->db->delete('bug_ticket_relation');
         $this->db->set($data);
         $this->db->where('bug_id', $bug_id);
         $ret = $this->db->update('bug');
         foreach($post['ticket'] as $key =>$val){
             $data2['ticket_id']=$val;
             $data2['bug_id']=$bug_id;
             $this->db->insert('bug_ticket_relation',$data2);
         }
         $this->db->where('bug_id',$bug_id);
         $this->db->delete('bug_device_relation');
         $this->db->set($data);
         $this->db->where('bug_id', $bug_id);
         $ret = $this->db->update('bug');
         foreach($post['device'] as $key2 =>$val2){
             $data3['device_id']=$val2;
             $data3['bug_id']=$bug_id;
             $this->db->insert('bug_device_relation',$data3);
         }
         $this->db->where('bug_id',$bug_id);
         $this->db->delete('bug_importance_relation');
         $this->db->set($data);
         $this->db->where('bug_id', $bug_id);
         $ret = $this->db->update('bug');
         foreach($post['importance'] as $key3 =>$val3){
             $data4['importance_id']=$val3;
             $data4['bug_id']=$bug_id;
             $this->db->insert('bug_importance_relation',$data4);
         }
         $this->db->where('bug_id',$bug_id);
         $this->db->delete('bug_status_relation');
         $this->db->set($data);
         $this->db->where('bug_id', $bug_id);
         $ret = $this->db->update('bug');
         foreach($post['status'] as $key4 =>$val4){
             $data5['status_id']=$val4;
             $data5['bug_id']=$bug_id;
             $this->db->insert('bug_status_relation',$data5);
         }
         $update = $this->db->trans_complete();
         if($update==true){
             $this->load->view('update_b6');
         }else{
             redirect(base_url()."bug/edit/".$bug_id);
         }
     }

    //b7編集履歴詳細
    /*
     public function (){

     $this->load->view('');
     }
     */
    //b8編集履歴内容
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
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->userdetail($user_id);
         $data['userdetail']=$ret['userdetail'];
         if($ret==false){
             redirect(base_url('bug/user'));
             exit;
         }
         $this->load->view('userdetail_b13',$data);
     }
    //b14ユーザー編集
     public function useredit($user_id=false){
         if ($user_id == false) {
             redirect(base_url('bug/user'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->useredit($user_id);
         if($ret==false){
             redirect(base_url('bug/user'));
             exit;
         }
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
         $userupdate=$this->db->trans_complete();
         if($userupdate==true){
             $this->load->view('userupdate_b15');
         }
         else{
             redirect(base_url()."bug/useredit/".$user_id);
         }
     }
    //b16重要度一覧ページ
     public function importance(){
         $this->load->model('bug_model');
         $ret=$this->bug_model->importance();
         $data['importance']=$ret;
         $this->load->view('importance_b16',$data);
     }

    //b17重要度作成ページ
    public function importanceadd(){
     $this->load->view('importanceadd_b17');
     }

    //b18重要度完了ページ
     public function importancedone(){
         $post=$this->input->post();
         $data['level']=$post['level'];
         $this->db->trans_start();
         $this->db->insert('importance',$data);
         $this->db->trans_complete();
         $this->load->view('importancedone_b18',$post);
     }
    //b19重要度詳細ページ
     public function importancedetail($importance_id=false){
         if ($importance_id == false) {
             redirect(base_url('bug/importance'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->importancedetail($importance_id);
         if($ret==false){
             redirect(base_url('bug/importance'));
             exit;
         }
         $data['importancedetail']=$ret['importancedetail'];
         $this->load->view('importancedetail_b19',$data);
     }
    //b20重要度編集
     public function importanceedit($importance_id=false){
         if ($importance_id == false) {
             redirect(base_url('bug/importance'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->importanceedit($importance_id);
         if($ret==false){
             redirect(base_url('bug/importance'));
             exit;
         }
         $data['importanceedit']=$ret['importanceedit'];
         $this->load->view('importanceedit_b20',$data);
     }
    //b21重要度編集完了
     public function importanceupdate(){
         $post=$this->input->post();
         $data['level'] =$post['level'];
         $importance_id =$post['importance_id'];
         $this->db->trans_start();
         $this->db->set($data);
         $this->db->where('importance_id',$importance_id);
         $ret=$this->db->update('importance');
         $this->db->trans_complete();
         if($ret==true){
             $this->load->view('importanceupdate_b21');
         }
         else{
             redirect(base_url()."bug/importanceedit/".$importance_id);
        }
    }
    //b22ステータス一覧ページ
     public function status(){
         //$pull=2;
         $pull=10;
         $this->load->model('bug_model');
         $page = $this->input->get('page');
         //前回つまづいた
         /*var_dump($page);
         exit;*/
         $total=$this->bug_model->count_status();
         /*var_dump($total);
         exit;*/
         $ret=$this->bug_model->status($page,$pull);
         $data['status']=$ret;
         $this->load->view('status_b22',$data);
     }
    //b23ステータス追加ページ
    public function statusadd(){
     $this->load->view('statusadd_b23');
     }

    //b24ステータス完了ページ
     public function statusdone(){
         $post=$this->input->post();
         $data['status']=$post['status'];
         $this->db->trans_start();
         $this->db->insert('status',$data);
         $this->db->trans_complete();
         $this->load->view('statusdone_b24',$post);
     }

	//b25ステータス詳細ページ
     public function statusdetail($status_id=false){
         //function 関数名(引数=デフォルト値)。status_b22でforeachされているリンクには$status_idが指定されているためデフォルト値は取らない。
         if ($status_id == false) {
             redirect(base_url('bug/status'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->statusdetail($status_id);
         if($ret==false){
             redirect(base_url('bug/status'));
             exit;
         }
         $data['statusdetail']=$ret['statusdetail'];
         /*print "<pre>";
         var_dump($ret);
         exit;*/
         $this->load->view('statusdetail_b25',$data);
     }
    //b26ステータス編集
     public function statusedit($status_id=false){
         if ($status_id == false) {
             redirect(base_url('bug/status'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->statusedit($status_id);
         if($ret==false){
             redirect(base_url('bug/status'));
             exit;
         }
         /*var_dump($ret);
         exit;*/
         $data['statusedit']=$ret['statusedit'];
         $this->load->view('statusedit_b26',$data);
     }
    //b27ステータス編集完了
     public function statusupdate(){
         $post=$this->input->post();
         $data['status'] =$post['status'];
         $status_id =$post['status_id'];
         $this->db->trans_start();
         $this->db->set($data);
         $this->db->where('status_id',$status_id);
         $ret=$this->db->update('status');
         $this->db->trans_complete();
         if($ret==true){
             $this->load->view('statusupdate_b27');
         }
         else{
             redirect(base_url()."bug/statusedit/".$status_id);
        }
    }
    //b28：チケット種類一覧
     public function ticket(){
         $this->load->model('bug_model');
         $ret=$this->bug_model->ticket();
         $data['ticket']=$ret;
         $this->load->view('ticket_b28',$data);
     }

    //b29：チケット種類作成ページ
     public function ticketadd(){
         $this->load->view('ticketadd_b29');
     }

    //b30：チケット完了ページ
     public function ticketdone(){
         $post=$this->input->post();
         $data['type']=$post['type'];
         $this->db->trans_start();
         $this->db->insert('ticket',$data);
         $this->db->trans_complete();
         $this->load->view('ticketdone_b30',$post);
     }

    //b31：チケット詳細ページ
     public function ticketdetail($ticket_id=false){
         if ($ticket_id == false) {
             redirect(base_url('bug/ticket'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->ticketdetail($ticket_id);
         if($ret==false){
             redirect(base_url('bug/ticket'));
             exit;
         }
         $data['ticketdetail']=$ret['ticketdetail'];
         $this->load->view('ticketdetail_b31',$data);
     }

    //b32：チケット編集
     public function ticketedit($ticket_id=false){
         if ($ticket_id == false) {
             redirect(base_url('bug/ticket'));
             exit;
         }
         $this->load->model('bug_model');
         $ret=$this->bug_model->ticketedit($ticket_id);
         if($ret==false){
             redirect(base_url('bug/ticket'));
             exit;
         }
         $data['ticketedit']=$ret['ticketedit'];
         $this->load->view('ticketedit_b32',$data);
     }

    //b33：チケット編集完了
     public function ticketupdate(){
         $post=$this->input->post();
         $data['type'] =$post['type'];
         $ticket_id =$post['ticket_id'];
         $this->db->trans_start();
         $this->db->set($data);
         $this->db->where('ticket_id',$ticket_id);
         $ret=$this->db->update('ticket');
         $this->db->trans_complete();
         if($ret==true){
             $this->load->view('ticketupdate_b33');
         }
         else{
             redirect(base_url()."bug/ticketedit/".$ticket_id);
         }
     }
    //臨時：デバイス作成
    public function device(){
        $this->load->model('bug_model');
        $ret=$this->bug_model->device();
        $data['device']=$ret;
        $this->load->view('device',$data);
    }

    //臨時：device種類作成ページ
    public function deviceadd(){
        $this->load->view('deviceadd');
    }

    //臨時：device完了ページ
    public function devicedone(){
        $post=$this->input->post();
        $data['hard']=$post['hard'];
        $this->db->trans_start();
        $this->db->insert('device',$data);
        $this->db->trans_complete();
        $this->load->view('devicedone',$post);
    }


}
