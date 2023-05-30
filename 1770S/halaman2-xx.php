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
	<?php include'../header1.html'; ?>
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

								<p style="padding-left: 0px; color: rgb(4, 153, 195)"><small>Halaman ke 2 dari 18</small></p><br/>
								<!-- end progress bar -->

								

								<!-- button tambah-->
								
									<div align="right" style="margin-bottom:5px;">
										<button type="button" name="add" id="add" class="btn btn-success btn-xs" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 30px; width: 100px;">Tambah +</button>
									</div>
								
								<br/>
								<div class="table-responsive" id="user_data"></div>
								
								<br/>

								<!-- end button tambah-->

								<!-- button sebelum dan selanjutnya-->
								<hr>
								<div class="form-group row" style="padding-bottom: 	15px">
									<div class="col-sm-6">
										<a href="halaman1.php">
											<button type="button" class="" style="background-color: rgb(255, 157, 49); border-radius: 25px; color: white; border: none; height: 30px;"> <i class="fas fa-chevron-left"></i><small>Sebelumnya</small></button></a>
										</div>
										<div class="col-sm-6" style="padding-left: 253px;">
											<a href="halaman3.php">
												<button type="button" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border: none; height: 30px; width: 100px;"><small>Selanjutnya</small><i class="fas fa-chevron-right"></i></button></a>
											</div>
										</div>
										<!-- end button sebelum dan selanjutnya-->

										<!-- Modal content-->
										<div  class="modal-content" id="user_dialog" title="Add Title">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Bukti Potong Baru</h4>
											</div>
											<div class="modal-body">
												<form method="post" id="user_form">
													<div class="form-group row">
														<label for="jenis_pajak" class="col-sm-7 col-form-label">Jenis Pajak</label>
														<div class="col-sm-5">
															<select class="form-control" name="jenis_pajak" id="jenis_pajak" oninput="validasi(this)" oninvalid="validasi(this)" required>
																<option value="">Pilih...</option>
																<option>Pasal 21</option>
																<option>Pasal 22</option>
																<option>Pasal 23</option>
																<option>Pasal 24</option>
																<option>Pasal 26</option>
																<option>DTP</option>
															</select>
														</div>
														<span id="error_jenis_pajak" class="text-danger"></span>
													</div>
													<div class="form-group row">
														<label class="col-sm-7 col-form-label">npwp_pemotong_pajak Pemotong/Pemungutan Pajak *</label>
														<div class="col-sm-5">
															<input class="form-control" name="npwp_pemotong_pajak" id="npwp_pemotong_pajak" onkeyup="autofill()" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" 
															type="number" maxlength = "15" min = "1" max = "999999999999999" required="">
														</div>
														<span id="error_npwp_pemotong_pajak" class="text-danger"></span>
													</div>
													<div class="form-group row">
														<label class="col-sm-7 col-form-label">Nama Pemotong/Pemungut Pajak</label>
														<div class="col-sm-5">
															<textarea class="form-control" name="nama_pemotong_pajak" id="nama_pemotong_pajak" disabled></textarea>
														</div>
														<span id="nama_pemotong_pajak" class="text-danger"></span>
													</div>
													<div class="form-group row">
														<label class="col-sm-7 col-form-label">Nomor Bukti Pemotongan/Pemungutan *</label>
														<div class="col-sm-5">
															<input class="form-control" name="nomor_bukti_pemotongan" id="nomor_bukti_pemotongan" onkeypress="return isNumericBukti(event)" oninput="maxLengthCheckBukti(this)" 
															type="text" maxlength = "18" min = "1" max = "999999999999999" required="">
														</div>
														<span id="error_nomor_bukti_pemotongan" class="text-danger"></span>
													</div>
													<div class="form-group row">
														<label class="col-sm-7 col-form-label">Tanggal Bukti Pemotongan/Pemungutan *</label>
														<div class="col-sm-5">
															<div class="">
																<input type="date" class="form-control" name="tanggal_bukti_pemotongan" id="tanggal_bukti_pemotongan" required="">
															</div>
														</div>
														<span id="error_tanggal_bukti_pemotongan" class="text-danger"></span>
													</div>
													<div class="form-group row">
														<label class="col-sm-7 col-form-label">Jumlah dipotong PPh Yang Dipotong/Dipungut</label>
														<div class="col-sm-5">
															<input type="text" class="form-control" name="jumlah_pph_dipotong" id="jumlah_pph_dipotong" required="">
														</div>
														<span id="error_jumlah_pph_dipotong" class="text-danger"></span>
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
			<script src="jquery-1.12.4.min.js"></script>
			<script type="text/javascript"> 

				$(document).ready(function(){  

					load_data();

					function load_data()
					{
						$.ajax({
							url:"fetch_halaman2.php",
							method:"POST",
							success:function(data)
							{
								$('#user_data').html(data);
							}
						});
					}

					$("#user_dialog").dialog({
						autoOpen:false,
						width:400
					});

					$('#add').click(function(){
						$('#user_dialog').attr('title', 'Add Title');
						$('#action').val('insert');
						$('#form_action').val('Simpan');
						$('#user_form')[0].reset();
						$('#form_action').attr('disabled', false);
						$("#user_dialog").dialog('open');
					});

					$('#user_form').on('submit', function(event){
						event.preventDefault();
						var error_jenis_pajak = '';
						var error_npwp_pemotong_pajak = '';
						var error_nomor_bukti_pemotongan = '';
						var error_tanggal_bukti_pemotongan = '';
						var error_jumlah_pph_dipotong = '';
						if($('#jenis_pajak').val() == '')
						{
							error_jenis_pajak = 'jenis_pajak belum diisi';
							$('#error_jenis_pajak').text(error_jenis_pajak);
							$('#jenis_pajak').css('border-color', '#cc0000');
						}
						else
						{
							error_jenis_pajak = '';
							$('#error_jenis_pajak').text(error_jenis_pajak);
							$('#jenis_pajak').css('border-color', '');
						}
						if($('#npwp_pemotong_pajak').val() == '')
						{
							error_npwp_pemotong_pajak = 'npwp_pemotong_pajak belum diisi';
							$('#error_npwp_pemotong_pajak').text(error_npwp_pemotong_pajak);
							$('#npwp_pemotong_pajak').css('border-color', '#cc0000');
						}
						else
						{
							error_npwp_pemotong_pajak = '';
							$('#error_npwp_pemotong_pajak').text(error_npwp_pemotong_pajak);
							$('#npwp_pemotong_pajak').css('border-color', '');
						}
						if($('#nomor_bukti_pemotongan').val() == '')
						{
							error_nomor_bukti_pemotongan = ' PPh terutang is required';
							$('#error_nomor_bukti_pemotongan').text(error_nomor_bukti_pemotongan);
							$('#nomor_bukti_pemotongan').css('border-color', '#cc0000');
						}
						else
						{
							error_nomor_bukti_pemotongan = '';
							$('#error_nomor_bukti_pemotongan').text(error_nomor_bukti_pemotongan);
							$('#nomor_bukti_pemotongan').css('border-color', '');
						}
						if($('#tanggal_bukti_pemotongan').val() == '')
						{
							error_tanggal_bukti_pemotongan = ' PPh terutang is required';
							$('#error_tanggal_bukti_pemotongan').text(error_tanggal_bukti_pemotongan);
							$('#tanggal_bukti_pemotongan').css('border-color', '#cc0000');
						}
						else
						{
							error_tanggal_bukti_pemotongan = '';
							$('#error_tanggal_bukti_pemotongan').text(error_tanggal_bukti_pemotongan);
							$('#tanggal_bukti_pemotongan').css('border-color', '');
						}
						if($('#jumlah_pph_dipotong').val() == '')
						{
							error_jumlah_pph_dipotong = ' jumlah_pph_dipotong belum di isi';
							$('#error_jumlah_pph_dipotong').text(error_jumlah_pph_dipotong);
							$('#jumlah_pph_dipotong').css('border-color', '#cc0000');
						}
						else
						{
							error_jumlah_pph_dipotong = '';
							$('#error_jumlah_pph_dipotong').text(error_jumlah_pph_dipotong);
							$('#jumlah_pph_dipotong').css('border-color', '');
						}

						if(error_jenis_pajak != '' || error_npwp_pemotong_pajak != '' || error_nomor_bukti_pemotongan != '' || error_tanggal_bukti_pemotongan != '' || error_jumlah_pph_dipotong != '' )
						{
							return false;
						}
						else
						{
							$('#form_action').attr('disabled', 'disabled');
							var form_data = $(this).serialize();
							$.ajax({
								url:"action_halaman2.php",
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
						autoOpen:false
					});

					$(document).on('click', '.edit', function(){
						var id = $(this).attr('id');
						var action = 'fetch_single';
						$.ajax({
							url:"action_halaman2.php",
							method:"POST",
							data:{id:id, action:action},
							dataType:"json",
							success:function(data)
							{
								$('#jenis_pajak').val(data.jenis_pajak);
								$('#npwp_pemotong_pajak').val(data.npwp_pemotong_pajak);
								$('#nomor_bukti_pemotongan').val(data.nomor_bukti_pemotongan);
								$('#tanggal_bukti_pemotongan').val(data.tanggal_bukti_pemotongan);
								$('#jumlah_pph_dipotong').val(data.jumlah_pph_dipotong);
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
						buttons:{
							Ok : function(){
								var id = $(this).data('id');
								var action = 'delete';
								$.ajax({
									url:"action_halaman2.php",
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

			//autofill
			function autofill(){
				var npwp_pemotong_pajak = $("#npwp_pemotong_pajak").val();
				$.ajax({
					url : 'autofill-ajax.php',
					data :"npwp_pemotong_pajak="+npwp_pemotong_pajak,
				}).success(function(data){
					var json = data,
					obj = JSON.parse(json);
					$('#nama_pemotong_pajak').val(obj.nama_pemotong_pajak);
				});
			}

//Proses tanggal Bukti
$(function(){
	$("#datepicker").datepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
		todayHighlight: true,
	});
});

//format rupiah, satuan, puluhan, ratusan, ribuan (pemberian Rp dan titik)
var jumlah_pph_dipotong =document.getElementById('jumlah_pph_dipotong');
jumlah_pph_dipotong.addEventListener('keyup', function(e){
	jumlah_pph_dipotong.value = formatjumlah_pph_dipotong(this.value, 'Rp.');
});

function formatjumlah_pph_dipotong(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split             = number_string.split(','),
	sisa              = split[0].length % 3,
	rupiah            = split[0].substr(0, sisa),
	ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah    += separator + ribuan.join('.');
	}
	rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}


//pembatasan length inputan dan tipe inputan harus numberic (Regular Expressions)
function maxLengthCheck(object) {
	if (object.value.length > object.maxLength)
		object.value = object.value.slice(0, object.maxLength)
}

function isNumeric (evt) {
	var theEvent = evt || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode (key);
	var regex = /[0-9]/;
	if ( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	}
}

  //pembatasan length inputan dan tipe inputan harus numberic (Regular Expressions), (pemberian tanda "." dan "-")
  function maxLengthCheckBukti(object) {
  	if (object.value.length > object.maxLength)
  		object.value = object.value.slice(0, object.maxLength)
  }

  function isNumericBukti (evt) {
  	var theEvent = evt || window.event;
  	var key = theEvent.keyCode || theEvent.which;
  	key = String.fromCharCode (key);
  	var regex = /[0-9]|\.|\-/;
  	if ( !regex.test(key) ) {
  		theEvent.returnValue = false;
  		if(theEvent.preventDefault) theEvent.preventDefault();
  	}
  }
</script>
<br/>
<br/>
<br/>
<br/>
<?php include'../footer.html'; ?>
</body>
</html> 