<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = 'categories';
$user = $_SESSION["login"]; //store data retreive from user table 
$user_id = $user['user_id'];

$add_user = new Users();
$category = new City();
if (isset($_POST['submitAdd']) && $_POST['submitAdd'] == 1) {

	$category->addCity($_POST["name_title"]);
       header("location:city.php?add=1"); 
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="">
  <title>admin|My home</title>
  <link href="css/chosen.min.css" rel="stylesheet">
  <?php
    require_once("header-admin.php"); 
  ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-body">
                <div class="tab-content">
                  <div id="edit" class="tab-pane active">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                      <h4 class="mb">اضافة محافظة</h4>
                        <form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="submitAdd" value="1" />
                            <div class="form-group" >
                            <label class="col-lg-3 control-label">اسم المحافظة: </label>
                            <div class="col-lg-6">
                              <input type="text" id="content_title" name="name_title"  class="form-control" value="" required maxlength="50">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">حفظ</button>
                              <button class="btn btn-theme04" type="button" onclick="window.location.href='city.php'">الغاء</button>
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
    <script src="js/jquery.js"></script>
  </body>
</html>
