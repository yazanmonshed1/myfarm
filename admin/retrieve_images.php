<?php
require_once("../etc/config.php");

$residence_id=$_GET["id"];
$residence_ob = new Residences();
$residence = $residence_ob->getResidencesById($residence_id)[0];

$imageName= explode(",",$residence["residences_image"]);
$dataOb = [];
foreach ($imageName as $val){
 $dataObj[]=array("name"=>$val, "url"=>"../uploads/".$val);
 $ArrayName[$val] = $val;
}

setcookie('upload_images', serialize($ArrayName));

header("Content-type: application/json");
echo json_encode($dataObj);