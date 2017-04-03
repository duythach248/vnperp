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
			margin-left: 850px;
			margin-top: -15px;
		}
		#setvitribt{
			margin-left: 440px;
			margin-top: -34px;
		}

	</style>
<div class="container">
    	<div class="row">
  			<div class="row">
			  <div class="col-md-12" >
			  <div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Tạo Đơn Hàng</h3>
				    <div id="setbutton">
				    	<div class="row">
				        <div class="btn-group btn-breadcrumb">	            
				            <a href="#" class="btn btn-info"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Mới</a>
				            <a href="#" class="btn btn-default"> Đang Xử Lý</a>
				            <a href="#" class="btn btn-default"> Hoàn Thành</a>
				        </div>
					</div>
				    </div>
				  </div>
				  <div class="panel-body">
				  <div class="col-md-5">
				  		<label class="control-label">Tên Khách Hàng</label>		  		
						<select class="form-control">
						  <optgroup label="Khác">
						    <option>Tạo Mới Khách Hàng</option>
						  </optgroup>
						</select>			
						<label class="control-label" style="margin-top: 10px;">Ngày Tạo</label>	
					<div id="datetimepicker1" class="input-append date">
				    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
				    <span class="add-on">
				      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				      </i>
				    </span>
				  </div>
				  
			 
				  </div>
				 	
				   <div class="col-md-7">
				  		<div class="form-group form-group-sm">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 20px">Cửa Hàng*</label><br>
					    <div class="col-sm-7">
					      <select class="form-control input-sm">...</select>
					    </div>
					  </div>
					  
					  <div class="form-group form-group-sm">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 10px">Thanh Toán*</label>
					    <div class="col-sm-7">
					      <select class="form-control input-sm" style="margin-top: 10px">...</select>
					    </div>
					  </div>
					  <div class="form-group form-group-sm">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 10px">Mã Đơn Hàng</label>
					    <div class="col-sm-7">
					    <input class="form-control" id="disabledInput" type="text" placeholder="" disabled style="margin-top: 10px">
					    </div>
					  </div>



				  	</div>		  
				  <div class="col-md-12">
				  	<div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Sản Phẩm</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Thông Tin Giao Hàng</a>
                                </li>     
                                   
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
     							<div class="col-md-12" id = "ttchung">
     							<ul class="list-group">
									<li class="list-group-item">

										
										  <input type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm" style="width: 270px">
										  <input type="text" class="form-control" placeholder="Nhập Số Lượng" style="width: 150px; margin-left: 280px; margin-top: -33px">
										  <div id = "setvitribt">
										  <button type="button" class="btn">Thêm</button>
				  			 			  <button type="button" class="btn">Xóa Sản Phẩm</button>
				  			 			</div>	
									</li>
								 </ul>  
     							   <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
								  <thead>
								    <tr>
				                            <th>STT</th>
				                            <th>MÃ</th>
				                            <th>TÊN</th>
				                            <th>Đơn Giá</th>
				                            <th>Số Lượng</th>  
				                            <th>Thuế</th>           
				                            <th>Thành Tiền</th>
				                        </tr>
				                    </thead>
				                    <tbody> 
				                    	<tr>
				                     		<td>1</td>
				                     		<td>T135074</td>
				                     		<td>Toshiba S600</td>
				                     		<td>TIVI</td>
				                     		<td>2</td>
				                     		<td>VAT</td>
				                     		<td>1200000</td>           
				                     	</tr>                  
				 					</tbody>
				                        </tr>
								  </table>

     							<div class="container">
							 

							</div> 
							<div class="col-md-12">
							<div class="form-group form-group-sm" style="margin-top: 20px">
							    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 1px; margin-left: 480px">Vận Chuyển</label><br>
							    <div class="col-sm-4" style="margin-top: -20px;margin-left: -180px">
							      <div class="input-group">
									  <span class="input-group-addon">$</span>
									  <input class="form-control" type="text" placeholder="" >
									  <span class="input-group-addon">.00</span>
									</div>
							    </div>
							  </div>

								<div class="form-group form-group-sm">
							    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-left: 480px">Thuế</label>
							    <div class="col-sm-4" style="margin-left: -180px">
							      <div class="input-group">
									  <span class="input-group-addon">$</span>
									  <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
									  <span class="input-group-addon">.00</span>
									</div>
							    </div>
							    </div>
							    <div class="form-group form-group-sm">
							    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-left: 480px">Thành Tiền</label>
							    <div class="col-sm-4" style="margin-left: -180px; margin-top: 5px">
							      <div class="input-group">
									  <span class="input-group-addon">$</span>
									  <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
									  <span class="input-group-addon">.00</span>
									</div>
							    </div>
							    </div>
							</div>

     							</div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                <form class="form-horizontal" style="margin-top: 15px">
								   
								  <div class="form-group form-group-sm">
								    <label class="col-sm-2 control-label" for="formGroupInputSmall">Hình Thức </label>
								    <div class="col-sm-9">
								      <select class="form-control input-sm">...</select>
								    </div>
								  </div> 
								</form>
							</div>   			              
                        </div>                   
                    </div>
				  </div>  
				  </div>
				<ul class="list-group">
					<li class="list-group-item">
						<div id = "setvitribtketqua" style="margin-left: 940px">
						  <button type="button" class="btn btn-primary">Lưu</button>
  			 			  <button type="button" class="btn btn-primary">Xác Nhận</button>
  			 			</div>	
					</li>
				 </ul>  
				</div>
			  </div>
			</div>
    </div><!-- /.container -->
