<style>
		body {
			padding: 55px 0px;
		}


</style>
<div class="container">
  		<div class="row">
  			 <div class="col-md-6">
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
									  <button type="button" class="btn btn-default" <?php echo (isset($active) && $active == 'quanly-sanpham-themmoisanpham')?' class="active"':''?>><a href="index.php/quanly_sanpham/themmoisanpham"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Nhập Tay</button>
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
				      </form>
				      <ul class="nav navbar-nav navbar-right">				        
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>	
  			 </div>
			 <div class="col-md-6">
			 <?php echo validation_errors(); ?>
			 <?php
			$message_flashdata = $this->session->flashdata('message_flashdata');
			if(isset($message_flashdata) && count($message_flashdata)){
				if($message_flashdata['type'] == 'successful'){
				?>
					<div class="alert alert-success alert-dismissible" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $message_flashdata['message'] ?>
					</div>
					<?php
				}
				else if($message_flashdata['type'] == 'error'){
				?>
					<div class="alert alert-danger alert-dismissible" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $message_flashdata['message'] ?>
					</div>
					<?php
				}
			}
			?>
			 </div>
  		</div>
  		<div class="row">
			 <form action="" method="post">
  			 <div class="col-md-12" style="margin-top: -15px;">
  			 <div class="panel panel-primary">
				  <div class="panel-heading">
					<h3 class="panel-title">Bảng Sản phẩm</h3>
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  
				  <table id="example" class="table table-bordered table-hover table-condensed">
				  <thead>
				    <tr>	
							<th>STT</th>
							<th></th>                  						
                            <th>MÃ</th>
                            <th>TÊN</th>
                            <th>HIỆN CÓ</th>
                            <th>Dự Kiến</th>
                            <th>Cần Nhập</th>
                    </tr>
                    </thead>                   
                     <tbody>
                     	<?php if(isset($list_quanly_sanpham) && count($list_quanly_sanpham)){foreach($list_quanly_sanpham as $key => $val){?>
						<tr>
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>	
                            <th><a href="index.php/quanly_sanpham/updatesanpham/<?php echo $val['id'];?>"><?php echo htmlspecialchars($val['masanpham']);?></th>						
                            <th><?php echo htmlspecialchars($val['tensanpham']);?></th>
							<th><?php echo htmlspecialchars($val['hienco']);?></th>
							<th><center><?php echo htmlspecialchars($val['dukien']);?>
							<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Chi Tiết</button>
							<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Chi Tiết Sản Phẩm</h4>
									  </div>
									  <div class="modal-body">
										<div>				
											<div class="col-sm-12">
												<label class="control-label" for="formGroupInputSmall">Mã SP</label>
												<input class="form-control" id="disabledInput" type="text" style="width: 120px" disabled>
												<label class="control-label" for="formGroupInputSmall">Tên SP</label>
												<input class="form-control" id="disabledInput" type="text" disabled>
												<label class="control-label" for="formGroupInputSmall">Hiện Có</label>
												<input class="form-control" id="disabledInput" type="text" style="width: 110px" disabled>
												<label class="control-label" for="formGroupInputSmall">Dự Đoán</label>
												<input class="form-control" id="disabledInput" type="text" style="width: 110px" disabled>
											</div>
										</div>
										<div style="margin-top: 60px;">
										<table id="example1" class="table table-bordered table-hover table-condensed">
										  <thead>
											<tr>	
													<th>STT</th>
													<th>Loại</th>
													<th>Tên</th>  
													<th>Số Lượng</th>  
													<th>Ngày Dự Kiến</th>  
											</tr>
											</thead>
											<tbody> 
											</tbody>
										</table>
										</div>
										</div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>						
									  </div>
									</div>
								  </div>
								</div>
							</center></th>
							<th><?php echo htmlspecialchars($val['cannhap']);?></th>
                        </tr>
					 <?php	}} //else { 		
						//}
					 ?>
                     </tbody>   	
				  </table>
				</div>
				  <ul class="list-group">
					<li class="list-group-item" style="height: 50px">
						<div class="row">
							<div class="col-md-9">
								<input onclick="myFunction()" type="submit" name="submit" id="sm-alert" class="btn btn-primary" value="Xóa Dữ Liệu" />
							</div>
						</div>	
					</li>

				  </ul>
  			 </div> 			
  		</div> 			
  		</div>
		</form>

 </div>
