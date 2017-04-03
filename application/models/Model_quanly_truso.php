<?php
class Model_quanly_truso extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function view_truso(){
		return $this->db->select('id,matruso,tentruso, diachi')->from('truso')->order_by('id ASC')->get()->result_array();
	}
	
	function get($id = 0){
		return $this->db->select('id,matruso,tentruso, diachi')->from('truso')->where('id', (int)$id)->get()->row_array();
	}
	
	function add_truso(){
        $this->db->insert('truso', array(
			'matruso' => $this->input->post('matruso'),
			'tentruso' => $this->input->post('tentruso'),
			'diachi' => $this->input->post('diachi'),
		));
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Thêm Trụ Sở Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Trụ Sở Thêm Vào'
			);			
		}
    }
	//edit
	function edit_truso($id){
        $this->db->where_in('id', (int)$id)->update('truso', array (
			'matruso' => $this->input->post('matruso'),
			'tentruso' => $this->input->post('tentruso'),
			'diachi' => $this->input->post('diachi'),
		));
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Cập Nhật Trụ Sở Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Trụ Sở Được Cập Nhật'
			);			
		}
    }
	
	function dropdown(){
		$data = $this->db->select('id, tentruso')->from('truso')->order_by('tentruso ASC')->get()->result_array();
		$list[0] = '- Chọn Trụ Sở -';
		if(isset($data) && count($data)){
			foreach($data as $key => $val){
				$list[$val['id']] = $val['tentruso'];
			}
			return $list;
		}
	}
	
	

	function del_truso($checkbox = NULL){
        $this->db->where_in('id', $checkbox)->delete('truso');
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => 'Xóa ('.count($checkbox).') Trụ Sở Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => 'Không Có Trụ Sở Được Xóa'
			);			
		}
    }
}