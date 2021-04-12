<?php
$pageIndex = 1;
require_once("etc/config.php");
include("lib/variables.php");

$CityObj = new City();
$AllCity = $CityObj->getAllCity();
$UniversityObj = new University();
$AllUniversity = $UniversityObj->getAllUniversity();
?>
<html lang="ar">

<?= $head; ?>

<body class="rtl home wp-rem">
    <div class="wrapper wrapper-full_width">
        <!-- Side Menu Start -->
        <div id="overlay"></div>
        <?= $header ?>
       <!--  <div class="cs-no-subheader"></div>
        <!-- Main Content Section -->
        <div class="main-section ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="page-section" style="padding-top: 248px; padding-bottom: 248px; background: url(images/home5-banner-img.png) no-repeat center / cover;">
                            <!-- Container Start -->
                            <div class="container">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="column-content"><b style="color: #fff; display: block; font-size: 60px; line-height: 66px;text-align: center;">تبحث عن مزرعة ؟</b>
                                                    <br> <b style="color: #fff; display: block; font-size: 17px; font-weight: 400; text-align: center;">جميع المدن<br> الاف الخيارات التي تناسبك</b>
                                                    <br>
                                                    <br> 
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="main-search">
                                                    <form class="search-form-element">
                                                        <div class="search-default-fields">
                                                            <div class="field-holder search-input">
                                                                <label> 
                                                                    <i class="icon-search4"></i>
                                                                    <input type="text" placeholder="What are you looking for?" class="input-field" name="search_title"> 
                                                                </label>
                                                            </div>
                                                            <div class="field-holder search-input">
                                                                <div id="wp-rem-top-select-holder" class="search-country">
                                                                    <div class="select-holder">
                                                                        <div class="wp-rem-locations-fields-group wp-rem-focus-out wp_rem_searchbox_div">
                                                                            <span class="wp-rem-search-location-icon"><i class="icon-location"></i></span>
                                                                            <span class="wp-rem-radius-location">
                                                                                <i class="icon-target3"></i>
                                                                            </span>
                                                                            <input type="text" placeholder="e.g. London Or Waterloo" class="wp-rem-location-field location-field-text location-field-text2189 wp-rem-locations-field-geo2189" id="wp-rem-locations-field" name="location">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field-holder select-dropdown property-type checkbox">
                                                                <ul>
                                                                    <li>
                                                                        <input type="radio" checked="checked" id="search_form_property_type1" name="property_type" value="for-sale">
                                                                        <label for="search_form_property_type1">For Sale</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="search_form_property_type2" name="property_type" value="to-rent">
                                                                        <label for="search_form_property_type2">To Rent</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="property-category-fields field-holder select-dropdown has-icon">
                                                                <label> 
                                                                    <i class="icon-home"></i>
                                                                    <select class="chosen-select-no-single" id="wp_rem_property_category" name="property_category" style="display: none;">
                                                                     
                                                                       <?php
                                                                                foreach ($AllCity as $value) {
                                                                                    echo '<option  value="' . $value["city_id"] . '">' . $value["city_name"] . '</option>';
                                                                                }

                                                                                ?>
                                                                    </select>
                                                                </label>
                                                            </div>
                                                            <div class="field-holder search-btn disable-search">
                                                                <div class="input-button-loader">
                                                                    <input type="submit" class="bgcolor" value="Search"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end section row -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Container Start -->
                        </div>
                    <!-- <div class="cs-rich-editor">
                        <div class="page-section" style="background: url('images/search-title-bg.jpg') no-repeat center / cover; padding-top: 120px; padding-bottom: 285px;">
                            <div class="container">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="column-content">
                                                    <b style="font-size: 36px; text-shadow: 0 1px 3px rgba(0,0,0,.75); line-height: 48px; display: block; margin-bottom: 8px; color: #ffffff;">تبحث عن سكن ؟</b>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="icons-lists">
                                                    <ul>
                                                        <li><i class="icon-location2" style="color: #5a2e8a !important; background-color: #ffffff !important;"></i>جميع المدن </li>
                                                        <li><i class="icon-checkmark" style="color: #5a2e8a !important; background-color: #ffffff !important;"></i>
                                                            قريب من الحرم الجامعي
                                                        </li>
                                                        <li><i class="icon-file-text" style="color: #5a2e8a !important; background-color: #ffffff !important;"></i>
                                                            الاف الخيارات التي تناسبك
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="wp-rem-property-content main-search fancy">
                                                    <ul id="nav-tabs-4090" class="nav nav-tabs" role="tablist">
                                                        <li class="active">
                                                            <a href="javascript:void(0);" onclick="wp_rem_advanced_search_field('4090', 'simple', this);"> البحث</a>
                                                        </li>
                                                    </ul>
                                                    <div id="Property-content-4090" class="tab-content">
                                                        <form action="ResidencesFilter.php" method="GET">
                                                            <div role="tabpanel" class="tab-pane" id="home">
                                                                <div class="search-default-fields">
                                                                    <div class="field-holder select-dropdown property-type checkbox">
                                                                        <ul>
                                                                            <li>
                                                                                <input type="radio" checked="checked" id="search_form_property_type1" name="gender" value="1">
                                                                                <label for="search_form_property_type1">طلاب</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="gender" value="2" id="search_form_property_type2">
                                                                                <label for="search_form_property_type2">طالبات</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="property-category-fields field-holder select-dropdown has-icon">
                                                                        <label> <i class="icon-home"></i>
                                                                            <select class="chosen-select-no-single" id="wp_rem_property_category" name="city">
                                                                                <option  value="" selected="selected">المدينة </option>
                                                                               
                                                                                foreach ($AllCity as $value) {
                                                                                    echo '<option  value="' . $value["city_id"] . '">' . $value["city_name"] . '</option>';
                                                                                }

                                                                                ?>

                                                                            </select>
                                                                        </label>
                                                                    </div>

                                                                    <div class="property-category-fields field-holder select-dropdown has-icon">
                                                                        <label> <i class="icon-home"></i>
                                                                            <select class="chosen-select-no-single" id="wp_rem_property_category" name="university"> 
                                                                                <option  value="" selected="selected">الجامعة</option>
                                                                                
                                                                                foreach ($AllUniversity as $value) {
                                                                                 echo '<option  value="'.$value["university_id"].'">'.$value["university_name"].'</option>';
                                                                                }
                                                                                
                                                                                ?>
                                                                                
                                                                                
