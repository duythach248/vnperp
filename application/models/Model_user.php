<?php
class Model_user extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function total($param_where = NULL){
		$this->db->from('nhanvien');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->count_all_results();
	}
	
	function view_user($param_where = NULL){
		$this->db->select('nhanvien.id, nhanvien.username, nhanvien.fullname, nhanvien.msnv, nhanvien.email, nhanvien.choohientai, nhanvien.sodienthoai, nhanvien.ngaysinh, nhanvien.cmnd, user_role.title as role')->from('nhanvien')->join('user_role', 'nhanvien.roleid = user_role.id', 'left');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->order_by('nhanvien.id DESC')->get()->result_array();
	}

	function get($select = 'username', $param_where = NULL){
		$this->db->select($select)->from('nhanvien');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->get()->row_array();
	}
	
	function edit_user($id){
        $this->db->where_in('id', (int)$id)->update('nhanvien', array (
			'fullname' => $this->input->post('txtname'),
			'email' => $this->input->post('txtemail'),
			'msnv' => $this->input->post('txtmsnv'),
			'choohientai' => $this->input->post('txtchoo'),
			'quequan' => $this->input->post('txtqq'),
			'cmnd' => $this->input->post('txtcmnd'),
			'ngaysinh' => $this->input->post('txtngaysinh'),
			'sodienthoai' => $this->input->post('txtsdt'),
			'maphongban' => $this->input->post('maphongban'),
			'loaicongviec' => $this->input->post('txtloaicv'),
			'roleid' => $this->input->post('roleid'),
			'updated' => gmdate('Y-m-d H:i:s', time() + 7*3600),
		));
		
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Cập Nhật Nhân Viên Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Nhân Viên Cập Nhật'
			);			
		}
    }
	
	
	function add_nhanvien(){
        $this->db->insert('nhanvien', array(
			'username' => $this->input->post('username'),
			'fullname' => $this->input->post('txtname'),
			'email' => $this->input->post('txtemail'),
			'msnv' => $this->input->post('txtmsnv'),
			'choohientai' => $this->input->post('txtchoo'),
			'quequan' => $this->input->post('txtqq'),
			'cmnd' => $this->input->post('txtcmnd'),
			'ngaysinh' => $this->input->post('txtngaysinh'),
			'sodienthoai' => $this->input->post('txtsdt'),
			'maphongban' => $this->input->post('maphongban'),
			'loaicongviec' => $this->input->post('txtloaicv'),
			'roleid' => $this->input->post('roleid'),
			'created' => gmdate('Y-m-d H:i:s', time() + 7*3600),
		));
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Thêm Nhân Viên Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Nhân Viên Thêm Vào'
			);			
		}
    }
	
	
	function dropdownphongban(){
		$data = $this->db->select('id, tenphongban')->from('phongban')->order_by('tenphongban ASC')->get()->result_array();
		$list[0] = '- Chọn Phòng Ban -';
		if(isset($data) && count($data)){
			foreach($data as $key => $val){
				$list[$val['id']] = $val['tenphongban'];
			}
			return $list;
		}
	}
	

	function updated($param_data = NULL, $param_where = NULL){
        $this->db->where($param_where)->update('nhanvien', $param_data);
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Cập Nhật Nhân Viên Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Người Dùng Nào Cập Nhật'
			);			
		}
    }
	
	
}