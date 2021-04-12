<?php
require_once("etc/config.php");
include("lib/variables.php");

if ($isLogin != 0) {
  header("location:index.php");
}


if (isset($_POST['submitlogin']) && $_POST['submitlogin'] == 1) {
  $objUser = new Users();

  $login = $objUser->loginUsers($_POST["login-form-username"], $_POST["login-form-password"]);

  if ($login == 1) {
    header("location:admin/index.php");
  } else {
    $errorMsg = "البريد الإلكتروني أو كلمة المرور غير صحيحة";
  }
}


// If user click register.
if (isset($_POST['submitregister']) && $_POST['submitregister'] == 1) {
  $objUser = new Users();
  $_POST['status'] = 1;
  $objUser->addUsers($_POST);
  $login = $objUser->loginUsers($_POST["register-form-email"], $_POST["register-form-password"]);
  header("location:admin/index.php");
}
?>
<html lang="ar">

<?= $head; ?>

<body class="rtl home wp-rem pt-0">

  <!-- Side Menu Start -->
  <div id="overlay"></div>
  <?= $header ?>
  <div class="container">
    <div class="row login-form">
      <div class="col-md-6">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">تسجيل الدخول</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">انشاء حساب جديد</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="" method="post" role="form" style="display: block;">
                  <input type="hidden" name="submitlogin" value="1" />
                  <div class="form-group">
                    <input type="email" id="login-form-username" name="login-form-username" tabindex="1" class="form-control" placeholder="البريد الالكتروني" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" id="login-form-password" name="login-form-password" tabindex="2" class="form-control" placeholder="كلمه السر">
                    <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;">
                      <?php if (isset($errorMsg)) {
                        echo $errorMsg;
                      } ?></p>
                  </div>
                  <div class="form-group submit-login">
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="تسجيل الدخول">
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">نسيت كلمه المرور؟</a>
                      </div>
                    </div>
                  </div>
                </div> -->
                </form>
                <form id="register-form" action="" method="post" role="form" style="display: none;" enctype="multipart/form-data">
                  <input type="hidden" name="submitregister" value="1" />
                  <div class="form-group">
                    <input type="text" id="register-form-name" name="register-form-name" tabindex="1" class="form-control" placeholder="الاسم" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="email" id="register-form-email" name="register-form-email" tabindex="1" class="form-control" placeholder="البريد الالكتروني" value="" required>
                    <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="chekemail"></p>
                  </div>
                  <div class="form-group">
                    <input type="text" id="register-form-phone" name="register-form-phone" tabindex="1" class="form-control" placeholder="رقم الهاتف" value="" required>
                    <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="phone-error"></p>
                  </div>
                  <!-- <div class="form-group">
                    <input type="file" id="register-form-image" name="register-form-image" value="" class="form-control file" required />
                  </div> -->
                  <div class="form-group">
                    <select class="chosen-select-no-single" id="wp_rem_property_category" name="user_gender">
                      <option selected="selected">الجنس</option>
                      <option value="1">ذكر</option>
                      <option value="2">أنثى</option>
                    </select>
                  </div>
                  <!-- <div class="form-group">
                  <select class="chosen-select-no-single" id="wp_rem_property_category" name="status">
                    <option selected="selected"> صفة المستخدم </option>
                    <option value = "2" > طالب </option>
                    <option value = "1" > صاحب سكن </option>
                  </select>
                </div> -->
                  <div class="form-group">
                    <input type="password" id="register-form-password" name="register-form-password" tabindex="2" class="form-control" placeholder="كلمه السر" required>
                  </div>
                  <div class="form-group">
                    <input type="password" id="register-form-repassword" name="register-form-repassword" tabindex="2" class="form-control" placeholder="تأكيدكلمه السر" required>
                    <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="errorM"></p>
                  </div>
                  <div class="form-group submit-login">
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="submit" id="register-form-submit" name="register-form-submit" tabindex="4" class="form-control btn btn-register" value="انشاء حساب جديد">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $footer ?>
</body>

</html>
