<?php session_start(); ?>
<?php
// mengdefiniskan variabel dan diset kosong
// $name = $address = $date_birth = $gender = $level_edu = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $jenis_pajak     = $_POST["jenis_pajak"];
//   $jenis_setoran    = $_POST["jenis_setoran"];
//   $masa_pajak_sesudah  = $_POST['masa_pajak_sesudah'];
//   $tahun_pajak      = $_POST['tahun_pajak'];
//   $nop   = $_POST['nop'];
//   $no_ketetapan =$POST['no_ketetapan'];
//   $no_jml_setor =$POST['no_jml_setor'];
//   $no_ketetapan =$POST['no_ketetapan'];
//   $no_ketetapan =$POST['no_ketetapan'];


// }
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SPT 1770S | Politeknik Negeri Batam</title>
  <link href="../assets/img/logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../css/boostrap3.3.6.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script> 
  <script src="../1770S/bootstrap/js/jquery.js"></script>
  <script src="../1770S/bootstrap/js/bootstrap.min.js"></script>

  <script language="javascript">  
    function fillCategory(){ 
 // this function is used to fill the category list on load
// addOption(document.drop_list.Category, "411111", "411111-PPh Minyak Bumi", "");
// addOption(document.drop_list.Category, "411112", "411112-PPh Gas Alam", "");
addOption(document.drop_list.Category, "411121", "411121-PPh Pasal 21", "");
addOption(document.drop_list.Category, "411122", "411122-PPh Pasal 22", "");
addOption(document.drop_list.Category, "411123", "411123-PPh Pasal 22 Impor", "");
addOption(document.drop_list.Category, "411124", "411124-PPh Pasal 23", "");
addOption(document.drop_list.Category, "411125", "411125-PPh Pasal 25 / 29 Orang Pribadi", "");
addOption(document.drop_list.Category, "411126", "411126-PPh Pasal 25 / 29 Badan", "");
addOption(document.drop_list.Category, "411127", "411127-PPh Pasal 26", "");
addOption(document.drop_list.Category, "411128", "411128-PPh Final", "");
addOption(document.drop_list.Category, "411129", "411129-PPh Non-Migas Lainnya", "");
addOption(document.drop_list.Category, "411131", "411131-Pajak Fiskal Luar Negeri", "");
addOption(document.drop_list.Category, "411111", "411111-PPh Minyak Bumi", "");
addOption(document.drop_list.Category, "411112", "411112-PPh Gas Alami", "");
addOption(document.drop_list.Category, "411119", "411119-PPh Migas Lainnya", "");
addOption(document.drop_list.Category, "411211", "411211-PPN Dalam Negeri", "");
addOption(document.drop_list.Category, "411212", "411212-PPN Impor", "");
addOption(document.drop_list.Category, "411219", "411219-PPN Lainnya", "");
addOption(document.drop_list.Category, "411221", "411221-PPn BM Dalam Negeri", "");
addOption(document.drop_list.Category, "411222", "411222-PPn BM Dalam Negeri", "");
addOption(document.drop_list.Category, "411229", "411229-PPn BM Lainnya", "");
addOption(document.drop_list.Category, "411611", "411611-Bea Meterai", "");
addOption(document.drop_list.Category, "411612", "411612-PPn Benda Meterai", "");
addOption(document.drop_list.Category, "411613", "411613-PPn Batu Bara", "");
addOption(document.drop_list.Category, "411619", "411619-Pajak Tdk Langsung Lainnya", "");
addOption(document.drop_list.Category, "411621", "411621-Bunga/Denda Penagihan PPh", "");
addOption(document.drop_list.Category, "411622", "411622-Bunga/Denda Penagihan PPN", "");
addOption(document.drop_list.Category, "411623", "411623-Bunga/Denda Penagihan PPnBM", "");
addOption(document.drop_list.Category, "411624", "411624-Bunga/Denda Penagihan PTLL", "");
addOption(document.drop_list.Category, "411313", "411313-PBB Perkebunan", "");
addOption(document.drop_list.Category, "411314", "411314-PBB Perhutanan", "");
addOption(document.drop_list.Category, "411315", "411315-PBB Pertambangan Minerba", "");
addOption(document.drop_list.Category, "411316", "411316-PBB Pertambangan Migas", "");
addOption(document.drop_list.Category, "411317", "411317-PBB Pertambangan Pabum", "");
addOption(document.drop_list.Category, "411319", "411319-PPn BM Lainnya", "");


}

