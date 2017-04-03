<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->authentication = $this->my_authentication->check();
		if(!isset($this->authentication['permissions']) || is_array($this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Truy Cập Module Vai Trò'));
			redirect('home/index');
		}
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->helper(array('url'));
		$this->load->model('Model_role');
	}

	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-role-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/role/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlyrole(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Danh Mục'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_role->del_role($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('role/quanlyrole');
			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Chưa Chọn Danh Mục'));
				redirect('role/quanlyrole');
				
			}
		}
		$data['list_role'] = $this->Model_role->view();
		$data['meta_title'] = 'Quản Lý Quyền';
		$data['active'] = 'quanly-role-quanlyrole';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/role/quanlyrole';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function updatedrole($id = 0){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Danh Mục'));
			redirect('home/index');
		}
		$role = $this->Model_role->get($id);
		if(!isset($role) || count($role) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Chuyên Mục Không Tồn Tại'));
			redirect('role/quanlyrole');
		}
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('description', 'Mô Tả Vai Trò', 'trim');
			// $this->form_validation->set_rules('title', 'Tên Vai Trò', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_role->edit_role($role['id']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('role/quanlyrole');	
			}
		}
		else {
			$data['permissions_post'] = $this->Model_role->permissions('permissions', array('roleid' => $role['id']));
		}
		
		
		$data['role'] = $role;
		$data['meta_title'] = 'Sửa Quyền';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/role/updaterole';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function themmoirole(){
		
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Danh Mục'));
			redirect('home/index');
		}
		
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('description', 'Mô Tả Vai Trò', 'trim');
			// $this->form_validation->set_rules('title', 'Tên Vai Trò', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_role->add_role();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('role/quanlyrole');
				
			}
		}
		$data['meta_title'] = 'Tạo Mới Quyền';
		$data['active'] = 'quanly-role-themmoirole';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/role/themmoirole';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
}

