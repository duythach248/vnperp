<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanly_khachhang extends CI_Controller {
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
		$this->load->model('Model_quanly_khachhang');
	}
	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-khachhang-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_khachhang/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlykhachhang(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Khách Hàng'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_khachhang->xoa_khachhang($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_khachhang/quanlykhachhang');

			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Khách Hàng Cần Xóa'));
				redirect('quanly_khachhang/quanlykhachhang');
				
			}
		}
		$data['list_quanly_khachhang'] = $this->Model_quanly_khachhang->view_khachhang();
		$data['meta_title'] = 'Quản Lý Khách Hàng';
		$data['active'] = 'quanly-khachhang-quanlykhachhang';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_khachhang/quanlykhachhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function capnhatkhachhang($id = 0){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Khách Hàng'));
			redirect('home/index');
		}
		$quanly_khachhang = $this->Model_quanly_khachhang->get('*', array('id' => $id));
		if(!isset($quanly_khachhang) || count($quanly_khachhang) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Chuyên Mục Không Tồn Tại'));
			redirect('quanly_khachhang/quanlykhachhang');
		}
		if($this->input->post('submit')){
			$this->form_validation->set_rules('hovaten', 'Tên Khách Hàng', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('makhcn', 'Tên Khách Hàng', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('email', 'Website', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('diachi', 'Số Điện Thoại Liên Lạc', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('sdt', 'Số FAX', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_quanly_khachhang->capnhat_khachhang($quanly_khachhang['id']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_khachhang/quanlykhachhang');	
			}
		}
		$data['quanly_khachhang'] = $quanly_khachhang;
		$data['meta_title'] = 'Cập Nhật Khách Hàng';
		$data['dropdown_khachhang'] = $this->Model_quanly_khachhang->dropdown();
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_khachhang/capnhatkhachhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function themmoikhachhang(){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Danh Mục'));
			redirect('home/index');
		}
		if($this->input->post('submit2')){
			$this->form_validation->set_rules('hovaten', 'Tên Khách Hàng', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			$this->form_validation->set_rules('makhcn', 'Mã Khách Hàng', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('emailcanhan', 'Email Khách Hàng', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('diachicn', 'Địa Chỉ Khách Hàng', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('sdtcn', 'Số Điện Thoại', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_quanly_khachhang->add_khachhangcanhan();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_khachhang/quanlykhachhang');	
			}
		}
		if($this->input->post('submit1')){
			$this->form_validation->set_rules('tencty', 'Tên Công Ty', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			$this->form_validation->set_rules('diachicty', 'Tên Địa Chỉ', 'trim|required|min_length[4]|max_length[225]|alpha_numeric');
			$this->form_validation->set_rules('website', 'Website', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('sdtcty', 'Số Điện Thoại Công Ty', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('FAX', 'Số FAX', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run()){
				$flag = $this->Model_quanly_khachhang->add_khachhangcongty();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_khachhang/quanlykhachhang');
			}
		}
		$data['meta_title'] = 'Tạo Mới Khách Hàng';
		$data['active'] = 'quanly-khachhang-themmoikhachhang';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_khachhang/taomoikhachhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
}

