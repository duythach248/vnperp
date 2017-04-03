<?php
class Model_quanly_danhmucsp extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function view_danhmucsp(){
		return $this->db->select('stt,madanhmuc,tendanhmuc')->from('danhmucsanpham')->order_by('stt ASC')->get()->result_array();
	}
	
	function get($stt = 0){
		return $this->db->select('stt,madanhmuc,tendanhmuc')->from('danhmucsanpham')->where('stt', (int)$stt)->get()->row_array();
	}
	
	
	function add_danhmucsp(){
        $this->db->insert('danhmucsanpham', array(
			'madanhmuc' => $this->input->post('madmsp'),
			'tendanhmuc' => $this->input->post('tendmsp'),
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
	function edit_danhmucsp($stt){
        $this->db->where_in('stt', (int)$stt)->update('danhmucsanpham', array (
			'madanhmuc' => $this->input->post('madmsp'),
			'tendanhmuc' => $this->input->post('tendmsp'),
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
	

	function del_danhmucsp($checkbox = NULL){
        $this->db->where_in('stt', $checkbox)->delete('danhmucsanpham');
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