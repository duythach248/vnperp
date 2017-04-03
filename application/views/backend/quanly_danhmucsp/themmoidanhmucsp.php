<div class="container">
    	<div class="row">	
  			 <div class="col-md-7">
  			 	<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Danh Mục Sản Phẩm</h3>
				  </div>
				  <div class="panel-body">
				    <form class="form-horizontal" action="" method="post">
					<div class="form-group form-group-sm">
						<?php echo validation_errors(); ?>					
					    <label class="col-sm-3 control-label" for="formGroupInputSmall">Mã Danh Mục*</label>
					    <div class="col-sm-8">
					      <input class="form-control" type="text" name="madmsp" readonly="False" id="formGroupInputLarge1" placeholder="Mã Danh Mục Sản Phẩm" value="<?php echo set_value('madmsp', ''); ?>">				
					    </div>
					  </div>
					  <div class="form-group form-group-sm">							
					    <label class="col-sm-3 control-label" for="formGroupInputSmall">Tên*</label>
					    <div class="col-sm-8">
					      <input class="form-control" type="text" name="tendmsp" id="formGroupInputLarge" placeholder="Nhập Tên" value="<?php echo set_value('tendmsp', ''); ?>" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ-]{4,200}">				
					    </div>
					  </div>
											  
					  <div class="row">
					     <div class="col-md-6 col-md-offset-8">
							<button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-danhmucsp-quanlydanhmucsanpham')?' class="active"':''?>><a href="index.php/quanly_danhmucsp/quanlydanhmucsanpham" style="color:white;">Hủy</a></button>
					     	<input type="submit" name="submit" class="btn btn-primary" value="Thêm Mới"/>
					     </div>
					  </div>
					  
					</form>
					</div>
				</div>
			 </div>
    </div><!-- /.container -->
