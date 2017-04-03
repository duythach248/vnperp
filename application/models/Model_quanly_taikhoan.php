<?php
class Model_quanly_taikhoan extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function view_taikhoan(){
		return $this->db->select('id, username, trangthai')->from('nhanvien')->order_by('id ASC')->get()->result_array();
	}
	
	
	function get($id = 0){
		return $this->db->select('id, username, trangthai')->from('nhanvien')->where('id', (int)$id)->get()->row_array();
	}	
	
	
	function updatenhanvien($checkbox = NULL){
        $this->db->where_in('id', $checkbox)->update('nhanvien', array (
			'password' => '123456',
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
				'message' => ' Không Có Dữ Liệu Được Cập Nhật'
			);			
		}
    }
}