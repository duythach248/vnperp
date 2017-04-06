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
			margin-left: 600px;
			margin-top: -34px;
		}
		
		tr{transition:all .25s ease-in-out}
		tr:hover{background-color: #EEE}


</style>
<div class="container">
    	<div class="row">
		<?php echo validation_errors(); ?>	
  			<div class="row">
			  <div class="col-md-12" >
			   <form class="form-horizontal" action="" method="post">
			   
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Tạo Dự Án</h3>			    
				  </div>
				  <div class="panel-body">
				  <div class="col-md-5">
				  		<label class="control-label">Tên Dự Án</label>		  		
						<input class="form-control" type="text" name="txttenduan" placeholder="Nhập Tên Dự Án" value="<?php echo set_value('txttenduan', $quanly_duan['tenduan']);?>">				
						<label class="control-label" style="margin-top: 10px;">Ngày Bắt Đầu</label>	
					<div id="datetimepicker1" class="input-append date">
				    <input data-format="dd/MM/yyyy hh:mm:ss" type="text" disabled></input>
				    <span class="add-on">
				      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				      </i>
				    </span>
					</div>
				  <label class="control-label" style="margin-top: 10px;">Ngày Kết Thúc</label>	
					<div id="datetimepicker2" class="input-append date">
				    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
				    <span class="add-on">
				      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				      </i>
				    </span>
				  </div>			  		 
				  </div>			 	
				   <div class="col-md-7">
				  		<div class="form-group form-group-sm" style="margin-top: -10px">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top: 20px">Mã Dự Án</label><br>
					    <div class="col-sm-7">
					      <input class="form-control" type="text" name="txtmaduan" placeholder="Nhập Mã Dự Án" value="<?php echo set_value('txtmaduan', $quanly_duan['maduan']); ?>">
					    </div>
					  </div>				
					  <div class="form-group form-group-sm" style="margin-top: -50px">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall" style="margin-top:10px ">Tên Khách Hàng*</label>
					    <div class="col-sm-7"><br>
							<input list="cars"  id="template-desc" style="width: 357px" placeholder="Nhập Tên Khách Hàng" />
							<datalist id="cars">
							  <option value="Tạo Khách Hàng"><a href="sitemap.php">Khách Hàng</a></option>
							</datalist>
							<input id="diachikh" hidden/>
							<input type="text" name="txtofidsp" id="txtofidsp" hidden>
					    </div>
					  </div>
					  <div class="form-group form-group-sm" style="margin-top: -50px">
					    <label class="col-sm-4 control-label" for="formGroupInputSmall">Ghi Chú</label>
					    <div class="col-sm-7">
						  <input class="form-control" type="text" style="margin-top: 10px; Height: 50px" name="txtghichu" placeholder="Ghi Chú" value="<?php echo set_value('txtghichu', ''); ?>">
					    </div>
					  </div>
				  	</div>		  
				  <div class="col-md-12">
				  	<div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Sản Phẩm</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
     							<div class="col-md-12" id = "ttchung">
     							<ul class="list-group">
									<li class="list-group-item">				
										  <input type="text" name="txttensp" id="txttensp" class="form-control" placeholder="Nhập Tên Sản Phẩm" style="width: 270px">
										  <input type="text" name="txtmasp" id="txtmasp" class="form-control" placeholder="Mã SP" style="width: 150px; margin-left: 280px; margin-top: -33px">
										  <input type="text" name="txtsoluong" id="txtsoluong" class="form-control" placeholder="Nhập Số Lượng" style="width: 150px; margin-left: 435px; margin-top: -34px">
										  <div id = "setvitribt">
										  <button type="button" onclick="addRow();" class="btn">Thêm</button>
										  <!--button type="button" onclick="editcell();" class="btn">Sửa</button>
				  			 			  <button type="button" onclick="removercell();" class="btn">Xóa Sản Phẩm</button-->
				  			 			</div>	
									</li>
								 </ul>  
     							   <table id="table" class="table table-bordered table-hover table-condensed">
								  <thead>
								    <tr>		                       
				                            <th>MÃ</th>
				                            <th>TÊN</th>
				                            <th>Số Lượng</th>  
				                            <th></th>  
				                        </tr>
				                    </thead>
				                    <tbody>
									<?php if(isset($list_quanly_duan) && count($list_quanly_duan)){foreach($list_quanly_duan as $key => $val){?>
									<tr>
										<td>
											<input class="form-control" value="<?php echo htmlspecialchars($val['masanpham']);?>" name="masp[]"><input type="hidden" value="<?php echo $val['id'];?>" name="idsp[]">
										</td>
										<td>
											<input class="form-control" value="<?php echo htmlspecialchars($val['tensanpham']);?>" name="tensp[]">
										</td>
										<td>
											<input class="form-control" value="<?php echo htmlspecialchars($val['soluong']);?>" name="soluong[]">
										</td>
										<td><button type="button" onclick="removercell(this, <?php echo $val['id'];?>);" class="btn">Xóa Sản Phẩm</button></td>
									</tr>
									<!--tr>	
										<th><?php echo htmlspecialchars($val['masanpham']);?></th>
										<th><?php echo htmlspecialchars($val['tensanpham']);?></th>					
										<th><?php echo htmlspecialchars($val['soluong']);?></th>
										<th></th>
									</tr-->
								 <?php	}} //else { 		
									//}
								 ?>  											
				 					</tbody>				                    
								  </table>
     							<div class="container">
							</div> 					
     							</div>
                                </div>                    			              
                        </div>                   
                    </div>
				  </div>  
				  </div>
				<ul class="list-group">
					<li class="list-group-item">
						<div id = "setvitribtketqua" style="margin-left: 880px">
						  <button type="button" class="btn btn-primary" <?php echo (isset($active) && $active == 'quanly-duan-quanlyduan')?' class="active"':''?>><a href="index.php/quanly_duan/quanlyduan" style="color:white;">Hủy</a></button>
						  <input type="submit" name="submit" class="btn btn-primary" value="Cập Nhật"/>	 
  			 			</div>	
					</li>
				 </ul>  
				</div>
				</form>
			  </div>
			  
			</div>
			
    </div><!-- /.container -->
	
<script>

	var rIndex,
		table = document.getElementById("table");
		
	//check
	function checkempty(){
		var isEmpty = false,
			txttensp = document.getElementById("txttensp").value,
			txtmasp = document.getElementById("txtmasp").value,
			txtsoluong = document.getElementById("txtsoluong").value;
			
		if(txttensp === ""){
			alert("Sản phẩm không được bỏ trống");
			isEmpty = true;
		}
		else if(txtmasp === ""){
			alert("Mã Sản phẩm không được bỏ trống");
			isEmpty = true;
		}
		else if(txtsoluong === ""){
			alert("Số lượng không được bỏ trống");
			isEmpty = true;
		}
		return isEmpty;
		
	}

	function addRow(){
		if(!checkempty()){
		/*var newRow = table.insertRow(table.length),	
			cell1 = newRow.insertCell(0),
			cell2 = newRow.insertCell(1),
			cell3 = newRow.insertCell(2),				
			txttensp = document.getElementById("txttensp").value,
			txtmasp = document.getElementById("txtmasp").value,
			txtsoluong = document.getElementById("txtsoluong").value;
		
		
		cell1.innerHTML = txttensp;
		cell2.innerHTML = txtmasp;
		cell3.innerHTML = txtsoluong;
		selectedrowtoinput();*/
		$('#table tr:last').after('<tr><td><input class="form-control" value="'+$('#txtmasp').val()+'" name="masp[]"><input type="hidden" value="0" name="idsp[]"></td><td><input class="form-control" value="'+$('#txttensp').val()+'" name="tensp[]"></td><td><input class="form-control" value="'+$('#txtsoluong').val()+'" name="soluong[]"></td><td><button type="button" onclick="removercell(this);" class="btn">Xóa Sản Phẩm</button></td></tr>');
		}
	}
	function selectedrowtoinput(){	
		for (var i = 0; i < table.rows.length; i++){
			table.rows[i].onclick = function(){
				rIndex = this.rowIndex;
				document.getElementById("txttensp").value = this.cells[0].innerHTML;
				document.getElementById("txtmasp").value = this.cells[1].innerHTML;
				document.getElementById("txtsoluong").value = this.cells[2].innerHTML;
			};
		}
	}
	//selectedrowtoinput();
	
	function editcell(){
		
		var txttensp = document.getElementById("txttensp").value,
			txtmasp = document.getElementById("txtmasp").value,
			txtsoluong = document.getElementById("txtsoluong").value;
		if(!checkempty()){	
		table.rows[rIndex].cells[0].innerHTML = txttensp;
		table.rows[rIndex].cells[1].innerHTML = txtmasp;
		table.rows[rIndex].cells[2].innerHTML = txtsoluong;
		}
	}
	
	function removercell(row, id){
		/*table.deleteRow(rIndex);
		document.getElementById("txttensp").value = "";
		document.getElementById("txtmasp").value = "";
		document.getElementById("txtsoluong").value = "";*/
		if (id) {
			if (confirm('Are you sure?')) {
				window.location.href = '<?php echo site_url('index.php/quanly_duan/xoachitietduan');?>/' + id;
			}
		}
		$(row).parent().parent().remove();
	}
	
	

</script>
