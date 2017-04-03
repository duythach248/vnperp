<?php
class Model_quanly_duan extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function view_duan($param_where = NULL){
		return $this->db->select('id, maduan, tenduan, ngaytao, ngayketthuc, trangthai')->from('duan')->order_by('id ASC')->get()->result_array();
	}
	
	function getduan($select = 'tenduan', $param_where = NULL){
		$this->db->select($select)->from('duan');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->get()->row_array();
	}
	
	function getchitietduan($select = 'tenduan', $param_where = NULL){
		$this->db->select($select)->from('chitietduan');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->get()->row_array();
	}

	function getchitiet($id = 0){
		//return $this->db->select('masanpham, tensanpham, soluong')->from('chitietduan')->join('duan', 'chitietduan.maduan = duan.id')->where('chitietduan.maduan = id', (int)$id)->get()->result_array();
		return $this->db->select('*')->from('chitietduan')->where(array('maduan' => $id))->get()->result_array();
	}
	
	
	function add_duan(){
        $this->db->insert('duan', array(
			'tenduan' => $this->input->post('txttenduan'),
			'maduan' => $this->input->post('txtmaduan'),
		));
		
		$id = $this->db->insert_id();
		
		if ($id) {
			$dulieusp = array();
			$dsmasp = $this->input->post('masp');
			$dstensp = $this->input->post('tensp');
			$dsslsp = $this->input->post('soluong');
			foreach ($dsmasp as $key => $item) {
				$dulieusp[] = array(
					'masanpham' => $item,
					'tensanpham' => $dstensp[$key],
					'maduan' => $id,
					'soluong' => $dsslsp[$key],
				);
			}
			if (count($dulieusp)) {
				$this->db->insert_batch('chitietduan', $dulieusp);
			}
			return array(
				'type' => 'successful',
				'message' => ' Thêm Dự Án Thành Công'
			);
		} else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Dự Án Thêm Vào'
			);
		}
    }
	
	function capnhat_duan($id){
		$this->db->where_in('id', (int)$id)->update('duan', array (
			'tenduan' => $this->input->post('txttenduan'),
			'maduan' => $this->input->post('txtmaduan'),
		));
		if ($id) {
			$dulieusp = array();
			$dsmasp = $this->input->post('masp');
			$dstensp = $this->input->post('tensp');
			$dsslsp = $this->input->post('soluong');
			$dsidsp = $this->input->post('idsp');
			foreach ($dsmasp as $key => $item) {
				if (!$dsidsp[$key]) {
					$dulieusp[] = array(
						'masanpham' => $item,
						'tensanpham' => $dstensp[$key],
						'maduan' => $id,
						'soluong' => $dsslsp[$key],
					);
				} else {
					$this->db->where_in('id', (int)$dsidsp[$key])->update('chitietduan', array (
						'tensanpham' => $dstensp[$key],
						'masanpham' => $item,
						'soluong' => $dsslsp[$key],
					));
				}
			}
			if (count($dulieusp)) {
				$this->db->insert_batch('chitietduan', $dulieusp);
			}
			return array(
				'type' => 'successful',
				'message' => ' Cập nhật Dự Án Thành Công'
			);
		} else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Dự Án Thêm Vào'
			);
		}
    }
	
	function deletechitietduan($param_where = array()){
		if (count($param_where)) {
			$this->db->delete('chitietduan', $param_where);
			return array(
				'type' => 'successful',
				'message' => ' Xóa Chi tiết Dự Án Thành Công'
			);
		} else {
			return array(
				'type' => 'error',
				'message' => ' Không Có Chi tiết Dự Án Để Xóa'
			);
		}
    }
	
	
	
	
}