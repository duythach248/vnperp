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
						  <button type="button" class="btn btn-default" <?php echo (isset($active) && $active == 'quanly-duan-themmoiduan')?' class="active"':''?>><a href="index.php/quanly_duan/themmoiduan"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Thêm Mới</a></button>
						</div>			    
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
					<h3 class="panel-title">Dự Án</h3>
				  </div>
				  <div class="panel-body">
				  <!-- Table -->
				  <table id="example" class="table table-bordered table-hover table-condensed">
				  <thead>
				    <tr>	
							
                            <th>STT</th>
							<th></th>							
                            <th>MÃ DỰ ÁN</th>
                            <th>TÊN DỰ ÁN</th>
                            <th>NGÀY BẮT ĐẦU</th>
							<th>NGÀY KẾT THÚC</th>
							<th>TRẠNG THÁI</th>       
                        </tr>
                    </thead>                   
                     <tbody>
					 <?php if(isset($list_quanly_duan) && count($list_quanly_duan)){foreach($list_quanly_duan as $key => $val){?>
						<tr>	
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
							<th><input type="checkbox" name="checkbox[]" value="<?php echo $val['id'];?>" /></th>
                            <th><a href="index.php/quanly_duan/capnhatduan/<?php echo $val['id'];?>"><?php echo htmlspecialchars($val['maduan']);?></th>						
							<th><?php echo htmlspecialchars($val['tenduan']);?></th>
							<th><?php echo htmlspecialchars($val['ngaytao']);?></th>
							<th><?php echo htmlspecialchars($val['ngayketthuc']);?></th>
							<th><center><?php echo htmlspecialchars($val['trangthai']);?></center></th>
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
								<button type="button" class="btn btn-primary">Xóa</button>
							</div>				
						</div>	
					</li>

				  </ul>
  			 </div> 			
  		</div> 			
  		</div>

 </div>
