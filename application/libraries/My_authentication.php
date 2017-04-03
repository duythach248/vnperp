<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class My_authentication{
	
	public $CI;
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	public function check(){
		$authentication = $this->CI->session->userdata('authentication');
		if(!isset($authentication) || empty($authentication)) return NULL;
		$authentication = json_decode($authentication, TRUE);
		//kiem tra 
		$nhanvien = $this->CI->Model_user->get('id, username, roleid', array(
			'username' => $authentication['username'],
			'password' => $authentication['password'],
			'salt' => $authentication['salt'],
			'http_user_agent' => $authentication['http_user_agent']
		));
		if(!isset($nhanvien) || count($nhanvien) == 0){
			$this->session->unset_userdata('authentication');
			return NULL;
		}
		
		$nhanvien['permissions'] = $this->CI->Model_role->permissions('permissions', array('roleid' => $nhanvien['roleid']));
		unset($nhanvien['roleid']);
		return $nhanvien;
	}
}