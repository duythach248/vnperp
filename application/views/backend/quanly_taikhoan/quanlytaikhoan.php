
<div class="container">
  		<div class="row">
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
			 <form action="" method="post">
  			 <div class="panel panel-primary">
				  <div class="panel-heading">
					<h3 class="panel-title">Bảng Tài Khoản</h3>
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  <table id="example" class="table table-bordered table-hover table-condensed" cellspacing="0" width="100%">
				  <thead>
						<tr>	
							<th>STT</th>
							<th></th>			
                            <th>TÊN TRUY CẬP</th>
							<th>PHÂN QUYỀN</th>
							<th>TRẠNG THÁI</th>
                        </tr>
                    </thead>
					 <tbody> 
						<?php if(isset($list_quanly_taikhoan) && count($list_quanly_taikhoan)){foreach($list_quanly_taikhoan as $key => $val){?>
						<tr>	
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
                            <th><?php echo htmlspecialchars($val['username']);?></th>						
							<th><center>
							<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#myModal">Phân Quyền</button>		
							</center></th>
							<th><?php echo htmlspecialchars($val['trangthai']);?></th>
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
								<input onclick="myFunction()" type="submit" name="submit1" id="sm-alert" class="btn btn-primary" value="Trạng Thái" />
								<input type="submit" name="submit2" id="sm-alert" class="btn btn-primary" value="Reset Password" />
							</div>						
						</div>	
					</li>
				  </ul>
  			 </div>
			</form>
  		</div> 			
  		</div>
 </div>
