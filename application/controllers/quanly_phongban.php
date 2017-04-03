<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanly_phongban extends CI_Controller {
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
		$this->load->model('Model_quanly_phongban');
		$this->load->model('Model_quanly_truso');
	}
	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-phongban-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_phongban/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlyphongban(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Phòng Ban'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_phongban->del_phongban($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_phongban/quanlyphongban');

			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Phòng Ban'));
				redirect('quanly_phongban/quanlyphongban');
				
			}
		}
		$data['list_quanly_phongban'] = $this->Model_quanly_phongban->view_phongban();
		$data['meta_title'] = 'Quản Lý Phòng Ban';
		$data['active'] = 'quanly-phongban-quanlyphongban';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_phongban/quanlyphongban';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function capnhatphongban($id = 0){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Phòng Ban'));
			redirect('home/index');
		}
		$quanly_phongban = $this->Model_quanly_phongban->get('*', array('id' => $id));
		if(!isset($quanly_phongban) || count($quanly_phongban) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Chuyên Mục Không Tồn Tại'));
			redirect('quanly_phongban/quanlyphongban');
		}
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('tenpb', 'Tên Phòng Ban', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('mapb', 'Mã Phòng Ban', 'trim|required|min_length[4]|max_length[225]');
			//$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			//if ($this->form_validation->run()){
				$flag = $this->Model_quanly_phongban->edit_phongban($quanly_phongban['id']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_phongban/quanlyphongban');	
			//}
		}
		$data['quanly_phongban'] = $quanly_phongban;
		$data['meta_title'] = 'Sửa Phòng Ban';
		$data['authentication'] = $this->authentication;
		$data['dropdown_trusoid'] = $this->Model_quanly_truso->dropdown();
		$data['template'] = 'backend/quanly_phongban/capnhatphongban';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function themmoiphongban(){
		
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Phòng Ban'));
			redirect('home/index');
		}
		
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('mapb', 'Mã Phòng Ban', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('tenpb', 'Tên Phòng Ban', 'trim|required|min_length[4]|max_length[225]');
			//$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			//if ($this->form_validation->run()){
				$flag = $this->Model_quanly_phongban->add_phongban();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_phongban/quanlyphongban');
				
			//}
		}
		$data['meta_title'] = 'Tạo Mới Phòng Ban';
		$data['active'] = 'quanly-phongban-themmoiphongban';
		$data['dropdown_trusoid'] = $this->Model_quanly_truso->dropdown();
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_phongban/taomoiphongban';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
}

