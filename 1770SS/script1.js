/*!
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
function hitung_pajak() {
    var txtFirstNumberValue = document.getElementById('angkaSatu').value;
    var txtSecondNumberValue = document.getElementById('angkaDua').value;
    var txtThirdNumberValue = document.getElementById('angkaTiga').value;
    var txtFourthNumberValue = document.getElementById('angkaEmpat').value;
    var txtFifthNumberValue = document.getElementById('angkaLima').value;
    var txtSixthNumberValue = document.getElementById('angkaEnam').value;
    var tkk = document.getElementById("tkk").value;
    var result = document.getElementById("penentuan").value;

    if(isNaN(txtFirstNumberValue) || isNaN(txtSecondNumberValue)|| isNaN(txtThirdNumberValue)|| isNaN(txtFourthNumberValue)|| isNaN(txtFifthNumberValue)|| isNaN(txtSixthNumberValue)) {

      // alert('isi form dengan angka!');

      
  } else {
    if(tkk=="tk0") {

        document.getElementById('angkaTiga').value = '54000000';

    }

    else if(tkk=="tk1") {

        document.getElementById('angkaTiga').value = '58500000';

    }

    else if(tkk=="tk2") {

        document.getElementById('angkaTiga').value = '63000000';

    }

    else if(tkk=="tk3"){

        document.getElementById('angkaTiga').value = '67500000';

    }
    else if(tkk=="k0"){

        document.getElementById('angkaTiga').value = '58500000';

    }
    else if(tkk=="k1"){

        document.getElementById('angkaTiga').value = '63000000';

    }
    else if(tkk=="k2"){

        document.getElementById('angkaTiga').value = '67500000';

    }
    else if(tkk=="k3"){

        document.getElementById('angkaTiga').value = '72000000';

    }
    else if(tkk=="ki0"){

        document.getElementById('angkaTiga').value = '112500000';

    }
    else if(tkk=="ki1"){

        document.getElementById('angkaTiga').value = '117000000';

    }
    else if(tkk=="ki2"){

        document.getElementById('angkaTiga').value = '121500000';

    }
    else if(tkk=="ki3"){

        document.getElementById('angkaTiga').value = '126000000';

    }

    var kena_pjk = (txtFirstNumberValue - txtSecondNumberValue - txtThirdNumberValue);
        //   Jquery Penghasilan Kena Pajak
        if(kena_pjk<=0){
            document.getElementById('angkaEmpat').value = -kena_pjk;
        }else{
            document.getElementById('angkaEmpat').value = kena_pjk;

        }
        var terutang;

        if(kena_pjk<=50000000){
            terutang = kena_pjk*(5/100);
        }else if(kena_pjk>50000000 && kena_pjk<=250000000){
            terutang = kena_pjk*(15/100);
        }else if(kena_pjk>250000000 && kena_pjk<=500000000){
            terutang = kena_pjk*(25/100);
        }else{
            terutang = kena_pjk*(30/100);
        }
        if(terutang<=0){
            document.getElementById('angkaLima').value = -terutang;
        }else{
            document.getElementById('angkaLima').value = terutang;
        }

        // var dipotong = terutang;
        // if(!isNaN(dipotong)){
        //     document.getElementById('angkaEnam').value = dipotong;
        // }
        // var ambilt = terutang;
        var nihil = -terutang-txtSixthNumberValue;
        // var nihil2 = terutang-txtSixthNumberValue;
        if(nihil<=0){
            document.getElementById('angkaTujuh').value = -nihil;
            
        }else{
            document.getElementById('angkaTujuh').value = nihil;

        }
        // if(nihil2<=0){
        //     document.getElementById('angkaTujuh').value = -nihil2;
            
        // }else{
        //     document.getElementById('angkaTujuh').value = -(-nihil2);

        // }
    }
}