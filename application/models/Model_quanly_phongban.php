<?php
class Model_quanly_phongban extends CI_Model {

    function __construct(){
        parent::__construct();
    }

	function view_phongban($param_where = NULL){
		$this->db->select('phongban.id, phongban.maphongban, phongban.tenphongban, truso.tentruso as truso')->from('phongban')->join('truso', 'phongban.matruso = truso.id', 'left');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->order_by('phongban.id DESC')->get()->result_array();
	}
	
	function view_user($param_where = NULL){
		$this->db->select('nhanvien.id, nhanvien.username, nhanvien.created, user_role.title as role')->from('nhanvien')->join('user_role', 'nhanvien.roleid = user_role.id', 'left');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->order_by('nhanvien.id DESC')->get()->result_array();
	}
	
	
	
	function get($select = 'tenphongban', $param_where = NULL){
		$this->db->select($select)->from('phongban');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->get()->row_array();
	}
	
	

	function add_phongban(){
        $this->db->insert('phongban', array(
			'maphongban' => $this->input->post('mapb'),
			'tenphongban' => $this->input->post('tenpb'),
			'matruso' => $this->input->post('truso'),
		));
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Thêm Dữ Liệu Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Dữ Liệu Thêm Vào'
			);			
		}
    }
	//edit
	function edit_phongban($id){
        $this->db->where_in('id', (int)$id)->update('phongban', array (
			'maphongban' => $this->input->post('mapb'),
			'tenphongban' => $this->input->post('tenpb'),
			'matruso' => $this->input->post('matruso'),
		));	
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Cập Nhật Dữ Liệu Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Dữ Liệu Cập Nhật'
			);			
		}
    }

	function del_phongban($checkbox = NULL){
        $this->db->where_in('id', $checkbox)->delete('phongban');
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => 'Xóa ('.count($checkbox).') Danh Mục Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => 'Không Có Danh Mục Được Xóa'
			);			
		}
    }
}