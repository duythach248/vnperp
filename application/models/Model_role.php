<?php
class Model_role extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	function total($param_where = NULL){
		$this->db->from('user_role');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->count_all_results();
	}
	
	function view($param_where = NULL){
		$this->db->select('id,title,created,updated, (SELECT COUNT(username) FROM nhanvien WHERE user_role.id = nhanvien.roleid) as count_nhanvien')->from('user_role');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		return $this->db->order_by('id DESC')->get()->result_array();
	}
	
	function get($id = 0){
		return $this->db->select('id, title, description')->from('user_role')->where('id', (int)$id)->get()->row_array();
	}
	
	function add_role(){
        $this->db->insert('user_role', array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'created' => gmdate('Y-m-d H:i:s', time() + 7*3600),
		));
		$roleid = $this->db->insert_id();
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			$this->db->flush_cache();
			$permissions = $this->input->post('permissions');
			if(isset($permissions) && is_array($permissions)){
				$temp = NULL;
				foreach($permissions as $key => $val){
					$temp[] = array(
						'roleid' => $roleid,
						'permissions' => $val,
					);	
				}
				$this->db->insert_batch('user_permissions',$temp);
			}
			return array(
				'type' => 'successful',
				'message' => 'Thêm Dữ Liệu Thành Công'
				);
		}
		else {
			return array(
				'type' => 'error',
				'message' => 'Không Có Dữ Liệu Thêm Vào'
			);			
		}
    }
	
	
	function edit_role($id){
        $this->db->where_in('id', (int)$id)->update('user_role', array (
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'updated' => gmdate('Y-m-d H:i:s', time() + 7*3600),
			
		));
		
		$flag = $this->db->affected_rows();
		if ($flag > 0){		
			$this->db->flush_cache();
			$this->db->where('roleid', (int)$id)->delete('user_permissions');
			$this->db->flush_cache();
			$permissions = $this->input->post('permissions');
			if(isset($permissions) && is_array($permissions)){
				$temp = NULL;
				foreach($permissions as $key => $val){
					$temp[] = array(
						'roleid' => (int)$id,
						'permissions' => $val,
					);	
				}
				$this->db->insert_batch('user_permissions',$temp);
			}
			return array(
				'type' => 'successful',
				'message' => 'Cập Nhật Dữ Liệu Thành Công'
			);			
		}
		else {
			return array(
				'type' => 'error',
				'message' => 'Không Có Dữ Liệu Cập Nhật'
			);			
		}
    }
	
	function del_role($checkbox = NULL){
        $this->db->where_in('id', $checkbox)->delete('user_role');
		$flag = $this->db->affected_rows();
		if ($flag > 0){
			$this->db->flush_cache();
			$this->db->where('roleid', (int)$id)->delete('user_permissions');
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
	
	function dropdown(){
		$data = $this->db->select('id, title')->from('user_role')->order_by('title ASC')->get()->result_array();
		$list[0] = '- Chọn Vai Trò -';
		if(isset($data) && count($data)){
			foreach($data as $key => $val){
				$list[$val['id']] = $val['title'];
			}
			return $list;
		}
	}
	

	function permissions($select = 'permissions', $param_where = NULL){
		$this->db->select($select)->from('user_permissions');
		if(isset($param_where) && count($param_where)){
			$this->db->where($param_where);
		}
		$permissions = $this->db->get()->result_array();
		if(isset($permissions) && count ($permissions)){
			$temp = NULL;
			foreach($permissions as $key => $val){
				$temp[] = $val['permissions'];
			}
			return $temp;
		}
		return NULL;
	}

	
}