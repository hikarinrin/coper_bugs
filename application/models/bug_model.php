<?php 

class bug_model extends CI_Model{
	public function __construct(){
		//parent::__construct();
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

}
?>
