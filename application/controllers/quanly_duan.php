<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanly_duan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->authentication = $this->my_authentication->check();
		if(!isset($this->authentication['permissions']) || is_array($this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Truy Cập Quản Lý Dự Án'));
			redirect('home/index');
		}
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->model('Model_quanly_duan');
	}

	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-duan-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_duan/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlyduan(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Dự Án'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_duan->xoa_duan($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_duan/quanlyduan');
			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Dự Án Cần Xóa'));
				redirect('quanly_duan/quanlyduan');
			}
		}
		$data['list_quanly_duan'] = $this->Model_quanly_duan->view_duan();
		$data['meta_title'] = 'Quản Lý Dự Án';
		$data['active'] = 'quanly-duan-quanlyduan';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_duan/quanlyduan';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function themmoiduan(){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Dự Án'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$this->form_validation->set_rules('txttenduan', 'Tên Dự Án', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('txtmaduan', 'Mã Dự Án', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_quanly_duan->add_duan();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_duan/quanlyduan');
			}		
		}
		$data['meta_title'] = 'Tạo Mới Dự Án';
		$data['active'] = 'quanly-duan-themmoiduan';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_duan/taomoiduan';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function capnhatduan($id = 0){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Dự Án'));
			redirect('home/index');
		}
		$quanly_duan = $this->Model_quanly_duan->getduan('*', array('id' => $id));
		if(!isset($quanly_duan) || count($quanly_duan) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Chuyên Mục Không Tồn Tại'));
			redirect('quanly_duan/quanlydanhmucsanpham');
		}
		if($this->input->post('submit')){
			$this->form_validation->set_rules('txttenduan', 'Tên Dự Án', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('txtmaduan', 'Mã Dự Án', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_quanly_duan->capnhat_duan($quanly_duan['id']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_duan/quanlyduan');	
			}
		}
		$data['list_quanly_duan'] = $this->Model_quanly_duan->getchitiet($id);
		$data['quanly_duan'] = $quanly_duan;
		$data['meta_title'] = 'Cập Nhật Dự Án';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_duan/capnhatduan';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function xoachitietduan($id = 0){
		$chitiet_duan = $this->Model_quanly_duan->getchitietduan('*', array('id' => $id));
		if (isset($chitiet_duan['id'])) {
			$quanly_duan = $this->Model_quanly_duan->getduan('*', array('id' => $chitiet_duan['maduan']));
			$flag = $this->Model_quanly_duan->deletechitietduan(array('id' => $chitiet_duan['id']));
			$this->session->set_flashdata('message_flashdata', $flag);
			redirect('quanly_duan/capnhatduan/'.$quanly_duan['id']);
		} else {
			redirect('quanly_duan/quanlyduan');
		}
	}
	
	public function getkhachhang()
	{
		$resultkh = $this->db->get('khachhang');
		echo json_encode($resultkh->result());
	}
	
	public function getsanpham()
	{
		$resultsp = $this->db->get('sanpham');
		echo json_encode($resultsp->result());
	}
	
}

