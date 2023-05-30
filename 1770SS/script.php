<script type="text/javascript">/*!
    * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */

    const { echo } = require("shelljs");

    (function($) {
        "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

//membuat toggle password
function change()
{
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
       document.getElementById('pass').type = 'text';
       document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
   }
   else
   {
       document.getElementById('pass').type = 'password';
       document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
   }
}

// Script Jquery dari Multi Step Form
$(document).ready(function () {

    $('#btn_login_details').click(function () {

        var error_email = '';
        var error_password = '';
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if ($.trim($('#email').val()).length == 0) {
            error_email = 'Email is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        }
        else {
            if (!filter.test($('#email').val())) {
                error_email = 'Invalid Email';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            }
            else {
                error_email = '';
                $('#error_email').text(error_email);
                $('#email').removeClass('has-error');
            }
        }

        if ($.trim($('#password').val()).length == 0) {
            error_password = 'Password is required';
            $('#error_password').text(error_password);
            $('#password').addClass('has-error');
        }
        else {
            error_password = '';
            $('#error_password').text(error_password);
            $('#password').removeClass('has-error');
        }

        if (error_email != '' || error_password != '') {
            return false;
        }
        else {
            $('#list_login_details').removeClass('active active_tab1');
            $('#list_login_details').removeAttr('href data-toggle');
            $('#login_details').removeClass('active');
            $('#list_login_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        }
    });

    $('#previous_btn_personal_details').click(function () {
        $('#list_personal_details').removeClass('active active_tab1');
        $('#list_personal_details').removeAttr('href data-toggle');
        $('#personal_details').removeClass('active in');
        $('#list_personal_details').addClass('inactive_tab1');
        $('#list_login_details').removeClass('inactive_tab1');
        $('#list_login_details').addClass('active_tab1 active');
        $('#list_login_details').attr('href', '#login_details');
        $('#list_login_details').attr('data-toggle', 'tab');
        $('#login_details').addClass('active in');
    });

    $('#btn_personal_details').click(function () {
        var error_first_name = '';
        var error_last_name = '';

        if ($.trim($('#first_name').val()).length == 0) {
            error_first_name = 'First Name is required';
            $('#error_first_name').text(error_first_name);
            $('#first_name').addClass('has-error');
        }
        else {
            error_first_name = '';
            $('#error_first_name').text(error_first_name);
            $('#first_name').removeClass('has-error');
        }

        if ($.trim($('#last_name').val()).length == 0) {
            error_last_name = 'Last Name is required';
            $('#error_last_name').text(error_last_name);
            $('#last_name').addClass('has-error');
        }
        else {
            error_last_name = '';
            $('#error_last_name').text(error_last_name);
            $('#last_name').removeClass('has-error');
        }

        if (error_first_name != '' || error_last_name != '') {
            return false;
        }
        else {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_contact_details').removeClass('inactive_tab1');
            $('#list_contact_details').addClass('active_tab1 active');
            $('#list_contact_details').attr('href', '#contact_details');
            $('#list_contact_details').attr('data-toggle', 'tab');
            $('#contact_details').addClass('active in');
        }
    });

    $('#previous_btn_contact_details').click(function () {
        $('#list_contact_details').removeClass('active active_tab1');
        $('#list_contact_details').removeAttr('href data-toggle');
        $('#contact_details').removeClass('active in');
        $('#list_contact_details').addClass('inactive_tab1');
        $('#list_personal_details').removeClass('inactive_tab1');
        $('#list_personal_details').addClass('active_tab1 active');
        $('#list_personal_details').attr('href', '#personal_details');
        $('#list_personal_details').attr('data-toggle', 'tab');
        $('#personal_details').addClass('active in');
    });

    $('#btn_contact_details').click(function () {
        var error_address = '';
        var error_mobile_no = '';
        var mobile_validation = /^\d{12}$/;
        if ($.trim($('#address').val()).length == 0) {
            error_address = 'Address is required';
            $('#error_address').text(error_address);
            $('#address').addClass('has-error');
        }
        else {
            error_address = '';
            $('#error_address').text(error_address);
            $('#address').removeClass('has-error');
        }

        if ($.trim($('#mobile_no').val()).length == 0) {
            error_mobile_no = 'Mobile Number is required';
            $('#error_mobile_no').text(error_mobile_no);
            $('#mobile_no').addClass('has-error');
        }
        else {
            if (!mobile_validation.test($('#mobile_no').val())) {
                error_mobile_no = 'Invalid Mobile Number';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            }
            else {
                error_mobile_no = '';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').removeClass('has-error');
            }
        }
        if (error_address != '' || error_mobile_no != '') {
            return false;
        }
        else {
            $('#btn_contact_details').attr("disabled", "disabled");
            $(document).css('cursor', 'prgress');
            $("#register_form").submit();
        }

    });

})

// Jquery Pajak Penghasilan
// function cek(){
//     if(isNaN(form.angkaSatu.value) || isNaN(form.angkaDua.value)|| isNaN(form.angkaTiga.value)|| isNaN(form.empat.value)|| isNaN(form.lima.value)|| isNaN(form.enam.value) || isNaN(form.tujuh.value)) {
//         alert('Silahkan Isi Dengan Angka!');
//     }
// }
function replaceAll(string,search,replace){
    return string.split(search).join(replace);
}

function hitung_pjk(){
   a = eval(form.tes.value);
   b = eval(form.tes2.value);

   var tkk = document.getElementById('pilih').value;

   if (tkk==""){
    document.getElementById('angkaTiga2').value = 0;

    document.getElementById('angkaTiga').value = 0;

}
else if(tkk=="tk0") {
    <?php 
    $a = number_format( 54000000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 54000000;
}

else if(tkk=="tk1") {
    <?php 
    $a = number_format( 58500000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 58500000;
}

else if(tkk=="tk2") {
    <?php 
    $a = number_format( 63000000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 63000000;

}

else if(tkk=="tk3"){
    <?php 
    $a = number_format( 67500000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 67500000;
}
else if(tkk=="k0"){
    <?php 
    $a = number_format( 58500000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 58500000;
}
else if(tkk=="k1"){
    <?php 
    $a = number_format( 63000000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 63000000;
}
else if(tkk=="k2"){
   <?php 
   $a = number_format( 67500000 ,0,',','.') ;
   $a = "'" .$a. "'"; 
   ?>
   document.getElementById('angkaTiga2').value = <?php echo $a ?>;

   document.getElementById('angkaTiga').value = 67500000;
}
else if(tkk=="k3"){
    <?php 
    $a = number_format( 72000000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 72000000;
}
else if(tkk=="ki0"){
    <?php 
    $a = number_format( 112500000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 112500000;
}
else if(tkk=="ki1"){
    <?php 
    $a = number_format( 117000000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 117000000;
}
else if(tkk=="ki2"){
    <?php 
    $a = number_format( 121500000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 121500000;
}
else if(tkk=="ki3"){
    <?php 
    $a = number_format( 126000000 ,0,',','.') ;
    $a = "'" .$a. "'"; 
    ?>
    document.getElementById('angkaTiga2').value = <?php echo $a ?>;

    document.getElementById('angkaTiga').value = 126000000;
}
c = eval(form.angkaTiga.value);

kena_pjk = (parseInt(a) - parseInt(b) - parseInt(c));
if(kena_pjk<0){
    form.angkaEmpat.value = kena_pjk;
    kena_pjk = 0;
}
if (!isNaN(kena_pjk)) {
    form.angkaEmpat.value = Math.abs(kena_pjk);
}

if(kena_pjk<=50000000){
    terutang = kena_pjk*(5/100);
}else if(kena_pjk>50000000 && kena_pjk<=250000000){
    terutang = kena_pjk*(15/100);
}else if(kena_pjk>250000000 && kena_pjk<=500000000){
    terutang = kena_pjk*(25/100);
}else{
    terutang = kena_pjk*(30/100);
}

// if(kena_pjk<0){
//     form.angkaLima.value = 0;
// }
if (!isNaN(kena_pjk)) {
    form.angkaLima.value = Math.abs(terutang);
}

var p_kontainer=document.getElementById("penentuan");
dipotong = eval(form.tes6.value);

if (terutang<=0) {
  hasil = terutang - (dipotong*(-1));

  if (terutang>-dipotong)
  {
    p_kontainer.innerHTML="<strong style='color: blue;'>Lebih Bayar</strong> ";
    $('#card_kurang_bayar').hide(200);
    $('#btn_lebih').show(200);
    $('#btn_nihil').hide(200);
    $('#btn_kurang').hide(200);
    $('#btn_back').show(200);
    $('#btn_back2').hide(200);
}
else if (terutang<-dipotong)
{
    p_kontainer.innerHTML="<strong style='color: red;'>Kurang Bayar</strong>";
    $('#card_kurang_bayar').show(200);
    $('#btn_lebih').hide(200);
    $('#btn_nihil').hide(200);
    $('#btn_kurang').show(200);
    $('#btn_back').hide(200);
    $('#btn_back2').show(200);
}
else if (terutang==(-dipotong))
{
    p_kontainer.innerHTML="<strong>Nihil</strong>";
    $('#card_kurang_bayar').hide(200);
    $('#btn_lebih').hide(200);
    $('#btn_nihil').show(200);
    $('#btn_kurang').hide(200);
    $('#btn_back').show(200);
    $('#btn_back2').hide(200);
}

}else {
  hasil = terutang - dipotong;
    // pernyataan benar
    if (terutang>dipotong)
    {
        p_kontainer.innerHTML="<strong style='color: red;'>Kurang Bayar</strong> ";
        $('#card_kurang_bayar').show(200);
        $('#btn_lebih').hide(200);
        $('#btn_nihil').hide(200);
        $('#btn_kurang').show(200);
        $('#btn_back').hide(200);
        $('#btn_back2').show(200);
    }
    else if (terutang<dipotong)
    {
        p_kontainer.innerHTML="<strong style='color: blue;'>Lebih Bayar</strong>";
        $('#card_kurang_bayar').hide(200);
        $('#btn_lebih').show(200);
        $('#btn_nihil').hide(200);
        $('#btn_kurang').hide(200);
        $('#btn_back').show(200);
        $('#btn_back2').hide(200);
    }
    else if (terutang==dipotong)
    {
        p_kontainer.innerHTML="<strong>Nihil</strong>";
        $('#card_kurang_bayar').hide(200);
        $('#btn_lebih').hide(200);
        $('#btn_nihil').show(200);
        $('#btn_kurang').hide(200);
        $('#btn_back').show(200);
        $('#btn_back2').hide(200);
    }
}
if (!isNaN(hasil)) {
    form.angkaTujuh.value = Math.abs(hasil);
}
}

function hapus(){
     //cara menambahkan dan menghilangkan titik dari 2 text input
     id1 = "angkaSatu";
     id2 = "angkaDua";
     id3 = "angkaTiga";
     id4 = "angkaEmpat";
     id5 = "angkaLima";
     id6 = "angkaEnam";
     id7 = "angkaTujuh";

     id1_val = document.getElementById(id1).value;
     tes_val = replaceAll(id1_val,'.','');
     document.getElementById('tes').value = tes_val;

     id2_val = document.getElementById(id2).value;
     tes2_val = replaceAll(id2_val,'.','');
     document.getElementById('tes2').value = tes2_val;

     id3_val = document.getElementById(id3).value;
     tes3_val = replaceAll(id3_val,'.','');
     document.getElementById('tes3').value = tes3_val;

     id4_val = document.getElementById(id4).value;
     tes4_val = replaceAll(id4_val,'.','');

     var reverse2 = id4_val.toString().split('').reverse().join(''),
     ribuan2 = reverse2.match(/\d{1,3}/g);
     ribuan2 = ribuan2.join('.').split('').reverse().join('');
     document.getElementById('tes4').value = ribuan2;

     id5_val = document.getElementById(id5).value;
     tes5_val = replaceAll(id5_val,'.','');

     var reverse = tes5_val.toString().split('').reverse().join(''),
     ribuan = reverse.match(/\d{1,3}/g);
     ribuan = ribuan.join('.').split('').reverse().join('');
     document.getElementById('tes5').value = ribuan;
     // <?php $coba = 1500000; $a = number_format($coba,0,',','.'); $a = "'" .$a. "'"; echo $a;?>;
     // number_format(tes5val ,0,',','.');


     id6_val = document.getElementById(id6).value;
     tes6_val = replaceAll(id6_val,'.','');
     document.getElementById('tes6').value = tes6_val;

     id7_val = document.getElementById(id7).value;
     tes7_val = replaceAll(id7_val,'.','');

     var reverse3 = tes7_val.toString().split('').reverse().join(''),
     ribuan3 = reverse3.match(/\d{1,3}/g);
     ribuan3 = ribuan3.join('.').split('').reverse().join('');
     document.getElementById('tes7').value = ribuan3;
    //akhir copas panggil hilang
}

</script>