<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<style>
		body {
			padding: 70px 0px;
		}
		#logo{
			height: 245%;
			margin-top: -12px;
			margin-right: -15px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img id="logo" src="image/logovinapool.png">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li sclass="dropdown">
			  <a data-toggle="dropdown" href="">Nội Bộ<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="nhansu.php">Tài Liệu</a></li>
			    <li><a href="nhansu.php">Danh Mục Tài Liệu</a></li>
			  </ul>
			</li> 
             <li sclass="dropdown">
			  <a data-toggle="dropdown" href="">Nhân Sự<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="nhansu.php">Nhân Viên</a></li>
			    <li><a href="quanlyvanphong.php">Quản Lý Trụ Sở</a></li>
			    <li><a href="quanlyphongban.php">Quản Lý Phòng Ban</a></li>
			    <li><a href="quanlynhomnhanvien.php">Quản Lý Nhóm</a></li>	   
			  </ul>
			</li> 
			<li sclass="dropdown">
			  <a data-toggle="dropdown" href="">Sản Phẩm<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="quanlysanpham.php">Quản Lý Sản Phẩm</a></li>
			    <li><a href="quanlydanhmucsanpham.php">Quản lý Loại Sản Phẩm</a></li>
			  </ul>
			</li> 
			 <li sclass="dropdown">
			  <a data-toggle="dropdown" href="">Bán Hàng<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="quanlyhoadon.php">Đơn Hàng</a></li>
			    <li><a href="#">Báo Cáo</a></li>
			  </ul>
			</li> 
			<li sclass="dropdown">
			  <a data-toggle="dropdown" href="">Khách Hàng<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="#">Danh Sách Khách Hàng</a></li>
			  </ul>
			</li>
			<li><a href="quanlykho.php">Quản Lý Kho</a></li>
            <li sclass="dropdown">
			  <a data-toggle="dropdown" href="">My Account<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="#">Chỉnh Sửa Thông Tin</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="#">Thoát</a></li>
			  </ul>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    	<div class="row">
  			 <div class="col-md-6">
  			 <ol class="breadcrumb">
			  <li><a href="index.php">Trang Chủ</a></li>
			  <li><a href="#">Nhân Sự</a></li>
			  <li class="active">Cài Đặt Nhân Sự</li>
			</ol>	
  			 </div>
  			 <div class="col-md-12">	 			 
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    Văn Phòng Làm Việc
					  </a>
					  <a href="#" class="list-group-item">Là trụ sở nơi để nhân viên làm việc gồm thông tin địa chỉ và thời gian làm việc (ca) tương ứng.</a>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    Phòng Ban
					  </a>
					  <a href="#" class="list-group-item">Xây dựng mô hình phòng ban phù hợp với từng doanh nghiệp và chức năng của từng phòng ban. Chẳng hạn: phòng kế toán, phòng nhân sự,...</a>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    Quyền Truy Cập
					  </a>
					  <a href="#" class="list-group-item">Phân quyền để nhân viên truy cập vào hệ thống cũng như thao tác với từng chức năng khi thêm mới một nhân viên vào công ty.</a>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    Nhóm
					  </a>
					  <a href="#" class="list-group-item">Nhóm các nhân viên theo tiêu chí nào đó như phòng ban, chức vụ, hình thức làm việc...</a>
					</div>
				</div> 	
  			 </div>		 
  		</div>   
    </div><!-- /.container -->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	

</body>
</html>