<html>  
<head>  
	<title>SPT 1770S | Politeknik Negeri Batam</title> 
	<link href="../assets/img/logo.png" rel="icon">
	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="jquery.min.js"></script>  
	<script src="jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>  

</head>  
<body class="bg-body"> 
	<?php include'../header.html'; ?>
	<br/>
	<div class="container box">
		<br/>
		
		
		<ul class="nav nav-tabs">  
			<li class="nav-item">
				<a href="arsip_spt.php">Arsip SPT</a>
			</li>
			<li class="nav-item" style="background-color: #f5f5f5;">
				<a href="buat_spt.php" style="color: #191970;">Buat SPT</a>
			</li>
			<li class="nav-item">
				<a href="draf_spt.php">Draft SPT</a>
			</li>
			<li class="nav-item">
				<a href="bantuan_spt.php">Bantuan</a>
			</li>
		</ul>

		<!-- tab content -->
		<div class="tab-content">
			<!-- tab pane -->
			<div class="tab-pane active" id="lapor_detail" >

				<!-- panel -->
				<div class="panel panel-default">
					<!-- panel body -->
					<div class="panel-body">
						<!-- Card bg-->
						<div class="card bg-light mb-3" style="width:735px; background-color: white;">

							<!-- card header -->
							<div class="card-header card-header_1">
								<i class="fas fa-file mr-1"></i>
								<b>SPT 1770 SS</b>
							</div>
							<!-- end card header -->

							<!-- card body -->
							<div class="card-body card-body_2">  
								<p class="p_text_2 card_7"></p>


								<!-- progress bar -->
								<div class="progress">
									<div class="progress-bar progress-bar-striped" style="width:38.89%; background-color: rgb(255, 157, 49);"><small>38.89%</small></div>
								</div>

								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 7 dari 18</small></p><br/>
								<!-- end progress bar -->

								<!-- Pertanyaan -->
								<p><b>Apakah Anda memiliki penghasilan yang pajaknya sudah dipotong secara final?</b></p>

								<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
									<div class="form-check">
										<input class="f
										orm-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="yes" value="option1">
										<label class="form-check-label" for="exampleRadios">Ya</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="no" value="option2">
										<label class="form-check-label" for="exampleRadios">
											Tidak
										</label>
									</div>
								</div>
								<!-- end pertanyaan -->

								<!-- jika pertanyaan ys -->
								<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
									<div class="form-check">
										<span id="ifYes" style="display:none" >

											<div align="right" style="margin-bottom:5px;">
												<button type="button"  name="add" id="add" class="btn btn-success btn-xs" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;" data-toggle="modal" data-target="#exampleModal">Tambah +</button>
											</div>
											<br/>
											<div class="table-responsive" id="user_data"></div>
											<br/>
										</span>
									</div>
								</div>
								<!-- end jika pertanyaan ya -->

								<!-- button sebelum dan selanjutnya-->
								<hr>
								<div class="form-group row" style="padding-bottom: 	15px">
									<div class="col-sm-6">
										<a href="halaman6.php">
											<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
										</div>
										<div class="col-sm-6" style="padding-left: 253px;">
											<a href="halaman8.php">
												<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
											</div>
										</div>
										<!-- end button sebelum dan selanjutnya-->


										<!DOCTYPE html>  
										<html>  
										<head>  
											<title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
											<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
											<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
											<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
										</head>  
										<body>  
											<br /><br />  
											<div class="container" style="width:700px;">  
												<h3 align="center">PHP Ajax Update MySQL Data Through Bootstrap Modal</h3>  
												<br />  
												<div class="table-responsive">  
													<div align="right">  
														<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
													</div>  
													<br />  
													<div id="employee_table">  
														<table class="table table-bordered">  
															<tr>  
																<th width="70%">Employee Name</th>  
																<th width="15%">Edit</th>  
																<th width="15%">View</th>  
															</tr>  
															<?php  
															while($row = mysqli_fetch_array($result))  
															{  
																?>  
																<tr>  
																	<td><?php echo $row["name"]; ?></td>  
																	<td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
																	<td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
																</tr>  
																<?php  
															}  
															?>  
														</table>  
													</div>  
												</div>  
											</div>  
										</body>  
										</html>  
										<div id="dataModal" class="modal fade">  
											<div class="modal-dialog">  
												<div class="modal-content">  
													<div class="modal-header">  
														<button type="button" class="close" data-dismiss="modal">&times;</button>  
														<h4 class="modal-title">Employee Details</h4>  
													</div>  
													<div class="modal-body" id="employee_detail">  
													</div>  
													<div class="modal-footer">  
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
													</div>  
												</div>  
											</div>  
										</div>  
										<div id="add_data_Modal" class="modal fade">  
											<div class="modal-dialog">  
												<div class="modal-content">  
													<div class="modal-header">  
														<button type="button" class="close" data-dismiss="modal">&times;</button>  
														<h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
													</div>  
													<div class="modal-body">  
														<form method="post" id="insert_form">  
															<label>Enter Employee Name</label>  
															<input type="text" name="name" id="name" class="form-control" />  
															<br />  
															<label>Enter Employee Address</label>  
															<textarea name="address" id="address" class="form-control"></textarea>  
															<br />  
															<label>Select Gender</label>  
															<select name="gender" id="gender" class="form-control">  
																<option value="Male">Male</option>  
																<option value="Female">Female</option>  
															</select>  
															<br />  
															<label>Enter Designation</label>  
															<input type="text" name="designation" id="designation" class="form-control" />  
															<br />  
															<label>Enter Age</label>  
															<input type="text" name="age" id="age" class="form-control" />  
															<br />  
															<input type="hidden" name="employee_id" id="employee_id" />  
															<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
														</form>  
													</div>  
													<div class="modal-footer">  
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
													</div>  
												</div>  
											</div>  
										</div>  



										


									</div>
									<!-- end card body -->
								</div>
								<!-- end card -->
							</div>
							<!-- end panel body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end tab pane -->
				</div>
				<!-- end tab content -->
			</div> 
			<!-- enc container box -->
			<script type="text/javascript"> 
				function yesnoCheck() {

					if(document.getElementById('yes').checked) {
						document.getElementById('ifYes').style.display = 'block';
					}
					else document.getElementById('ifYes').style.display = 'none';
				}

				$(document).ready(function(){  
					$('#add').click(function(){  
						$('#insert').val("Insert");  
						$('#insert_form')[0].reset();  
					});  
					$(document).on('click', '.edit_data', function(){  
						var employee_id = $(this).attr("id");  
						$.ajax({  
							url:"fetch.php",  
							method:"POST",  
							data:{employee_id:employee_id},  
							dataType:"json",  
							success:function(data){  
								$('#name').val(data.name);  
								$('#address').val(data.address);  
								$('#gender').val(data.gender);  
								$('#designation').val(data.designation);  
								$('#age').val(data.age);  
								$('#employee_id').val(data.id);  
								$('#insert').val("Update");  
								$('#add_data_Modal').modal('show');  
							}  
						});  
					});  
					$('#insert_form').on("submit", function(event){  
						event.preventDefault();  
						if($('#name').val() == "")  
						{  
							alert("Name is required");  
						}  
						else if($('#address').val() == '')  
						{  
							alert("Address is required");  
						}  
						else if($('#designation').val() == '')  
						{  
							alert("Designation is required");  
						}  
						else if($('#age').val() == '')  
						{  
							alert("Age is required");  
						}  
						else  
						{  
							$.ajax({  
								url:"insert.php",  
								method:"POST",  
								data:$('#insert_form').serialize(),  
								beforeSend:function(){  
									$('#insert').val("Inserting");  
								},  
								success:function(data){  
									$('#insert_form')[0].reset();  
									$('#add_data_Modal').modal('hide');  
									$('#employee_table').html(data);  
								}  
							});  
						}  
					});  
					$(document).on('click', '.view_data', function(){  
						var employee_id = $(this).attr("id");  
						if(employee_id != '')  
						{  
							$.ajax({  
								url:"select.php",  
								method:"POST",  
								data:{employee_id:employee_id},  
								success:function(data){  
									$('#employee_detail').html(data);  
									$('#dataModal').modal('show');  
								}  
							});  
						}            
					});  
				});  

			</script>
			<br/>
			<br/>
			<br/>
			<br/>
			<?php include'../footer.html'; ?>
		</body>  
		</html> 