






<!-- modal 2 -->
											<div class="modal fade" id="exampleModal2" title="Add Data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form id="contactform" action="action_halaman7.php" method="POST">
															<div class="form-group row">
																<label class="col-sm-6">Sumber/ jenis Penghasilan</label>
																<div class="col-sm-6">
																	<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
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
																<span id="error_sumber_penghasilan" class="text-danger"></span>
															</div>
															<div class="form-group row">
																<label class="col-sm-6">DPP/Penghasilan Bruto</label>
																<div class="col-sm-6">
																	<input type="text" name="DPP" id="DPP" class="form-control" value="<?php echo $DPP; ?>"/>
																</div>
																<span id="error_DPP" class="text-danger"></span>
															</div>               
															<div class="form-group row">
																<label class="col-sm-6">PPH Terutang</label>
																<div class="col-sm-6">
																	<input type="text" name="PPh_terutang" id="PPh_terutang" class="form-control" value="<?php echo $PPh_terutang; ?>" />
																</div>
																<span id="error_PPh_terutang" class="text-danger"></span>
															</div>

															<hr>
															<div class="form-group row">
															
															</div>
														</form>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end modal 2 -->
<!-- 