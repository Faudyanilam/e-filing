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
										<div class="progress-bar progress-bar-striped" style="width:44.44%; background-color: rgb(255, 157, 49); "><small>44.44%</small></div>
									</div>
									<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 8 dari 18</small></p><br>
									<!-- end progress bar -->

								

								<!-- Button tambah dan spt tahun lalu -->
								<div class="form-group row">
									<div class="col-sm-6">
										<a href="">
											<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"><small>Harta Pada SPt Tahun Lalu</small></button></a>
										</div>

										<div class="col-sm-6">
											<div align="right" style="margin-bottom:5px;">
												<button type="button" name="add" id="add" class="btn btn-success btn-xs" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;">Tambah +</button>
											</div>
										</div>
									</div>
									<br/>
									<div class="table-responsive" id="user_data"></div>
									<br/>
									<!-- end button tambah dan spt tahun lalu-->

									<!-- button sebelum dan selanjutnya-->
									<hr>
									<div class="form-group row" style="padding-bottom: 	15px">
										<div class="col-sm-6">
											<a href="halaman7.php">
												<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
											</div>
											<div class="col-sm-6" style="padding-left: 253px;">
												<a href="halaman9.php">
													<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
												</div>
											</div>
											<!-- end button sebelum dan selanjutnya-->

											<!-- Modal content-->
											<div class="modal-content" id="user_dialog" title="">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Harta Baru/ New Asset</h4>
												</div>
												<div class="modal-body">
													<form method="post" id="user_form">
														<div class="form-group row">
															<label class="col-sm-6">Kode Harta</label>
															<div class="col-sm-6">
																<select class="form-control" name="kode_harta" id="kode_harta">
																	<option value="">Pilih...</option>
																	<option value="011">011-Uang Tunai</option>
																	<option value="012">012-Tabungan</option>
																	<option value="013">013-Giro</option>
																	<option value="014">014-Deposito</option>
																	<option value="019">019-Setara Kas Lainnya</option>
																	<option disabled style="background-color: #f5f5f5; font-weight: bold;">Piutang</option>
																	<option value="021">021-Piutang</option>
																	<option value="022">022-Piutang Afiliasi (Piutang kepada pihak yang mempunyai hubungan istimewa sebagaimana dimaksud dalam Pasal 18 ayat (4) UU PPh)</option>
																	<option value="023">023-Persediaan Usaha</option>
																	<option value="029">029-Piutang Lainnya</option>
																	<option disabled style="background-color: #f5f5f5; font-weight: bold;">Investasi</option>
																	<option value="031">031-Saham yang dibeli untuk dijual kembali</option>
																	<option value="032">032-Saham</option>
																	<option value="033">033-Obligasi Perusahaan</option>
																	<option value="034">034-Pemerintah Indonesia (ORI, Surat Berharga Syariah Negara, dll</option>
																	<option value="035">035-Surat Utang Lainnya</option>
																	<option value="036">036-Reksadana</option>
																	<option value="037">037-Instrument Derivatif</option>
																	<option value="038">038-Pernyertaan Modal dalam perusahaan lain yang tidak atas saham meliputi penyertaan modal pada CV, Firma dan sejenisnya</option>
																	<option value="039">039-Investasi Lainnya</option>
																	<option disabled style="background-color: #f5f5f5; font-weight: bold;">Alat Transportasi</option>
																	<option value="041">041-Sepeda</option>
																	<option value="042">042-Sepeda Motor</option>
																	<option value="043">043-Mobil</option>
																	<option value="049">049-Alat Transportasi Lainnya</option>
																	<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Bergerak</option>
																	<option value="051">051-Logam Mulia (emas batangan, emas perhiasan, platina batangan, platina perhiasan, logam mulia lainnya)</option>
																	<option value="052">052-Batu Mulia (Intan, Berlian, Batu Mulia lainnya)</option>
																	<option value="053">053-Barang-Barang seni dan antik</option>
																	<option value="054">054-Kapal Pesiar, Pesawat Terbang, Helikopter, Jetski, Peralatan Olah Raga Khusus</option>
																	<option value="055">055-Peralatan Elektronik, Furnitur</option>
																	<option value="059">059-Harta Bergerak Lainnya</option>
																	<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Bergerak</option>
																	<option value="061">061-Tanah dan/atau bangunan untuk tempat tinggal</option>
																	<option value="062">062-Tanah dan/atau bangunan untuk usaha (Toko, pabrik, gudang dan sejenisnya)</option>
																	<option value="063">063-Tanah atau lahan untuk usaha (lahan pertanian, perkebunan, perikanan darat dan sejenisnya)</option>
																	<option value="064">069-Harta tidak bergerak lainnya</option>
																	<option disabled style="background-color: #f5f5f5; font-weight: bold;">Harta Tidak Berwujud</option>
																	<option value="071">071-Paten</option>
																	<option value="072">072-Royalti</option>
																	<option value="073">073-Merek Dagang</option>
																	<option value="079">079-HArta tidak berwujud lainya</option>

																</select>
															</div>
															<span id="error_kode_harta" class="text-danger"></span>
														</div>
														<div class="form-group row">
															<label class="col-sm-6">Nama Harta</label>
															<div class="col-sm-6">
																<input type="text" name="nama_harta" id="nama_harta" class="form-control" />
															</div>
															<span id="error_nama_harta" class="text-danger"></span>
														</div>               
														<div class="form-group row">
															<label class="col-sm-6">Tahun Perolehan</label>
															<div class="col-sm-6">
																<select name="tahun_perolehan" id="tahun_perolehan" class="form-control mb-3" style="max-width: 240px;">
																	<option selected="selected">Tahun</option>
																	<?php
																	for($i=date('Y'); $i>=date('Y')-32; $i-=1){
																		echo"<option value='$i'> $i </option>";
																	}
																	?>
																</select>
															</div>
															<span id="error_tahun_perolehan" class="text-danger"></span>
														</div>
														<div class="form-group row">
															<label class="col-sm-6">Harga Perolehan</label>
															<div class="col-sm-6">
																<input type="text" name="harga_perolehan" id="harga_perolehan" class="form-control" />
															</div>
															<span id="error_harga_perolehan" class="text-danger"></span>
														</div> 
														<div class="form-group row">
															<label class="col-sm-6">Keterangan</label>
															<div class="col-sm-6">
																<input type="text" name="keterangan" id="keterangan" class="form-control" />
															</div>
															<span id="error_keterangan" class="text-danger"></span>
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
								url:"fetch_halaman8.php",
								method:"POST",
								success:function(data)
								{
									$('#user_data').html(data);
								}
							});
						}

						$("#user_dialog").dialog({
							autoOpen:false,
							width:450,
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
							var error_kode_harta = '';
							var error_nama_harta = '';
							var error_tahun_perolehan = '';
							var error_harga_perolehan = '';
							var error_keterangan = '';
							if($('#kode_harta').val() == '')
							{
								error_kode_harta = 'kode_harta belum diisi';
								$('#error_kode_harta').text(error_kode_harta);
								$('#kode_harta').css('border-color', '#cc0000');
							}
							else
							{
								error_kode_harta = '';
								$('#error_kode_harta').text(error_kode_harta);
								$('#kode_harta').css('border-color', '');
							}
							if($('#nama_harta').val() == '')
							{
								error_nama_harta = 'nama_harta belum diisi';
								$('#error_nama_harta').text(error_nama_harta);
								$('#nama_harta').css('border-color', '#cc0000');
							}
							else
							{
								error_nama_harta = '';
								$('#error_nama_harta').text(error_nama_harta);
								$('#nama_harta').css('border-color', '');
							}
							if($('#tahun_perolehan').val() == '')
							{
								error_tahun_perolehan = ' PPh terutang is required';
								$('#error_tahun_perolehan').text(error_tahun_perolehan);
								$('#tahun_perolehan').css('border-color', '#cc0000');
							}
							else
							{
								error_tahun_perolehan = '';
								$('#error_tahun_perolehan').text(error_tahun_perolehan);
								$('#tahun_perolehan').css('border-color', '');
							}
							if($('#harga_perolehan').val() == '')
							{
								error_harga_perolehan = ' PPh terutang is required';
								$('#error_harga_perolehan').text(error_harga_perolehan);
								$('#harga_perolehan').css('border-color', '#cc0000');
							}
							else
							{
								error_harga_perolehan = '';
								$('#error_harga_perolehan').text(error_harga_perolehan);
								$('#harga_perolehan').css('border-color', '');
							}
							if($('#keterangan').val() == '')
							{
								error_keterangan = ' Keterangan belum di isi';
								$('#error_keterangan').text(error_keterangan);
								$('#keterangan').css('border-color', '#cc0000');
							}
							else
							{
								error_keterangan = '';
								$('#error_keterangan').text(error_keterangan);
								$('#keterangan').css('border-color', '');
							}

							if(error_kode_harta != '' || error_nama_harta != '' || error_tahun_perolehan != '' || error_harga_perolehan != '' || error_keterangan != '' )
							{
								return false;
							}
							else
							{
								$('#form_action').attr('disabled', 'disabled');
								var form_data = $(this).serialize();
								$.ajax({
									url:"action_halaman8.php",
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
								url:"action_halaman8.php",
								method:"POST",
								data:{id:id, action:action},
								dataType:"json",
								success:function(data)
								{
									$('#kode_harta').val(data.kode_harta);
									$('#nama_harta').val(data.nama_harta);
									$('#tahun_perolehan').val(data.tahun_perolehan);
									$('#harga_perolehan').val(data.harga_perolehan);
									$('#keterangan').val(data.keterangan);
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
										url:"action_halaman8.php",
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