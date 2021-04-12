$('#login-form-link').click(function (e) {
  $("#login-form").delay(100).fadeIn(100);
  $("#register-form").fadeOut(100);
  $('#register-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});
$('#register-form-link').click(function (e) {
  $("#register-form").delay(100).fadeIn(100);
  $("#login-form").fadeOut(100);
  $('#login-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});


var websiteDomain = window.parent.document.location.protocol + '//' + document.domain + "/my-home";
var duplicateemail = true;
var checkpassword = false;
var checkphone = false;

// Function to check if the email is exist.
$('#register-form-email').change(function () {
    var thisVal = $(this).val();
    var userId = 0;

    $.ajax({
        type: "GET",
        url: websiteDomain + "/dataAjax.php",
        dataType: 'json',
        data: "type=checkEmail&userId=" + userId + "&email=" + thisVal + "&jsoncallback=?",
        async: false,
        success: function (data) {

            if (data == 1) {
                $('#chekemail').html('البريد الإلكتروني موجود');
                duplicateemail = false;
            } else {
                duplicateemail = true;
                $('#chekemail').html('');
            }
        }
    });
});


// Function to check if the pass and repass is equal.
$('#register-form-password, #register-form-repassword').change(function () {
    if ($('#register-form-repassword').val() != '' && $('#register-form-password').val() != '') {
        if ($('#register-form-repassword').val() == $('#register-form-password').val()) {
            checkpassword = true;
            $("#errorM").html('');
        } else {
            $("#errorM").html("كلمة المرور غير متطابقة");
            checkpassword = false;
        }
    }
});

// Function to check the phone.
$('#register-form-phone').change(function () {
    var phone_pattern = new RegExp(/^07[7-9]{1}[0-9]{7}$|^\+9627[7-9]{1}[0-9]{7}$/);
    if (phone_pattern.test($(this).val())) {
        checkphone = true;
        $('#phone-error').html('');
    } else {
        checkphone = false;
        $('#phone-error').html("رقم الهاتف غير صحيح");
    }
} )

//submit creat Acount form
$('#register-form-email, #register-form-password, #register-form-repassword').change(function () {
 
    if (duplicateemail && checkpassword && checkphone) {
        $("#register-form-submit").prop("disabled", false);
       
    } else {
     
        $("#register-form-submit").prop("disabled", true);
        if ($('#register-form-name').val() == '' || $('#register-form-email').val() == '' || $("#register-form-phone").val() == '' || $('#register-form-image').val() == '' || $('#register-form-password').val() == '' || $('#register-form-repassword').val() == '') {
            $("#register-form-submit").prop("disabled", false);
        }
    }
});
