<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function _getmember(){
			
			$result = $this->db->get('member');
			return $result;
		}


		function form_insert($data){
			$this->db->insert('member',$data);

		}

		function _update_member($MemberID , $Username , $Password , $Name , $Tel ,  $Email) {
			$result = $this->db->where('MemberID',$MemberID)
									 ->set('Username',$Username)
									 ->set('Password',$Password)
									 ->set('Name',$Name)
									 ->set('Tel',$Tel)
									 ->set('Email',$Email)
									 ->update('member');
				 return $result;
		}

		function delete_member_id($MemberID){
			$this->db->where ('MemberID',$MemberID);
			$this->db->delete('member');
			
		}
		function Search_member_id($keyword){
			//function Search_member_id($keyword,$type){
		 $this->db->like('MemberID',$keyword);
		 //$this->db->like($type,$keyword){
        $result  =   $this->db->get('member');
        	 return $result;
		}
}

