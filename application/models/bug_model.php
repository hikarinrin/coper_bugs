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

}
?>
