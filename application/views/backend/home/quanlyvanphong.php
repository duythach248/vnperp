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
						  <button type="button" class="btn btn-default" <?php echo (isset($active) && $active == 'taomoivanphong')?' class="active"':''?>><a href="index.php/nhan-su/them-van-phong"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Thêm Mới</a></button>
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
					<h3 class="panel-title">Bảng Văn Phòng</h3>
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  <table id="example" class="table table-bordered table-hover table-condensed">
				  <thead>
				    <tr>	
							<th><input type="checkbox" /></th>
                            <th>STT</th>						
                            <th>TÊN</th>
                            <th>ĐỊA CHỈ</th>
							
					         
                        </tr>
                    </thead>                   
                     <tbody>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>1</td>
                     		<td>Vo Duy Thach</td>
                     		<td>Văn Phòng 32A</td>
							
                     		
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>2</td>
                            <td>Huynh Duy Phuc</td>
                            <td>Văn Phòng 31A Cao Thắng Q3 </td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>3</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>4</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
						
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
							<td>5</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>6</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
							
                     	</tr>
                     	<tr>
							<td><input type="checkbox" /></td>
                     		<td>7</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
							
                     	</tr>
                        <tr>
							<td><input type="checkbox" /></td>
                            <td>8</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
						
                        </tr>
                        <tr>
							<td><input type="checkbox" /></td>
                            <td>9</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
							
                        </tr>
                        <tr>
							<td><input type="checkbox" /></td>
                            <td>10</td>
                            <td>Vo Duy Thach</td>
                            <td>Văn Phòng 32A</td>
							
							
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
     