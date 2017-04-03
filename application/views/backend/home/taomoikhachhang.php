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
  			<div class="row">
			  <div class="col-md-12" >
			  <div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Khách Hàng</h3>
				   
				  </div>
				  <div class="panel-body">
				  <form id="live_form">
				  <div class="col-md-4">
				  		<label class="control-label">Loại Khách Hàng</label>		  		
						<div class="radio">
						  <label><input name="rating" type="radio" value="Bad">Cá Nhân</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="rating" value="Good">Khách Hàng Công Ty</label>
						</div>
						
				  </div>
				 
				  <div class="col-md-4">
				  		<label class="control-label" style="margin-top: -10px;">Ngày Tạo</label>	
					<div id="datetimepicker1" class="input-append date">
				    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
				    <span class="add-on">
				      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				      </i>
				    </span>
				  </div>
				  </div>
				   <div class="col-md-4">
				  		<ul class="list-group">
						   <a href="#" class="list-group-item"><span class="badge">0</span><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Đơn Hàng</a>
						</ul>
				  	</div>
				<!-- /.set auto -->
				  <div class="col-md-12">
				  	<div class="panel-body">
						<div class="form-group hidden">
						  <div>
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Họ và Tên*</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Họ Và Tên">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Email</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Email">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Giới Tính</label>
								<div class="col-sm-9">
								<select class="form-control input-sm">...</select>
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
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Địa Chỉ">
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Tỉnh / Thành</label>
								<div class="col-sm-9">
								<select class="form-control input-sm">...</select>
							</div>
						</div>
						<div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Quận/Huyện</label>
								<div class="col-sm-9">
								<select class="form-control input-sm">...</select>
							</div>
						</div>
						<div style="padding-top: 50px" id="feedback_bad" name="feedback_bad">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Công ty</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Công Ty">
							</div>
						</div>
							
						</div>
						<!-- /.form2 company -->
						<div class="form-group hidden">					
						 <div>
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Tên*</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Tên Công Ty">
							</div>
						 </div>
						 <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Địa Chỉ*</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Địa Chỉ">
							</div>
						 </div>
						 <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">Website</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Website">
							</div>
						 </div>
						 <div style="padding-top: 50px">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">SĐT</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập SĐT">
							</div>
						 </div>
						 <div style="padding-top: 50px"id="feedback_ok" name="feedback_ok">
							<label class="col-sm-2 control-label" for="formGroupInputSmall">FAX</label>
								<div class="col-sm-9">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập FAX">
							</div>
						 </div>
										
						 </div>
						<!-- /.form3 project -->	
						








						
					</form>
                            

                               
                    </div>
				  </div>				  
				 </div>
				 <ul class="list-group">
					<li class="list-group-item">
						<div id = "setvitribtketqua" style="margin-left: 920px">
						  <button type="button" class="btn btn-primary">Thêm</button>
  			 			  <button type="button" class="btn btn-primary">Xóa Thông Tin</button>
  			 			</div>	
					</li>
				 </ul>  
				</div>
			  </div>
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

