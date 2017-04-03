<?php
class Model_quanly_khachhang extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function view_khachhang($param_where = NULL){
		$this->db->select('khachhang.id, khachhang.makhachhang, khachhang.tenkhachhang, khachhang.gioitinh, khachhang.diachi, khachhang.email, khachhang.sodienthoai, loaikhachhang.tenloaikhachhang as loai')->from('khachhang')->join('loaikhachhang', 'khachhang.maloaikhachhang = loaikhachhang.id', 'left');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->order_by('khachhang.id DESC')->get()->result_array();
	}
	
	

	function get($select = 'tenkhachhang', $param_where = NULL){
		$this->db->select($select)->from('khachhang');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->get()->row_array();
	}
	
	
	
	function add_khachhangcanhan(){
        $this->db->insert('khachhang', array(
			'tenkhachhang' => $this->input->post('hovaten'),
			'makhachhang' => $this->input->post('hovaten'),
			'maloaikhachhang' => $this->input->post('myradio'),
			'email' => $this->input->post('emailcanhan'),
			'diachi' => $this->input->post('diachicn'),
			'sodienthoai' => $this->input->post('sdtcn'),
			'gioitinh' => $this->input->post('gioitinh'),
		));		
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Thêm Khách Hàng Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Khách Hàng Thêm Vào'
			);			
		}
    }
	
	function add_khachhangcongty(){
        $this->db->insert('khachhang', array(
			'tenkhachhang' => $this->input->post('tencty'),
			'makhachhang' => $this->input->post('macty'),
			'diachi' => $this->input->post('diachicty'),
			'maloaikhachhang' => $this->input->post('myradio2'),
			'website' => $this->input->post('website'),
			'sodienthoai' => $this->input->post('sdtcty'),
			'fax' => $this->input->post('FAX'),
		));
		
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => ' Thêm Khách Hàng Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Khách Hàng Thêm Vào'
			);			
		}
    }
	//edit
	function capnhat_khachhang($id){
        $this->db->where_in('id', (int)$id)->update('khachhang', array (
			'maloaikhachhang' => $this->input->post('maloaikhachhang'),
			'tenkhachhang' => $this->input->post('hovaten'),
			'makhachhang' => $this->input->post('makhcn'),
			'email' => $this->input->post('email'),
			'gioitinh' => $this->input->post('gioitinh'),
			'diachi' => $this->input->post('diachi'),
			'sodienthoai' => $this->input->post('sdt'),
			'website' => $this->input->post('website'),
			'fax' => $this->input->post('FAX'),
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
	
	
	function dropdown(){
		$data = $this->db->select('id, tenloaikhachhang')->from('loaikhachhang')->order_by('tenloaikhachhang ASC')->get()->result_array();
		$list[0] = '- Chọn Loại Khách Hàng -';
		if(isset($data) && count($data)){
			foreach($data as $key => $val){
				$list[$val['id']] = $val['tenloaikhachhang'];
			}
			return $list;
		}
	}	

	function xoa_khachhang($checkbox = NULL){
        $this->db->where_in('id', $checkbox)->delete('khachhang');
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			return array(
				'type' => 'successful',
				'message' => 'Xóa ('.count($checkbox).') Khách Hàng Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => 'Không Có Khách Hàng Được Xóa'
			);			
		}
    }
}