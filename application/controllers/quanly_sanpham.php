<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quanly_sanpham extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array("form", "url"));
		$this->authentication = $this->my_authentication->check();
		if(!isset($this->authentication['permissions']) || is_array($this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Truy Cập Module Vai Trò'));
			redirect('home/index');
		}
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->model('Model_quanly_sanpham');
	}

	public function index()
	{
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'quanly-sanpham-homepage';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_sanpham/index';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlysanpham(){
		if(in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Xem Danh Mục'));
			redirect('home/index');
		}
		if($this->input->post('submit')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_sanpham->del_sanpham($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_sanpham/quanlysanpham');
			}
			else {
				$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => ' Bạn Chưa Chọn Danh Mục'));
				redirect('quanly_sanpham/quanlysanpham');
			}
		}
		$data['list_quanly_sanpham'] = $this->Model_quanly_sanpham->view_sanpham();
		$data['meta_title'] = 'Quản Lý SP';
		$data['active'] = 'quanly-sanpham-quanlysanpham';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_sanpham/quanlysanpham';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function updatesanpham($id = 0){
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Sửa Sản Phẩm'));
			redirect('home/index');
		}
		$quanly_sanpham = $this->Model_quanly_sanpham->get('*', array('id' => $id));
		if(!isset($quanly_sanpham) || count($quanly_sanpham) == 0){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Chuyên Mục Không Tồn Tại'));
			redirect('quanly_sanpham/quanlysanpham');
		}
		if($this->input->post('submit')){
			$this->form_validation->set_rules('tensp', 'Tên Sản Phẩm', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('masp', 'Mã Sản Phẩm', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run() and empty($_FILES['userfile']['name'])){
				$flag = $this->Model_quanly_sanpham->capnhat_sanpham($quanly_sanpham['id']);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_sanpham/quanlysanpham');	
			}
			elseif ($this->form_validation->run() and !empty($_FILES['userfile']['name'])){
				$config = array();
				$config['upload_path'] = './image';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2000';
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$data = array('upload_data' => $this->upload->data());
				$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
				$data_hinhanh = array(
					'masanpham' => $this->input->post('masp'),
					'hinhanh' 		=> $data['upload_data']['file_name'],
					'created' 		=> gmdate('Y-m-d H:i:s', time() + 7*3600)	
				);
				$flag = $this->Model_quanly_sanpham->capnhat_sanphamcohinh($quanly_sanpham['id'], $data_hinhanh);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_sanpham/quanlysanpham');	
			}
			if($this->input->post('del')){
			$checkbox = $this->input->post('checkbox');
			if (is_array($checkbox)){
				$flag = $this->Model_quanly_sanpham->del_hinhanh($checkbox);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_sanpham/quanlysanpham');
			}
		}
	}
		$data['quanly_sanpham'] = $quanly_sanpham;
		$data['meta_title'] = 'Update Sản Phẩm';
		$data['dropdown_madanhmuc'] = $this->Model_quanly_sanpham->dropdown();
		$data['hinhanh'] = $this->Model_quanly_sanpham->getRows();
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_sanpham/updatesanpham';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	public function themmoisanpham(){
		
		if(isset($this->authentication['permissions']) && count($this->authentication['permissions']) && in_array($this->uri->segments[1].'/'.$this->uri->segments[2], $this->authentication['permissions']) == FALSE){
			$this->session->set_flashdata('message_flashdata', array('type' => 'error','message' => 'Bạn Không Đủ Quyền Thêm Sản Phẩm'));
			redirect('home/index');
		}
		
		if($this->input->post('submit')){
			$this->form_validation->set_rules('tensp', 'Tên Sản Phẩm', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_rules('masp', 'Mã Sản Phẩm', 'trim|required|min_length[4]|max_length[225]');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
			if ($this->form_validation->run() and empty($_FILES['userfile']['name'])){
				$data_sanpham = array(
				  'tensanpham' => $this->input->post('tensp'),
				  'masanpham'        => $this->input->post('masp'),
				  'madanhmuc'        => $this->input->post('madanhmuc')
				);
				$flag = $this->Model_quanly_sanpham->them_sanpham($data_sanpham);
				$this->session->set_flashdata('message_flashdata', $flag);
				redirect('quanly_sanpham/quanlysanpham');
			}
			elseif ($this->form_validation->run() and !empty($_FILES['userfile']['name'])){
				$config = array();
				$config['upload_path'] = './image';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2000';
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$data = array('upload_data' => $this->upload->data());
				$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
				$data_sanpham = array(
				  'tensanpham' => $this->input->post('tensp'),
				  'masanpham'        => $this->input->post('masp'),
				  'madanhmuc'        => $this->input->post('madanhmuc')
				);
				$data_hinhanh = array(
					'masanpham' => $this->input->post('masp'),
					'hinhanh' 		=> $data['upload_data']['file_name'],
					'created' 		=> gmdate('Y-m-d H:i:s', time() + 7*3600)	
				);
				$flag = $this->Model_quanly_sanpham->them_sanphamhinhanh($data_sanpham, $data_hinhanh);
				$this->session->set_flashdata('message_flashdata', $flag);
			}
		}
						
		$data['meta_title'] = 'Tạo Mới Sản Phẩm';
		$data['dropdown_madanhmuc'] = $this->Model_quanly_sanpham->dropdown();
		$data['hinhanh'] = $this->Model_quanly_sanpham->getRows();
		$data['active'] = 'quanly-sanpham-themmoisanpham';
		$data['authentication'] = $this->authentication;
		$data['template'] = 'backend/quanly_sanpham/taomoisanpham';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	
	public function image_resize($path,$file){
		$config_resize = array();
		$config_resize['image_library'] = 'gd2';
		$config_resize['source_image'] = $path;
		$config_resize['maintian_ratio'] = TRUE;
		$config_resize['width'] = 150;
		$config_resize['height'] = 100;
		$config_resize['new_image'] = './image/thumb/'.$file;
		$this->load->library('image_lib',$config_resize);
		$this->image_lib->resize();
		
	}
	private function listFiles()
	{
		$this->load->helper('file');
		$files = get_filenames('./image');
		echo json_encode($files);
	}
	
	function del_sanphamhinhanh($ID){
		$query = $this->db->query("Select * from hinhanh where id = '{$ID}' ");
		foreach ($query->result() as $row){
			unlink('./image/'.$row->hinhanh);
		}
        $this->db->where('id',$ID);
		$this->db->delete('hinhanh');	
    }
}


