<div class="container">
    	<div class="row">	
  			 <div class="col-md-7">
  			 	<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Vai Trò</h3>
				  </div>
				  <div class="panel-body">
				    <form class="form-horizontal" action="" method="post">
					<div class="form-group form-group-sm">
						<?php echo validation_errors(); ?>					
					    <label class="col-sm-3 control-label" for="formGroupInputSmall">Tên Vai Trò*</label>
					    <div class="col-sm-8">
					      <input class="form-control" type="text" name="title" id="formGroupInputLarge1" placeholder="Nhập Tên Vai Trò" value="<?php echo set_value('title', ''); ?>">				
					    </div>
					  </div>
					  <div class="form-group form-group-sm">							
					    <label class="col-sm-3 control-label" for="formGroupInputSmall">Mô Tả Ngắn</label>
					    <div class="col-sm-8">
					      <input style="height: 50px" class="form-control" type="text" name="description" id="formGroupInputLarge" placeholder="Nhập Mô Tả Cho Vai Trò" value="<?php echo set_value('description', ''); ?>">				
					    </div>
					  </div>
					  <?php
					  $permissions = array(
						'Quản Lý Nhân Viên' => array(
							'nhanvien/module' => 'Module',
							'nhanvien/quanlynhanvien' => 'Xem',
							'nhanvien/themmoinhanvien' => 'Thêm Mới',
							'nhanvien/updated' => 'Sửa',	
						),
						'Vai trò' => array(
							'role/module' => 'Module',
							'role/quanlyrole' => 'Xem',
							'role/themmoirole' => 'Thêm Mới',
							'role/updatedrole' => 'Sửa',
							
						),
						'Danh mục sản phẩm' => array(
							'role/module' => 'Module',
							'quanly_danhmucsp/quanlydanhmucsanpham' => 'Xem',
							'quanly_danhmucsp/themmoidanhmucsp' => 'Thêm Mới',
							'quanly_danhmucsp/updatedmsp' => 'Sửa',
						)
					  );
					  $permissions_post = $this->input->post('permissions');
					  if(isset($permissions) && count($permissions)){
						  foreach($permissions as $keyMain => $valMain){
							  echo '<p><label>'.$keyMain.'</label><br>';
						  foreach($valMain as $keyItem => $valItem){
							  echo ' <input style="margin-left: 65px;" type="checkbox" name="permissions[]" value="'.$keyItem.'"'.((isset($permissions_post) && is_array($permissions_post) && in_array($keyItem, $permissions_post))?' checked = "checked"':'').'/>'.$valItem.'';
						  }
							  echo '</p>';
						  } 
					  }
					 
					  ?>
					  
											  
					  <div class="row">
					     <div class="col-md-6 col-md-offset-8">
					     	<input type="submit" name="submit" class="btn btn-primary" value="Thêm Mới"/>
					     </div>
					  </div>
					  
					</form>
					</div>
				</div>
			 </div>
    </div><!-- /.container -->
