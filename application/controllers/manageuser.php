<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model','member');

	}

	function getall(){
		$data['member'] = $this->member->_getmember();
		$this->load->view('show_all',$data);
	}

	function insert(){
		$postdata = array(
			'MemberID' => $this->input->post('u_Memberid'),
			'Username' => $this->input->post('u_Username'),
			'Password' => $this->input->post('u_Password'),
			'Name' => $this->input->post('u_Name'),
			'Tel' => $this->input->post('u_Tel'),
			'Email' => $this->input->post('u_email'),
			);
		$this->member->form_insert($postdata);


		$data['member'] = $this->member->_getmember();
		$this->load->view('show_all',$data);
	}

	function update(){
		$MemberID = $_POST['u_Memberid'];
		$Username = $_POST['u_Username'];
		$Password = $_POST['u_Password'];
		$Name = $_POST['u_Name'];
		$Tel = $_POST['u_Tel'];
		$Email = $_POST['u_email'];


		$this->member->_update_member($MemberID , $Username , $Password , $Name , $Tel ,  $Email);


		$data['member'] = $this->member->_getmember();
		$this->load->view('show_all',$data);

		}

	function delete_member_id(){
		$MemberID = $_POST['del_Memberid'];
		$this->member->delete_member_id($MemberID);

		$data['member'] = $this->member->_getmember();
		$this->load->view('show_all',$data);
	}
	function  Search_member_id(){
	    $keyword            =   $this->input->post('Search_Memberid');
		//$type = $this->input->post('type');
        $data['member']    =   $this->member->Search_member_id($keyword);
		//$data['member']    =   $this->member->Search_member_id($keyword,$type);
        $this->load->view('show_all',$data);
	}
}
