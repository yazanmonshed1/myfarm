<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = "profile";
$user = $_SESSION["login"];//store data retreive from user table 
// store the variables

$user_id = $user['user_id'];
if (isset($_POST['submitEdit']) && $_POST['submitEdit'] == 1) {
	$objUser = new Users();
     
        $_POST["id"]=$user_id;
	$objUser->updateUsers($_POST);
        $data=$objUser->getUserById($user_id);
      
        $_SESSION["login"]=$user=$data[0];
        $msg="تم الحفظ ";
}
$name = $user['user_name'];
$phone = $user['user_phone'];
$email = $user['user_email'];


if ($user_id != $_REQUEST['id']) {
  header("location:404.html");
}

$error=0;// flag variable to know if error or not
$error_message=""; // store error message 

?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="">
  <title>admin|My home</title>
  <?php
    require_once("header-admin.php"); 
  ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
      <div class="col-lg-8 col-lg-offset-2 detailed">
          <h4 class="mb">تعديل المعلومات الشخصية</h4>
        </div>
        <div class="mt">
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a data-toggle="tab" href="#edit">تعديل</a>
                  </li>
                  <li >
                    <a  href="index.php" class="contact-map">عرض</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="edit" class="tab-pane active">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 detailed">
                        <form role="form" class="form-horizontal" action="edit.php?id=<?=$user_id?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="submitEdit" value="1" />
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> الاسم: </label>
                            <div class="col-lg-6">
                              <input type="text" name="register-form-name" class="form-control" value="<?=$name;?>" required>
                            </div>
                          </div>
                          <div class="form-group email-container">
                            <label class="col-lg-3 control-label"> عنوان بريد الكتروني: </label>
                            <div class="col-lg-6">
                              <input type="text" id="register-form-email" name="register-form-email" class="form-control" value="<?=$email?>" required>
                              <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="chekemail">
				</p>
                            </div>
                          </div>
                          <div class="form-group phone-container">
                            <label class="col-lg-3 control-label">  رقم الهاتف : </label>
                            <div class="col-lg-6">
                              <input type="text" name="register-form-phone" id="register-form-phone" class="form-control" value="<?=$phone;?>" required>
                              <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="phone-error">
				</p>
                            </div>
                          </div>
                          <!-- <div class="form-group">
                            <label class="col-lg-3 control-label"> الصوره الشخصيه: </label>
                            <div class="col-lg-6">
                              <input type="file" id="exampleInputFile" class="file-pos" name="register-form-image">
                            </div>
                          </div> -->
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> كلمه السر: </label>
                            <div class="col-lg-6">
                              <input type="password" id="register-form-password" name="register-form-password" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> إعادة إدخال كلمة المرور: </label>
                            <div class="col-lg-6">
                              <input type="password" id="register-form-repassword" name="register-form-repassword" class="form-control">
                              <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="errorM">
	                     </p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit" id="register-form-submit"  name="update">حفظ</button>
                              <button class="btn btn-theme04" type="button" onclick="window.location.href='index.php'">الغاء</button>
                               <label class="col-lg-3 control-label"><?=$msg;?> </label>
                            </div>
                              
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <!--common script for all pages-->
  <script src="js/jquery.js"></script>
  <script src="js/script.js"></script>

</body>
</html>
