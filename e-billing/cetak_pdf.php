<?php
session_start();
?>


<html lang="en">
<head>
	<title>Cetak PDF | POLITEKNIK NEGERI BATAM</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<style type="text/css">
		.totals-row td {
			border-right:none !important;
			border-left:none !important;
		}
		
		
		td {
			white-space: nowrap;
		}
		.items-table td ,#notes { white-space:normal;}
		.totals-row td strong,.items-table th {
			white-space:nowrap;
		}
	</style>
	<style type="text/css">
		.is_logo {display:none;}
		#watermark{
			margin: auto;
			top : 150px;
			left : 25%;
			display:block;
			position : absolute;
			opacity: 0.6;
			filter: alpha(opacity=50); 
		}
	</style>
</head>
<body>
	<div id="editor" class="edit-mode-wrap" style="margin-top: 20px;">
		<style type="text/css">
			.is_logo {display:none;}
		</style><style type="text/css">
			@page{
				margin: 0;
			}
			* { margin:0; padding:0; }
			body { background:#fff; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:20px; border: thick solid #5F9EA0; }
			#extra {text-align: right; font-size: 22px;  font-weight: 700}
			.invoice-wrap { width:700px; margin:0 auto; background:#FFF; color:#000; }
			.invoice-inner { margin:0 15px; padding:20px 0 }
			.invoice-address { border-top: 3px double #000000; margin: 25px 0; padding-top: 25px; }
			.bussines-name { font-size:18px; font-weight:100 }
			.invoice-name { font-size:22px; font-weight:700 }
			.listing-table th { background-color: #e5e5e5; border-bottom: 1px solid #555555; border-top: 1px solid #555555; font-weight: bold; text-align:left; padding:6px 4px }
			.listing-table td { border-bottom: 1px solid #555555; text-align:left; padding:5px 6px; vertical-align:top }
			.total-table td { border-left: 1px solid #555555; }
			.total-row { background-color: #e5e5e5; border-bottom: 1px solid #555555; border-top: 1px solid #555555; font-weight: bold; }
			.row-items { margin:5px 0; display:block }
			.notes-block { margin:50px 0 0 0; }
			.notes-block-2 { margin:10px 0 0 0; padding-left: 20px}
			.dashed{
				border-style: dashed;
			}
			/*tables*/
			table td { vertical-align:top}
			.items-table { border:1px solid #1px solid #555555; border-collapse:collapse; width:100%}
			.items-table td, .items-table th { border:1px solid #555555; padding:4px 5px ; text-align:left}
			.items-table th { background:#f5f5f5;}
			.totals-row .wide-cell { border:1px solid #fff; border-right:1px solid #555555; border-top:1px solid #555555}
		</style>
		<div class="invoice-wrap">
			<div class="invoice-inner">
				<?php
				error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
				include 'config.php';
				?>

				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td align="left" valign="top" width="110px">
								<img src="../img/logo.png" width="100px" height="auto" class="rounded" alt="...">
							</td>
							
							<td align="right" valign="bottom">
								<div class="business_info">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tbody>
											<tr>
												<td><div align="left" style="font-weight: bold; font-size: 12; padding-top: 15px; ">
													<div style="padding-bottom: 5px;"><span>KEMENTERIAN KEUANGAN R.I</span><br></div>
													<span>DIREKTORAT JENDERAL PAJAK</span></div>
												</td>
												<td>
													<div style="font-weight: bold; padding-top: 13px; text-align: center">
														CETAKKAN KODE <br> BILLING
													</div>
												</td>
												<!-- <td valign="bottom">
													<span class="editable-area" id="business_info"><p style="font-size: 14pt;">Pusat Penelitian & Pengabdian Politeknik Negeri Batam</p>
													</span>
												</td> -->
											</tr>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

				<div class="invoice-address">
					<!-- <h3>Identitas Penelitian </h3><br> -->
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<table border="0" cellpadding="0" cellspacing="0" bgc>
								<tbody>
									<?php 
									$npwp=$_SESSION['npwp'];
									include '../koneksi.php';
									$data=mysqli_query($koneksi,"select* from tb_daftarnpwp where id_daftar_npwp='$npwp'");
									$row=mysqli_fetch_assoc($data);
									?>
									<tr>
										<td style="" valign="top" width="" ><strong><span class="editable-text" id="label_bill_to"></span>NPWP</strong></td>
										<td valign="top">
											<div class="client_info">
												<table border="0" cellpadding="0" cellspacing="0">
													<tbody>
														<tr>
															<td style="padding-left:25px; white-space: normal;">: <?php echo $_SESSION['npwp']; ?><span class="editable-area" id="client_info"><br />
															</tr>
														</tbody>
													</table>
												</div>
											</td>
										</tr>
										<tr>
											<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>NAMA</strong></td>
											<td valign="top">
												<div class="client_info">
													<table border="0" cellpadding="0" cellspacing="0">
														<tbody>
															<tr>
																<td style="padding-left:25px;">: <?php echo $_SESSION['nama_ktp']; ?><span class="editable-area" id="client_info"><br />
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>ALAMAT</strong></td>
												<td valign="top">
													<div class="client_info">
														<table border="0" cellpadding="0" cellspacing="0">
															<tbody>
																<tr>
																	<td style="padding-left:25px;">: <?php echo $row['alamat']; ?><span class="editable-area" id="client_info"><br />
																	</tr>
																</tbody>
															</table>
														</div>
													</td>
												</tr>
												<tr>
													<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>KOTA</strong></td>
													<td valign="top">
														<div class="client_info">
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td style="padding-left:25px;">: Batam <span class="editable-area" id="client_info"><br />
																		</tr>
																	</tbody>
																</table>
															</div>
														</td>
													</tr>
													<tr>
														<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>NOP</strong></td>
														<td valign="top">
															<div class="client_info">
																<table border="0" cellpadding="0" cellspacing="0">
																	<tbody>
																		<tr>
																			<td style="padding-left:25px;">: <?php if (isset($_SESSION['tmpnop'])) {
																				$tmpnop = $_SESSION['tmpnop'];
																			}


																			echo end($tmpnop);
																			$nop = end($tmpnop);?><span class="editable-area" id="client_info"><br />
																			</tr>
																		</tbody>
																	</table>
																</div>
															</td>
														</tr>
														<tr>
															<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>JENIS PAJAK</strong></td>
															<td valign="top">
																<div class="client_info">
																	<table border="0" cellpadding="0" cellspacing="0">
																		<tbody>
																			<tr>
																				<td style="padding-left:25px;">: <?php 
																				if (isset($_SESSION['tmpjenis_pajak'])) {
																					$tmpjenis_pajak= $_SESSION['tmpjenis_pajak'];
																				}


																				echo end($tmpjenis_pajak);
																				$jenis_pajak = end($tmpjenis_pajak); ?><span class="editable-area" id="client_info"><br />
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>JENIS SETORAN</strong></td>
																<td valign="top">
																	<div class="client_info">
																		<table border="0" cellpadding="0" cellspacing="0">
																			<tbody>
																				<tr>
																					<td style="padding-left:25px;">: <?php if (isset($_SESSION['tmpjenis_setoran'])) {
																						$tmpjenis_setoran= $_SESSION['tmpjenis_setoran'];
																					}


																					echo end($tmpjenis_setoran);
																					$jenis_setoran = end($tmpjenis_setoran); ?><span class="editable-area" id="client_info"><br />
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>MASA PAJAK</strong></td>
																	<td valign="top">
																		<div class="client_info">
																			<table border="0" cellpadding="0" cellspacing="0">
																				<tbody>
																					<tr>
																						<td style="padding-left:25px;">: <?php if (isset($_SESSION['tmpmasa_pajak_sebelum'])) {
																							$tmpmasa_pajak_sebelum = $_SESSION['tmpmasa_pajak_sebelum'];
																						}
																						if (isset($_SESSION['tmpmasa_pajak_sesudah'])) {
																							$tmpmasa_pajak_sesudah = $_SESSION['tmpmasa_pajak_sesudah'];
																						}


																						echo end($tmpmasa_pajak_sebelum);
																						$masa_pajak_sebelum = end($tmpmasa_pajak_sebelum); 
																						echo "-";
																						echo end($tmpmasa_pajak_sesudah);
																						$masa_pajak_sesudah = end($tmpmasa_pajak_sesudah); 
																						?><br />
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>TAHUN PAJAK</strong></td>
																	<td valign="top">
																		<div class="client_info">
																			<table border="0" cellpadding="0" cellspacing="0">
																				<tbody>
																					<tr>
																						<td style="padding-left:25px;">: <?php if (isset($_SESSION['tmptahun_pajak'])) {
																							$tmptahun_pajak = $_SESSION['tmptahun_pajak'];
																						}


																						echo end($tmptahun_pajak);
																						$tahun_pajak = end($tmptahun_pajak);?><span class="editable-area" id="client_info"><br />
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>NO. SK</strong></td>
																		<td valign="top">
																			<div class="client_info">
																				<table border="0" cellpadding="0" cellspacing="0">
																					<tbody>
																						<tr>
																							<td style="padding-left:25px;">: <?php if (isset($_SESSION['tmpno_ketetapan'])) {
																								$tmpno_ketetapan = $_SESSION['tmpno_ketetapan'];
																							}


																							echo end($tmpno_ketetapan);
																							$no_ketetapan = end($tmpno_ketetapan);?> 
																							<span class="editable-area" id="client_info"><br />
																							</tr>
																						</tbody>
																					</table>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>JUMLAH SETORAN</strong></td>
																			<td valign="top">
																				<div class="client_info">
																					<table border="0" cellpadding="0" cellspacing="0">
																						<tbody>
																							<tr>
																								<td style="padding-left:25px;">: Rp <?php if (isset($_SESSION['tmpjml_setor'])) {
																									$tmpjml_setor = $_SESSION['tmpjml_setor'];
																								}


																								echo end($tmpjml_setor);
																								$jml_setor = end($tmpjml_setor); ?><span class="editable-area" id="client_info"><br />
																								</tr>
																							</tbody>
																						</table>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td style="" valign="top" width=""><strong><span class="editable-text" id="label_bill_to"></span>TERBILANG</strong></td>
																				<td valign="top">
																					<div class="client_info">
																						<table border="0" cellpadding="0" cellspacing="0">
																							<tbody>
																								<tr>
																									<td style="padding-left:25px;">: <?php if (isset($_SESSION['tmpterbilang'])) {
																										$tmpterbilang = $_SESSION['tmpterbilang'];
																									}

																									echo end($tmpterbilang);
																									$terbilang = end($tmpterbilang); ?><span class="editable-area" id="client_info"><br />
																									</tr>
																								</tbody>
																							</table>
																						</div>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</tbody>
																</table>
															</div>
															<h3>GUNAKAN KODE BILLING DI BAWAH INI UNTUK MELAKUKAN PEMBAYARAN </h3><br>
															<table border="0" cellpadding="0" cellspacing="0" width="100%">
																<tbody>
																	<table border="0" cellpadding="0" cellspacing="0">
																		<tbody>
																			<tr>
																				<td style="" valign="top" width="" ><strong><span class="editable-text" id="label_bill_to"></span>ID BILLING</strong></td>
																				<td valign="top">
																					<div class="client_info">
																						<table border="0" cellpadding="0" cellspacing="0">
																							<tbody>
																								<tr>
																									<td style="padding-left:75px; white-space: normal;">: <?php 
     // mengambil data dari database
																									$data = mysqli_query($koneksi,"select id from tb_riwayat_surat");

																									$cek = mysqli_fetch_assoc($data) ['id'];


																									$data = mysqli_query($koneksi,"select * from tb_riwayat_surat ORDER BY id DESC LIMIT 1");
																									$cek = mysqli_fetch_assoc($data);
                      // mengubah nama harta didatabase
																									$kode_billing = $cek['kode_billing'];

																									echo $kode_billing;
																									?><span class="editable-area" id="client_info"><br />
																									</tr>
																								</tbody>
																							</table>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td style="" valign="top" width="" ><strong><span class="editable-text" id="label_bill_to"></span>MASA AKTIF</strong></td>
																					<td valign="top">
																						<div class="client_info">
																							<table border="0" cellpadding="0" cellspacing="0">
																								<tbody>
																									<tr>
																										<td style="padding-left:75px; white-space: normal;">: <?php 
     // mengambil data dari database
																										$data = mysqli_query($koneksi,"select id from tb_riwayat_surat");

																										$cek = mysqli_fetch_assoc($data) ['id'];


																										$data = mysqli_query($koneksi,"select * from tb_riwayat_surat ORDER BY id DESC LIMIT 1");
																										$cek = mysqli_fetch_assoc($data);
                      // mengubah nama harta didatabase
																										$masa_aktif = $cek['masa_aktif'];

																										echo $masa_aktif;
																										?><span class="editable-area" id="client_info"><br />
																										</tr>
																									</tbody>
																								</table>
																							</div>
																						</td>
																					</tr>
																				</span>
																			</td>
																		</tr>
																	</tbody>
																</table>

																<div class="notes-block">
																	<table border="0" cellpadding="0" cellspacing="0" width="100%">
																		<tbody>
																			<tr>
																				<td>
																					<div class="editable-area" id="notes" style="font-weight: bold">Catatan : </div>
																				</td>
																				<td></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="notes-block-2" align="justify">
																	<h3>Apabila ada kesalahan dalam isian Kode Billing atau masa berlakunya berakhir, Kode Billing 
																		dapat dibuat kembali. Tanggung jawab isian Kode Billing ada pada Wajib Pajak yang namanya 
																	tercantum didalamnya.</h3>
																	<img src="">
																</div>
																<br />
																<hr class="dashed"><i class="fas fa-cut"></i>
															&nbsp;</div>
														</div>
													</div>
													<style>
														body {
															background: #EBEBEB;
														}
														.invoice-wrap {box-shadow: 0 0 4px rgba(0, 0, 0, 0.1); margin-bottom: 20px; }
														#mobile-preview-close a {
															position:fixed; left:20px; bottom:30px; 
															background-color: #27c24c;
															font-weight: 600;
															outline: 0 !important;
															line-height: 1.5;
															border-radius: 3px;
															font-size: 14px;
															padding: 7px 10px;
															border:1px solid #27c24c;
															text-decoration:none;
														}
														#mobile-preview-close img {
															width:20px;
															height:auto;
														}
														#mobile-preview-close a:nth-child(2) {
															left:190px;
															background:#f5f5f5;
															border:1px solid #9f9f9f;
															color:#555 !important;
														}
														#mobile-preview-close a:nth-child(2) img {
															height: auto;
															position: relative;
															top: 2px;
														}
														.invoice-wrap {padding: 20px;}


														@media print {
															#mobile-preview-close a {
																display:none
															}
															.invoice-wrap {0}
															body {
																background: none;
															}
															.invoice-wrap {box-shadow: none; margin-bottom: 0px;}

														}
													</style>

													<div id="mobile-preview-close">
														<a style="color: #fff !important;" href="javascript:history.back()"> <img src="img/arrow-back.png" style="float:left; margin:0 13px 0 0;"> Sebelumnya</a>
														<a style="" href="javascript:window.print();"> <i class="fas fa-file-pdf"></i> Cetak PDF</a>

													</div>

													<div id="watermark">    
														<img src="../img/versi-edukasi4.png">
													</div>


													<script type="text/javascript">
														var beforePrint = function() {
														};

//var afterPrint = function() {
//	document.location.href='/invoices/thankyou/0';
//};

if (window.matchMedia) {
	var mediaQueryList = window.matchMedia('print');
	mediaQueryList.addListener(function(mql) {
		if (mql.matches) {
			beforePrint();
		} else {
			afterPrint();
		}
	});
}
window.onbeforeprint = beforePrint;
window.onafterprint = afterPrint;

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-73809851-1', 'auto');
ga('send', 'pageview');


</script></body>
</html>