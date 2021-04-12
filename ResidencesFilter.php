
<?php

require_once("etc/config.php");
include("lib/variables.php");

$CityObj= new City();

$AllCity=$CityObj->getAllCity();
$UniversityObj= new University();
$AllUniversity=$UniversityObj->getAllUniversity();


if(empty($_GET["page"])){    
   $_GET["page"]=1;    
}


$param["page"]= $_GET["page"];
$param["limit"]= 2;
$param["city_id"]= $_GET["city"];
$param["university_id"]=$_GET["university"];
$param["residences_gender"]=$_GET["gender"];
$residences = new Residences();
$countRow=$residences->getResidencesFilter($param,1)[0]["countRow"];

$countPage= ceil($countRow/2);
$dataResidences=$residences->getResidencesFilter($param);

?>


<html lang="ar">

<?= $head; ?>

<body class="rtl home wp-rem pt">
<div class="wrapper wrapper-full_width">
  <!-- Side Menu Start -->
  <div id="overlay"></div>
  <?= $header ?>
    <div class="main-section ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-rich-editor">
                        <div class="page-section" style="padding-top: 30px;padding-bottom: 30px;background: #d7d7d7;">
                            <div class="container">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="main-search">
                                                    <form class="search-form-element" action="" method="GET">
                                                        <div class="search-default-fields one-field-hidden">
                                                        
                                                            <div class="field-holder select-dropdown property-type checkbox">
                                                                <ul>
                                                                    <li>
                                                                        <input type="radio" checked="checked" id="search_form_property_type1" name="gender" value="1">
                                                                        <label for="search_form_property_type1">طلاب</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="search_form_property_type2" name="gender" value="2"> 
                                                                        <label for="search_form_property_type2">طالبات</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="property-category-fields field-holder select-dropdown has-icon">
                                                                <label>
                                                                    <i class="icon-home"></i>
                                                                    <select class="chosen-select-no-single" id="wp_rem_wp_rem_property_category" name="city" style="display: none;">
                                                                         <option   value="" selected="selected">المدينة </option>
                                                                    <?php
                                                                                foreach ($AllCity as $value) {
                                                                                    if ($value["city_id"] == $_REQUEST['city']) {
                                                                                        echo '<option selected value="'.$value["city_id"].'">'.$value["city_name"].'</option>';
                                                                                    } else {
                                                                                        echo '<option  value="'.$value["city_id"].'">'.$value["city_name"].'</option>';
                                                                                    }
                                                                                 
                                                                                }
                                                                                
                                                                                ?>
                                                                    </select>
                                                                    
                                                                </label>
                                                            </div>
                                                            <div class="property-category-fields field-holder select-dropdown has-icon">
                                                                <label>
                                                                    <i class="icon-home"></i>
                                                                    <select class="chosen-select-no-single" id="wp_rem_wp_rem_property_category" name="university" style="display: none;">
                                                                         <option  value="" selected="selected">الجامعة</option>
                                                                          <?php
                                                                       foreach ($AllUniversity as $value) {
                                                                           if ($value["university_id"] == $_REQUEST['university']) {
                                                                            echo '<option selected value="'.$value["university_id"].'">'.$value["university_name"].'</option>';
                                                                           } else {
                                                                            echo '<option value="'.$value["university_id"].'">'.$value["university_name"].'</option>';
                                                                           }
                                                                                 
                                                                                }
                                                                                 ?>
                                                                    </select>
                                                                    
                                                                </label>
                                                            </div>
                                                            
                                                            <div class="field-holder search-btn">
                                                                <div class="input-button-loader">
                                                                    <input type="submit" class="bgcolor" value="البحث">
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
                        <div class="page-section" style="padding-top: 79px;padding-bottom: 55px;">
                            <div class="container ">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div id="compare-sidebar-panel" class="fixed-sidebar-panel right chosen-compare-list">
                                                    <div class="sidebar-panel-content">
                                                        <div class="sidebar-panel-header">
                                                            <strong class="sidebar-panel-title">
                                                                Compare Properties <span class="sidebar-panel-btn-close pull-right">
                                                                    <i class="icon-cross"></i>
                                                                </span>
                                                            </strong>
                                                        </div>
                                                        <div class="sidebar-panel-body">
                                                            <div class="sidebar-properties-list">
                                                                <ul>
                                                                    <li class="compare-property">
                                                                        <div class="property-item">
                                                                            <div class="img-holder">
                                                                                <figure><img class="compare-img-grid" src="assets/extra-images/property-image01.jpg" alt="#"> </figure>
                                                                            </div>
                                                                            <div class="text-holder">
                                                                                <strong class="property-title"><a href="#">New Superior Quality House For Sale</a></strong>
                                                                                <span class="text-color property-price">
                                                                                    $21,500<span class="prop-price-type"> <span class="price-type">Guide Price</span></span>
                                                                                </span>
                                                                                <span class="property-item-remove"><i class="icon-trash3"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="compare-property">
                                                                        <div class="property-item">
                                                                            <div class="img-holder">
                                                                                <figure><img class="compare-img-grid" src="assets/extra-images/property-image02.jpg" alt="#"> </figure>
                                                                            </div>
                                                                            <div class="text-holder">
                                                                                <strong class="property-title"><a href="#">New Semi Detached House For Sale</a></strong>
                                                                                <span class="text-color property-price">
                                                                                    $30,000<span class="prop-price-type"> <span class="price-type">Guide Price</span></span>
                                                                                </span>
                                                                                <span class="property-item-remove"><i class="icon-trash3"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="compare-property">
                                                                        <div class="property-item">
                                                                            <div class="img-holder">
                                                                                <figure><img class="compare-img-grid" src="assets/extra-images/property-image03.jpg" alt="#"> </figure>
                                                                            </div>
                                                                            <div class="text-holder">
                                                                                <strong class="property-title"><a href="#">Headland Semi Detached House For Sale</a></strong>
                                                                                <span class="text-color property-price">
                                                                                    $25,650<span class="prop-price-type"> <span class="price-type">Guide Price</span></span>
                                                                                </span>
                                                                                <span class="property-item-remove"><i class="icon-trash3"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="sidebar-btn-holder">
                                                                    <a href="#" class="bgcolor sidebar-property-btn clear-compare-list">Reset</a>
                                                                    <a href="#" class="sidebar-property-btn text-color border-color">Compare</a>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wp-rem-property-content">
                                                    <form class="property-form">
                                                        <div class="row">
                                                           
                                                            <div class="col-xs-12">
                                                                <div class="real-estate-property-content real-estate-dev-property-content">
                                                                    <div class="slide-loader-holder">
                                                                        <div class="property-sorting-holder">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="all-results">
                                                                                        <h5>تم ايجاد <?php echo$countRow ?></h5>
                                                                                    </div>
