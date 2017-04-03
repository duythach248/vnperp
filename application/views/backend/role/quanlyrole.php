
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
						  <button type="button" class="btn btn-default" <?php echo (isset($active) && $active == 'quanly-role-themmoirole')?' class="active"':''?>><a href="index.php/role/themmoirole"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Thêm Mới</a></button>
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
					<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $message_flashdata['message'] ?>
					</div>
					<?php
				}
				else if($message_flashdata['type'] == 'error'){
				?>
					<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $message_flashdata['message'] ?>
					</div>
					<?php
				}
			}
			?>		
			</div>		
  		</div>
  		<div class="row">
  			 <div class="col-md-12">
			 <form action="" method="post">
  			 <div class="panel panel-primary">
				  <div class="panel-heading">
					<h3 class="panel-title">Bảng Vai Trò</h3>
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  <table id="example" class="table table-bordered table-hover table-condensed" cellspacing="0" width="100%">
				  <thead>
						<tr>	
							<th>STT</th>
							<th><input type="checkbox" value="<?php echo $val['id'];?>" /></th>
                            <th>TÊN VAI TRÒ</th>
							<th>THÀNH VIÊN</th>
                            <th>CREATED</th>
							<th>UPDATED</th>
                        </tr>
                    </thead>
					 <tbody> 
				     <?php if(isset($list_role) && count($list_role)){foreach($list_role as $key => $val){?>
						<tr>	
							<th></th>
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
							<th><a href="index.php/role/updatedrole/<?php echo $val['id'];?>"><?php echo htmlspecialchars($val['title']);?></th>
							<th><?php echo $val['count_nhanvien'];?></th>
                            <th><?php echo gmdate('H:i:s d/m/y', strtotime($val['created']));?></th>
							<th><?php echo gmdate('H:i:s d/m/y', strtotime($val['updated']));?></th>           
                        </tr>
					 <?php	}} //else { 		
						//}
					 ?>  
					<tbody>
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
			</form>
  		</div> 			
  		</div>
 </div>
