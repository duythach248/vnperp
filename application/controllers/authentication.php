<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	
	public $authentication;
	
	public function __construct(){
		parent::__construct();
		$this->authentication = $this->my_authentication->check();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Model_user');
		$this->load->helper('string');
		
		
	}
	public function __destruct(){
		
	}
	public function login(){
		if(isset($this->authentication) && count($this->authentication) > 0) redirect ('home/index');
		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Tên Tài Khoản', 'trim|required');
			$this->form_validation->set_rules('password', 'Mật Khẩu', 'required|callback__authentication');
			$this->form_validation->set_error_delimiters('<div class="alert error"><span class="closebtn">&times;</span>', '</div>');
			if ($this->form_validation->run()){ //lay thong tin nguoi dung
				$http_user_agent = $_SERVER['HTTP_USER_AGENT'];
				$last_login = gmdate('Y-m-d H:i:s', time() + 7*3600);
				$username = trim($this->input->post('username'));
				$nhanvien = $this->Model_user->get('username, password, salt', array('username' => $username));
				$flag = $this->Model_user->updated(array('last_login' => $last_login, 'http_user_agent' => $http_user_agent), array('username' => $username));
				if($flag['type'] == 'successful'){
					$nhanvien['http_user_agent'] = $http_user_agent;
					$this->session->set_userdata('authentication', json_encode($nhanvien));
					$this->session->set_flashdata('message_flashdata', array('type' => 'successful','message' => 'Bạn Đã Đăng Nhập Thành Công'));
					redirect('home/index');
				}
			}
		}
		$data['meta_title'] = 'Đăng Nhập';
		$data['template'] = 'backend/authentication/login';
		$this->load->view('backend/layouts/login', isset($data)?$data:Null);
	}
	
	public function logout(){
		if(!isset($this->authentication) && count($this->authentication) == 0) redirect ('authentication/login');
		if(isset($_SESSION['authentication'])){
			unset($_SESSION['authentication']);
		}
		$this->session->unset_userdata('authentication');
		redirect('home/index');
	}
	
	public function _authentication($password = ''){
		$username = $this->input->post('username');
		$count = $this->Model_user->total(array('username' => $username));
		if($count == 0){
			$this->form_validation->set_message('_authentication', 'Tài Khoản Không Tồn Tại');
			return FALSE;
		}
		$nhanvien = $this->Model_user->get('username, password, salt', array('username' => $username));
		//$password_encode = md5(md5(md5($password).md5($nhanvien['salt'])));
		$password_encode = $password;
		if($nhanvien['password'] != $password_encode){
			$this->form_validation->set_message('_authentication', 'Mật Khẩu Không Đúng');
			return FALSE;
		}
		return TRUE;
	}
}

