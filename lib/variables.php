<?php
  $head = '<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <!-- for ie,safari,mobile browsers disable phone number in html tag content not in hyperlink-->
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/chosen.css">
    <link rel="stylesheet" type="text/css" href="css/rtl.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/wp-rem-plugin.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/color-green.css">
    <link rel="stylesheet" type="text/css" href="css/iconmoon.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.css">
    <link rel="stylesheet" type="text/css" href="css/style-animate.css">
    <link rel="stylesheet" type="text/css" href="css/widget.css">';
  if($pageIndex==1){
    $head .= '<script type="text/javascript" src="js/jquery.js"></script>' ; 
  }else{
    $head .= '<script type="text/javascript" src="js/index-jquery.js"></script>' ;  
  }
//    <script type="text/javascript" src="js/jquery.js"></script>
    $head .= '<script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>';

$head .='</head>';

$categories = '';
// Print the item of all categories.
foreach ($AllCategoryData as $key => $value) {
  $categories.= '<li class="menu-item">';
  $categories.= '<a class="menu-link" href="'.$value["category_id"].'">';
  $categories.='<div><i class="icon-stack"></i>'.$value["category_name"].'</div>';
  $categories.='</a>';
  $categories.='</li>';
}

if($isLogin==0){
   $Login_logout=' <a class="user-tab-login" href="login.php">تسجيل دخول<span>/</span>انشاء حساب</a>' ;  
   $myAcount='';
    $addHedar='<a href="login.php" class="property-btn"> اضافة سكن</a>';
}else{
    $Login_logout=' <a class="user-tab-login" href="logout.php"> تسجيل الخروج</a>' ;   
      $myAcount=' <li class="menu-item"><a href="admin/index.php">حسابي</a></li>';
      if($isLogin["user_status"]!=2){
          $addHedar='<a href="admin/add_residence.php" class="property-btn"> اضافة سكن</a>';
      }else{
           $addHedar='';
      }
  
    
}

