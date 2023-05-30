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
</head>  
<body class="bg-body"> 
	<?php include'../header.html'; ?>
	<br/>
	<div class="container box">
		<br/>
		
		
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="../arsip_spt.php">Arsip SPT</a>
			</li>
			<li class="nav-item" style="background-color: #f5f5f5;">
				<a href="../buat_spt.php" style="color: #191970;">Buat SPT</a>
			</li>
			<li class="nav-item">
				<a href="../draft_spt.php">Draft SPT</a>
			</li>
			<li class="nav-item">
				<a href="../bantuan_spt.php">Bantuan</a>
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
									<div class="progress-bar progress-bar-striped" style="width:55.56%; background-color: rgb(255, 157, 49);"><small>55.56%</small></div>
								</div>

								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 10 dari 18</small></p><br/>
								<!-- end progress bar -->

								<!-- Pertanyaan -->
								<p><b>Apakah Anda memiliki Tanggungan?</b></p>

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
											<div class="form-group row">
												<div class="col-sm-6">
													<a href="">
														<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Harta Pada SPt Tahun Lalu</small></button></a>
													</div>

													<div class="col-sm-6" style="padding-left: 240px;">
														<button type="button" name="add" id="add" class="btn btn-success btn-xs" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;">Tambah +</button>
													</div>
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
												<a href="halaman9.php">
													<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
												</div>
												<div class="col-sm-6" style="padding-left: 253px;">
													<a href="halaman11.php">
														<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
													</div>
												</div>
												<!-- end button sebelum dan selanjutnya-->

												<!-- Modal content-->
												<div class="modal-content" id="user_dialog" title="">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Input Data Keluarga</h4>
													</div>
													<div class="modal-body">
														<form method="post" id="user_form">
															<div class="form-group row">
																<label class="col-sm-6">Nama</label>
																<div class="col-sm-6">
																	<input type="text" name="nama" id="nama" class="form-control" />
																</div>
																<span id="error_nama" class="text-danger"></span>
															</div>  
															<div class="form-group row">
																<label class="col-sm-6">NIK</label>
																<div class="col-sm-6">
																	<input type="text" name="NIK" id="NIK" class="form-control" />
																</div>
																<span id="error_NIK" class="text-danger"></span>
															</div>               
															<div class="form-group row">
																<label class="col-sm-6">Hubungan Keluarga</label>
																<div class="col-sm-6">
																	<input type="text" name="hubungan_keluarga" id="hubungan_keluarga" class="form-control" />
																</div>
																<span id="error_hubungan_keluarga" class="text-danger"></span>
															</div>
															<div class="form-group row">
																<label class="col-sm-6">Pekerjaan</label>
																<div class="col-sm-6">
																	<input type="text" name="pekerjaan" id="pekerjaan" class="form-control" />
																</div>
																<span id="error_pekerjaan" class="text-danger"></span>
															</div>  

															<hr>
															<div class="form-group">
																<input type="hidden" name="action" id="action" value="insert" />
																<input type="hidden" name="hidden_id" id="hidden_id" />
																<input type="submit" name="form_action" id="form_action" class="btn btn-info" style="border-radius: 25px;" value="Simpan" />
															</div>
														</form>
													</div>
												</div>
												<!-- end modal content -->

												<div id="action_alert" title="Action"></div>

												<div id="delete_confirmation" title="Confirmation">
													<p>Are you sure you want to Delete this data?</p>
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

							load_data();

							function load_data()
							{
								$.ajax({
									url:"fetch_halaman10.php",
									method:"POST",
									success:function(data)
									{
										$('#user_data').html(data);
									}
								});
							}

							$("#user_dialog").dialog({
								autoOpen:false,
								width:600,
								position:top,
							});

							$('#add').click(function(){
								$('#user_dialog').attr('title', 'Add Data');
								$('#action').val('insert');
								$('#form_action').val('Simpan');
								$('#user_form')[0].reset();
								$('#form_action').attr('disabled', false);
								$("#user_dialog").dialog('open');
							});

							$('#user_form').on('submit', function(event){
								event.preventDefault();
								var error_nama = '';
								var error_NIK = '';
								var error_hubungan_keluarga = '';
								var error_pekerjaan = '';
								if($('#nama').val() == '')
								{
									error_nama = 'nama belum diisi';
									$('#error_nama').text(error_nama);
									$('#nama').css('border-color', '#cc0000');
								}
								else
								{
									error_nama = '';
									$('#error_nama').text(error_nama);
									$('#nama').css('border-color', '');
								}
								if($('#NIK').val() == '')
								{
									error_NIK = 'NIK belum diisi';
									$('#error_NIK').text(error_NIK);
									$('#NIK').css('border-color', '#cc0000');
								}
								else
								{
									error_NIK = '';
									$('#error_NIK').text(error_NIK);
									$('#NIK').css('border-color', '');
								}
								if($('#hubungan_keluarga').val() == '')
								{
									error_hubungan_keluarga = ' Hubungan Keluarga is required';
									$('#error_hubungan_keluarga').text(error_hubungan_keluarga);
									$('#hubungan_keluarga').css('border-color', '#cc0000');
								}
								else
								{
									error_hubungan_keluarga = '';
									$('#error_hubungan_keluarga').text(error_hubungan_keluarga);
									$('#hubungan_keluarga').css('border-color', '');
								}
								if($('#pekerjaan').val() == '')
								{
									error_pekerjaan = ' Pekerjaan is required';
									$('#error_pekerjaan').text(error_pekerjaan);
									$('#pekerjaan').css('border-color', '#cc0000');
								}
								else
								{
									error_pekerjaan = '';
									$('#error_pekerjaan').text(error_pekerjaan);
									$('#pekerjaan').css('border-color', '');
								}

								if(error_nama != '' || error_NIK != '' || error_hubungan_keluarga != '' || error_pekerjaan != '')
								{
									return false;
								}
								else
								{
									$('#form_action').attr('disabled', 'disabled');
									var form_data = $(this).serialize();
									$.ajax({
										url:"action_halaman10.php",
										method:"POST",
										data:form_data,
										success:function(data)
										{ 
											$('#user_dialog').dialog('close');
											$('#action_alert').html(data);
											$('#action_alert').dialog('open');
											load_data();
											$('#form_action').attr('disabled', false);
										}
									});
								}

							});

							$('#action_alert').dialog({
								autoOpen:false,
								position:top,
							});

							$(document).on('click', '.edit', function(){
								var id = $(this).attr('id');
								var action = 'fetch_single';
								$.ajax({
									url:"action_halaman10.php",
									method:"POST",
									data:{id:id, action:action},
									dataType:"json",
									success:function(data)
									{
										$('#nama').val(data.nama);
										$('#NIK').val(data.NIK);
										$('#hubungan_keluarga').val(data.hubungan_keluarga);
										$('#pekerjaan').val(data.pekerjaan);
										$('#user_dialog').attr('title', 'Edit Data');
										$('#action').val('update');
										$('#hidden_id').val(id);
										$('#form_action').val('Update');
										$('#user_dialog').dialog('open');
									}
								});
							});

							$('#delete_confirmation').dialog({
								autoOpen:false,
								modal: true,
								position:top,
								buttons:{
									Ok : function(){
										var id = $(this).data('id');
										var action = 'delete';
										$.ajax({
											url:"action_halaman10.php",
											method:"POST",
											data:{id:id, action:action},
											success:function(data)
											{
												$('#delete_confirmation').dialog('close');
												$('#action_alert').html(data);
												$('#action_alert').dialog('open');
												load_data();
											}
										});
									},
									Cancel : function(){
										$(this).dialog('close');
									}
								}	
							});

							$(document).on('click', '.delete', function(){
								var id = $(this).attr("id");
								$('#delete_confirmation').data('id', id).dialog('open');
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