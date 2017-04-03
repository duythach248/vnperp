<div class="container">
    	<div class="row">
  			 <div class="col-md-8">
	  		<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">MENU</h3>
			  </div>
			  <div class="panel-body">
			    <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="template/backend/image/hinhgiohang.jpg" alt="...">
				    </a>
				  </div>
				<div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="template/backend/image/taodonhang.jpg" alt="...">
				    </a>				 
				  </div>
				<div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="template/backend/image/khachhang.jpg" alt="...">
				    </a>				 
				  </div>
				<div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="template/backend/image/baocao.jpg" alt="...">
				    </a>				 
				  </div>
				<div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="template/backend/image/kho.jpg" alt="...">		
				    </a>				 
				  </div>
				
				
				
			  </div>
			</div>
		</div>
  		<div class="col-md-4">
			 <?php
				$message_flashdata = $this->session->flashdata('message_flashdata');
				if(isset($message_flashdata) && count($message_flashdata)){
					if($message_flashdata['type'] == 'successful'){
					?>
						<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $message_flashdata['message']?>
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
  			 <div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Thông Báo</h3>
				
			  </div>
			  <div class="panel-body">
					  
			  </div>		  
			</div>	
			</div>
  		</div>
</div>