function SelectSubCat(){
// ON selection of category this function will work

removeAllOptions(document.drop_list.SubCat);
addOption(document.drop_list.SubCat, "", "Pilih...", "");

// if(document.drop_list.Category.value == '411111'){
// addOption(document.drop_list.SubCat,"200", "200-Tahunan");

// }
// if(document.drop_list.Category.value == '411112'){
// addOption(document.drop_list.SubCat,"200", "200-Tahunan");

// }
if(document.drop_list.Category.value == '411121'){
  addOption(document.drop_list.SubCat,"100", "100-Masa PPh Pasal 21");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Pajak) PPh Pasal 21");
  addOption(document.drop_list.SubCat,"200", "200-Tahunan PPh Pasal 21");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Pasal 21");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Pasal 21");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Final Pasal 21 Pembayaran Sekaligus Atas Jaminan Hari Tua, Uang Tebusan Pensiun, dan Uang Pesangon");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Pasal 21");
  addOption(document.drop_list.SubCat,"321", "321-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Final Pasal 21 Pembayaran Sekaligus Atas Jaminan Hari Tua, Uang Tebusan Pensiun, dan Uang Pesangon");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"401", "401-PPh Final Pasal 21 Pembayaran Sekaligus Atas Jaminan Hari Tua, Uang Tebusan Pensiun, dan Uang Pesangon");
  addOption(document.drop_list.SubCat,"402", "402-PPh Final Pasal 21 atas honorarium atau imbalan lain yang diterima Pejabat Negara, PNS, anggota TNI/POLRI dan para pensiunnya.");
  addOption(document.drop_list.SubCat,"500", "500-PPh Pasal 21 atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Pasal 21 atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT PPh Pasal 21");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan.");

}
if(document.drop_list.Category.value == '411122'){
  addOption(document.drop_list.SubCat,"100", "100-Masa PPh Pasal 22");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP PPh Pasal 22");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Pasal 22");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB PPh Pasal 22");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB PPh Final Pasal 22");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT PPh Pasal 22");
  addOption(document.drop_list.SubCat,"321", "321-SKPKBT PPh Final Pasal 22");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"401", "401-PPh Final Pasal 22 atas Penebusan Migas");
  addOption(document.drop_list.SubCat,"403", "403-PPh Final Pasal 22 atas Penjualan Barang yang Tergolong Sangat Mewah");
  addOption(document.drop_list.SubCat,"404", "404-PPh Pasal 22 atas Ekspor Komoditas Tambang Batubara, Mineral Logam, dan Mineral Bukan Logam");
  addOption(document.drop_list.SubCat,"500", "500-PPh Pasal 22 atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Pasal 22 atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT Masa PPh Pasal 22");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");
  addOption(document.drop_list.SubCat,"900", "900-Pemungut PPh Pasal 22");

}
if(document.drop_list.Category.value == '411123'){
  addOption(document.drop_list.SubCat,"100", "100-Masa PPh Pasal 22 Impor");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan Surat Ketetapan Pajak (SKP) PPh Pasal 22 Impor");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Pasal 22 Impor");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB PPh Pasal 22 Impor");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT PPh Pasal 22 Impor");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPh Pasal 22 Impor atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Pasal 22 Impor atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT Masa PPh Pasal 22 Impor");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411124'){
  addOption(document.drop_list.SubCat,"100", "100-Masa PPh Pasal 23");
  addOption(document.drop_list.SubCat,"101", "101-PPh Pasal 23 atas Dividen");
  addOption(document.drop_list.SubCat,"102", "102-PPh Pasal 23 atas Bunga");
  addOption(document.drop_list.SubCat,"103", "103-PPh Pasal 23 atas Royalti");
  addOption(document.drop_list.SubCat,"104", "104-PPh Pasal 23 atas Jasa");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan skp PPh Pasal 23");
  addOption(document.drop_list.SubCat,"300", "300-Surat Tagihan Pajak (STP) PPh Pasal 23");
  addOption(document.drop_list.SubCat,"301", "301-STP PPh Pasal 23 atas Dividen, Bunga, Royalti, dan Jasa");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB PPh Pasal 23");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB PPh Pasal 23 atas Dividen, Bunga, Royalti, dan Jasa");
  addOption(document.drop_list.SubCat,"312", "312-SKPKB PPh Final Pasal 23");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT PPh Pasal 23");
  addOption(document.drop_list.SubCat,"321", "321-SKPKBT PPh Pasal 23 atas Dividen, Bunga, Royalti, dan Jasa");
  addOption(document.drop_list.SubCat,"322", "322-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Final Pasal 23");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"401", "401-PPh Final Pasal 23 atas Bunga Simpanan Anggota Koperasi");
  addOption(document.drop_list.SubCat,"500", "500-PPh Pasal 23 atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Pasal 23 atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT Masa PPh Pasal 23");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411125'){
  addOption(document.drop_list.SubCat,"100", "100-Masa PPh Pasal 25 Orang Pribadi");
  addOption(document.drop_list.SubCat,"101", "101-Masa PPh Pasal 25 Orang Pribadi Pengusaha Tertentu");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Pajak) PPh Orang Pribadi");
  addOption(document.drop_list.SubCat,"200", "200-Tahunan PPh Orang Pribadi");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Orang Pribadi");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Orang Pribadi");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Orang Pribadi");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPh Orang Pribadi atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Orang Pribadi atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT PPh Orang Pribadi");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411126'){
  addOption(document.drop_list.SubCat,"100", "100-Masa PPh Pasal 25 Badan");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan Surat Ketetapan Pajak (SKP) PPh Badan");
  addOption(document.drop_list.SubCat,"200", "200-Tahunan PPh Badan");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPh Badan");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB PPh Badan");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT PPh Badan");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPh Badan atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Badan atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT PPh Badan");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411127'){
  addOption(document.drop_list.SubCat,"100", "100-Masa PPh Pasal 26");
  addOption(document.drop_list.SubCat,"101", "101-PPh Pasal 26 atas Dividen");
  addOption(document.drop_list.SubCat,"102", "102-PPh Pasal 26 atas Bunga");
  addOption(document.drop_list.SubCat,"103", "103-PPh Pasal 26 atas Royalti");
  addOption(document.drop_list.SubCat,"104", "104-PPh Pasal 26 atas Jasa");
  addOption(document.drop_list.SubCat,"105", "105-PPh Pasal 26 atas Laba setelah Pajak BUT (Bentuk Usaha Tetap)");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Pajak) PPh Pasal 26");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPh Pasal 26");
  addOption(document.drop_list.SubCat,"301", "301-STP (Surat Tagihan Pajak) PPh Pasal 26 atas Dividen, Bunga, Royalti, Jasa, dan Laba Setelah Pajak BUT");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Pasal 26");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Pasal 26 atas Dividen, Bunga, Royalti, Jasa, dan Laba Setelah Pajak BUT (Bentuk Usaha Tetap)");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT PPh Pasal 26");
  addOption(document.drop_list.SubCat,"321", "321-SKPKBT PPh Pasal 26 atas Dividen, Bunga, Royalti, Jasa, dan Laba Setelah Pajak BUT");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPh Pasal 26 atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Pasal 26 atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-PPh Pasal 26 atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411128'){
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Pajak) PPh Final");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Final");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB PPh Final Pasal 4 ayat (2)");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB PPh Final Pasal 15");
  addOption(document.drop_list.SubCat,"312", "312-SKPKB PPh Final Pasal 19");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT PPh Final Pasal 4 ayat (2)");
  addOption(document.drop_list.SubCat,"321", "321-SKPKBT PPh Final Pasal 15");
  addOption(document.drop_list.SubCat,"322", "322-SKPKBT (Surat Ketetapan Pajak Kurang Bayaran Tambahan) PPh Final Pasal 19");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"401", "401-PPh Final Pasal 4 ayat (2) atas Diskonto/Bunga Obligasi dan Surat Utang Negara");
  addOption(document.drop_list.SubCat,"402", "402-PPh Final Pasal 4 ayat (2) atas Pengalihan Hak atas Tanah dan/atau Bangunan");
  addOption(document.drop_list.SubCat,"403", "403-PPh Final Pasal 4 ayat (2) atas Persewaan Tanah dan/atau Bangunan");
  addOption(document.drop_list.SubCat,"404", "404-PPh Final Pasal 4 ayat (2) atas Bunga Deposito / Tabungan, Jasa Giro dan Diskonto SBI");
  addOption(document.drop_list.SubCat,"405", "406-PPh Final Pasal 4 ayat (2) atas Hadiah Undian");
  addOption(document.drop_list.SubCat,"406", "406-PPh Final Pasal 4 ayat (2) atas Transaksi Saham, Obligasi dan sekuritas lainnya di Bursa.");
  addOption(document.drop_list.SubCat,"407", "407-PPh Final Pasal 4 ayat (2) atas Penjualan Saham Pendiri");
  addOption(document.drop_list.SubCat,"408", "408-PPh Final Pasal 4 ayat (2) atas Penjualan Saham Milik Perusahaan Modal Ventura");
  addOption(document.drop_list.SubCat,"409", "409-PPh Final Pasal 4 ayat (2) atas Jasa Konstruksi");
  addOption(document.drop_list.SubCat,"410", "410-PPh Final Pasal 15 atas Jasa Pelayaran Dalam Negeri");
  addOption(document.drop_list.SubCat,"411", "411-PPh Final Pasal 15 atas Jasa Pelayaran dan/atau Penerbangan Luar Negeri");
  addOption(document.drop_list.SubCat,"413", "413-PPh Final Pasal 15 atas Penghasilan Perwakilan Dagang Luar Negeri");
  addOption(document.drop_list.SubCat,"414", "414-PPh Final Pasal 15 atas Pola Bagi Hasil");
  addOption(document.drop_list.SubCat,"415", "415-PPh Final Pasal 15 atas Kerja sama bentuk BOT (Build Operate Transfer) atau bentuk perjanjian kerja sama Bangun Guna Serah");
  addOption(document.drop_list.SubCat,"416", "416-PPh Final Pasal 19 atas Revaluasi Aktiva Tetap");
  addOption(document.drop_list.SubCat,"417", "417-PPh Final Pasal 4 ayat (2) atas Bunga Simpanan Anggota Koperasi yang Dibayarkan kepada Orang Pribadi");
  addOption(document.drop_list.SubCat,"418", "418-PPh Final Pasal 4 ayat (2) atas penghasilan dari transaksi derivatif yang diperdagangkan di bursa");
  addOption(document.drop_list.SubCat,"419", "419-PPh Final Pasal 17 ayat (2c) atas penghasilan berupa dividen");
  addOption(document.drop_list.SubCat,"420", "420-PPh Final Pasal 4 ayat (2) atas penghasilan dari Usaha yang Diterima atau Diperoleh Wajib Pajak yang Memiliki Peredaran Bruto Tertentu");
  addOption(document.drop_list.SubCat,"421", "421-PPh Final atas Uplift dan Pengalihan Participating Interest di Bidang usaha hulu minyak dan gas bumi");
  addOption(document.drop_list.SubCat,"499", "499-PPh Final Lainnya");
  addOption(document.drop_list.SubCat,"500", "500-PPh Final atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Final atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT PPh Final");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan.");
  addOption(document.drop_list.SubCat,"514", "514-SKPKB PPh Final atas harta bersih tambahan yang diperlakukan sebagai penghasilan");

}
if(document.drop_list.Category.value == '411129'){
  addOption(document.drop_list.SubCat,"100", "100-PPh Non Migas Lainnya");
  addOption(document.drop_list.SubCat,"101", "101-PPh Pasal 15 atas Jasa Penerbangan Dalam Negeri");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Non Migas Lainnya");
  addOption(document.drop_list.SubCat,"301", "301-STP PPh Pasal 15 atas Jasa Penerbangan Dalam Negeri");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Non Migas Lainnya");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Pasal 15 atas Jasa Penerbangan Dalam Negeri");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Non Migas Lainnya");
  addOption(document.drop_list.SubCat,"321", "321-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Pasal 15 atas Jasa Penerbangan Dalam Negeri");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPh Non Migas Lainnya atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPh Non Migas Lainnya atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian surat pemberitahuan PPh Non Migas Lainnya");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411131'){
  addOption(document.drop_list.SubCat,"100", "100-Fiskal Luar Negeri");
  addOption(document.drop_list.SubCat,"300", "300-STP Fiskal Luar Negeri");

}
if(document.drop_list.Category.value == '411111'){
  addOption(document.drop_list.SubCat,"100", "100-PPh Minyak Bumi");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Minyak Bumi");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Minyak Bumi");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Minyak Bumi");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");


}
if(document.drop_list.Category.value == '411112'){
  addOption(document.drop_list.SubCat,"100", "100-PPh Gas Alam");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPh Gas Alam");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPh Gas Alam");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPh Gas Alam");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411119'){
  addOption(document.drop_list.SubCat,"100", "100-PPh Migas Lainnya");
  addOption(document.drop_list.SubCat,"300", "300-STP PPh Migas Lainnya");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB PPh Migas Lainnya");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT PPh Migas Lainnya");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411211'){
  addOption(document.drop_list.SubCat,"100", "100-Setoran Masa PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"101", "101-Setoran PPN BKP tidak berwujud dari luar Daerah Pabean");
  addOption(document.drop_list.SubCat,"102", "102-Setoran PPN JKP dari luar Daerah Pabean");
  addOption(document.drop_list.SubCat,"103", "103-Setoran Kegiatan Membangun Sendiri");
  addOption(document.drop_list.SubCat,"104", "104-Setoran Penyerahan Aktiva yang menurut tujuan semula tidak untuk diperjualbelikan");
  addOption(document.drop_list.SubCat,"104", "104-Setoran Atas Pengalihan Aktiva Dalam Rangka Restrukturisasi Perusahaan");
  addOption(document.drop_list.SubCat,"105", "105Penebusan Stiker Lunas PPN atas Penyerahan Produk Rekaman Suara atau Gambar");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Pajak) PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPN Pemanfaatan BKP tidak berwujud dari luar Daerah Pabean");
  addOption(document.drop_list.SubCat,"312", "312-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPN Pemanfaatan JKP (Jasa Kena Pajak) dari luar Daerah Pabean");
  addOption(document.drop_list.SubCat,"313", "313-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPN Kegiatan Membangun Sendiri");
  addOption(document.drop_list.SubCat,"314", "314-SKPKB (Surat Ketetapan Pajak Kurang Bayar) Pemungut PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"320", "320SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"321", "321-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPN Pemanfaatan BKP tidak berwujud dari luar Daerah Pabean");
  addOption(document.drop_list.SubCat,"322", "322-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPN Peman-faatan JKP dari luar Daerah Pabean");
  addOption(document.drop_list.SubCat,"323", "323-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPN atas Kegiatan Membangun Sendiri");
  addOption(document.drop_list.SubCat,"324", "324-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) Pemungut PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPN Dalam Negeri atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPN Dalam Negeri atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT Masa PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");
  addOption(document.drop_list.SubCat,"900", "900-Pemungut PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"100", "100-Pendapatan bea masuk");

}
if(document.drop_list.Category.value == '411212'){
  addOption(document.drop_list.SubCat,"100", "100-Setoran Masa PPN Impor");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Pajak) PPN Impor");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPN Impor");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPN Impor");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPN Impor");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPN Impor atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPN Impor atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT PPN");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");
  addOption(document.drop_list.SubCat,"900", "900-Pemungut PPN Impor");

}
if(document.drop_list.Category.value == '411219'){
  addOption(document.drop_list.SubCat,"100", "100-Setoran Masa PPN Lainnya");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPN Lainnya");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPN Lainnya");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPN Lainnya");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPN Lainnya atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPN Lainnya atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT PPN");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411221'){
  addOption(document.drop_list.SubCat,"100", "100-Setoran Masa PPnBM Dalam Negeri");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Page) PPnBM Dalam Negeri");
  addOption(document.drop_list.SubCat,"300", "300-STP PPnBM Dalam Negeri");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) Masa PPnBM Dalam Negeri");
  addOption(document.drop_list.SubCat,"311", "311-SKPKB (Surat Ketetapan Pajak Kurang Bayar) Pemungut");
  addOption(document.drop_list.SubCat,"311", "311-PPnBM Dalam Negeri");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) Masa PPnBM Dalam Negeri");
  addOption(document.drop_list.SubCat,"321", "321SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) Pemungut PPnBM Dalam Negeri-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) Pemungut PPnBM Dalam Negeri");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPnBM Dalam Negeri atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPnBM Dalam Negeri atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pengisian SPT Masa PPN Dalam Negeri");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");
  addOption(document.drop_list.SubCat,"900", "900-Pemungut PPnBM Dalam Negeri");

}
if(document.drop_list.Category.value == '411222'){
  addOption(document.drop_list.SubCat,"100", "100-Setoran Masa PPnBM Impor");
  addOption(document.drop_list.SubCat,"199", "199-Pembayaran Pendahuluan SKP (Surat Ketetapan Pajak) PPnBM Impor");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPnBM Impor");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPnBM Impor");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPnBM Impor");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPnBM Impor atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPnBM Impor atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pembayaran PPnBM pada saat impor BKP");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");
  addOption(document.drop_list.SubCat,"900", "900-Pemungut PPnBM Impor");

}
if(document.drop_list.Category.value == '411229'){
  addOption(document.drop_list.SubCat,"100", "100-Setoran Masa PPnBM Lainnya");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PPnBM Lainnya");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) PPnBM Lainnya");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) PPnBM Lainnya");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-PPnBM Lainnya atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-PPnBM Lainnya atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pembayaran PPnBM Lainnya");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411611'){
  addOption(document.drop_list.SubCat,"100", "100-Bea Meterai");
  addOption(document.drop_list.SubCat,"199", "199-Bea Meterai");
  addOption(document.drop_list.SubCat,"2xx", "2xx-Setoran Masa PPnBM LainnyaPembayaran Pendahuluan SKP (Surat Ketetapan Pajak) Bea Meterai");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) Bea Meterai");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) Bea Meterai");
  addOption(document.drop_list.SubCat,"320", "390-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) Bea Meterai");
  addOption(document.drop_list.SubCat,"500", "500-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"501", "501-Bea Meterai atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "510-Bea Meterai atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pembayaran Bea Meterai");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");
  addOption(document.drop_list.SubCat,"512", "512-Denda atas Pemeteraian Kemudian");

}  
if(document.drop_list.Category.value == '411612'){
  addOption(document.drop_list.SubCat,"100", "100-Penjualan Benda Meterai");
  addOption(document.drop_list.SubCat,"199", "199-Penjualan Benda Meterai");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) Benda Meterai");
  addOption(document.drop_list.SubCat,"310", "310-BSKPKB (Surat Ketetapan Pajak Kurang Bayar) Benda Meterai");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) Benda Meterai");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"500", "500-Benda Meterai atas pengungkapan ketidakbenaran");
  addOption(document.drop_list.SubCat,"501", "501-Benda Meterai atas penghentian penyidikan tindak pidana");
  addOption(document.drop_list.SubCat,"510", "510-Sanksi administrasi berupa denda atau kenaikan atas pengungkapan ketidakbenaran pembayaran Benda Meterai");
  addOption(document.drop_list.SubCat,"511", "511-Sanksi denda administrasi berupa denda atas penghentian penyidikan tindak pidana di bidang perpajakan");

}
if(document.drop_list.Category.value == '411613'){
  addOption(document.drop_list.SubCat,"100", "100-Pajak Penjualan Batubara");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) Pajak Penjualan Batubara");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) Pajak Penjualan Batubara");
  addOption(document.drop_list.SubCat,"320", "320-SKPKB (Surat Ketetapan Pajak Kurang Bayar) Pajak Penjualan Batubara");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411619'){
  addOption(document.drop_list.SubCat,"100", "100-Setoran Masa Pajak Tidak Langsung Lainnya");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) Pajak Tidak Langsung Lainnya");
  addOption(document.drop_list.SubCat,"310", "310-SKPKB (Surat Ketetapan Pajak Kurang Bayar) Pajak Tidak Langsung Lainnya");
  addOption(document.drop_list.SubCat,"320", "320-SKPKBT (Surat Ketetapan Pajak Kurang Bayar Tambahan) Pajak Tidak Langsung Lainnya");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");
  addOption(document.drop_list.SubCat,"900", "900-Pemungut Pajak Tidak Langsung Lainnya");

}
if(document.drop_list.Category.value == '411621'){
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) atas Bunga Penagihan");
  addOption(document.drop_list.SubCat,"301", "301-STP (Surat Tagihan Pajak) atas Denda Penagihan");

}
if(document.drop_list.Category.value == '411622'){
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) atas Bunga Penagihan PPN");
  addOption(document.drop_list.SubCat,"301", "301-STP (Surat Tagihan Pajak) atas Denda Penagihan");

}
if(document.drop_list.Category.value == '411623'){
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) atas Bunga Penagihan PPnBM");
  addOption(document.drop_list.SubCat,"301", "301-STP (Surat Tagihan Pajak) atas Denda Penagihan");

}
if(document.drop_list.Category.value == '411624'){
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) atas Bunga Penagihan PTLL (Pajak Tidak Langsung Lainnya)");
  addOption(document.drop_list.SubCat,"301", "301-STP (Surat Tagihan Pajak) atas Denda Penagihan");

}
if(document.drop_list.Category.value == '411313'){
  addOption(document.drop_list.SubCat,"100", "100-SPPT (Surat Pemberitahuan Pajak Terutang) Pajak Bumi Bangunan (PBB) Sektor Perkebunan");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) Pajak Bumi Bangunan (PBB) Sektor Perkebunan");
  addOption(document.drop_list.SubCat,"310", "310-SKP (Surat Ketetapan Pajak) Pajak Bumi Bangunan (PBB) Sektor Perkebunan");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411314'){
  addOption(document.drop_list.SubCat,"100", "100-SPPT (Surat Pemberitahuan Pajak Terutang) PBB Sektor Perhutanan");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PBB Sektor Perhutanan");
  addOption(document.drop_list.SubCat,"310", "310-SKP (Surat Ketetapan Pajak) PBB Sektor Perhutanan");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411315'){
  addOption(document.drop_list.SubCat,"100", "100-SPPT (Surat Pemberitahuan Pajak Terutang) PBB Sektor Pertambangan untuk Pertambangan Mineral dan Batubara");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PBB Sektor Pertambangan untuk Pertambangan Mineral dan Batubara");
  addOption(document.drop_list.SubCat,"310", "310-SKP (Surat Ketetapan Pajak) PBB Sektor Pertambangan untuk Pertambangan Mineral dan Batubara");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411316'){
  addOption(document.drop_list.SubCat,"100", "100-SPPT (Surat Pemberitahuan Pajak Terutang) PBB Sektor Pertambangan untuk Pertambangan Minyak Bumi dan Gas Bumi");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PBB Sektor Pertambangan untuk Pertambangan Minyak Bumi dan Gas Bumi");
  addOption(document.drop_list.SubCat,"310", "310-SKP (Surat Ketetapan Pajak) PBB Sektor Pertambangan untuk Pertambangan Minyak Bumi dan Gas Bumi");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411317'){
  addOption(document.drop_list.SubCat,"100", "100-SPPT (Surat Pemberitahuan Pajak Terutang) PBB Sektor Pertambangan untuk Pertambangan Panas Bumia");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PBB Sektor Pertambangan untuk Pertambangan Panas Bumi");
  addOption(document.drop_list.SubCat,"310", "310-SKP (Surat Ketetapan Pajak) PBB Sektor Pertambangan untuk Pertambangan Panas Bumi");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
