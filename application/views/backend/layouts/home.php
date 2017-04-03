<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<base href="http://localhost:8080/vnperp/">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<title><?php echo isset($meta_title)?htmlspecialchars($meta_title):'';?></title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="template/backend/css/bootstrap-theme.min.css"> 
	<link rel="stylesheet" href="template/backend/css/nav.css">
	<link rel="stylesheet" href="template/backend/css/custom.css">
	<link rel="stylesheet" href="template/backend/css/jasny-bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
<style>
		body {
			padding: 60px 0px;
			background-image: url("template/backend/image/1.jpg");
			background-size: 100% 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
			
		
			
		}
		#logo{
			height: 245%;
			margin-top: -12px;
			margin-right: -15px;
		}
	
		.dropdown-menu li:hover {background-color: #f1f1f1}
		.dropdown:hover .dropdown-menu {
			display: block;
			
		}
		li a:hover, .dropdown:hover .dropbtn {
			background-color: #f1f1f1;
		}
		li a:hover, .dropdown:hover {
			background-color: #f1f1f1;
		}

		a:visited{
			color: black;
			text-decoration: underline;
		}
		 
		a:hover{
			color: blue;
			text-decoration: none;
		}	 
		.navbar, .dropdown-menu{
		background:rgba(255,255,255,255);
		border: none;

		}
		
		* {
		  -moz-box-sizing: border-box;
		  -webkit-box-sizing: border-box;
		  box-sizing: border-box;
		  margin: 0;
		  padding: 0;
		}
		.rel {
		  position: relative; 
		  width: 500px;
		}
		.rel ul li img {
		  max-width: 100%;
		  -moz-transition: all 0.3s;
		  -webkit-transition: all 0.3s;
		  transition: all 0.3s;
		}
		.rel:hover img {
		  -moz-transform: scale(1.1);
		  -webkit-transform: scale(1.1);
		  transform: scale(1.1);
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
          <a class="navbar-brand" href="index.php"><img id="logo" src="template/backend/image/logovinapool.png">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
			  <a data-toggle="dropdown" class="dropbtn" style="color:#2C61A6;"><b>Nội Bộ</b></a>
			  <ul class="dropdown-menu">
			    <li><a href="nhansu.php">Tài Liệu</a></li>
			    <li><a href="nhansu.php">Danh Mục Tài Liệu</a></li>
			  </ul>
			</li>
            <li class="dropdown">
			  <a data-toggle="dropdown" class="dropbtn" style="color:#2C61A6;"><b>Nhân Sự</b></a>
			  <ul class="dropdown-menu">
			    <li <?php echo (isset($active) && $active == 'quanly-nhanvien-quanlynhanvien')?' class="active"':''?>><a href="index.php/nhanvien/quanlynhanvien">Nhân Viên</a></li>
			    <li <?php echo (isset($active) && $active == 'quanly-truso-quanlytruso')?' class="active"':''?>><a href="index.php/quanly_truso/quanlytruso">Quản Lý Trụ Sở</a></li>
			    <li <?php echo (isset($active) && $active == 'quanly-phongban-quanlyphongban')?' class="active"':''?>><a href="index.php/quanly_phongban/quanlyphongban">Quản Lý Phòng Ban</a></li>
				<?php if(isset($authentication['permissions']) && is_array($authentication['permissions']) && in_array('role/module', $authentication['permissions'])){ ?>
				<li <?php echo (isset($active) && $active == 'quanly-role-quanlyrole')?' class="active"':''?>><a href="index.php/role/quanlyrole">Phân Quyền Vai Trò</a></li>
				<?php } ?>
				<li <?php echo (isset($active) && $active == 'quanly-danhmucsp-quanlytaikhoan')?' class="active"':''?>><a href="index.php/quanly_taikhoan/quanlytaikhoan">Quản Lý Tài Khoản</a></li>				
			  </ul>
			</li> 
			<li class="dropdown">
			  <a data-toggle="dropdown" class="dropbtn" style="color:#2C61A6;"><b>Sản Phẩm</b></a>
			  <ul class="dropdown-menu">
			    <li <?php echo (isset($active) && $active == 'quanly-sanpham-quanlysanpham')?' class="active"':''?>><a href="index.php/quanly_sanpham/quanlysanpham">Quản Lý Sản Phẩm</a></li>
			    <li <?php echo (isset($active) && $active == 'quanly-danhmucsp-quanlydanhmucsanpham')?' class="active"':''?>><a href="index.php/quanly_danhmucsp/quanlydanhmucsanpham">Quản lý Loại Sản Phẩm</a></li>
			  </ul>
			</li> 
			 <li class="dropdown">
			  <a data-toggle="dropdown" class="dropbtn" href="" style="color:#2C61A6;"><b>Bán Hàng</b></a>
			  <ul class="dropdown-menu">
			    <li <?php echo (isset($active) && $active == 'quanlyhoadon')?' class="active"':''?>><a href="index.php/quan-ly-hoa-don">Đơn Hàng</a></li>
			    <li <?php echo (isset($active) && $active == 'quanlydukienbanhang')?' class="active"':''?>><a href="index.php/quan-ly-hoa-don/quan-ly-du-kien-ban-hang">Dự Kiến Bán Hàng</a></li>
				<li><a href="#">Báo Cáo</a></li>
			  </ul>
			</li> 
	
			<li <?php echo (isset($active) && $active == 'quanly-khachhang-quanlykhachhang')?' class="active"':''?>><a href="index.php/quanly_khachhang/quanlykhachhang" style="color:#2C61A6;"><b>Khách Hàng</b></a></li>
			<li <?php echo (isset($active) && $active == 'quanly-duan-quanlyduan')?' class="active"':''?>><a href="index.php/quanly_duan/quanlyduan" style="color:#2C61A6;"><b>Dự Án</b></a></li>
			<li <?php echo (isset($active) && $active == 'quanlykho')?' class="active"':''?>><a href="index.php/quan-ly-kho" style="color:#2C61A6;"><b>Quản Lý Kho</b></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">	
			<li class="dropdown">
			  <li style = "margin-top: 15px; margin-right: 10px">Xin Chào <b><?php echo $authentication['username']?></b></li>
			</li> 			
			<li class="dropdown">
			  <a data-toggle="dropdown" href=""><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:#2C61A6;"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="">Thông Tin Tài Khoản</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="index.php/authentication/logout">Thoát</a></li>
			  </ul>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<?php if(isset($template) && !empty($template)){$this->load->view($template, isset($data)?$data:Null);} ?>
    </div><!-- /.container -->
	</div>
	<script type="text/javascript" src="template/backend/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="template/backend/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="template/backend/js/jasny-bootstrap.min.js"></script>
	<script type="text/javascript" src="template/backend/js/uploadimage2.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
	<!-- button -->
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
	<!-- /.button -->
	<script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
	<script type="text/javascript">
	  $(function() {
	    $('#datetimepicker1').datetimepicker({     
		  daysOfWeekDisabled: [0, 6]
	    });
	  });
	</script>
	<script type="text/javascript">
	  $(function() {
	    $('#datetimepicker2').datetimepicker({
		  daysOfWeekDisabled: [0, 6]
	    });
	  });
	</script>
<script> 
	$(document).ready(function() {
    var t = $('#example').DataTable({
		"lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "Tất Cả"]],
		"language": {
                "url": "template/backend/js/dataTables.german.lang"
            },
		"columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        }],
        "order": [[ 1, 'asc' ]]
		
	});
	
	t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
	});
</script>

<script> 
	$(document).ready(function() {
    $('#example1').DataTable({
		"lengthMenu":[[15, 25, 50, -1], [15, 25, 50, "Tất Cả"]],
		"language": {
                "url": "template/backend/js/dataTables.german.lang"
            }
		
	});
	});
</script>

</body>
</html>