$header2='        <header id="header" class="default default-v2 has-mega-menu" style="min-height: 100px;">
            <div class="main-header sticky-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="logo">
                                <figure>
                                    <a href="home-v5.html"> <img src="images/rtl-logo.png" alt="#"> </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
                            <div class="main-nav has-users-options">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul id="menu-main-menu" class="primary-menu">
                                        <li class="demos menu-item menu-item-has-children mega-menu">
                                            <a href="#">Demos</a>
                                            <ul class="mega-dropdown-lg has-border">
                                                <li
                                                    class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mega-menu-categories">
                                                    <div class="mega-menu-title">
                                                        <span>Demos</span>
                                                    </div>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="index.html">Home<sup>v1</sup><sub>__</sub>Homevillas<strong class="default">Default</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v2.html">Home<sup>v2</sup><sub>__</sub>Hill Property</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v3.html">Home<sup>v3</sup><sub>__</sub>ExpertAgent</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v4.html">Home<sup>v4</sup><sub>__</sub>PropertyChoice</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v5.html">Home<sup>v5</sup><sub>__</sub>GardenVillas</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v6.html">Home<sup>v6</sup><sub>__</sub>Homegrill</a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                                <li
                                                    class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mega-menu-categories">
                                                    <div class="mega-menu-title"><span>Demos</span></div>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="home-v7.html">Home<sup>v7</sup><sub>__</sub>Estate Agency</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v8.html">Home<sup>v8</sup><sub>__</sub>Ownership<strong class="hot">hot</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v9.html">Home<sup>v9</sup><sub>__</sub>Landholding</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v10.html">Home<sup>v10</sup><sub>__</sub>Amazing RealEstate</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v11.html">Home<sup>v11</sup><sub>__</sub>Real Estate</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v12.html">Home<sup>v12</sup><sub>__</sub>Buy Homes<strong class="new">New</strong></a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                                <li
                                                    class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mega-menu-categories">
                                                    <div class="mega-menu-title"><span>Demos</span></div>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="home-v13.html">Home<sup>v13</sup><sub>__</sub>Lux Villas<strong class="new">New</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v14.html">Home<sup>v14</sup><sub>__</sub>Apartments<strong class="hot">Hot</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v15.html">Home<sup>v15</sup><sub>__</sub>The Landlord</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v16.html">Home<sup>v16</sup><sub>__</sub>Properties<strong class="new">new</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-v17.html">Home<sup>v17</sup><sub>__</sub>Wax House<strong class="new">New</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="home-rtl.html">Home<sup>v18</sup><sub>__</sub>Demo RTL<strong class="ar">rtl</strong></a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                                <li
                                                    class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mega-menu-categories">
                                                    <div class="mega-menu-title"><span>Demos</span></div>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="#">Home<sup>v19</sup><sub>__</sub>Realhouse<strong class="soon">soon</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="#">Home<sup>v20</sup><sub>__</sub>Apartvilla<strong class="soon">soon</strong></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="#">Home<sup>v21</sup><sub>__</sub>WP Rental<strong class="soon">soon</strong></a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                            </ul>
                                            <!--End Sub Menu -->
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Listings</a>
                                            <ul>
                                                <li class="menu-item">
                                                    <a href="property-grid.html">Property Grid</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-medium.html">Property Medium</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-split-map-view.html">Map With Search</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-open-house.html">Open House<strong class="hot">Hot</strong></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-split-map-view.html">Draw on Map View<strong class="hot">Hot</strong></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-split-map-view.html">Split Map View<strong class="new">New</strong></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="compare-properties.html">Property Compare<strong class="new">New</strong></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-with-slider.html">Property with Slider</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-ads-banner.html">Property ads Banner</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-wbanner.html">Property W/Banner</a></li>
                                                <li class="menu-item">
                                                    <a href="ad-new-propert.html">Ad New Property</a>
                                                </li>
                                            </ul>
                                            <!--End Sub Menu -->
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Property</a>
                                            <ul>
                                                <li class="menu-item">
                                                    <a href="property-detail-v1.html">Property Detail V1</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v2.html">Property Detail V2</a></li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v3.html">Property Detail V3</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v4.html">Property Detail V4</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v5.html">Property Detail V5<strong class="new">New</strong></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v6.html">Map W/ Places Library</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v7.html">Property W/ Near by</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v8.html">Property W/ Gallery Slider</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v8.html">Property W/ Yelp Places</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v8.html">Property W/ Walk Score</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v8.html">Property W/ Multi-Units</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v8.html">Property W/ Video</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v8.html">Property W/ Floor Plans</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="property-detail-v8.html">All In One Property</a>
                                                </li>
                                            </ul>
                                            <!--End Sub Menu -->
                                        </li>
                                        <li class="menu-item  menu-item-has-children">
                                            <a href="#">Members</a>
                                            <ul>
                                                <li class="menu-item">
                                                    <a href="member-list.html">Members List</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="agencies-list.html">Agencies List</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="member-alphabetical.html">Member Alphabetical</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="member-detail.html">Member Detail</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="member-packages.html">Member Packages</a>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Members account</a>
                                                    <ul>
                                                        <li class="menu-itema">
                                                            <a href="dashboard-suggested.html">Dashboard</a>
                                                        </li>
                                                        <li class="menu-itema">
                                                            <a href="dashboard-properties.html">Bookings</a>
                                                        </li>
                                                        <li class="menu-itema">
                                                            <a href="dashboard-enquiries.html">Inquiries</a>
                                                        </li>
                                                        <li class="menu-itema">
                                                            <a href="dashboard-viewings.html">Saved Search</a>
                                                        </li>
                                                        <li class="menu-itema">
                                                            <a href="dashboard-reviews.html">Favourites Properties</a>
                                                        </li>
                                                        <li class="menu-itema">
                                                            <a href="dashboard-packages.html">Packages</a>
                                                        </li>
                                                        <li class="menu-itema">
                                                            <a href="dashboard-account.html">Account Settings</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="dashboard-members.html">Team Management</a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                            </ul>
                                            <!--End Sub Menu -->
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul>
                                                <li class="menu-item">
                                                    <a href="about-us.html">About Us</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="ad-new-propert.html">Ad New Property</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="member-packages.html">Member Packages</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="member-list.html">Member</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="agencies-list.html">Agencies List</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="faqs.html">Faqs</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="404.html">404 Page</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="search-result.html">Search Result</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="priceplans.html">Price Plans</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="under-construction.html">Under Construction</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="ad-new-propert.html">Ad New Property</a>
                                                </li>
                                            </ul>
                                            <!--End Sub Menu -->
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Blog</a>
                                            <ul>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="blog-simple.html">Blog Simple</a>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="blog-simple-left-sidebar.html">Blog Simple Left Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-simple-right-sidebar.html">Blog Simple Right Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-simple-full-width.html">Blog Simple Full Width</a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Blog Large</a>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="blog-large-left-sidebar.html">Blog Large Left Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-large-right-sidebar.html">Blog Large Right Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-large-full-width.html">Blog Large Full Width</a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Blog Medium</a>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="blog-medium-left-sidebar.html">Blog Medium Left Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-medium-right-sidebar.html">Blog Medium Right Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-medium.html">Blog Medium Full Width</a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Blog Grid</a>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-grid.html">Blog Grid Full Width</a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Blog Detail Page</a>
                                                    <ul>
                                                        <li class="menu-item">
                                                            <a href="blog-detail-left-sidebar.html">Blog Detail Left Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-detail-right-sidebar.html">Blog Detail Right Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-detail.html">Blog Detail Full Width</a>
                                                        </li>
                                                    </ul>
                                                    <!--End Sub Menu -->
                                                </li>
                                            </ul>
                                            <!--End Sub Menu -->
                                        </li>
                                    </ul>
                                </nav>
                                <!-- .main-navigation -->
                            </div>
                            <div class="contact-holder">
                                <div class="login-option">
                                    <i class="icon-user2"></i>
                                    <a id="btn-header-main-login" data-target="#sign-in" data-toggle="modal" class="cs-popup-login-btn login-popup-btn wp-rem-open-signin-button user-tab-login" href="#user-login-tab-59053">Sign in</a><span>/</span><a class="cs-color cs-popup-joinus-btn login-popup-btn wp-rem-open-register-button user-tab-register" data-target="#sign-in" data-toggle="modal" href="#user-register-59053">Register</a>
                                </div>
                                <div class="header-add-property input-button-loader"> <a href="ad-new-propert.html" class="property-btn">Create Property</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>';

