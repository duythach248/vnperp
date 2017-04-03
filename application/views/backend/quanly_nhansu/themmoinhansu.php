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
			margin-left: 350px;
			margin-top: -15px;
		}
	</style>
    <div class="container">
    	<div class="row">
  			<div class="row">
			<?php echo validation_errors(); ?>	
			  <div class="col-md-12" >
			  <div class="panel panel-primary">
				  <div class="panel-heading">	
				    <h3 class="panel-title">Nhân Viên</h3>		    
				  </div>
				  <div class="panel-body">
				  <form class="form-horizontal" action="" method="post">
				  <div class="col-md-3">
				  		<label class="control-label">Tên Đăng Nhập</label>		  		
						<input class="form-control" style="width: 200px" type="text" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}" name="username" value="<?php echo set_value('username', ''); ?>"></br>	</br>	
				  </div>
				   <div class="col-md-3">
				  		<label class="control-label">Họ Và Tên Nhân Viên</label>		  		
						<input class="form-control" type="text" name="txtname" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}" id="formGroupInputLarge1" placeholder="Nhập Họ Và Tên Nhân Viên" value="<?php echo set_value('txtname', ''); ?>"></br>	
				  </div>
				  <div class="col-md-6">
				  		<label class="control-label">Hình Nhân Viên</label>
						  <div class="text-center">			              
				          <input type="file" class="form-control">
				        </div>
				  </div>
				  <div class="col-md-12">
				  	<div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Thông Tin Cá Nhân</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Thông Tin Nhân Viên</a>
                                </li>     
                                   
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
     							<div class="col-md-12" id = "ttchung">
     							
     							<div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">MSNV*</label>
								    <div class="col-sm-8">
									  <input class="form-control" type="text" name="txtmsnv" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}" id="formGroupInputLarge1" placeholder="Nhập Mã Số Nhân Viên" value="<?php echo set_value('txtmsnv', ''); ?>">	
								    </div>
								  </div>
								   <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Chổ Ở HT</label>
								    <div class="col-sm-8">
								      <input class="form-control" type="text" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}" name="txtchoo" id="formGroupInputLarge" placeholder="Nhập Chổ Ở Hiện Tại" value="<?php echo set_value('txtchoo', ''); ?>">
								    </div>
								  </div>
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Quê Quán</label>
								    <div class="col-sm-8">
								      <input class="form-control" type="text" name="txtqq" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}" id="formGroupInputLarge" placeholder="Nhập Quê Quán" value="<?php echo set_value('txtqq', ''); ?>">
								    </div>
								  </div>
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">CMND</label>
								    <div class="col-sm-8">
								      <input class="form-control" id="txtChar" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}" onKeyPress="return isNumberKey(event)" placeholder="Nhập Chứng Minh Nhân Dân" type="text" name="txtcmnd" value="<?php echo set_value('txtcmnd', ''); ?>">
								    </div>
								  </div>
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Email*</label>
								    <div class="col-sm-8">
								      <input class="form-control" type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="formGroupInputLarge" placeholder="Nhập Email" name="txtemail" value="<?php echo set_value('txtemail', ''); ?>">
								    </div>
								  </div>
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Ngày Sinh</label>
								    <div class="col-sm-8">
								      <input class="form-control" type="date" required pattern="[a-zA-Z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{4,200}" id="formGroupInputLarge" placeholder="Nhập Ngày Sinh" name="txtngaysinh" value="<?php echo set_value('txtngaysinh', ''); ?>">
								    </div>
								  </div>						  
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Số Điện Thoại</label>
								    <div class="col-sm-8">
								       <input class="form-control" id="txtChar" required pattern="[0-9]{4,12}" onKeyPress="return isNumberKey(event)" placeholder="Nhập Điện Thoại" type="text" name="txtsdt" value="<?php echo set_value('txtsdt', ''); ?>">
								    </div>
								  </div>	 				
     							</div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                <div class="col-md-12" id = "ttchung">	
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Vai Trò</label>
								    <div class="col-sm-8">							   
										<?php echo form_dropdown('roleid', $dropdown_roleid, 0, 'class="form-control input-sm"');?>
										<?php echo form_error('roleid', '<span class="glyphicon glyphicon-search" aria-hidden="true">', '</span>');?>											
								    </div>
								  </div>	
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Phòng Ban</label>
								    <div class="col-sm-8">							   
										<?php echo form_dropdown('maphongban', $dropdown_phongbanid, 0, ' class="form-control input-sm"');?>
										<?php echo form_error('maphongban', '<span class="glyphicon glyphicon-search" aria-hidden="true">', '</span>');?>	    								    
								    </div>
								  </div>
								  
								  <div class="form-group form-group-sm">
								    <label class="col-sm-3 control-label" for="formGroupInputSmall">Loại Công Việc</label>
								    <div class="col-sm-8">
								        <select class="form-control input-sm" name="txtloaicv" value="<?php echo set_value('txtloaicv', ''); ?>">
											<option value="lcv" aria-hidden="true">- Loại Công Việc -</option>
											<option value="Tv">Thữ Việc</option>
											<option value="Tv">Thực Tập</option>
											<option value="saab">Nhân Viên Chính Thức</option>
										</select>
								    </div>
								  </div>	                                  
                        </div>
                    </div>
				  </div>		  
				  </div>
				</div>	
			  </div>	  
			   <ul class="list-group">
					<li class="list-group-item">
						<div id = "setvitribtketqua" style="margin-left: 850px">
						  <button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-nhanvien-quanlynhanvien')?' class="active"':''?>><a href="index.php/nhanvien/quanlynhanvien" style="color:white;">Hủy</a></button>
						  <input type="submit" name="submit" class="btn btn-primary" value="Thêm Mới"/>	  
  			 			</div>	
					</li>
				 </ul> 
			</form>
			</div>			
    </div><!-- /.container -->

<script language='javascript'>
 <!--
 function isNumberKey(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
 }
 //-->
 </script>