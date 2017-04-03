<div class="container">
    	<div class="row">
  			 <div class="col-md-7">
  			 	<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Phòng Ban</h3>
				  </div>
				  <div class="panel-body">
					<form class="form-horizontal" action="" method="post">
					  <div class="form-group form-group-sm">
					  <?php echo validation_errors(); ?>	
						<label class="col-sm-2 control-label" for="formGroupInputSmall">Mã*</label>
					    <div class="col-sm-9">
					      <input class="form-control" type="text" name="mapb" readonly="False" id="formGroupInputLarge1" placeholder="Mã Phòng Ban" value="<?php echo set_value('mapb', $quanly_phongban['maphongban']); ?>">
					    </div>
						<div style="padding-top:40px">
					    <label class="col-sm-2 control-label" for="formGroupInputSmall">Tên*</label>
					    <div class="col-sm-9">
					      <input class="form-control" type="text" name="tenpb" id="formGroupInputLarge1" placeholder="Nhập Tên Phòng Ban" value="<?php echo set_value('tenpb', $quanly_phongban['tenphongban']); ?>" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}">
					    </div>
						</div>	
						<div style="padding-top:40px">
						<label class="col-sm-2 control-label" for="formGroupInputSmall">Trụ Sở*</label>
					    <div class="col-sm-9">
					      <p>
							<?php echo form_dropdown('matruso', $dropdown_trusoid, $quanly_phongban['matruso'], ' class="form-control input-sm"');?>
							<?php echo form_error('matruso', '<span class="glyphicon glyphicon-search" aria-hidden="true">', '</span>');?>
						  </p>
					    </div>	
						<div>						
					     <div class="row">
					     <div class="col-md-6 col-md-offset-8">
							<button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-phongban-quanlyphongban')?' class="active"':''?>><a href="index.php/quanly_phongban/quanlyphongban" style="color:white;">Hủy</a></button>
					     	<input type="submit" name="submit" class="btn btn-primary" value="Cập Nhật"/>
					     </div>
					  </div>
					  </div>		  		  
					  </div>									 			  
					</form>
					</div>
				</div>
			 </div>
    </div>
