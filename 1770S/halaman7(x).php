<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SPT 1770S | Politeknik Negeri Batam</title>
	<link href="../assets/img/logo.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="jquery.min.js"></script>  
	<script src="jquery-ui.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-body">
	<br />

	<div class="container box"> 
		<br />
		<!-- <h2 align="center"></h2><br /> -->

		<form>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="arsip_spt.php">Arsip SPT</a>
				</li>
				<li class="nav-item" style="background-color: #f5f5f5;">
					<a href="buat_spt.php" style="color: #191970;">Buat SPT</a>
				</li>
				<li class="nav-item">
					<a href="draft_spt.php">Draft SPT</a>
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
										<div class="progress-bar progress-bar-striped" style="width:40%; background-color: rgb(255, 157, 49);">40%</div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 7 dari 18</small></p><br/>
									<!-- end progress bar -->

									<!-- Pertanyaan -->
									<p><b>Apakah Anda memiliki penghasilan yang pajaknya sudah dipotong secara final?</b></p>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="exampleRadios" id="yes" value="option1">
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

									<!-- Jika memilih jawaban Ya  -->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<div class="form-check">
											<span id="ifYes" style="display:none" >
												<!-- button tambah -->
												<div align="right">
													<button type="button" data-toggle="modal" data-target="#exampleModal2" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 25px"><small>Tambah +</small></button>
												</div>
												<br/>
												<!-- end button tambah -->

												<!-- table responsive -->
											<!-- 	<div class="table-responsive table_1">
													<table class="table table_2" style="border: 1px solid #ccc;">
														<thead class="thead-dark table_3">
															<tr>
																<th scope="col" class="font_table"><small>NO</small></th>
																<th scope="col" class="font_table"><small>SUMBER/JENIS PENGHASILAN</small></th>
																<th scope="col" class="font_table"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDPP/PENGHASILAN BRUTO</small></th>
																<th scope="col" class="font_table"><small>PPH TERUTANG&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</small></th>
																<th scope="col" class="font_table"><small>AKSI&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</small></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><small><b></b></small></td>
																<td><small><b></b></small></td>
																<td><small><b></b></small></td>
																<td><small><b></b></small></td>
																<td><small><b></b></small></td>
															</tr>

														</tbody>
													</table>
												</div -->
												<!-- end tabel responsive -->

												<!-- table responsive -->
												<div class="table-responsive table_1">
													<table class="table table_2" style="border: 1px solid #ccc;">
														<thead class="thead-dark table_3">
															<tr>
																<th scope="col" class="font_table"><small>NO</small></th>
																<th scope="col" class="font_table"><small>SUMBER/JENIS PENGHASILAN</small></th>
																<th scope="col" class="font_table"><small>PENGHASILAN BRUTO</small></th>
																<th scope="col" class="font_table"><small>PPH TERUTANG</small></th>
																<th scope="col" class="font_table"><small>AKSI</small></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="5" align="center">Data tidak ditemukan</td>
															</tr>
														</tbody>
													</table>
													<div class="form-group row">
														<label class="col-sm-8 col-form-label" style="padding-left: 450px; padding-top: 5px">Jumlah</label>
														<div class="col-sm-4">
															<input class="form-control" value="0">
														</div>
													</div>
												</div>
												<!-- end tabel responsive -->
											</span>
										</div>
									</div>
									<!-- end jika memilih jawaban Ya  -->

									<!-- button sebelum dan selanjutnya-->
									<hr>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-6">
											<a href="halaman6.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<a href="halaman8-xxx.php">
													<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
												</div>
											</div>
											<!-- end button sebelum dan selanjutnya-->

												<!-- Modal bukti potong -->
											<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title">Bukti Potong Baru</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															
														</div>
														<div class="modal-body">
															<form action="" method="POST">
																
																<div class="form-group row">
																<label class="col-sm-6">Sumber/ jenis Penghasilan</label>
																<div class="col-sm-6">
																	<select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan">
																		<option value="">Pilih...</option>
																		<option value=" Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara">1. Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara</option>
																		<option value="Bunga/Diskonto Obligasi">2. Bunga/Diskonto Obligasi</option>
																		<option value="Penjualan Saham di Bursa Efek">3. Penjualan Saham di Bursa Efek</option>
																		<option value="Hadiah Undian">4. Hadiah Undian</option>
																		<option value="Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus">5. Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus</option>
																		<option value="Honoranium Atas Beban APBD/APBN">6. Honoranium Atas Beban APBD/APBN</option>
																		<option value="Pengalihan Hak Atas Tanah dan Bangunan">7. Pengalihan Hak Atas Tanah dan Bangunan</option>
																		<option value="Sewa Atas Tanah dan Bangunan">8. Sewa Atas Tanah dan Bangunan</option>
																		<option value="Bangunan yang diterima dalam rangka Bangun Guna Serah">9. Bangunan yang diterima dalam rangka Bangun Guna Serah</option>
																		<option value="Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi">10. Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi</option>
																		<option value="Transaksi Derivatif">11. Transaksi Derivatif</option>
																		<option value="Dividen">12. Dividen</option>
																		<option value="Penghasilan Istri Dari Satu Pemberi Kerja">13. Penghasilan Istri Dari Satu Pemberi Kerja</option>
																		<option value="Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final">14. Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final</option>

																	</select>
																</div>
																<!-- <span id="error_sumber_penghasilan" class="text-danger"></span> -->
															</div>
															<div class="form-group row">
																<label class="col-sm-6">DPP/Penghasilan Bruto</label>
																<div class="col-sm-6">
																	<input type="text" name="DPP" id="DPP" class="form-control" />
																</div>
																<!-- <span id="error_DPP" class="text-danger"></span> -->
															</div>               
															<div class="form-group row">
																<label class="col-sm-6">PPH Terutang</label>
																<div class="col-sm-6">
																	<input type="text" name="PPh_terutang" id="PPh_terutang" class="form-control" />
																</div>
																<!-- <span id="error_PPh_terutang" class="text-danger"></span> -->
															</div>
															</form>
														</div>
														<div class="modal-footer">
															<button type="submit" class="btn btn-primary btn-sm" name="btn_save_details" value="save" id="btn_save_details"style="border-radius: 25px; background-color: rgb(4, 153, 195);">Simpan</button>
															<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button>
														</div>
													</div>
													<!-- end modal content -->
												</div>
											</div> 
											<!-- End Modal -->

				<!-- <div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Bagian A. Penghasilan yang dikenakan PPh Final dan/atau bersifat final</h4>
					</div>
					<div class="modal-body">
						<form method="post" id="user_form">
							<div class="form-group row">
								<label for="" class="col-sm-7 col-form-label">Sumber/Jenis Penghasilan</label>
								<div class="col-sm-5">
									<select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan">
										<option value="">Pilih...</option>
										<option>1. Bunga Deposito, Tabungan, Diskonto SBI, Surat Berharga Negara</option>
										<option>2. Bunga/Diskonto Obligasi</option>
										<option>3. Penjualan Saham di Bursa Efek</option>
										<option>4. Hadiah Undian</option>
										<option>5. Pesangon, Tunjangan Hari Tua, dan tebusan Pensiun yang dibayarkan sekaligus</option>
										<option>6. Honoranium Atas Beban APBD/APBN</option>
										<option>7. Pengalihan Hak Atas Tanah dan Bangunan</option>
										<option>8. Sewa Atas Tanah dan Bangunan</option>
										<option>9. Bangunan yang diterima dalam rangka Bangun Guna Serah</option>
										<option>10. Bunga Simpanan yang diserahkan oleh Koperasi kepada Anggota Koperasi</option>
										<option>11. Transaksi Derivatif</option>
										<option>12. Dividen</option>
										<option>13. Penghasilan Istri Dari Satu Pemberi Kerja</option>
										<option>14. Penghasilan Lain Yang Dikenakan Pajak Final Dan/Atau bersifat Final</option>

									</select>
								</div>
								<span id="error_sumber_penghasilan" class="text-danger"></span>
							</div>
							<div class="form-group row">
								<label class="col-sm-7 col-form-label">DPP/Penghasilan Bruto</label>
								<div class="col-sm-5">
									<input  type="text" name="DPP" id="DPP" class="form-control" />
								</div>
								<span id="error_DPP" class="text-danger"></span>
							</div>
							<div class="form-group row">
								<label class="col-sm-7 col-form-label">PPh Terutang</label>
								<div class="col-sm-5">
									<input type="text" name="PPh_terutang" id="PPh_terutang" class="form-control" />
								</div>
								<span id="error_PPh_terutang" class="text-danger"></span>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="form-group">
							<input type="hidden" name="action" id="action" value="insert" />
							<input type="hidden" name="hidden_id" id="hidden_id" />
							<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
							<input class="btn btn-info" value="Batal" style="border-radius: 25px; background-color: rgb(4, 153, 195);"/>
						</div> -->
						<!-- <button type="submit" class="btn btn-primary btn-sm" name="btn_save_details" value="save" id="btn_save_details" style="border-radius: 25px; background-color: rgb(4, 153, 195);">Simpan</button>
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px;">Batal</button> -->
					<!-- 	</div>
					</div> -->
					<!-- end modal content -->
			<!-- 	</div>
			</div>  -->
			<!-- End Modal -->

		<!-- 	<div id="action_alert" title="Action">

			</div>

			<div id="delete_confirmation" title="Confirmation">
				<p>Are you sure you want to Delete this data?</p>
			</div> -->

		</div>
		<!-- end card body -->
	</div>
	<!-- end card bg -->