if(document.drop_list.Category.value == '411319'){
  addOption(document.drop_list.SubCat,"100", "100-SSPPT (Surat Pemberitahuan Pajak Terutang) PBB Sektor Lainnya");
  addOption(document.drop_list.SubCat,"300", "300-STP (Surat Tagihan Pajak) PBB Sektor Lainnya");
  addOption(document.drop_list.SubCat,"310", "310-SKP (Surat Ketetapan Pajak) PBB (Pajak Bumi Bangunan) Sektor Lainnya");
  addOption(document.drop_list.SubCat,"390", "390-Pembayaran atas Surat Keputusan Pembetulan, Surat Keputusan Keberatan, Putusan Banding, atau Putusan Peninjauan Kembali");

}
}

function removeAllOptions(selectbox)
{
  var i;
  for(i=selectbox.options.length-1;i>=0;i--)
  {
    //selectbox.options.remove(i);
    selectbox.remove(i);
  }
}


function addOption(selectbox, value, text )
{
  var optn = document.createElement("OPTION");
  optn.text = text;
  optn.value = value;

  selectbox.options.add(optn);
}

</script> 
</head>

<body class="bg-body2" onload="fillCategory();"> 


  <!-- ======= Header ======= -->
  <?php include'../header-bill.html'; ?>
  <br />
  <br/>
  <br/>

  <div class="container container-fluid box2"> 
   <br />


   <!-- agar kolom tidak ada batas row -->
   <div class="row no-gutters">
    <!-- membuat kolom kiri-->
    <div class="col-sm-3" style="position: fixed; width: 33rem">

      <!-- card petunjuk -->
      <div class="card bg-light mb-3 card_2">
        <div class="card-body">
          <br/>
          <h5 class="card-title card-title_1" style="font-size: 16px; color: grey;"><i class="fas fa-home"></i> &nbsp; Tax Center &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="fas fa-chevron-left"></i></h5>
          <br/>
          <h5 class="card-title card-title_1" style="font-size: 14px;">SURAT SETORAN ELEKTRONIK</h5>
          <br/>
          <h5 class="card-title card-title_1" style="font-size: 16px; color: grey;"><i class="far fa-file"></i> &nbsp; ISI SSE </h5>
          <br/>
          <h5 class="card-title card-title_1" style="font-size: 16px; color: grey;"><i class="fas fa-question"></i> &nbsp; BANTUAN &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="fas fa-chevron-left"></i></h5>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>

        </div>
      </div>
      <!-- card petunjuk -->
    </div>
    <!-- end kolom kiri -->

    <!-- membuat kolom kanan -->
    <div class="col-sm-9" style="padding-left:35rem; width: 130rem">
      <br/>
      <br/>
      <p style="font-size:30px"><strong>Surat Setoran Elektronik</strong></p>
      <!-- Kolom Data formulir -->
      <form name="drop_list" method="post" action="proses_billing.php">

        <div class="card bg-light mb-3 card_5">
          <div class="card-header2 card-header_3"><i class="fas fa-file-alt"></i> <b>Form Surat Setoran Elektronik</b></div>
          <div class="card-body card-body_2">  
            <p class="p_text_2 card_7"><b></b></p>

            <!-- <form action="" method="post"> -->
             <!-- <form name="drop_list" method="post" action="proses_billing.php"> -->
              <?php 
              $npwp=$_SESSION['npwp'];
              include '../koneksi.php';
              $data=mysqli_query($koneksi,"select* from tb_daftarnpwp where id_daftar_npwp='$npwp'");
              $row=mysqli_fetch_assoc($data);
              ?>

              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
                <label class="col-sm-3 col-form-label">NPWP</label>
                <div class="col-sm-6">
                  <input class="form-control" style="font-size: 16px;" type="" name="npwp" value="<?php echo $_SESSION['npwp']; ?>" readonly>
                </div>
              </div>

              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
                <label class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input class="form-control" style="font-size: 16px;" type="" name="nama" value="<?php echo $_SESSION['nama_ktp']; ?>" readonly>
                </div>
              </div>

              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                 <textarea class="form-control" style="font-size: 16px;" name="alamat" readonly value=""><?php echo $row['alamat']; ?></textarea>
               </div>
             </div>

             <!-- <form name="drop_list"> -->
               <div class="form-group" align="center" style="font-size: 16px; padding-left: 100px;">
                <div class="row">
                  <label class="col-sm-3 col-form-label">Jenis Pajak <font style="color:red">*</font></label>
                  <div class="col-sm-6">
                    <SELECT  class="form-control" id="Category" NAME="jenis_pajak" style="font-size: 16px;" onChange="SelectSubCat();" required>
                      <option value="">Pilih...</option>
                    </SELECT>
                  </div>
                </div>

                <br/>

                <div class="row">
                  <label class="col-sm-3 col-form-label">Jenis Setoran <font style="color:red">*</font></label>
                  <div class="col-sm-6">
                    <select class="form-control" id="SubCat" name="jenis_setoran" style="font-size: 16px;" onchange="showUser(this.value);showUserMobile(this.value);" required>
                      <option value="">Pilih...</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- </form> -->

              <div class="form-group row" align="center" style="font-size: 16px;padding-left: 100px;" >
                <label class="col-sm-3 col-form-label">Masa Pajak <font style="color:red">*</font></label>
                <div class="col-sm-6">
                  <div class="input-group">
                    <select class="form-control mb-3" style="font-size: 18px;" name="masa_pajak_sebelum" value="" required>
                      <placeholder>Pilih...
                        <option selected="selected" value="" disabled>Pilih...</option>
                        <option value="01">01-Januari</option>
                        <option value="02">02-Februari</option>
                        <option value="03">03-Maret</option>
                        <option value="04">04-April</option>
                        <option value="05">05-Mei</option>
                        <option value="06">06-Juni</option>
                        <option value="07">07-Juli</option>
                        <option value="08">08-Agustus</option>
                        <option value="09">09-September</option>
                        <option value="10">10-Oktober</option>
                        <option value="11">11-November</option>
                        <option value="12">12-Desember</option>
                      </placeholder>
                    </select>

                    <span class="input-group-addon" id="basic-addon1"style="font-size: 18px">s/d</span>

                    <select class="form-control mb-3" style="font-size: 18px;" name="masa_pajak_sesudah" value="" required>
                      <placeholder>Pilih...
                        <option selected="selected" value="" disabled>Pilih...</option>
                        <option value="01">01-Januari</option>
                        <option value="02">02-Februari</option>
                        <option value="03">03-Maret</option>
                        <option value="04">04-April</option>
                        <option value="05">05-Mei</option>
                        <option value="06">06-Juni</option>
                        <option value="07">07-Juli</option>
                        <option value="08">08-Agustus</option>
                        <option value="09">09-September</option>
                        <option value="10">10-Oktober</option>
                        <option value="11">11-November</option>
                        <option value="12">12-Desember</option>
                      </placeholder>
                    </select>

                  </div>
                </div>
              </div>


              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;" >
                <label class="col-sm-3">Tahun Pajak</label>
                <div class="col-sm-6">
                  <select class="form-control mb-3" name="tahun_pajak" value="" style="font-size: 18px;">
                    <placeholder >Tahun
                      <option selected="selected" value="" disabled>Tahun</option>
                      <?php
                      for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                        echo"<option value='$i'> $i </option>";
                      }
                      ?>
                    </placeholder>
                  </select>
                </div>
              </div>

              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
                <label class="col-sm-3 col-form-label">NOP</label>
                <div class="col-sm-6">
                  <input class="form-control" style="font-size: 18px;" type="" name="nop" value="" />
                </div>
              </div>

              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
                <label class="col-sm-3 col-form-label">Nomor Ketetapan</label>
                <div class="col-sm-6">
                  <input class="form-control" style="font-size: 18px;" type="" name="no_ketetapan" value="">
                  <p style="color: grey; font-size: 14px;">Format: No Urut/Jenis SKP/Tahun Pajak/Kode KPP/ Tahun Terbit</p>
                </div>
              </div>

              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
                <label class="col-sm-3 col-form-label">Jumlah Setor<font style="color:red">*</font></label>
                <div class="col-sm-2">
                  <input class="uang form-control" style="font-size: 16px;" type="" name="" value="IDR (Rp)" readonly>
                </div>
                <div class="col-sm-4">
                  <input class="form-control" style="font-size: 18px;" type="" name="jml_setor" value="" required>
                </div>
              </div>

              <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
                <label class="col-sm-3 col-form-label">Terbilang<font style="color:red">*</font></label>
                <div class="col-sm-6">
                 <textarea class="form-control" style="font-size: 16px;" id="terbilang-output" name="terbilang" readonly value=""></textarea>                 
               </div>  
             </div>

             <div class="form-group row" align="center" style="font-size: 16px; padding-left: 100px;">
              <label class="col-sm-3 col-form-label">Uraian</label>
              <div class="col-sm-6">
               <textarea class="form-control" style="font-size: 18px;" name="uraian" placeholder="uraian (75 karakter)" value="" ></textarea>
             </div>
           </div>

           <br/>

           <p style="font-size: 16px; padding-left: 10px"><strong> Catatan: Apabila ada kesalahan dalam isian Kode Billing atau masa berlakunya berakhir, Kode Billing dapat dibuat kembali. Tanggung jawab isian Kode Billing ada pada Wajib Pajak yang namanya tercantum di dalamnya </strong></p>

           <br/>
           <hr>

           <div align="center">
            <!-- <a href="halaman2-xxx.php"> -->
              <input type="submit" value="Buat Kode Billing" name="submit" class="" style="background-color: rgb(4, 153, 195); border-radius: 25px; color: white; border:none; height: 45px; font-size: 16px;"><!-- <small>Selanjutnya</small> <i class="fas fa-chevron-right"></i>/> -->
              <!-- </a> -->
              <!-- <a href="halaman2-xxx.php"> -->
                <input type="submit" value="Kosongkan" name="" class="" style="background-color: rgb(178, 34, 33); border-radius: 25px; color: white; border:none; height: 45px; font-size: 16px;"><!-- <small>Selanjutnya</small> <i class="fas fa-chevron-right"></i>/> -->
                <!-- </a> -->
              </div>

              <br/>


              <!-- End Kolom data formulir -->
              <br/>

            </div>
          </form>
          <!-- end card body -->
        </div>
        <!-- end card bg light -->
      </div>
      <!-- end kolom kanan -->
    </div>
    <!-- end row gutter -->
  </div>
  <!-- end container -->

  <script src="script.js"></script>
  <!-- </div> -->
  <br/>
  <br/>
  <br/>
  <br/>
  <!-- </FORM> -->

  <!-- Modal kode keamanan -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <!-- Modal content-->
      <!-- <form action="" method="post"> -->
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title">Buat Kode Billing</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body" style="padding-right: 30px; padding-left: 30px">

            <div class="form-group row" style="font-size: 16px;">
              <label class="col-sm-5 col-form-label">Kode Keamanan</label>
              <div class="col-sm-7">
                <!-- Membuat captcha -->
                <div class="form-group">
                  <!-- Membuat Grid -->
                  <img src="../captcha.php" alt="Kode Captcha" style="height:76px; width:160px; display: inline-grid; grid-template-columns: 400px 2fr; grid-gap: 40px; font-family: sans-serif; border-radius: 7px 7px 7px 7px; ">
                  <!-- <?php echo $pesan; ?> -->
                  <!-- End Membuat captcha -->
                </div>
                <p style="color: grey; font-size: 14px">Klik gambar untuk perbaharui kode</p>
              </div>
            </div>

            <div class="form-group row" style="font-size: 16px;">
              <label class="col-sm-5 col-form-label">Isikan Kode Keamanan</label>
              <div class="col-sm-7">
               <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="display: inline-grid; width: 180px; border-radius: 7px; grid-template-columns: 200px 1fr; grid-gap: 16px; font-size: 16px" placeholder="Kode Keamanan" required />
             </div>
           </div>


         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px; font-size: 16px">Batal</button>
          <input type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal2" name="submit" id="submit" value="Submit" style="border-radius: 25px; background-color: rgb(4, 153, 195); font-size: 16px"/>
        </div>

      </div>
      <!-- end modal content -->
      <!-- </form> -->
    </div>

  </div> 
  <!-- End Modal kode keamanan -->

  <!-- Modal kode keamanan -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 1050px">

    <div class="modal-dialog">

      <!-- Modal content-->
      <!-- <form action="" method="post"> -->
        <div class="modal-content" style="width: 795px;">

          <div class="modal-header">
            <h4 class="modal-title">Ringkasan Surat Setoran Elektronik</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body" style="padding-right: 40px; padding-left: 40px">

            <div class="form-group row" style="font-size: 16px;">
              <label class="col-sm-2 col-form-label">NPWP</label>
              <div class="col-sm-4">
               <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" value="<?php echo $_SESSION['npwp']; ?>" readonly />
             </div>
             <label class="col-sm-2 col-form-label">NOP</label>
             <div class="col-sm-4">
               <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
             </div>
           </div>

           <div class="form-group row" style="font-size: 16px;">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
             <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" value="<?php echo $_SESSION['nama_ktp']; ?>" readonly />
           </div>
           <label class="col-sm-2 col-form-label">Jumlah Setor</label>
           <div class="col-sm-4">
             <input class="form-control py-3 mata-uang" name="input_kode" id="jml_setor" type="text" maxlength="6" onkeyup="inputTerbilang();" style="font-size: 16px" readonly />
           </div>
         </div>

         <div class="form-group row" style="font-size: 16px;">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-4">
           <textarea class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly><?php echo $row['alamat']; ?></textarea>
         </div>
         <label class="col-sm-2 col-form-label">Terbilang</label>
         <div class="col-sm-4">
           <textarea class="form-control py-3" name="input_kode" id="" type="text" maxlength="6" style="font-size: 16px" readonly> </textarea>
         </div>
       </div>

      <div class="form-group row" style="font-size: 16px;">
        <label class="col-sm-2 col-form-label">Jenis Pajak</label>
        <div class="col-sm-4">
         <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
       </div>
       <label class="col-sm-2 col-form-label">Uraian</label>
       <div class="col-sm-4">
         <textarea class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly> </textarea>
       </div>
     </div>

     <div class="form-group row" style="font-size: 16px;">
      <label class="col-sm-2 col-form-label">Jenis Setoran</label>
      <div class="col-sm-4">
       <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
     </div>
     <label class="col-sm-2 col-form-label">NPWP Penyetor</label>
     <div class="col-sm-4">
       <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
     </div>
   </div>

   <div class="form-group row" style="font-size: 16px;">
    <label class="col-sm-2 col-form-label">Masa Pajak</label>
    <div class="col-sm-4">
     <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
   </div>
   <label class="col-sm-2 col-form-label">Nama Penyetor</label>
   <div class="col-sm-4">
     <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
   </div>
 </div>

 <div class="form-group row" style="font-size: 16px;">
  <label class="col-sm-2 col-form-label">Tahun Pajak</label>
  <div class="col-sm-4">
   <input class="form-control py-3" name="input_kode" id="kodeval" value="" type="text" maxlength="6" style="font-size: 16px" readonly />
 </div>
 <!-- kode billing -->
 <label class="col-sm-2 col-form-label">Kode Billing</label>
 <!-- MEMBUAT KODE BILLING ACAK -->
 <?php 
 function getToken($length)
 {
  $token = "0";
  // $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  // $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
  $codeAlphabet= "0123456789";
  $max = strlen($codeAlphabet); 

  for ($i=0; $i < $length; $i++) {
    $token .= $codeAlphabet[random_int(0, $max-1)];
  }

  return $token;
}
?>
<div class="col-sm-4">
 <input class="form-control py-3 kode_bil" name="input_kode" id="kodeval" type="text" value="<?php echo getToken(15); ?>" style="font-size: 16px" readonly />
