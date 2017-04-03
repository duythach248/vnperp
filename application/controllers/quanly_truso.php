<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanly_truso extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->authentication = $this->my_authentication->check();
		if(!isset($this->authentication['permissions']) || is_array($this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Truy Cập Module Trụ Sở'));
			redirect('home/index');
		}
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->model('Model_quanly_truso');
	}

	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-truso-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_truso/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlytruso(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Trụ Sở'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_truso->del_truso($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_truso/quanlytruso');
			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Trụ Sở'));
				redirect('quanly_truso/quanlytruso');
				
			}
		}
		$data['list_quanly_truso'] = $this->Model_quanly_truso->view_truso();
		$data['meta_title'] = 'Quản Lý Trụ Sở';
		$data['active'] = 'quanly-truso-quanlytruso';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_truso/quanlytruso';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function updatetruso($id = 0){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Trụ Sở'));
			redirect('home/index');
		}
		$quanly_truso = $this->Model_quanly_truso->get($id);
		if(!isset($quanly_truso) || count($quanly_truso) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Trụ Sở Không Tồn Tại'));
			redirect('quanly_truso/quanlytruso');
		}
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('matruso', 'Mã Trụ Sở', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('tentruso', 'Tên Trụ Sở', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('diachi', 'Địa Chỉ', 'trim|required|min_length[4]|max_length[225]');
			//$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			//if ($this->form_validation->run()){
				$flag = $this->Model_quanly_truso->edit_truso($quanly_truso['id']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_truso/quanlytruso');	
			//}
		}
		$data['quanly_truso'] = $quanly_truso;
		$data['meta_title'] = 'Sửa Trụ Sở';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_truso/suatruso';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function themmoitruso(){
		
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Trụ Sở'));
			redirect('home/index');
		}
		
		if($this->input->post('submit')){
			// $this->form_validation->set_rules('matruso', 'Mã Trụ Sở', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('tentruso', 'Tên Trụ Sở', 'trim|required|min_length[4]|max_length[225]');
			// $this->form_validation->set_rules('diachi', 'Địa Chỉ', 'trim|required|min_length[4]|max_length[225]');
			//$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			//if ($this->form_validation->run()){
				$flag = $this->Model_quanly_truso->add_truso();
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_truso/quanlytruso');			
			//}
		}
		$data['meta_title'] = 'Tạo Mới Trụ Sở';
		$data['active'] = 'quanly-truso-themmoitruso';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_truso/taomoitruso';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
}

