<?php 

class bug_model extends CI_Model{
	public function __construct(){
		//parent::__construct();
        }
    public function toplist(){
        $ret = $this->db->select('*')
                        ->from('bug')
                        ->get()->result_array();
        /*$ret['detail'] = $this->db->select('*')
         ->from('bug')
         ->where('bug_id',$bug_id)
         ->get()->result_array();
         $ret['ticket']=$this->db->select('*')
         ->from('bug_ticket_relation')
         ->where('bug_id',$bug_id)
         ->get()->result_array();
         $ret['ticketlist']=$this->db->select('*')
         ->from('ticket')
         ->get()->result_array();*/
        /*$ret['device']=$this->db->select('*')
         ->from('bug_device_relation')
         ->where('bug_id',$bug_id)
         ->get()->result_array();
         $ret['devicelist']=$this->db->select('*')
         ->from('device')
         ->get()->result_array();*/
        /*$ret['importance']=$this->db->select('*')
         ->from('bug_importance_relation')
         ->where('bug_id',$bug_id)
         ->get()->result_array();
         $ret['importancelist']=$this->db->select('*')
         ->from('importance')
         ->get()->result_array();
         $ret['status']=$this->db->select('*')
         ->from('bug_status_relation')
         ->where('bug_id',$bug_id)
         ->get()->result_array();
         $ret['statuslist']=$this->db->select('*')
         ->from('status')
         ->get()->result_array();*/
        return $ret;
    }
    public function add(){
        $ret['ticket'] = $this->db->select('*')
                                    ->from('ticket')
                                    ->get()->result_array();
        $ret['device'] = $this->db->select('*')
                                    ->from('device')
                                    ->get()->result_array();
        $ret['importance'] = $this->db->select('*')
                                    ->from('importance')
                                    ->get()->result_array();
        $ret['status'] = $this->db->select('*')
                                    ->from('status')
                                    ->get()->result_array();
        return $ret;
    }
    public function detail($bug_id){
        $res['detail'] = $this->db->select('*')
                                    ->from('bug')
                                    ->where('bug_id',$bug_id)
                                    ->get()->result_array();
        $ret['ticket']=$this->db->select('*')
                                    ->from('bug_ticket_relation')
                                    ->where('bug_id',$bug_id)
                                    ->get()->result_array();
        $ret['ticketlist']=$this->db->select('*')
                                    ->from('ticket')
                                    ->get()->result_array();
        $ret['device']=$this->db->select('*')
                                    ->from('bug_device_relation')
                                    ->where('bug_id',$bug_id)
                                    ->get()->result_array();
        $ret['devicelist']=$this->db->select('*')
                                    ->from('device')
                                    ->get()->result_array();
        $ret['importance']=$this->db->select('*')
                                    ->from('bug_importance_relation')
                                    ->where('bug_id',$bug_id)
                                    ->get()->result_array();
        $ret['importancelist']=$this->db->select('*')
                                    ->from('importance')
                                    ->get()->result_array();
        $ret['status']=$this->db->select('*')
                                    ->from('bug_status_relation')
                                    ->where('bug_id',$bug_id)
                                    ->get()->result_array();
        $ret['statuslist']=$this->db->select('*')
                                    ->from('status')
                                    ->get()->result_array();
        if(!empty($res['detail'] )){
            $ret['detail']=$res['detail'] ;
        }else{
            $ret['detail']=false;
        }
        return $ret;
    }
    public function edit($bug_id){
        $res['info']  = $this->db->select('*')
                                ->from('bug')
                                ->where('bug_id',$bug_id)
                                ->get()->result_array();
        $ret['ticketlist']=$this->db->select('*')
                                ->from('bug_ticket_relation')
                                ->where('bug_id',$bug_id)
                                ->get()->result_array();
        $ret['ticket']=$this->db->select('*')
                                ->from('ticket')
                                ->get()->result_array();
        $ret['devicelist']=$this->db->select('*')
                                ->from('bug_device_relation')
                                ->where('bug_id',$bug_id)
                                ->get()->result_array();
        $ret['device']=$this->db->select('*')
                                ->from('device')
                                ->get()->result_array();
        $ret['importancelist']=$this->db->select('*')
                                ->from('bug_importance_relation')
                                ->where('bug_id',$bug_id)
                                ->get()->result_array();
        $ret['importance']=$this->db->select('*')
                                ->from('importance')
                                ->get()->result_array();
        $ret['statuslist']=$this->db->select('*')
                                ->from('bug_status_relation')
                                ->where('bug_id',$bug_id)
                                ->get()->result_array();
        $ret['status']=$this->db->select('*')
                                ->from('status')
                                ->get()->result_array();
        if(!empty($res['info'] )){
            $ret['info']=$res['info'] ;
        }else{
            $ret['info']=false;
        }
        return $ret;
    }
	public function user(){
		$ret=$this->db->select('')
                        ->from('user')
                        ->get()->result_array();
		return $ret;
	}
    public function userdetail($user_id){
        $res['userdetail']=$this->db->select('*')
                                    ->from('user')
                                    ->where('user_id',$user_id)
                                    ->get()->result_array();
        if(!empty($res['userdetail'])){
            $ret['userdetail']=$res['userdetail'];
        }else{
            $ret=false;
        }
        return $ret;
    }
    public function useredit($user_id){
        $res['useredit']=$this->db->select('*')
                                    ->from('user')
                                    ->where('user_id',$user_id)
                                    ->get()->result_array();
        if(!empty($res['useredit'])){
            $ret['useredit']=$res['useredit'];
        }else{
            $ret=false;
        }
        return $ret;
    }
    public function importance(){
        $ret=$this->db->select('*')
                ->from('importance')
                ->get()->result_array();
        return $ret;
    }
    public function importancedetail($importance_id){
        $res['importancedetail']=$this->db->select('*')
                                        ->from('importance')
                                        ->where('importance_id',$importance_id)
                                        ->get()->result_array();
        if(!empty($res['importancedetail'])){
            $ret['importancedetail']=$res['importancedetail'];
        }else{
            $ret=false;
        }
        return $ret;
    }
    public function importanceedit($importance_id){
        $res['importanceedit']=$this->db->select('*')
                                        ->from('importance')
                                        ->where('importance_id',$importance_id)
                                        ->get()->result_array();
        if(!empty($res['importanceedit'])){
            $ret['importanceedit']=$res['importanceedit'];
        }else{
            $ret=false;
        }
        return $ret;
    }
    public function status($page=0,$pull=10){
        $page=$page-1;
        if($page<0){
            $page=0;
        }
        $from=$pull*$page;
        $ret=$this->db->select('*')
                    ->from('status')
                    ->limit($pull,$from)
                    ->get()->result_array();
        /*4/11講習：->limit(10,20)
        SELECT * FROM status LIMIT 20, 10
        20番目から10個取ってくる。つまりidが21-30のものを持ってくる。
        ->limit(取る個数,何番目の次から)
        */
        return $ret;
    }
    public function count_status(){
        $total = $this->db->count_all('status');
        return $total;
    }
    public function statusdetail($status_id){
        $res['statusdetail']=$this->db->select('*')
                            ->from('status')
                            ->where('status_id',$status_id)
                            ->get()->result_array();
        if(!empty($res['statusdetail'])){
            $ret['statusdetail']=$res['statusdetail'];
        }else{
            $ret=false;
        }
        return $ret;
    }
    public function statusedit($status_id){
        $res=$this->db->select('*')
                        ->from('status')
                        ->where('status_id',$status_id)
                        ->get()->result_array();
        /*print "<pre>";
        var_dump($res);
        exit;*/
        if(!empty($res)){
            /*4/11講習内容：empty()
             empty($res)
             空ならtrue
             !empty($res);
             空じゃなかったらtrue
             if(!empty($res)){
             空じゃないならここにくる
             } else {
             空ならここにくる
             }
             if(empty($res)){
             空ならここにくる
             } else {
             空じゃないならならここにくる
             }*/
             
            $ret['statusedit']=$res;
        }else{
            $ret=false;
        }
        /*print "<pre>";
        var_dump($ret);
        exit;*/
        return $ret;
    }
    public function ticket(){
        $ret=$this->db->select('*')
                    ->from('ticket')
                    ->get()->result_array();
        return $ret;
    }
    public function ticketdetail($ticket_id){
        $res['ticketdetail']=$this->db->select('*')
                                    ->from('ticket')
                                    ->where('ticket_id',$ticket_id)
                                    ->get()->result_array();
        if(!empty($res['ticketdetail'])){
            $ret['ticketdetail']=$res['ticketdetail'];
        }else{
            $ret=false;
        }
        return $ret;
    }
    public function ticketedit($ticket_id){
        $res['ticketedit']=$this->db->select('*')
                    ->from('ticket')
                    ->where('ticket_id',$ticket_id)
                    ->get()->result_array();
        if(!empty($res['ticketedit'])){
            $ret['ticketedit']=$res['ticketedit'];
        }else{
            $ret=false;
        }
        return $ret;
    }
    //臨時
    public function device(){
        $ret=$this->db->select('*')
        ->from('device')
        ->get()->result_array();
        return $ret;
    }
}
?>