</div>
<!-- End kode billing -->
</div>

<div class="form-group row" style="font-size: 16px;">
  <label class="col-sm-2 col-form-label">Nomor Ketetapan</label>
  <div class="col-sm-4">
   <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
 </div>
 <label class="col-sm-2 col-form-label">Masa Aktif Kode Billing</label>
 <div class="col-sm-4">
   <input class="form-control py-3" name="input_kode" id="kodeval" type="text" maxlength="6" style="font-size: 16px" readonly />
 </div>
</div>


</div>
<div class="modal-footer" style="padding-right: 40px">
  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 25px; font-size: 16px">Tutup</button>
  <a href="cetak_pdf.php">
    <input type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal2" name="submit" id="submit" value="Cetak" style="border-radius: 25px; background-color: rgb(4, 153, 195); font-size: 16px"/>
  </a>
</div>

</div>
<!-- end modal content -->
<!-- </form> -->
</div>

</div> 


<!-- End Modal kode keamanan -->
<?php include'../footer2.html'; ?>

<!-- Fontawesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<!-- Jquery Mask -->
<script src="terbilang/jquery-1.11.2.min.js"></script>
<script src="terbilang/jquery.mask.min.js"></script>
<script src="terbilang/terbilang.js"></script>
<script type="text/javascript">
  function inputTerbilang() {
    //membuat inputan otomatis jadi mata uang
    $('.mata-uang').mask('0.000.000.000', {reverse: true});

    //mengambil data uang yang akan dirubah jadi terbilang
    var input = document.getElementById("jml_setor").value.replace(/\./g, "");

    //menampilkan hasil dari terbilang
    document.getElementById("terbilang-output").value = terbilang(input).replace(/  +/g, ' ');
  } 
</script>

</body>

</html>

