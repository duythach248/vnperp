<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanly_taikhoan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->authentication = $this->my_authentication->check();
		if(!isset($this->authentication['permissions']) || is_array($this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Truy Cập Module Tài Khoản'));
			redirect('home/index');
		}
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->model('Model_quanly_taikhoan');
	}
	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-taikhoan-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_taikhoan/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlytaikhoan(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Tài Khoản'));
			redirect('home/index');
		}
		if($this->input->post('submit1')){
			$checkbox = $this->input->post('checkbox');
		}
		if($this->input->post('submit2')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_taikhoan->updatenhanvien($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_taikhoan/quanlytaikhoan');
			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Tài Khoản'));
				redirect('quanly_taikhoan/quanlytaikhoan');		
			}
		}
		$data['list_quanly_taikhoan'] = $this->Model_quanly_taikhoan->view_taikhoan();
		$data['meta_title'] = 'Quản Lý Tài Khoản';
		$data['active'] = 'quanly-taikhoan-quanlytaikhoan';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_taikhoan/quanlytaikhoan';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
}
	

