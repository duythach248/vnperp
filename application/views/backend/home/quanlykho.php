
	<style>
		body {
			padding: 70px 0px;
		}
		#logo{
			height: 245%;
			margin-top: -12px;
			margin-right: -15px;
		}
		#button1{
			margin-left: 75px; 
		}
	</style>
<div class="container">
    	<div class="row">
  			 <div class=".col-md-3 .col-md-offset-1">
	  		<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Quản Lý Kho</h3>
			  </div>
			  <div class="panel-body">
			    <div class="col-xs-6 col-md-3">
				    <a <?php echo (isset($active) && $active == 'quanlyxuatkho')?' class="active"':''?>><a href="index.php/quan-ly-kho/quan-ly-xuat-kho" class="thumbnail">
				      <img src="template/backend/image/quanlyxuat.jpg" alt="...">
				      <center><button class="btn btn-info" type="button">Yêu Cầu <span class="badge">0</span></button></center>
				    </a>
				  </div>
				<div class="col-xs-6 col-md-3">
				    <a <?php echo (isset($active) && $active == 'quanlynhapxuatkho')?' class="active"':''?>><a href="index.php/quan-ly-kho/quan-ly-nhap-kho" class="thumbnail">
				      <img src="template/backend/image/quanlynhap.jpg" alt="...">
				      <center><button class="btn btn-info" type="button">Yêu Cầu <span class="badge">0</span></button></center>
				    </a>				 
				  </div>
				<div class="col-xs-6 col-md-3">
				    <a <?php echo (isset($active) && $active == 'quanlychuyenkho')?' class="active"':''?>><a href="index.php/quan-ly-kho/quan-ly-chuyen-kho" class="thumbnail">
				      <img src="template/backend/image/chuyenkho.jpg" alt="..." style="height:280px;">
					  
				    </a>				 
				  </div>
				<div class="col-xs-6 col-md-3">
				    <a <?php echo (isset($active) && $active == 'quanlykiemkho')?' class="active"':''?>><a href="index.php/quan-ly-kho/quan-ly-kiem-kho" class="thumbnail">
				      <img src="template/backend/image/kiemkho.jpg" alt="..." style="height:280px;">
				    </a>				 
				  </div>	
			  </div>
			</div>
		</div>
  		

 </div>