<!--                                                                                    <div class="user-location-filters">
                                                                                        <span class="filter-title">Sort By:</span>
                                                                                        <div class="years-select-box">
                                                                                            <div class="input-field">
                                                                                                <select class="chosen-select-no-single" name="sort-by">
                                                                                                    <option value="alphabetical">Alphabetical</option>
                                                                                                    <option selected="selected" value="recent">Recent</option>
                                                                                                    <option value="sold">Sold out</option>
                                                                                                    <option value="low_price">Low Price</option>
                                                                                                    <option value="high_price">High Price</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                       
                                                                                    </div>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="real-estate-property">
                                                                        <div class="row">
                                                                           <?php
                                                                           
                                                                           
                                                                       foreach ($dataResidences as $value) {
                                                                                                                                                                
                                                                                                                                                       
                                                                           echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="property-grid list-top-category advance-grid">
                                                                                    <div class="img-holder image-loaded">
                                                                                        <figure>
                                                                                            <a href="ResidencePage.php?id=' . $value["residences_id"] . '"><img class="img-grid" src="'.$value["ImageURL"][0].'"></a>
                                                                                            <figcaption>
                                                                                                <div class="caption-inner">
                                                                                                    <ul class="rem-property-options">
                                                                                                      
                                                                                                        
                                                                                                        <li class="property-photo-opt">
                                                                                                            <div class="option-holder">';
                                                                                                              foreach ($value["ImageURL"] as $k => $val) {
    
                                                                                                                    if($k!=0){
                                                                                                                   echo' <a href="'.$val.'" data-rel="prettyPhoto['.$value["residences_id"].']" class="rem-pretty-photos"style="display: none;" > </a>';
        
                                                                                                                      }else{
                                                                                                                   echo' <a href="'.$val.'" data-rel="prettyPhoto['.$value["residences_id"].']" class="rem-pretty-photos">
                                                                                                                        <i class="icon-camera6"></i>
                                                                                                                        <span class="capture-count">'.$value["ImageCount"].'</span>
                                                                                                                        <div class="option-content">
                                                                                                                            <span>الصور</span>
                                                                                                                        </div>
                                                                                                                    </a>';
                                                                                                                    }
                                                                                                              }
                                                                                                           echo' </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </figcaption>
                                                                                        </figure>
                                                                                    </div>
                                                                                    <div class="text-holder">
                                                                                       
                                                                                        <div class="post-title">
                                                                                            <h4><a href="ResidencePage.php?id=' . $value["residences_id"] . '">'.$value["residences_name"].'</a></h4>
                                                                                        </div>
                                                                                        <ul class="property-location">
                                                                                            <li><i class="icon-location-pin2"></i><span>'.$value["city"].', '.$value["university"].'</span></li>
                                                                                        </ul>
                                                                                        <ul class="post-category-list">
                                                                                               
                                                                                                <li> <i class="icon-man-woman"></i>';
                                                                                                echo $value['residences_gender'] == 2 ? 'طالبات': 'طلاب';
                                                                                               echo '</li>
                                                                                               
                                                                                            </ul>
                                                                                    </div>
                                                                                  
                                                                                </div>
                                                                            </div>';
                                                                                }
                                                                                    ?>
                                                                           
                                                                           
                                                                      
                                                                           
                                                                            
                                                                           
                                                                           
                                                                          
                                                                           
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="page-nation">
                                                                    <ul class="pagination pagination-large">
                                                                        <?php
                                                                        if($countPage>1){
                                                                             if($_GET["page"]!=1){
                                                                      echo'<li><a href="ResidencesFilter.php?page='.($_GET["page"]-1).'&city='.$_GET["city"].'&university='.$_GET["university"].'&gender='.$_GET["gender"].'">السابق</a></li>';
                                                                      }
                                                                        for ($index = 1; $index <= $countPage; $index++) {
                                                                            if( $_GET["page"]==$index){
                                                                                echo ' <li class="active"><span><a class="page-numbers active">'.$index.'</a></span></li>';
                                                                            }else{
                                                                            echo'<li><a href="ResidencesFilter.php?page='.$index.'&city='.$_GET["city"].'&university='.$_GET["university"].'&gender='.$_GET["gender"].'">'.$index.'</a></li>';
                                                                            
                                                                            }

                                                                            }
                                                                      if($countPage!=$_GET["page"]){
                                                                      echo'<li><a href="ResidencesFilter.php?page='.($_GET["page"]+1).'&city='.$_GET["city"].'&university='.$_GET["university"].'&gender='.$_GET["gender"].'">التالي</a></li>';
                                                                      }      
                                                                        }
                                                                                ?>
                                                                    </ul>
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
                    </div>
                </div>
            </div>
        </div>
        
  <?= $footer ?>
   </div>
</body>

</html>



