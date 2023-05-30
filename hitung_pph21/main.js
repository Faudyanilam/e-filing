
var gaji_pensi = document.getElementById("gaji_pensi");
gaji_pensi.addEventListener("keyup", function(e) {
  gaji_pensi.value = convertRupiah(this.value);
});
gaji_pensi.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});
 
var tunjangan_pph = document.getElementById("tunjangan_pph");
tunjangan_pph.addEventListener("keyup", function(e) {
  tunjangan_pph.value = convertRupiah(this.value, "Rp. ");
});
tunjangan_pph.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});

var tunjangan_lain = document.getElementById("tunjangan_lain");
tunjangan_lain.addEventListener("keyup", function(e) {
  tunjangan_lain.value = convertRupiah(this.value, "Rp. ");
});
tunjangan_lain.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});

var honor = document.getElementById("honor");
honor.addEventListener("keyup", function(e) {
  honor.value = convertRupiah(this.value, "Rp. ");
});
honor.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});

var premi_asuransi = document.getElementById("premi_asuransi");
premi_asuransi.addEventListener("keyup", function(e) {
  premi_asuransi = convertRupiah(this.value, "Rp. ");
});
premi_asuransi.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});


 
function convertRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split  = number_string.split(","),
    sisa   = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
 
	if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	}
 
	rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
}
 
function isNumberKey(evt) {
    key = evt.which || evt.keyCode;
	if ( 	key != 188 // Comma
		 && key != 8 // Backspace
		 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
		 && (key < 48 || key > 57) // Non digit
		) 
	{
		evt.preventDefault();
		return;
	}
}