</div>
<!-- end panel body -->
</div>
<!-- end panel -->
</div>
<!-- end tab pane -->
</div>
<!-- end tab content -->
</form>
</div>
<!-- end container box -->

<script type="text/javascript"> 
	function yesnoCheck() {

		if(document.getElementById('yes').checked) {
			document.getElementById('ifYes').style.display = 'block';
		}
		else document.getElementById('ifYes').style.display = 'none';
	}


	// $(document).ready(function(){  

	// 	load_data();

	// 	function load_data()
	// 	{
	// 		$.ajax({
	// 			url:"fetch.php",
	// 			method:"POST",
	// 			success:function(data)
	// 			{
	// 				$('#user_data').html(data);
	// 			}
	// 		});
	// 	}

	// 	$("#user_dialog").dialog({
	// 		autoOpen:false,
	// 		width:400
	// 	});

	// 	$('#add').click(function(){
	// 		$('#user_dialog').attr('title', 'Add Data');
	// 		$('#action').val('insert');
	// 		$('#form_action').val('Insert');
	// 		$('#user_form')[0].reset();
	// 		$('#form_action').attr('disabled', false);
	// 		$("#user_dialog").dialog('open');
	// 	});

	// 	$('#user_form').on('submit', function(event){
	// 		event.preventDefault();
	// 		var error_sumber_penghasilan = '';
	// 		var error_DPP = '';
	// 		var error_PPh_terutang = '';
	// 		if($('#sumber_penghasilan').val() == '')
	// 		{
	// 			error_sumber_penghasilan = 'Sumber Penghasilan is required';
	// 			$('#error_sumber_penghasilan').text(error_sumber_penghasilan);
	// 			$('#sumber_penghasilan').css('border-color', '#cc0000');
	// 		}
	// 		else
	// 		{
	// 			error_sumber_penghasilan = '';
	// 			$('#error_sumber_penghasilan').text(error_sumber_penghasilan);
	// 			$('#sumber_penghasilan').css('border-color', '');
	// 		}
	// 		if($('#DPP').val() == '')
	// 		{
	// 			error_DPP = 'DPP is required';
	// 			$('#error_DPP').text(error_DPP);
	// 			$('#DPP').css('border-color', '#cc0000');
	// 		}
	// 		else
	// 		{
	// 			error_PPh_terutang = '';
	// 			$('#error_PPh_terutang').text(error_PPh_terutang);
	// 			$('#DPP').css('border-color', '');
	// 		}
	// 		if($('#PPh_terutang').val() == '')
	// 		{
	// 			error_PPh_terutang = ' PPh terutang is required';
	// 			$('#error_PPh_terutang').text(error_PPh_terutang);
	// 			$('#DPP').css('border-color', '#cc0000');
	// 		}
	// 		else
	// 		{
	// 			error_PPh_terutang = '';
	// 			$('#error_PPh_terutang').text(error_PPh_terutang);
	// 			$('#PPh_terutang').css('border-color', '');
	// 		}

	// 		if(error_sumber_penghasilan != '' || error_DPP != '' || error_PPh_terutang != '')
	// 		{
	// 			return false;
	// 		}
	// 		else
	// 		{
	// 			$('#form_action').attr('disabled', 'disabled');
	// 			var form_data = $(this).serialize();
	// 			$.ajax({
	// 				url:"action.php",
	// 				method:"POST",
	// 				data:form_data,
	// 				success:function(data)
	// 				{ 
	// 					$('#user_dialog').dialog('close');
	// 					$('#action_alert').html(data);
	// 					$('#action_alert').dialog('open');
	// 					load_data();
	// 					$('#form_action').attr('disabled', false);
	// 				}
	// 			});
	// 		}

	// 	});

	// 	$('#action_alert').dialog({
	// 		autoOpen:false
	// 	});

	// 	$(document).on('click', '.edit', function(){
	// 		var id = $(this).attr('id');
	// 		var action = 'fetch_single';
	// 		$.ajax({
	// 			url:"action.php",
	// 			method:"POST",
	// 			data:{id:id, action:action},
	// 			dataType:"json",
	// 			success:function(data)
	// 			{
	// 				$('#sumber_penghasilan').val(data.sumber_penghasilan);
	// 				$('#DPP').val(data.DPP);
	// 				$('#PPh_terutang').val(data.PPh_terutang);
	// 				$('#user_dialog').attr('title', 'Edit Data');
	// 				$('#action').val('update');
	// 				$('#hidden_id').val(id);
	// 				$('#form_action').val('Update');
	// 				$('#user_dialog').dialog('open');
	// 			}
	// 		});
	// 	});

	// 	$('#delete_confirmation').dialog({
	// 		autoOpen:false,
	// 		modal: true,
	// 		buttons:{
	// 			Ok : function(){
	// 				var id = $(this).data('id');
	// 				var action = 'delete';
	// 				$.ajax({
	// 					url:"action.php",
	// 					method:"POST",
	// 					data:{id:id, action:action},
	// 					success:function(data)
	// 					{
	// 						$('#delete_confirmation').dialog('close');
	// 						$('#action_alert').html(data);
	// 						$('#action_alert').dialog('open');
	// 						load_data();
	// 					}
	// 				});
	// 			},
	// 			Cancel : function(){
	// 				$(this).dialog('close');
	// 			}
	// 		}	
	// 	});

	// 	$(document).on('click', '.delete', function(){
	// 		var id = $(this).attr("id");
	// 		$('#delete_confirmation').data('id', id).dialog('open');
	// 	});

	// });  
</script>
</body>
</html> 
