<div class="container">
    
  		<div class="row">
  			 <div class="col-md-12">
  			 <nav class="navbar" style="background-color: #E1EFFB;">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  
				      <form class="navbar-form navbar-left">
						<div class="btn-group" role="group" aria-label="...">
						  <div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModa1">
							  Tạo Phiếu Nhập
							</button>
							<!-- Modal -->
							<div class="modal fade" id="myModa1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Chọn hình thức nhập dữ liệu</h4>
								  </div>
								  <div class="modal-body">
									<center>
									<div class="btn-group btn-group-lg" role="group" aria-label="...">					 
									  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>  Import Excel</button>
									  <button type="button" class="btn btn-default" <?php echo (isset($active) && $active == 'taomoisanpham')?' class="active"':''?>><a href="index.php/quan-ly-san-pham/them-san-pham"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Nhập Tay</button>
									  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span><a href=""></a> Quét Code</button>
									</div>
									</center>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-darker" data-dismiss="modal">Đóng</button>					       
								  </div>
								</div>
							  </div>
							</div>
							<!-- Button trigger modal -->	
						</div>
						</div>
						<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default">Xuất Excel</button>
						</div>
						<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default">Xuất PDN</button>
						</div>		
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Nhập">
				        </div>
				        <button type="submit" class="btn btn-default">Tìm Kiếm</button>

				      </form>
				      <ul class="nav navbar-nav navbar-right">				        
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>	
  			 </div> 			
  		</div>
  		<div class="row">
  			 <div class="col-md-12">
  			 <div class="panel panel-primary">
				  <div class="panel-heading">
					<h3 class="panel-title">Bảng Sản phẩm</h3>
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  <table id="example" class="table table-bordered table-hover table-condensed">
				  <thead>
				    <tr>	
							<th><input type="checkbox" /></th>
                            <th>STT</th>						
                            <th>MÃ</th>
                            <th>TÊN</th>
                            <th>HIỆN CÓ</th>
                            <th>Dự Kiến</th>
                            <th>Cần Nhập</th>
							
                            
                        </tr>
                    </thead>                   
                     <tbody>
                     	<tr>
							<!-- check it with your teacher ok! -->
							<td><input type="checkbox" /></td>
                     		<td>1</td>
                     		<td><a href="index.php/quan-ly-san-pham/them-san-pham">PA2560</td>
                     		<td>Áo Phao Người lớn</td>
                     		<td>50</td>
                     		<td><center>40 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										<div>
											<label class="col-sm-3 control-label" for="formGroupInputSmall">Mã SP</label>
											<div class="col-sm-8">
												<input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
											</div>
										</div>
										<div style="margin-top: 45px;">
											<label class="col-sm-3 control-label" for="formGroupInputSmall">Tên SP</label>
											<div class="col-sm-8">
												<input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
											</div>
										</div>
										<div style="margin-top: 90px;">
											<label class="col-sm-3 control-label" for="formGroupInputSmall">Hiện Có</label>
											<div class="col-sm-8">
												<input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
											</div>
										</div >
										<div style="margin-top: 135px;">
											<label class="col-sm-3 control-label" for="formGroupInputSmall">Tổng Dự Kiến</label>
											<div class="col-sm-8">
												<input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
											</div>
										</div>
										<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="margin-top: 200px;">
										  <thead>
											<tr>
													<th>Loại</th>
													<th>Tên</th>  
													<th>Số Lượng</th>  
													<th>Ngày Dự Kiến</th>  
												</tr>
											</thead>
											<tbody> 	
											</tbody>
												</tr>
										</table>
										<div style="margin-top: -10px;">
										<nav aria-label="Page navigation">
										  <ul class="pagination">
											<li>
											  <a href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											  </a>
											</li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li>
											  <a href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											  </a>
											</li>
										  </ul>
										</nav>
										</div>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                     		<td>0</td>
							
                     		
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>2</td>
                            <td>AK47</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>3</td>
                            <td>AK334</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>4</td>
                            <td>AK04</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
							<td>5</td>
                            <td>AK46</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>6</td>
                            <td>M16</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>7</td>
                            <td>MMO12</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                     	</tr>
                        <tr>
							<td><input type="checkbox" /></td>
                            <td>8</td>
                            <td>MMH1</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                           <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                        </tr>
                        <tr>
							<td><input type="checkbox" /></td>
                            <td>9</td>
                            <td>MP4</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
                        </tr>
                        <tr>
							<td><input type="checkbox" /></td>
                            <td>10</td>
                            <td>NM12</td>
                            <td>Áo Phao Người lớn</td>
                            <td>50</td>
                            <td><center>0 |
								<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										Table sẽ ở đây
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center>
							</td>
                            <td>0</td>
							
							
                        </tr>


                     </tbody>   	
				  </table>
				</div>
				  <ul class="list-group">
					<li class="list-group-item" style="height: 50px">
						<div class="row">
							<div class="col-md-9">
								<button type="button" class="btn btn-primary">Xóa</button>
							</div>
							<div class="col-md-3">
								<nav aria-label="Page navigation" style="margin-top: -20px">
								  <ul class="pagination">
									<li>
									  <a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									  </a>
									</li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li>
									  <a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									  </a>
									</li>
								  </ul>
								</nav>
							</div>
						</div>	
					</li>

				  </ul>
  			 </div> 			
  		</div> 			
  		</div>

 </div>
