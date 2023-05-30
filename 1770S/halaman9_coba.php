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
									<div class="progress-bar progress-bar-striped" style="width:50.00%; background-color: rgb(255, 157, 49);"><small>50.00%</small></div>
								</div>

								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 9 dari 18</small></p><br/>
								<!-- end progress bar -->

								<!-- Pertanyaan -->
								<p><b>Apakah Anda memiliki utang?</b></p>

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
												<button type="button" name="add" id="add" class="btn btn-success btn-xs" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;" data-toggle="modal" data-target="#exampleModal">Tambah +</button>
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
										<a href="halaman8.php">
											<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
										</div>
										<div class="col-sm-6" style="padding-left: 253px;">
											<a href="halaman10.php">
												<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
											</div>
										</div>
										<!-- end button sebelum dan selanjutnya-->

										<!-- Modal content-->
										<div class="modal fade" id="exampleModal" title="Add Data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form method="post" id="user_form">
															<div class="form-group row">
																<label class="col-sm-6">Kode Utang</label>
																<div class="col-sm-6">
																	<select class="form-control" name="kode_utang" id="kode_utang">
																		<option value="">Pilih...</option>
																		<option value="101">101-Utang Bank/Lembaga Keuangan bukan Bank(KPR, Leasing Kendaraan Bermotor dan sejenisnya)</option>
																		<option value="102">102-Kartu Kredit</option>
																		<option value="103">103-Utang Afiliasi(Pinjaman dari pihak yang memiliki hubungan istimewa sebagaimana dimaksud dalam pasal 18 ayat(4) UU PPh)</option>
																		<option value="109">109-Utang Lainnya</option>

																	</select>
																</div>
																<span id="error_kode_utang" class="text-danger"></span>
															</div>
															<div class="form-group row">
																<label class="col-sm-6">Nama Pemberi Pinjaman</label>
																<div class="col-sm-6">
																	<input type="text" name="nama_pemberi_pinjaman" id="nama_pemberi_pinjaman" class="form-control" />
																</div>
																<span id="error_nama_pemberi_pinjaman" class="text-danger"></span>
															</div>               
															<div class="form-group row">
																<label class="col-sm-6">Alamat Pemberi Pinjaman</label>
																<div class="col-sm-6">
																	<textarea class="form-control" name="alamat_pemberi_pinjaman" id="alamat_pemberi_pinjaman" 
																	type="text"></textarea>
																</div>
																<span id="error_alamat_pemberi_pinjaman" class="text-danger"></span>
															</div>
															<div class="form-group row">
																<label class="col-sm-6">Tahun Peminjaman</label>
																<div class="col-sm-6">
																	<select name="tahun_peminjaman" id="tahun_peminjaman" class="form-control mb-3" style="max-width: 240px;">
																		<option selected="selected">Tahun</option>
																		<?php
																		for($i=date('Y'); $i>=date('Y')-32; $i-=1){
																			echo"<option value='$i'> $i </option>";
																		}
																		?>
																	</select>
																</div>
																<span id="error_tahun_peminjaman" class="text-danger"></span>
															</div>
															<div class="form-group row">
																<label class="col-sm-6">Jumlah</label>
																<div class="col-sm-6">
																	<input type="text" name="jumlah" id="jumlah" class="form-control" />
																</div>
																<span id="error_jumlah" class="text-danger"></span>
															</div>  
															<hr>
															<div class="form-group row">
																<div align="right" style="padding-right: 20px;">
																	<input type="hidden" name="action" id="action" value="insert" />
																	<input type="hidden" name="hidden_id" id="hidden_id" />
																	<input type="submit" name="form_action" id="form_action" class="btn btn-info" style="border-radius: 25px;" value="Simpan" />

																	<!-- <input type="hidden" name="action" id="action" value="update" />
																	<input type="hidden" name="hidden_id" id="hidden_id" />
																	<input type="submit" name="form_action" id="form_action" class="btn btn-info" style="border-radius: 25px;" value="Update" /> -->

																	<button class="btn btn-warning" data-dismiss="modal">Tutup</button>
																</div>
															</div>
														</form>
													</div>
													<!-- <div class="modal-footer">   
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button  type="button" class="btn btn-primary">Save changes</button>
													</div> -->
												</div>
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
							url:"fetch_halaman9.php",
							method:"POST",
							success:function(data)
							{
								$('#user_data').html(data);
							}
						});
					}

					// $("#action_alert").modal({
					// 	autoOpen:false,
					// 	width:600,
					// 	position:top,
					// });

					$('#add').click(function(){
						$('#exampleModal').attr('title', 'Add Data');
						$('#action').val('insert');
						$('#form_action').val('Simpan');
						$('#contactform')[0].reset();
						$('#form_action').attr('disabled', false);
						$("#exampleModal").modal('show');
					});

					$('#contactform').on('submit', function(event){
						event.preventDefault();
						var error_kode_utang = '';
						var error_nama_pemberi_pinjaman = '';
						var error_alamat_pemberi_pinjaman = '';
						var error_tahun_peminjaman = '';
						var error_jumlah = '';
						if($('#kode_utang').val() == '')
						{
							error_kode_utang = 'kode_utang belum diisi';
							$('#error_kode_utang').text(error_kode_utang);
							$('#kode_utang').css('border-color', '#cc0000');
						}
						else
						{
							error_kode_utang = '';
							$('#error_kode_utang').text(error_kode_utang);
							$('#kode_utang').css('border-color', '');
						}
						if($('#nama_pemberi_pinjaman').val() == '')
						{
							error_nama_pemberi_pinjaman = 'nama_pemberi_pinjaman belum diisi';
							$('#error_nama_pemberi_pinjaman').text(error_nama_pemberi_pinjaman);
							$('#nama_pemberi_pinjaman').css('border-color', '#cc0000');
						}
						else
						{
							error_nama_pemberi_pinjaman = '';
							$('#error_nama_pemberi_pinjaman').text(error_nama_pemberi_pinjaman);
							$('#nama_pemberi_pinjaman').css('border-color', '');
						}
						if($('#alamat_pemberi_pinjaman').val() == '')
						{
							error_alamat_pemberi_pinjaman = ' PPh terutang is required';
							$('#error_alamat_pemberi_pinjaman').text(error_alamat_pemberi_pinjaman);
							$('#alamat_pemberi_pinjaman').css('border-color', '#cc0000');
						}
						else
						{
							error_alamat_pemberi_pinjaman = '';
							$('#error_alamat_pemberi_pinjaman').text(error_alamat_pemberi_pinjaman);
							$('#alamat_pemberi_pinjaman').css('border-color', '');
						}
						if($('#tahun_peminjaman').val() == '')
						{
							error_tahun_peminjaman = ' PPh terutang is required';
							$('#error_tahun_peminjaman').text(error_tahun_peminjaman);
							$('#tahun_peminjaman').css('border-color', '#cc0000');
						}
						else
						{
							error_tahun_peminjaman = '';
							$('#error_tahun_peminjaman').text(error_tahun_peminjaman);
							$('#tahun_peminjaman').css('border-color', '');
						}
						if($('#jumlah').val() == '')
						{
							error_jumlah = ' jumlah belum di isi';
							$('#error_jumlah').text(error_jumlah);
							$('#jumlah').css('border-color', '#cc0000');
						}
						else
						{
							error_jumlah = '';
							$('#error_jumlah').text(error_jumlah);
							$('#jumlah').css('border-color', '');
						}

						if(error_kode_utang != '' || error_nama_pemberi_pinjaman != '' || error_alamat_pemberi_pinjaman != '' || error_tahun_peminjaman != '' || error_jumlah != '' )
						{
							return false;
						}
						else
						{
							$('#form_action').attr('disabled', 'disabled');
							var form_data = $(this).serialize();
							$.ajax({
								url:"action_halaman9.php",
								method:"POST",
								data:form_data,
								success:function(data)
								{ 
									$('#exampleModal').modal('hide');
									$('#action_alert').html(data);
									// $('#action_alert').modal('show');
									load_data();
									$('#form_action').attr('disabled', false);
								}
							});
						}

					});

					$('#action_alert').modal({
						autoOpen:false,
						position:top,
					});

					$(document).on('click', '.edit', function(){
						var id = $(this).attr('id');
						var action = 'fetch_single';
						$.ajax({
							url:"action_halaman9.php",
							method:"POST",
							data:{id:id, action:action},
							dataType:"json",
							success:function(data)
							{
								$('#kode_utang').val(data.kode_utang);
								$('#nama_pemberi_pinjaman').val(data.nama_pemberi_pinjaman);
								$('#alamat_pemberi_pinjaman').val(data.alamat_pemberi_pinjaman);
								$('#tahun_peminjaman').val(data.tahun_peminjaman);
								$('#jumlah').val(data.jumlah);
								$('#user_dialog').attr('title', 'Edit Data');
								$('#action').val('update');
								$('#hidden_id').val(id);
								$('#form_action').val('Update');
								$('#exampleModal').modal('open');
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
									url:"action_halaman9.php",
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