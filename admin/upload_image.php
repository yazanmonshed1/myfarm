<?php
setcookie('asa', serialize($_POST));
if (!empty($_POST["id"])) {
  $Arraynew = unserialize(urldecode($_COOKIE['upload_images']));
  unset($Arraynew[$_POST["id"]]);

  setcookie('upload_images', serialize($Arraynew));
}

if (!empty($_FILES)) {
  $upload_dir = "../uploads";
  $fileName = $_FILES['file']['name'];
  $uploaded_file = $upload_dir . $fileName;

  $nameFile = time() . $_FILES['file']["name"];
  if (move_uploaded_file($_FILES['file']["tmp_name"], dirname(__FILE__) . "/../uploads/" . $nameFile)) {



    if ($_COOKIE['upload_images'] == 'empty') {
      $ArrayName[$_FILES['file']["name"]] = $nameFile;


      setcookie('upload_images', serialize($ArrayName));
    } else {

      $ArrayName = unserialize(urldecode($_COOKIE['upload_images']));
      $ArrayName[$_FILES['file']["name"]] = $nameFile;


      setcookie('upload_images', serialize($ArrayName));
    }
  }
}
