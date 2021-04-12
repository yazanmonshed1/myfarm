<?php
  require_once("../etc/config.php");
  include("../lib/variables.php");

  $_SESSION['active'] = "profile";
  $user = $_SESSION["login"];//store data retreive from user table 
  // store the variables
  $name = $user['user_name'];
  $phone = $user['user_phone'];
  $email = $user['user_email'];
  $user_id = $user['user_id'];
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
          <h4 class="mb">الصفحه الشخصيه</h4>
        </div>
        <div class="mt">
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li>
                    <a href="edit.php?id=<?=$user_id;?>">تعديل</a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="index.php" class="contact-map">عرض</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="contact" class="tab-pane active">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <!-- <h4 class="mb">My Profile</h4> -->
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> الاسم</label>
                            <div class="col-lg-6 control-label">
                              <?=$name;?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">رقم الهاتف</label>
                            <div class="col-lg-6 control-label">
                              <?=$phone;?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">البريد الاكتروني</label>
                            <div class="col-lg-6 control-label">
                              <?=$email;?>
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
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="js/script.js"></script>
</body>
</html>
