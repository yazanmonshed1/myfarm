<?php
require_once("../etc/config.php");

include("../lib/variables.php");

$_SESSION['active'] = 'residense';

$residence_id = $_REQUEST['id'];
$residences = new Residences();
$city = new City();
$university = new University();


$residence = $residences->getResidencesById($residence_id)[0];


if (isset($_POST['submitAdd']) && $_POST['submitAdd'] == 1) {
 $Arraynew=unserialize(urldecode($_COOKIE['upload_images']));
$_POST["residences_image"]=  implode(",",$Arraynew);
$_POST["id"]=$residence_id;
$residences->updateResidences($_POST);
 setcookie('upload_images', '');
  header("location:residence.php?edit=1");
}


$cities = $city->getAllCity();
$cities_string = "";
for ($i = 0; $i < count($cities); $i++) {
  if ($cities[$i]['city_id'] == $residence['city_id']) {
    $cities_string .= "<option selected value='" . $cities[$i]['city_id'] . "'>" . $cities[$i]['city_name'] . "</option>";
  } else {
    $cities_string .= "<option value='" . $cities[$i]['city_id'] . "'>" . $cities[$i]['city_name'] . "</option>";
  }
}

$university = new University();
$universities = $university->getAllUniversity();
$universiteis_string = "";
for ($i = 0; $i < count($universities); $i++) {
  if ($universities[$i]['university_id'] == $residence['university_id']) {
    $universiteis_string .= "<option selected value='" . $universities[$i]['university_id'] . "'>" . $universities[$i]['university_name'] . "</option>";
  } else {
    $universiteis_string .= "<option value='" . $universities[$i]['university_id'] . "'>" . $universities[$i]['university_name'] . "</option>";
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
  <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
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
              <h4 class="mb">تعديل السكن</h4>
              <form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="submitAdd" value="1" />
                <div class="form-group">
                  <label class="col-lg-3 control-label"> اسم سكن: </label>
                  <div class="col-lg-6">
                    <input type="text" id="content_title" name="residences_name" class="form-control" value="<?= $residence['residences_name'] ?>" required maxlength="50">
                  </div>
                </div>
                <div class="form-group" id="content_body">
                  <label class="col-lg-3 control-label"> وصف السكن: </label>
                  <div class="col-lg-6">
                    <textarea name="residences_desc"><?= $residence['residences_desc'] ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label"> عدد السكنات: </label>
                  <div class="col-lg-6">
                    <input type="number" min="0" name="residences_number" class="form-control" value="<?= $residence['residences_number'] ?>" required maxlength="50">
                  </div>
                </div>
                <div class="form-group" id="location">
                  <label class="col-lg-3 control-label"> الجنس: </label>
                  <div class="col-lg-6">
                    <select class="chosen-select custom-select custom-select-lg mb-3" id="gender" name="residences_gender" required data-placeholder="الجنس">
                      <option selected="selected">الجنس</option>
                      <option <?= $residence['residences_gender'] == "1" ? "selected" : "" ?> value="1">ذكر</option>
                      <option <?= $residence['residences_gender'] == "2" ? "selected" : "" ?> value="2">أنثى</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" id="location">
                  <label class="col-lg-3 control-label"> المحافظه: </label>
                  <div class="col-lg-6">
                    <select required data-placeholder="اختر المحافظه" class="chosen-select custom-select custom-select-lg mb-3" name='city_id'>
                      <?= $cities_string ?>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="location">
                  <label class="col-lg-3 control-label"> اختر الجامعة: </label>
                  <div class="col-lg-6">
                    <select required data-placeholder="اختر الجامعة" class="chosen-select custom-select custom-select-lg mb-3" name='university_id'>
                      <?= $universiteis_string ?>
                    </select>
                  </div>
                </div>
                <div class="dropzone"></div>

                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">حفظ</button>
                    <button class="btn btn-theme04" type="button" onclick="window.location.href='residence.php'">الغاء</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /panel-heading -->
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
  <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"> </script>
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

    };
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }

    //Disabling autoDiscover
    Dropzone.autoDiscover = false;

    $(function() {
      //Dropzone class
      var myDropzone = new Dropzone(".dropzone", {
          url: "upload_image.php",
          paramName: "file",
          maxFilesize: 2,
          maxFiles: 10,
          acceptedFiles: "image/*",
          addRemoveLinks: true,
          removedfile: function(file) {
            console.log(file);
            $.ajax({
              type: 'POST',
              url: 'upload_image.php',
              data: "id=" + file.name,
              dataType: 'html'
            });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
          },
          init: function() {
            let myDropzone = this;
            $.ajax({
              type: 'get',
              url: 'retrieve_images.php',
              data: "id=" + <?php echo json_encode($residence_id, JSON_HEX_TAG); ?>,
              dataType:"json",
              success: function(mocks) {
                $.each(mocks, function(key, value) {
                  let mockFile = {
                    name: value.name,
                    size: 1024
                  };
                  myDropzone.displayExistingFile(mockFile, value.url);
                });
              }
            });
          }
      });
    });
  </script>

  </body>

</html>