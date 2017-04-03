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
  			 <div class="col-md-6">
  		
  			 </div>
  			<div class="row">
			  <div class="col-md-12" >
			  <div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Sản Phẩm</h3>
				   
				  </div>
				  <div class="panel-body">
				  <div class="col-md-5">
				  		<label class="control-label">Tên Sản Phẩm</label>		  		
						<input class="form-control">			
						<label class="control-label" style="margin-top: 20px;">Ngày Tạo</label>	
					<div id="datetimepicker1" class="input-append date">
				    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
				    <span class="add-on">
				      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				      </i>
				    </span>
				  </div>
				  <label><input type="checkbox" style="margin-top: 20px; "> Sản Phẩm Có Thể Bán</label><br>
			 
				  </div>
				 
				  <div class="col-md-3">
				  		<label class="control-label">Hình Sản Phẩm</label>
				  		
						  <div class="text-center">
				          
				          
				          <input type="file" class="form-control">
				        </div>
				  </div>
				   <div class="col-md-4">
				  		<ul class="list-group">
						   <a class="list-group-item"><span class="badge">0</span><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>  Doanh Số Bán Hàng</a>
						   <a class="list-group-item"><span class="badge">0</span><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Đơn Mua Hàng</a>
						  <a class="list-group-item"><span class="badge">0</span><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Tồn Kho</a>					  						 
						</ul>
				  	</div>		  
				  <div class="col-md-12">
				  	<div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Thông Tin Chung</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Chi Tiết Sản Phẩm</a>
                                </li>
																
                                   
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
     							<div class="col-md-12" id = "ttchung">
     							<form class="form-horizontal">
								  <div class="form-group form-group-sm">
								    <label class="col-sm-2 control-label" for="formGroupInputSmall">Danh Mục</label>
								    <div class="col-sm-9">
								      <select class="form-control input-sm">...</select>
								    </div>
								  </div>
								  <div class="form-group form-group-sm">
								    <label class="col-sm-2 control-label" for="formGroupInputSmall">MÃ</label>
								    <div class="col-sm-9">
								      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Mã">
								    </div>
								  </div>
								 
								  <div class="form-group form-group-sm">
								    <label class="col-sm-2 control-label" for="formGroupInputSmall">Nhà Cung Cấp</label>
								    <div class="col-sm-9">
								      <select class="form-control input-sm">...</select>
								    </div>
								  </div>
								  <div class="form-group form-group-sm">
								    <label class="col-sm-2 control-label" for="formGroupInputSmall">Giá Gốc</label>
								    <div class="col-sm-9">
								      <div class="input-group">
										  <span class="input-group-addon">VNĐ</span>
										  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
										  <span class="input-group-addon">.00</span>
										</div>
								    </div>
								  </div>
								  <div class="form-group form-group-sm">
								    <label class="col-sm-2 control-label" for="formGroupInputSmall">Giá Bán</label>
								    <div class="col-sm-9">
								      <div class="input-group">
										  <span class="input-group-addon">VNĐ</span>
										  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
										  <span class="input-group-addon">.00</span>
										</div>
								    </div>
								  </div>
								  
								 
								</form>

     							</div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                <div class="col-md-12" id = "ttchung">
									<ul class="list-group">
										<li class="list-group-item" style="height: 60px">		
											  <input type="text" class="form-control" placeholder="Loại" style="width: 270px">
											  <input type="text" class="form-control" placeholder="Chi Tiết Loại" style="width: 150px; margin-left: 280px; margin-top: -33px">

											  <div id = "setvitribt">
											  <button type="button" class="btn btn-primary" style="margin-left: 440px; margin-top: -55px">Thêm</button>
											  <button type="button" class="btn btn-primary" style="margin-top: -55px">Xóa Dự Kiến</button>
											</div>	
										</li>
									 </ul>  
									   <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
									  <thead>
										<tr>
												<th>Loại</th>
												<th>Chi Tiết Loại</th>
											</tr>
										</thead>
										<tbody> 
											<tr>
												<td>Màu Sác</td>
												<td>Vàng</td> 
																						
											</tr>
											
											
										</tbody>
											</tr>
									  </table>

									<div class="container">							
									</div> 
     							</div>                         	
                           </div>
						   				   
                        </div>  
				 						
                    </div>
					
				  </div>
				  
				  
				  </div>
				  <ul class="list-group">
					<li class="list-group-item">
						<div id = "setvitribtketqua" style="margin-left: 900px">
						  <button type="button" class="btn btn-primary">Sửa</button>
						  <button type="button" class="btn btn-primary">Xóa Trắng</button>
						  <button type="button" class="btn btn-primary">Lưu</button>
  			 			  
  			 			</div>	
					</li>
				 </ul> 
				</div>
			  </div>
			</div>
    </div><!-- /.container -->
