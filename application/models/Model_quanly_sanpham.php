<?php
class Model_quanly_sanpham extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function view_sanpham($param_where = NULL){
		$this->db->select('sanpham.id, sanpham.masanpham, sanpham.tensanpham, sanpham.hienco, sanpham.dukien, sanpham.cannhap, danhmucsanpham.tendanhmuc as danhmuc')->from('sanpham')->join('danhmucsanpham', 'sanpham.madanhmuc = danhmucsanpham.stt', 'left');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->order_by('sanpham.id ASC')->get()->result_array();
		
	}
	

	function get($select = 'tensanpham', $param_where = NULL){
		$this->db->select($select)->from('sanpham');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->get()->row_array();
	}
	
	
	
	function them_sanpham($data_sanpham){
		$this->db->insert('sanpham', $data_sanpham);
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
	
	function them_sanphamhinhanh($data_sanpham, $data_hinhanh){
		$this->db->insert('sanpham', $data_sanpham);
		$this->db->insert('hinhanh', $data_hinhanh);
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
	function capnhat_sanphamcohinh($id, $data_hinhanh){
        $this->db->where_in('id', (int)$id)->update('sanpham', array (
			'masanpham' => $this->input->post('masp'),
			'madanhmuc' => $this->input->post('madanhmuc'),
			'tensanpham' => $this->input->post('tensp')
		));
		$this->db->insert('hinhanh', $data_hinhanh);
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
	function capnhat_sanpham($id){
        $this->db->where_in('id', (int)$id)->update('sanpham', array (
			'masanpham' => $this->input->post('masp'),
			'madanhmuc' => $this->input->post('madanhmuc'),
			'tensanpham' => $this->input->post('tensp')
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


	
	
	function dropdown(){
		$data = $this->db->select('stt, tendanhmuc')->from('danhmucsanpham')->order_by('tendanhmuc ASC')->get()->result_array();
		$list[0] = '- Chọn Danh Mục Sản Phẩm -';
		if(isset($data) && count($data)){
			foreach($data as $key => $val){
				$list[$val['stt']] = $val['tendanhmuc'];
			}
			return $list;
		}
	}	
	
	function tao_hinhanh($hinhanhsanpham){
		$this->db->insert('hinhanh', $hinhanhsanpham);
	}
	
	public function getRows($id = ''){
    $this->db->select('id,hinhanh');
    $this->db->from('hinhanh');
    if($id){
		$this->db->where('id',$id);
        $query = $this->db->get();
        $result = $query->row_array();
	}else{
        $this->db->order_by('created','desc');
        $query = $this->db->get();
        $result = $query->result_array();
	}
        return !empty($result)?$result:false;
}

	function del_hinhanh($checkbox = NULL){
		if (is_file('image/'.$hinhanh->file)) {
        unlink('image/'.$hinhanh->file);
		}
        $this->db->where_in('id', $checkbox)->delete('hinhanh');
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Xóa ('.count($checkbox).') Danh Mục Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Danh Mục Được Xóa'
			);			
		}
    }


	function del_sanpham($checkbox = NULL){
        $this->db->where_in('id', $checkbox)->delete('sanpham');
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Xóa ('.count($checkbox).') Danh Mục Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Danh Mục Được Xóa'
			);			
		}
    }
}