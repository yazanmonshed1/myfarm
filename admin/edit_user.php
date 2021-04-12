<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = 'users';
$user = $_SESSION["login"]; //store data retreive from user table 
// store the variables
$name = $user['user_name'];
$phone = $user['user_phone'];
$email = $user['user_email'];
$user_id = $user['user_id'];

$edit_user_id = $_REQUEST['id'];
$edit_user = new users();
if (isset($_POST['submitEdit']) && $_POST['submitEdit'] == 1) {
  $objUser = new Users();
  $_POST['status']=1;

        $_POST["id"]=$edit_user_id;
	$objUser->updateUsers($_POST);
         header("location:users.php?editUser=1"); 
}
$edit_user_info = $edit_user->getUserById($edit_user_id)[0];
?>
<!DOCTYPE html>
<html lang="en">

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
        <h4 class="mb"><?= $user_name ?></h4>
      </div>
      <div class="mt">
        <!-- /col-lg-12 -->
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <!-- /panel-heading -->
            <div class="panel-body">
              <div class="tab-content">
                <div id="edit" class="tab-pane active">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 detailed">
                    <h4 class="mb">تعديل المعلومات الشخصية</h4>
                      <form role="form" class="form-horizontal" action="edit_user.php?id=<?= $edit_user_id ?>" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="submitEdit" value="1" />
                        <div class="form-group">
                          <label class="col-lg-3 control-label"> الاسم: </label>
                          <div class="col-lg-6">
                            <input type="text" name="register-form-name" class="form-control" value="<?= $edit_user_info['user_name']; ?>" required>
                          </div>
                        </div>
                        <div class="form-group email-container">
                          <label class="col-lg-3 control-label">عنوان بريد الكتروني: </label>
                          <div class="col-lg-6">
                            <input type="text"id="register-form-email" name="register-form-email" class="form-control" value="<?= $edit_user_info['user_email']; ?>" required>
                               <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="chekemail">
				</p>
                          </div>
                        </div>
                        <div class="form-group phone-container">
                          <label class="col-lg-3 control-label"> رقم الهاتف : </label>
                          <div class="col-lg-6">
                            <input type="text" name="register-form-phone" id="register-form-phone" class="form-control" value="<?= $edit_user_info['user_phone']; ?>">
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
                            <input type="password"  id="register-form-password" name="register-form-password" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label"> إعادة إدخال كلمة المرور: </label>
                          <div class="col-lg-6">
                            <input type="password" id="register-form-repassword" name="register-form-repassword"class="form-control">
                              <p class="form-error-submit" style="color: #d60000 !important;font-size: 13px !important;margin: 0 !important;" id="errorM">
	                     </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" type="submit" id="register-form-submit" name="update">حفظ</button>
                            <button class="btn btn-theme04" type="button" onclick="window.location.href='users.php'">الغاء</button>
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
  </body>
<script src="js/jquery.js"></script>
 <script src="js/script.js"></script>
</html>