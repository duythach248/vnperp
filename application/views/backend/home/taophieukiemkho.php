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
			margin-left: 790px;
			margin-top: -15px;
		}
		#setvitribt{
			margin-left: 500px;
			margin-top: -34px;
		}

	</style>
<div class="container">
    	<div class="row">
  			<div class="row">
			  <div class="col-md-12" >
			  <div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Tạo Phiếu Kiểm Kho</h3>
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
				  		<label class="control-label">Tên Nhân Viên</label>		  		
						<select class="form-control">
						  <optgroup label="Khác">
						    <option>Tạo Mới Nhân Viên</option>
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
				  <label class="control-label" style="margin-top: 10px;">Ngày Kiểm</label>	
					<div id="datetimepicker2" class="input-append date">
				    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
				    <span class="add-on">
				      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				      </i>
				    </span>
				  </div>
				  
			 
				  </div>
				 	
				   <div class="col-md-7">
				  		<div class="form-group form-group-sm">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 20px">Kho Kiểm*</label><br>
					    <div class="col-sm-7">
					      <select class="form-control input-sm">...</select>
					    </div>
					  </div>
					 
					  <div class="form-group form-group-sm">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 10px">Ghi Chú</label>
					    <div class="col-sm-7">
					      <select class="form-control input-sm" style="margin-top: 10px">...</select>
					    </div>
					  </div>
					  <div class="form-group form-group-sm">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 10px">Mã Phiếu</label>
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
                                <li class=""><a href="#profile" data-toggle="tab">Thông Tin Kiểm</a>
                                </li>     
                                   
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
     							<div class="col-md-12" id = "ttchung">
     							<ul class="list-group">
									<li class="list-group-item">

										
										  <input type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm Kiểm" style="width: 270px">
										  <input type="text" class="form-control" placeholder="Số Lượng Kiểm Thực" style="width: 210px; margin-left: 280px; margin-top: -33px">
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
				                            <th>Tồn Kho</th> 
											<th>Kiểm Thực Tế</th>
											<th>Chênh Lệch</th>
													

				                        </tr>
				                    </thead>
				                    <tbody> 
				                    	<tr>
				                     		<td>1</td>
				                     		<td>T135074</td>
				                     		<td>Toshiba S600</td>
				                     		<td>60</td>    
											<td>55</td> 
											<td>5</td>
				                     	</tr>                  
				 					</tbody>
				                        </tr>
								  </table>

     							<div class="container">
							 

							</div> 
							<div class="col-md-12">
  
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
