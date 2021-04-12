<?php
require_once("etc/config.php");
include("lib/variables.php");

$CityObj = new City();
$residence_id = $_REQUEST['id'];
$CityObj = new City();
$UniversityObj = new University();
$residenceObj = new Residences();
$residence = $residenceObj->getResidencesById($residence_id)[0];
$objUser = new Users();
$user = $objUser->getUserById($residence['user_id'])[0];

$residence_city = $CityObj->getCityById($residence["city_id"])[0]["city_name"];
$residence_imageArray = explode(",", $residence["residences_image"]);
$residence_imageArray_count = count($residence_imageArray);
foreach ($residence_imageArray as $val) {
    $images_url[] = FunctionGenral::addURLToFile($val);
}
?>


<html lang="ar">

<?= $head; ?>


<body class="rtl home wp-rem pt">
    <div class="wrapper wrapper-full_width">
        <!-- Side Menu Start -->
        <div id="overlay"></div>
        <?= $header ?>

        <div class="main-section">
            <div class="page-section property-detail-view1-section" style="margin: 72px 0 41px 0;">
                <div class="property-detail">
                    <div class="container">
                        <div class="row">
                            <div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="list-detail-options">
                                    <div class="title-area">

                                        <h2><?= $residence['residences_name'] ?></h2>
                                        <address>
                                            <span><i class="icon-location-pin2"></i><?= $residence_city . "," ?><?= $UniversityObj->getUniversityById($residence["university_id"])[0]["university_name"] ?></span>
                                            <span><i class="icon-phone4"></i>
                                                <a href="#"><?= $user['user_phone'] ?></a>
                                            </span>
                                        </address>

                                    </div>


                                </div>
                                <div class="main-post">
                                    <?php 
                                    echo'
                                    <div class="img-holder image-loaded">
                                        <figure>
                                            
                                            <img class="img-grid" src="' . $images_url[0] . '" alt="#">
                                            
                                            <figcaption>
                                            <div class="caption-inner">
                                                <ul class="rem-property-options">
                                                    <li class="property-photo-opt">
                                                        <div class="option-holder">' ; 
                                                            foreach ($images_url as $k=> $val) {
                                                                if ($k != 0) {
                                                                echo
                                                                 '<a href="' . $val . '" data-rel="prettyPhoto[' . $residence_id . ']" class="rem-pretty-photos"style="display: none;" > </a>' ; 
                                                                }
                                                                else 
                                                                {
                                                                    echo ' <a href="' . $val . '" data-rel="prettyPhoto[' . $residence_id . ']" class="rem-pretty-photos">
                                                                    <i class="icon-camera6"></i>
                                                                    <span class="capture-count">' . count($images_url) . '</span>
                                                                    <div class="option-content">
                                                                    <span>عرض</span>
                                                                    </div>
                                                                    </a>' ;
                                                                }
                                                            }
                                                        echo '</div>
                                                     </li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>';?>
                                    <ul class="categories-holder">
                                        
                                        <li>
                                            <i class="icon-man-woman"></i>
                                            <span class="field-label">الجنس</span>: <span class="field-value"><?=$residence['residences_gender'] == 2 ? 'أنثى': 'ذكر'?></span> </li>
                                        <li>
                                            
                                            <span class="field-label">العدد</span>: <span class="field-value"><?=$residence['residences_number']?></span> 
                                        </li>
                                    </ul>
                                    <div id="property-detail" class="description-holder">
                                        <div class="property-feature">
                                            <div class="element-title">
                                                <h3>الوصف</h3>
                                            </div>
                                            <?=$residence['residences_desc']?>
                                        </div>
                                    </div>
                                </div>
                                </li>
                                </ul>
                            </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section" style="padding-top: 60px; padding-bottom: 40px;">
                            <div class="container">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="wp-rem-property-content">
                                                    <div class="real-estate-property show-more-property v1">
                                                        <div class="element-title align-left">
                                                            <h2 style="margin-bottom: 15px;">المزيد من السكنات</h2>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="tab-content clearfix">
                                                                    <div class="tab-pane in active" id="tab857974881">
                                                                        <div id="property-tab-content-21910">
                                                                            <div class="row">
                                                                                <?php
                                                                                $residenceObj = new Residences();
                                                                                $residenceInfo = $residenceObj->getResidenceslimit(array("page" => 1, "limit" => 6));

                                                                                foreach ($residenceInfo as $key => $value) {
                                                                                    if ($value["residences_id"] != $residence_id) {
                                                                                        echo ' <div class="portfolio grid-fading animated col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                                        <div class="property-grid v1">
                                                                                            <div class="img-holder image-loaded">
                                                                                                <figure>
                                                                                                    <a href="ResidencePage.php?id=' . $value["residences_id"] . '">
                                                                                                        <img class="img-grid" src="' . $value["ImageURL"][0] . '" alt="#">
                                                                                                    </a>
                                                                                                    <figcaption>
                                                                                                        <div class="caption-inner">
                                                                                                            <ul class="rem-property-options">
                                                                                                                <li class="property-photo-opt">
                                                                                                                    <div class="option-holder">';
                                                                                                                    foreach ($value["ImageURL"] as $k => $val) {
    
                                                                                                                        if ($k != 0) {
                                                                                                                            echo ' <a href="' . $val . '" data-rel="prettyPhoto[' . $value["residences_id"] . ']" class="rem-pretty-photos"style="display: none;" > </a>';
                                                                                                                        } else {
                                                                                                                            echo ' <a href="' . $val . '" data-rel="prettyPhoto[' . $value["residences_id"] . ']" class="rem-pretty-photos">
                                                                                                                                                        <i class="icon-camera6"></i>
                                                                                                                                                        <span class="capture-count">' . $value["ImageCount"] . '</span>
                                                                                                                                                        <div class="option-content">
                                                                                                                                                            <span>عرض</span>
                                                                                                                                                        </div>
                                                                                                                                                    </a>';
                                                                                                                        }
                                                                                                                    }
                                                                                                                    echo '</div>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </figcaption>
                                                                                                </figure>
                                                                                            </div>';
                                                                                        echo '<div class="text-holder">
                                                                                                <div class="post-title">
                                                                                                    <h4><a href="ResidencePage.php?id=' . $value["residences_id"] . '">' . $value["residences_name"] . '</a></h4>
                                                                                                </div>
                                                                                                <ul class="property-location">
                                                                                                    <li>
                                                                                                        <i class="icon-location-pin2"></i>
                                                                                                        <span>' . $value["city"] . ', ' . $value["university"] . '</span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <ul class="post-category-list">'. substr($value['residences_desc'],0,100).'...</ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>';
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    <?= $footer ?>
    </div>
</body>

</html>