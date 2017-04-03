<style>
		body {
			padding: 70px 0px;
		}
		#logo{
			height: 245%;
			margin-top: -12px;
			margin-right: -15px;
		}
		#ttchung{
			margin-top: 15px;

		}
		#ctsp{
			margin-top: 15px;
		}
		#setbutton {
			margin-left: 550px;
			margin-top: -15px;
		}
	</style>
<div class="container">
    	<div class="row">
			<?php echo validation_errors(); ?>		
			  <div class="col-md-12" >		  
			  <div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Khách Hàng</h3>
				  </div>
				  <div class="panel-body">
				  <form id="live_form" class="form-horizontal" action="" method="post">
				  <div class="col-md-4">
				  		<label class="control-label">Loại Khách Hàng</label>		  		
						<div class="col-sm-12" style="padding-top: 10px">
							<?php echo form_dropdown('maloaikhachhang', $dropdown_khachhang, $quanly_khachhang['maloaikhachhang'], ' class="form-control input-sm"');?>
							<?php echo form_error('maloaikhachhang', '<span class="glyphicon glyphicon-search" aria-hidden="true">', '</span>');?>
						</div>			
				  </div>		 
				  <div class="col-md-4">			  	
				  </div>
				   <div class="col-md-4">
				  		<ul class="list-group">
						   <a href="#" class="list-group-item"><span class="badge">0</span><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Đơn Hàng</a>
						</ul>
				  	</div>
				<!-- /.set auto -->
				  <div class="col-md-12">
				  	<div class="panel-body">	
						<div class="group">	  
						  <div>
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Họ và Tên*</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="hovaten" id="formGroupInputLarge1" placeholder="Nhập Tên Khách Hàng" value="<?php echo set_value('hovaten', $quanly_khachhang['tenkhachhang']); ?>">
							</div>
						  </div>
						  <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Mã Khách Hàng</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="makhcn" id="formGroupInputLarge1" placeholder="Nhập Email" value="<?php echo set_value('makhcn', $quanly_khachhang['makhachhang']); ?>">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Email</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="email" id="formGroupInputLarge1" placeholder="Nhập Email" value="<?php echo set_value('email', $quanly_khachhang['email']); ?>">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Giới Tính</label>
								<div class="col-sm-9">
								<select class="form-control input-sm" type="select" name="gioitinh" value="<?php echo set_value('gioitinh', $quanly_khachhang['gioitinh']); ?>">
								<option><?php echo set_value('gioitinh', $quanly_khachhang['gioitinh']); ?></option>
								<option>Nam</option>
								<option>Nữ</option>
								</select>
							</div>
						</div>					
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Địa chỉ</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="diachi" id="formGroupInputLarge1" placeholder="Nhập Địa Chỉ" value="<?php echo set_value('diachi', $quanly_khachhang['diachi']); ?>">
							</div>
						</div>	
						<div style="padding-top: 50px" id="feedback_bad" name="feedback_bad">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Số Điện Thoại</label>
								<div class="col-sm-9">
								<input class="form-control" type="sdtcn" name="sdt" id="formGroupInputLarge1" placeholder="Nhập Số Điện Thoại" value="<?php echo set_value('sdt', $quanly_khachhang['sodienthoai']); ?>">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Website</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="website" id="formGroupInputLarge1" placeholder="Nhập Website" value="<?php echo set_value('website', $quanly_khachhang['website']); ?>">
							</div>
						 </div>
						 <div style="padding-top: 50px"id="feedback_ok" name="feedback_ok">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">FAX</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="FAX" id="formGroupInputLarge1" placeholder="Nhập Mã FAX" value="<?php echo set_value('FAX', $quanly_khachhang['fax']); ?>">
							</div>
						 </div>
						<div class="row" style="padding-top: 50px">
					     <div class="col-md-6 col-md-offset-8">
							<button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-khachhang-quanlykhachhang')?' class="active"':''?>><a href="index.php/quanly_khachhang/quanlykhachhang" style="color:white;">Hủy</a></button>
					     	<input type="submit" name="submit" class="btn btn-primary" value="Cập Nhât"/>
					     </div>
						</div>
						</div>								
					                           
                    </div>
				  </div>				  
				 </div>
				   
				</div>
				</form>				
			  </div>
			
    </div><!-- /.container -->

