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
						  <button type="button" class="btn btn-default" <?php echo (isset($active) && $active == 'quanly-nhanvien-themmoinhanvien')?' class="active"':''?>><a href="index.php/nhanvien/themmoinhanvien"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Thêm Mới</a></button>
					  </div>		      
				      </form>
				      <ul class="nav navbar-nav navbar-right">				        
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>	
  			 </div>
			 <div class="col-md-6">
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
  			 <div class="col-md-12">
  			 <div class="panel panel-primary">
				  <div class="panel-heading">
					<h3 class="panel-title">Bảng Nhân Viên</h3>
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  <table id="example" class="table table-bordered table-hover table-condensed">
				  <thead>
				    <tr>	
							<th>STT</th>
							<th><input type="checkbox" value="<?php echo $val['id'];?>" /></th>				
                            <th>HỌ VÀ TÊN</th>
							<th>VAI TRÒ</th>
                            <th>MÃ</th>
							<th>EMAIL</th>
							<th>NƠI Ở</th>
							<th>SĐT</th>
							<th>CMND</th>
							<th>NGÀY SINH</th>
							

							
                        </tr>
                    </thead>                   
                     <tbody>
						<?php if(isset($list_nhanvien) && count($list_nhanvien)){foreach($list_nhanvien as $key => $val){?>
						<tr>	
							<th></th>
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
							<th><a href="index.php/nhanvien/updated/<?php echo $val['id'];?>"><?php echo htmlspecialchars($val['fullname']);?></th>
							<th><?php echo htmlspecialchars($val['role']);?></th>
							<th><?php echo htmlspecialchars($val['msnv']);?></th>
							<th><?php echo htmlspecialchars($val['email']);?></th>
							<th><?php echo htmlspecialchars($val['choohientai']);?></th>
							<th><?php echo htmlspecialchars($val['sodienthoai']);?></th>
							<th><?php echo htmlspecialchars($val['cmnd']);?></th>
                            <th><?php echo gmdate('d/m/y', strtotime($val['ngaysinh']));?></th>     
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
										
						</div>	
					</li>

				  </ul>
  			 </div> 			
  		</div> 			
  		</div>

 </div>