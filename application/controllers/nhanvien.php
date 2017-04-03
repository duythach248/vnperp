<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhanvien extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->authentication = $this->my_authentication->check();
		if(!isset($this->authentication['permissions']) || is_array($this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Truy Cập Module Vai Trò'));
			redirect('home/index');
		}
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->model('Model_user');
		$this->load->model('Model_role');
	}

	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-nhanvien-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_nhansu/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlynhanvien(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Danh Mục'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_user->del_nhanvien($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('nhanvien/quanlynhanvien');

			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Chưa Chọn Danh Mục'));
				redirect('nhanvien/quanlynhanvien');
				
			}
		}
		$data['list_nhanvien'] = $this->Model_user->view_user();
		$data['meta_title'] = 'Quản Lý Nhân Viên';
		$data['active'] = 'quanly-nhanvien-quanlynhanvien';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_nhansu/quanlynhansuview';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function updated($id = 0){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Nhân Viên'));
			redirect('home/index');
		}
		$nhanvien = $this->Model_user->get('*', array('id' => $id));
		if(!isset($nhanvien) || count($nhanvien) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Chuyên Mục Không Tồn Tại'));
			redirect('nhanvien/quanlynhanvien');
		}
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('txtname', 'Họ Và Tên Nhân Viên', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('txtmsnv', 'Mã Số Nhân Viên', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('txtchoo', 'Chổ Ở Hiện Tại', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('txtqq', 'Quê Quán', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('txtcmnd', 'Chứng Minh Nhân Dân', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('txtemail', 'Email', 'trim|required|valid_email|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('txtngaysinh', 'Ngày Sinh', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('txtsdt', 'Số Điện Thoại', 'trim|required|min_length[4]|max_length[225]');
			//$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			//if ($this->form_validation->run()){
				$flag = $this->Model_user->edit_user($nhanvien['id']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('nhanvien/quanlynhanvien');	
			//}
		}
		$data['nhanvien'] = $nhanvien;
		$data['meta_title'] = 'Sửa Nhân Viên';
		$data['dropdown_roleid'] = $this->Model_role->dropdown();
		$data['dropdown_phongbanid'] = $this->Model_user->dropdownphongban();
		$data['active'] = 'quanly-nhanvien-editnhanvien';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_nhansu/editnhansu';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function _username($user_new = '', $user_old = ''){
		if(!empty($user_old)){
			$count = $this->Model_user->total(array(	
				'username !=' => $user_old,
				'username' => $user_new
			));
			if($count >= 1){
				$this->form_validation->set_message('_username', 'Người Dùng Đã Tồn Tại');
				return FALSE;
			}
		}
		else if(empty($user_old)){
			$count = $this->Model_user->total(array(
				'username' => $user_new
			));
			if($count >= 1){
				$this->form_validation->set_message('_username', 'Người Dùng Đã Tồn Tại');
				return FALSE;
			}
		}
	}
	
	public function themmoinhanvien(){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Danh Mục'));
			redirect('home/index');
		}
		
		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Tên Đăng Nhập', 'callback__username');
			// $this->form_validation->set_rules('txtname', 'Họ Và Tên Nhân Viên', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('txtmsnv', 'Mã Số Nhân Viên', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('txtchoo', 'Chổ Ở Hiện Tại', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('txtqq', 'Quê Quán', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('txtcmnd', 'Chứng Minh Nhân Dân', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('txtemail', 'Email', 'trim|required|valid_email|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('txtngaysinh', 'Ngày Sinh', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('txtsdt', 'Số Điện Thoại', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_user->add_nhanvien();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('nhanvien/quanlynhanvien');	
			}
		}
		$data['meta_title'] = 'Tạo Mới Nhân Viên';
		$data['dropdown_roleid'] = $this->Model_role->dropdown();
		$data['dropdown_phongbanid'] = $this->Model_user->dropdownphongban();
		$data['active'] = 'quanly-nhanvien-themmoinhanvien';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_nhansu/themmoinhansu';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
}