$header = ' <header id="header" class="header1 has-mega-menu">
            <div class="main-header">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <figure>
                                        <a href="index.php">
                                            <img src="images/rtl-logo.png" alt="#">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                                <div class="contact-holder header-contact-holder">
                                
                                    <div class="header-add-property input-button-loader">
                                       '.$addHedar.'
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-area sticky-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="main-nav">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul id="menu-main-menu" class="primary-menu">
                                           <li class="menu-item colrhover"><a href="index.php">الصفحه الرئيسية</a></li>
                                         
                                            <li class="menu-item colrhover"><a href="ResidencesFilter.php">السكنات</a></li>
                                              <li class="menu-item colrhover"><a href="about-us.php"> من نحن</a></li>
                                           <li class="menu-item colrhover"><a href="about-us.php#CONTACT">تواصل معنا</a></li>
                                            '.$myAcount.'
                                        </ul>
                                    </nav>
                                    <!-- .main-navigation -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="login-area">
                                    <ul class="social-media">
                                        <li>
                                            <a href="#" data-original-title="Twitter" data-placement="top"
                                                class="colrhover"><i class="fa icon-twitter4"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-original-title="Facebook" data-placement="top"
                                                class="colrhover"><i class="fa icon-facebook5"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>';



$footer = '  <footer id="footer">
      
            <div class="copyright-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="footer-nav">
                                        <ul id="menu-footer-menu" class="menu">
                                            <li class="menu-item"><a href="index.php">الصفحه الرئيسية</a></li>
                                            <li class="menu-item"><a href="about-us.php#CONTACT">تواصل معنا</a></li>
                                            <li class="menu-item"><a href="about-us.php">من نحن</a></li>
                                            <li class="menu-item"><a href="ResidencesFilter.php">السكنات</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-social-media">
                                        <ul>
                                            <li>
                                                <a href="#" data-placement="top" class="colrhover">
                                                    <i class="fa icon-twitter4"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-placement="top" class="colrhover">
                                                    <i class="fa icon-facebook5"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="copy-right">
                                <p> جميع الحقوق محفوظة &copy; 2020. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.cs-copyright -->
        </footer>
        <script src="js/jquery.js" type="text/javascript"></script>
         <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/chosen.select.js"></script>
    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/daterangepicker.js"></script>
    <script type="text/javascript" src="js/croppic.js"></script>
    <script type="text/javascript" src="js/responsive-calendar.min.js"></script>
    <script type="text/javascript" src="js/flexslider.js"></script>
    <script type="text/javascript" src="js/donut-pie-chart.min.js"></script>
    <script type="text/javascript" src="js/fitvids.js"></script>
    <script type="text/javascript" src="js/counter.js"></script>
    <script type="text/javascript" src="js/responsive.menu.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
   
    <script src="js/script.js" type="text/javascript"></script>

    <script>
        function wp_rem_advanced_search_field(counter, tab, element) {
            "use strict";
            if (tab == "simple") {
                jQuery("#property_type_fields_" + counter).slideUp();
                jQuery("#nav-tabs-" + counter + " li").removeClass("active");
                jQuery(element).parent().addClass("active");
            } else if (tab == "advance") {
                jQuery("#property_type_fields_" + counter).slideDown();
                jQuery("#nav-tabs-" + counter + " li").removeClass("active");
                jQuery(element).parent().addClass("active");
            } else {
                jQuery("#property_type_fields_" + counter).slideToggle();
            }
        }
    </script>';