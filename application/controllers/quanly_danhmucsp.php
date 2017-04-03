<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanly_danhmucsp extends CI_Controller {
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
		$this->load->model('Model_quanly_danhmucsp');
	}
	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-danhmucsp-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_danhmucsp/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlydanhmucsanpham(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Danh Mục'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_danhmucsp->del_danhmucsp($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_danhmucsp/quanlydanhmucsanpham');
			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Danh Mục'));
				redirect('quanly_danhmucsp/quanlydanhmucsanpham');		
			}
		}
		$data['list_quanly_danhmucsp'] = $this->Model_quanly_danhmucsp->view_danhmucsp();
		$data['meta_title'] = 'Quản Lý Danh Mục Sản Phẩm';
		$data['active'] = 'quanly-danhmucsp-quanlydanhmucsanpham';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_danhmucsp/quanlydanhmucsanpham';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function updatedmsp($stt = 0){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Danh Mục'));
			redirect('home/index');
		}
		$quanly_danhmucsp = $this->Model_quanly_danhmucsp->get($stt);
		if(!isset($quanly_danhmucsp) || count($quanly_danhmucsp) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Chuyên Mục Không Tồn Tại'));
			redirect('quanly_danhmucsp/quanlydanhmucsanpham');
		}
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('tendmsp', 'Tên Danh Mục',s 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('madmsp', 'Mã Danh Mục', 'trim|required|min_length[4]|max_length[225]');
			//$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			//if ($this->form_validation->run()){
				$flag = $this->Model_quanly_danhmucsp->edit_danhmucsp($quanly_danhmucsp['stt']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_danhmucsp/quanlydanhmucsanpham');	
			//}
		}
		$data['quanly_danhmucsp'] = $quanly_danhmucsp;
		$data['meta_title'] = 'Sửa Danh Mục Sản Phẩm';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_danhmucsp/updatedanhmucsp';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function themmoidanhmucsp(){
		
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Danh Mục'));
			redirect('home/index');
		}
		
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('tendmsp', 'Tên Danh Mục', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			// $this->form_validation->set_rules('madmsp', 'Mã Danh Mục', 'trim|required|min_length[4]|max_length[225]');
			//$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			//if ($this->form_validation->run()){
				$flag = $this->Model_quanly_danhmucsp->add_danhmucsp();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_danhmucsp/quanlydanhmucsanpham');
				
			//}
		}
		$data['meta_title'] = 'Tạo Mới Danh Mục Sản Phẩm';
		$data['active'] = 'quanly-danhmucsp-themmoidanhmucsp';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_danhmucsp/themmoidanhmucsp';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function xoadanhmucsp(){
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_danhmucsp->del_danhmucsp($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_danhmucsp/quanlydanhmucsanpham');
			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Danh Mục'));
				redirect('quanly_danhmucsp/quanlydanhmucsanpham');		
			}
		}
	}

}

