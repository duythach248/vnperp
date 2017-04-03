<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public $authentication;
	
	public function __construct(){
		parent::__construct();
		$this->authentication = $this->my_authentication->check();
		$this->load->helper(array('url'));
		if(!isset($this->authentication) || count($this->authentication) == 0) redirect ('authentication/login');
		$this->load->helper(array('url','cookie'));
		$this->load->library('form_validation');
		
	}
	public function index(){
		$data['meta_title'] = 'Trang Chủ';
		$data['active'] = 'homepage';
		$data['template'] = 'backend/home/index';
		$data['authentication'] = $this->authentication;
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	//nhan su
	public function nhansu()
	{
		$data['meta_title'] = 'Nhân Viên';
		$data['active'] = 'nhansu';
		$data['template'] = 'backend/home/nhansu';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function themmoinhanvien()
	{
		$data['meta_title'] = 'Tạo Mới nhân viên';
		$data['active'] = 'themmoinhanvien';
		$data['template'] = 'backend/home/themmoinhanvien';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	//phong ban
	public function quanlyphongban()
	{
		$data['meta_title'] = 'Phòng Ban';
		$data['active'] = 'quanlyphongban';
		$data['template'] = 'backend/home/quanlyphongban';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoiphongban()
	{
		$data['meta_title'] = 'Tạo Mới Phòng Ban';
		$data['active'] = 'taomoiphongban';
		$data['template'] = 'backend/home/taomoiphongban';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	//van phong
	public function quanlyvanphong()
	{
		$data['meta_title'] = 'Văn Phòng Làm Việc';
		$data['active'] = 'quanlyvanphong';
		$data['template'] = 'backend/home/quanlyvanphong';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoivanphong()
	{
		$data['meta_title'] = 'Tạo Mới Văn Phòng';
		$data['active'] = 'taomoivanphong';
		$data['template'] = 'backend/home/taomoivanphong';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	//nhom nhan vien
	public function quanlynhomnhanvien()
	{
		$data['meta_title'] = 'Nhóm Nhân Viên';
		$data['active'] = 'quanlynhomnhanvien';
		$data['template'] = 'backend/home/quanlynhomnhanvien';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoinhomnhanvien()
	{
		$data['meta_title'] = 'Tạo Mới Nhóm Nhân Viên';
		$data['active'] = 'taomoinhomnhanvien';
		$data['template'] = 'backend/home/taomoinhomnhanvien';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	//san pham
	public function quanlysanpham()
	{
		$data['meta_title'] = 'Quản Lý Sản Phẩm';
		$data['active'] = 'quanlysanpham';
		$data['template'] = 'backend/home/quanlysanpham';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoisanpham()
	{
		$data['meta_title'] = 'Tạo Mới Sản Phẩm';
		$data['active'] = 'taomoisanpham';
		$data['template'] = 'backend/home/taomoisanpham';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	
	//don hang
	public function quanlyhoadon()
	{
		$data['meta_title'] = 'Quản Lý Hóa Đơn';
		$data['active'] = 'quanlyhoadon';
		$data['template'] = 'backend/home/quanlyhoadon';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoidonhang()
	{
		$data['meta_title'] = 'Tạo Mới Hóa Đơn';
		$data['active'] = 'taomoidonhang';
		$data['template'] = 'backend/home/taomoidonhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlydukienbanhang() //du kien ban hang
	{
		$data['meta_title'] = 'Quản Lý Dự Kiến Bán Hàng';
		$data['active'] = 'quanlydukienbanhang';
		$data['template'] = 'backend/home/quanlydukienbanhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taophieudukienbanhang()
	{
		$data['meta_title'] = 'Tạo Mới Phiếu Dự Kiến Bán Hàng';
		$data['active'] = 'taophieudukienbanhang';
		$data['template'] = 'backend/home/taomoidukienbanhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	//khach hang
	public function quanlykhachhang()
	{
		$data['meta_title'] = 'Quản Lý Khách Hàng';
		$data['active'] = 'quanlykhachhang';
		$data['template'] = 'backend/home/quanlykhachhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlyduan() //du an
	{
		$data['meta_title'] = 'Quản Lý Dự Án';
		$data['active'] = 'quanlyduan';
		$data['template'] = 'backend/home/quanlykhachhangduan';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoiduan()
	{
		$data['meta_title'] = 'Tạo Mới Dự Án';
		$data['active'] = 'taomoiduan';
		$data['template'] = 'backend/home/taomoiduan';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoikhachhang()
	{
		$data['meta_title'] = 'Tạo Mới Khách Hàng';
		$data['active'] = 'taomoikhachhang';
		$data['template'] = 'backend/home/taomoikhachhang';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlykho()
	{
		$data['meta_title'] = 'Quản Lý Kho';
		$data['active'] = 'quanlykho';
		$data['template'] = 'backend/home/quanlykho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlyxuatkho()
	{
		$data['meta_title'] = 'Quản Lý Xuất Kho';
		$data['active'] = 'quanlyxuatkho';
		$data['template'] = 'backend/home/quanlyxuatkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoiphieuxuatkho()
	{
		$data['meta_title'] = 'Tạo Phiếu Xuất Kho';
		$data['active'] = 'taomoiphieuxuatkho';
		$data['template'] = 'backend/home/taomoiphieuxuatkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlynhapxuatkho()
	{
		$data['meta_title'] = 'Quản Lý Nhập Kho';
		$data['active'] = 'quanlynhapxuatkho';
		$data['template'] = 'backend/home/quanlynhapxuatkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoiphieunhapkho()
	{
		$data['meta_title'] = 'Tạo Phiếu Nhập Kho';
		$data['active'] = 'taomoiphieunhapkho';
		$data['template'] = 'backend/home/taomoiphieunhapkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlychuyenkho()
	{
		$data['meta_title'] = 'Quản Lý Chuyển Kho';
		$data['active'] = 'quanlychuyenkho';
		$data['template'] = 'backend/home/quanlychuyenkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taomoiphieuchuyenkho()
	{
		$data['meta_title'] = 'Tạo Phiếu Chuyển Kho';
		$data['active'] = 'taomoiphieuchuyenkho';
		$data['template'] = 'backend/home/taomoiphieuchuyenkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function quanlykiemkho()
	{
		$data['meta_title'] = 'Quản Lý Kiểm Kho';
		$data['active'] = 'quanlykiemkho';
		$data['template'] = 'backend/home/quanlykiemkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}
	public function taophieukiemkho()
	{
		$data['meta_title'] = 'Tạo Phiếu Kiểm Kho';
		$data['active'] = 'taophieukiemkho';
		$data['template'] = 'backend/home/taophieukiemkho';
		$this->load->view('backend/layouts/home', isset($data)?$data:Null);
	}

	
}