<!--                                                                                <option value="الجامعة الأردنية">الجامعة الأردنية</option>
                                                                                <option value="جامعة اليرموك">جامعة اليرموك</option>
                                                                                <option value="جامعة مؤتة">جامعة مؤتة</option>
                                                                                <option value="جامعة العلوم والتكنولوجيا الأردنية">جامعة العلوم والتكنولوجيا الأردنية</option>
                                                                                <option value="جامعة آل البيت">جامعة آل البيت</option>
                                                                                <option value="الجامعة الهاشمية">الجامعة الهاشمية</option>
                                                                                <option value="جامعة البلقاء التطبيقية">جامعة البلقاء التطبيقية</option>
                                                                                <option value="جامعة الحسين بن طلال">جامعة الحسين بن طلال</option>
                                                                                <option value="جامعة الطفيلة التقنية">جامعة الطفيلة التقنية</option>
                                                                                <option value="الجامعة الألمانية الأردنية">الجامعة الألمانية الأردنية</option>
                                                                                <option value="الجامعة الأردنية فرع العقبة">الجامعة الأردنية فرع العقبة</option>
                                                                                <option value="كلية عمان الجامعية للعلوم المالية والإدارية">كلية عمان الجامعية للعلوم المالية والإدارية</option>
                                                                                <option value="كلية عجلون الجامعية">كلية عجلون الجامعية</option>
                                                                                <option value="كلية الأميرة رحمة الجامعية">كلية الأميرة رحمة الجامعية</option>
                                                                                <option value="كلية الأميرة عالية الجامعية">كلية الأميرة عالية الجامعية</option>
                                                                                <option value="كلية الهندسة التكنولوجية">كلية الهندسة التكنولوجية</option>
                                                                                <option value="كلية الشوبك الجامعية">كلية الشوبك الجامعية</option>
                                                                                <option value="كلية الزرقاء الجامعية">كلية الزرقاء الجامعية</option>
                                                                                <option value="كلية إربد الجامعية">كلية إربد الجامعية</option>
                                                                                <option value="كلية الكرك الجامعية">كلية الكرك الجامعية</option>
                                                                                <option value="كلية الحصن الجامعية">كلية الحصن الجامعية</option>
                                                                                <option value="كلية معان الجامعية">كلية معان الجامعية</option>
                                                                                <option value="كلية العقبة الجامعية">كلية العقبة الجامعية</option>
                                                                                <option value="أكاديمية الأمير حسين للحماية المدنية">أكاديمية الأمير حسين للحماية المدنية</option>
                                                                                <option value="جامعة عمان الأهلية">جامعة عمان الأهلية</option>
                                                                                <option value="جامعة فيلادلفيا">جامعة فيلادلفيا</option>
                                                                                <option value="جامعة الأميرة سمية للتكنولوجيا">جامعة الأميرة سمية للتكنولوجيا</option>
                                                                                <option value="جامعة الإسراء">جامعة الإسراء</option>
                                                                                <option value="جامعة البترا">جامعة البترا</option>
                                                                                <option value="جامعة العلوم التطبيقية الخاصة">جامعة العلوم التطبيقية الخاصة</option>
                                                                                <option value="جامعة جرش">جامعة جرش</option>

                                                                                <option value="جامعة الزيتونة الأردنية">جامعة الزيتونة الأردنية</option>
                                                                                <option value="جامعة الزرقاء">جامعة الزرقاء</option>
                                                                                <option value="جامعة إربد الأهلية">جامعة إربد الأهلية</option>
                                                                                <option value="جامعة عمان العربية">جامعة عمان العربية</option>
                                                                                <option value="الجامعة الأمريكية في مادبا">الجامعة الأمريكية في مادبا</option>
                                                                                <option value="جامعة جدارا">جامعة جدارا</option>
                                                                                <option value="جامعة الشرق الأوسط">جامعة الشرق الأوسط</option>
                                                                                <option value="جامعة عجلون الوطنية">جامعة عجلون الوطنية</option>
                                                                                <option value="جامعة العقبة للتكنولوجيا">جامعة العقبة للتكنولوجيا</option>
                                                                                <option value="جامعة الحسين التقنية">جامعة الحسين التقنية</option>

                                                                            </select>
                                                                        </label>
                                                                    </div>
                                                                    <div class="field-holder search-btn">
                                                                        <div class="search-btn-loader-4090 input-button-loader">
                                                                            <input type="submit"  class="bgcolor" value="بحث">
                                                                        </div>
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
                        </div>  -->

                        <div class="page-section" style="padding-top: 72px; padding-bottom: 50px; background: url(extra-images/counter-bg-img-1.jpg) no-repeat center / cover;">
                            <!-- Container Start -->
                            <div class="container">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="counter-holder">
                                                    <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                            <div class="cs-counter modern">
                                                                <div class="text-holder">
                                                                    <strong class="counter text-color custom-counter">286</strong>
                                                                    <span>اصحاب سكنات</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                            <div class="cs-counter modern">
                                                                <div class="text-holder">
                                                                    <strong class="counter text-color custom-counter">983</strong>
                                                                    <span>سكن</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                            <div class="cs-counter modern">
                                                                <div class="text-holder">
                                                                    <strong class="counter text-color custom-counter">701</strong>
                                                                    <span>عمليه تأجير</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                            <div class="cs-counter modern">
                                                                <div class="text-holder">
                                                                    <strong class="counter text-color custom-counter">1356</strong><span>زيارة للموقع</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end section row -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Container Start -->
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
                                                            <h2 style="margin-bottom: 15px;">السكنات</h2>

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
                                                                                            <ul class="post-category-list">
                                                                                            '. substr($value['residences_desc'],0,100).'...
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>';
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
                </div>
            </div>
        </div>
        <!-- End Main Content Section -->
        <?= $footer ?>
        <!-- /#footer -->
    </div>
    <!-- /.wrapper -->
</body>

</html>
