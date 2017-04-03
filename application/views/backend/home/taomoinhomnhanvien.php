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
  			<div class="row">
			  <div class="col-md-12" >
			  <div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Thêm Nhóm Nhân Viên</h3>
				   
				  </div>
				  <div class="panel-body">
				  <div class="col-md-12">
				  <div class="panel-body">
				    <form class="form-horizontal">
					  <div class="form-group form-group-sm">
					    <label class="col-sm-2 control-label" for="formGroupInputSmall">Tên*</label>
					    <div class="col-sm-9">
					      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Tên">
					    </div>
					  </div>
					  <div class="form-group form-group-sm">
					    <label class="col-sm-2 control-label" for="formGroupInputSmall">MÃ</label>
					    <div class="col-sm-9">
					      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Mã">
					    </div>
					  </div>
					  <div class="form-group form-group-sm">
					    <label class="col-sm-2 control-label" for="formGroupInputSmall">Mô Tả</label>
					    <div class="col-sm-9">
					      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nhập Mô Tả">
					    </div>
					  </div>
					  
					 
					</form>
					</div>

				  	</div>		  
				  <div class="col-md-12">
				  	<div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Chi Tiết Nhóm</a>
                                </li>
                                   
                                   
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
     							<div class="col-md-12" id = "ttchung">
     							<form class="form-horizontal">
								 <div class="form-group form-group-sm">
									<label class="col-sm-2 control-label" for="formGroupInputSmall">Rule</label>
									<div class="col-sm-9">
									  <select class="form-control input-sm">...</select>
									</div>
								  </div>
								  <div class="form-group form-group-sm">
									<label class="col-sm-2 control-label" for="formGroupInputSmall">Nhân Viên</label>
									<div class="col-sm-9">
									  <select class="form-control input-sm">...</select>
									</div>
								  </div>			
								  <div class="row">
									 <div class="col-md-6 col-md-offset-7">
										<button type="button" class="btn btn">Thêm Nhân Viên</button>
									 </div>
								  </div>
								  <br><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Rule</th>
											<th>Loại</th> 
											<th>Trụ Sở</th>       
													  
										</tr>
									</thead>
									<tbody>                   
								</tbody>
									</tr>
							  </table></br>

								</form>

     							</div>
                                </div>                         
                        </div>  
				 						
                    </div>
					
				  </div>
				  
				  
				  </div>
				  <ul class="list-group">
					<li class="list-group-item">
						<div id = "setvitribtketqua" style="margin-left: 940px">
						  <button type="button" class="btn btn-primary">Thêm</button>
  			 			  <button type="button" class="btn btn-primary">Xóa Thông Tin</button>
  			 			</div>	
					</li>
				 </ul> 
				</div>
			  </div>
			</div>
    </div><!-- /.container -->
