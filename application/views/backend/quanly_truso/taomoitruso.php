<div class="container">
    	<div class="row">
  			 <div class="col-md-7">
  			 	<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Trụ Sở</h3>
				  </div>
				  <div class="panel-body">
				    <form class="form-horizontal" action="" method="post">
					  <div class="form-group form-group-sm">
					  <?php echo validation_errors(); ?>	
						
					    <label class="col-sm-2 control-label" for="formGroupInputSmall">Mã</label>
					    <div class="col-sm-9">
							<input class="form-control" type="text" readonly="False" name="matruso" id="formGroupInputLarge1" placeholder="Mã Trụ Sở" value="<?php echo set_value('matruso', ''); ?>">
					    </div>
					  </div>
					  <div class="form-group form-group-sm">
					    <label class="col-sm-2 control-label" for="formGroupInputSmall">Tên*</label>
					    <div class="col-sm-9">
					      <input class="form-control" type="text" name="tentruso" id="formGroupInputLarge1" placeholder="Nhập Tên Trụ Sở" value="<?php echo set_value('tentruso', ''); ?>" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}">
					    </div>
					  </div>
						<div class="form-group form-group-sm">
					    <label class="col-sm-2 control-label" for="formGroupInputSmall">Địa Chỉ*</label>
					    <div class="col-sm-9">
					      <input class="form-control" type="text" name="diachi" id="formGroupInputLarge1" placeholder="Nhập Địa Chỉ" value="<?php echo set_value('diachi', ''); ?>" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ/]{4,200}">
					    </div>
					  </div>		  					  
					  					
					  <div class="row">
					     <div class="col-md-6 col-md-offset-8">
							<button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-truso-quanlytruso')?' class="active"':''?>><a href="index.php/quanly_truso/quanlytruso" style="color:white;">Hủy</a></button>
					     	<input type="submit" name="submit" class="btn btn-primary" value="Thêm Mới"/>
					     </div>
					  </div>
					  
					</form>
					</div>
				</div>
			 </div>
    </div><!-- /.container -->
