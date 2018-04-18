<?php 

class bug_model extends CI_Model{
	public function __construct(){
		//parent::__construct();
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
    public function detail($bug_id){
        $ret['detail'] = $this->db->select('*')
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
        return $ret;
    }
    public function edit($bug_id){
        $ret['info']  = $this->db->select('*')
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
        return $ret;
    }
    
    
	public function user(){
		$ret=$this->db->select('')
				->from('user')
				->get()->result_array();
		return $ret;
	}
    public function userdetail($user_id){
        $ret['userdetail']=$this->db->select('*')
                            ->from('user')
                            ->where('user_id',$user_id)
                            ->get()->result_array();
        return $ret;
    }
    public function useredit($user_id){
        $ret['useredit']=$this->db->select('*')
                                    ->from('user')
                                    ->where('user_id',$user_id)
                                    ->get()->result_array();
        return $ret;
    }
    public function importance(){
        $ret=$this->db->select('*')
                ->from('importance')
                ->get()->result_array();
        return $ret;
    }
    public function importancedetail($importance_id){
        $ret['importancedetail']=$this->db->select('*')
                            ->from('importance')
                            ->where('importance_id',$importance_id)
                            ->get()->result_array();
        return $ret;
    }
    public function importanceedit($importance_id){
        $ret['importanceedit']=$this->db->select('*')
                                    ->from('importance')
                                    ->where('importance_id',$importance_id)
                                    ->get()->result_array();
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
        return $ret;
    }
    public function count_status(){
        $total = $this->db->count_all('status');
        return $total;
    }
    public function statusdetail($status_id){
        $ret['statusdetail']=$this->db->select('*')
                            ->from('status')
                            ->where('status_id',$status_id)
                            ->get()->result_array();
        return $ret;
    }
    public function statusedit($status_id){
        $res=$this->db->select('*')
                      ->from('status')
                      ->where('status_id',$status_id)
                       ->get()->result_array();
        if(!empty($res)){
	$ret['statusedit']=$res;	
	}else{
	$ret=false;
	}
	//var_dump($res);
	//exit;
	//$ret['statusedit']=$res;
	return $ret;
    }
    public function ticket(){
        $ret=$this->db->select('*')
                    ->from('ticket')
                    ->get()->result_array();
        return $ret;
    }
    public function ticketdetail($ticket_id){
        $ret['ticketdetail']=$this->db->select('*')
                                    ->from('ticket')
                                    ->where('ticket_id',$ticket_id)
                                    ->get()->result_array();
        return $ret;
    }
    public function ticketedit($ticket_id){
        $ret['ticketedit']=$this->db->select('*')
                                    ->from('ticket')
                                    ->where('ticket_id',$ticket_id)
                                    ->get()->result_array();
        return $ret;
    }
    public function device(){
        $ret=$this->db->select('*')
        ->from('device')
        ->get()->result_array();
        return $ret;
    }
}
?>
