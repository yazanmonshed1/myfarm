<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = 'university';

$university_id = $_REQUEST['id'];
$universities = new University();
$city = new City();

if (isset($_POST['submitEdit']) && $_POST['submitEdit'] == 1) {
  $_POST["id"] = $university_id;
  $universities->updateUniversity($_POST['city'], $_POST['name'], $university_id);
  $msg = "تم الحفظ";
}
$university = $universities->getUniversityById($university_id)[0];


$cities = $city->getAllCity();
$cities_string = "";
for ($i = 0; $i < count($cities); $i++) {
  if ($cities[$i]['city_id']==$university['city_id']) {
    $cities_string .= "<option selected value='" . $cities[$i]['city_id'] . "'>" . $cities[$i]['city_name'] . "</option>";
  } else {
    $cities_string .= "<option value='" . $cities[$i]['city_id'] . "'>" . $cities[$i]['city_name'] . "</option>";
  }
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
            <div class="col-lg-8 col-lg-offset-2 detailed">
              <h4 class="mb">تعديل جامعة</h4>
              <form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="submitEdit" value="1" />
                <div class="form-group">
                  <label class="col-lg-3 control-label"> اسم الجامعة </label>
                  <div class="col-lg-6">
                    <input type="text" id="content_title" maxlength="50" name="name" class="form-control" value="<?= $university['university_name'] ?>" required>
                  </div>
                </div>
                <div class="form-group" id="location">
                  <label class="col-lg-3 control-label"> المحافظه: </label>
                  <div class="col-lg-6">
                    <select required data-placeholder="اختر المحافظه" class="chosen-select custom-select custom-select-lg mb-3" name='city'>
                      <?=$cities_string?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">حفظ</button>
                    <button class="btn btn-theme04" type="button" onclick="window.location.href='university.php?id=<?= $university_id ?>'">الغاء</button>
                    <label class="col-lg-3 control-label"><?= $msg; ?> </label>
                  </div>
                </div>
              </form>
            </div>
            <!-- /row -->
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

  <script src="js/jquery.js"></script>
  <script src="js/script.js"></script>
  <script src="js/chosen.jquery.js"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select': {},
      '.chosen-select-deselect': {
        allow_single_deselect: true
      },
      '.chosen-select-no-single': {
        disable_search_threshold: 10
      },
      '.chosen-select-no-results': {
        no_results_text: 'Oops, nothing found!'
      }

    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>

  </body>

</html>