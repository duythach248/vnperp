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
						<div class="radio">
						  <input type="hidden" type="radio" name="myradio" value="1" <?php echo  set_radio('myradio', '1', TRUE); ?> />	
						  <input type="hidden" type="radio" name="myradio2" value="2" <?php echo  set_radio('myradio2', '2', TRUE); ?> />						  
						  <label><input name="rating" type="radio" value="Bad">Cá Nhân</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="rating" value="Good">Khách Hàng Công Ty</label>
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
						<div class="group hidden">	  
						  <div>
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Họ và Tên*</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="hovaten" id="formGroupInputLarge1" placeholder="Nhập Họ Và Tên" value="<?php echo set_value('hovaten', ''); ?>">
							</div>
						  </div>
						  <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Mã Khách Hàng</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="makhcn" id="formGroupInputLarge1" placeholder="Nhập Email Cá Nhân" value="<?php echo set_value('makhcn', ''); ?>">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Email</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="emailcanhan" id="formGroupInputLarge1" placeholder="Nhập Email Cá Nhân" value="<?php echo set_value('emailcanhan', ''); ?>">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Giới Tính</label>
								<div class="col-sm-9">
								<select class="form-control input-sm" type="select" name="gioitinh" value="<?php echo set_value('gioitinh', ''); ?>">
								<option>Nam</option>
								<option>Nữ</option>
								</select>
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Ngày sinh</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Ngày Sinh">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Địa chỉ</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="diachicn" id="formGroupInputLarge1" placeholder="Nhập Địa Chỉ" value="<?php echo set_value('diachicn', ''); ?>">
							</div>
						</div>	
						<div style="padding-top: 50px" id="feedback_bad" name="feedback_bad">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Số Điện Thoại</label>
								<div class="col-sm-9">
								<input class="form-control" type="sdtcn" name="sdtcn" id="formGroupInputLarge1" placeholder="Nhập Số Điện Thoại" value="<?php echo set_value('sdtcn', ''); ?>">
							</div>
						</div>
						<div class="row" style="padding-top: 50px">
					     <div class="col-md-6 col-md-offset-8">
							<button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-khachhang-quanlykhachhang')?' class="active"':''?>><a href="index.php/quanly_khachhang/quanlykhachhang" style="color:white;">Hủy</a></button>
					     	<input type="submit" name="submit2" class="btn btn-primary" value="Thêm Mới"/>
					     </div>
						</div>
						</div>		
						<!-- /.form2 company -->
						<div class="group hidden">					
						 <div>
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Tên*</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="tencty" id="formGroupInputLarge1" placeholder="Nhập Tên Công Ty" value="<?php echo set_value('tencty', ''); ?>">
							</div>
						 </div>
						 <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Mã Khách Hàng*</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="macty" id="formGroupInputLarge1" placeholder="Nhập Địa Chỉ Công Ty" value="<?php echo set_value('macty', ''); ?>">
							</div>
						 </div>
						 <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Địa Chỉ*</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="diachicty" id="formGroupInputLarge1" placeholder="Nhập Địa Chỉ Công Ty" value="<?php echo set_value('diachicty', ''); ?>">
							</div>
						 </div>
						 <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Website</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="website" id="formGroupInputLarge1" placeholder="Nhập Website" value="<?php echo set_value('website', ''); ?>">
							</div>
						 </div>
						 <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">SĐT</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="sdtcty" id="formGroupInputLarge1" placeholder="Nhập Số Điện Thoại Công Ty" value="<?php echo set_value('sdtcty', ''); ?>">
							</div>
						 </div>
						 <div style="padding-top: 50px"id="feedback_ok" name="feedback_ok">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">FAX</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" name="FAX" id="formGroupInputLarge1" placeholder="Nhập Mã FAX" value="<?php echo set_value('FAX', ''); ?>">
							</div>
						 </div>
						<div class="row" style="padding-top: 50px">
					     <div class="col-md-6 col-md-offset-8">
							<button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-khachhang-quanlykhachhang')?' class="active"':''?>><a href="index.php/quanly_khachhang/quanlykhachhang" style="color:white;">Hủy</a></button>
					     	<input type="submit" name="submit1" class="btn btn-primary" value="Thêm Mới"/>
					     </div>
						</div>
						 </div>
						<!-- /.form3 project -->							
					                           
                    </div>
				  </div>				  
				 </div>
				   
				</div>
				</form>				
			  </div>
			
    </div><!-- /.container -->
<script type="text/javascript" src="template/backend/js/jquery.min.js"></script>
<script>
		$( document ).ready(function() {
		var testimonial_ok=false;
		//Inputs that determine what fields to show
		var rating = $('#live_form input:radio[name=rating]');
		var testimonial=$('#live_form input:radio[name=testimonial]');				
		
		//Wrappers for all fields
		var bad = $('#live_form div[name="feedback_bad"]').parent();
		var ok = $('#live_form div[name="feedback_ok"]').parent();

		var all= bad.add(ok);
		
		rating.change(function(){
			var value=this.value;						
			all.addClass('hidden'); //hide everything and reveal as needed
			
			if (value == 'Bad'){
				bad.removeClass('hidden');								
			}
			else if (value == 'Good'){
				ok.removeClass('hidden');
			}
		});	
		testimonial.change(function(){
			all.addClass('hidden'); 
			testimonial_parent.removeClass('hidden');
		
			testimonial_ok=this.value;
			
			if (testimonial_ok == 'yes'){
				great.removeClass('hidden');
			}
			else{
				thanks_anyway.removeClass('hidden');
			}
		});
});
</script>

