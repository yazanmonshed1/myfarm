

<?php

require_once("etc/config.php");
include("lib/variables.php");

$CityObj= new City();

?>


<html lang="ar">

<?= $head; ?>

<body class="rtl home wp-rem pt">
<div class="wrapper wrapper-full_width">
  <!-- Side Menu Start -->
  <div id="overlay"></div>
  <?= $header ?>
    <div class="main-section">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-rich-editor">
                     <div class="page-section parallex-bg" style="padding-top: 72px; padding-bottom: 26px; background: #ffffff;">
                             
                            <div class="container">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="element-title align-center ">
                                                    <h2 style="color:#000000 ! important;">من نحن </h2>
                                                    <p>سكني الطريقة المثلى ل ايجاد سكن طلابي و تسهيل مهمه اصحاب السكنات ب تأجير يكناتهم </p>
                                                </div>
                                                <div class="cs-icon-boxes-list top-center">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="icon-boxes fancy  top-center">
                                                                <div class="img-holder">
                                                                    <a href="#">
                                                                        <figure><img src="extra-images/comapre-page-icon-3.png" alt="Home Buying"></figure>
                                                                    </a>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h5 style="color:#000000 !important;"><a href="#" style="color:#000000 !important;">أيجاد سكن</a></h5>هدفنا مساعده الطلاب على ايجاد سكن لهم  مناسب </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="icon-boxes fancy  top-center">
                                                                <div class="img-holder">
                                                                    <a href="#">
                                                                        <figure><img src="extra-images/comapre-page-icon-2.png" alt="Home Renting"></figure>
                                                                    </a>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h5 style="color:#000000 !important;"><a href="#" style="color:#000000 !important;">تاجير سكن</a></h5>تسريع عمليه تاجير السكنات لاصحاب السكنات و تمكينهم من نشر سكناتهم </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="icon-boxes fancy  top-center">
                                                                <div class="img-holder">
                                                                    <a href="#">
                                                                        <figure><img src="extra-images/comapre-page-icon-1.png" alt="Home Selling"></figure>
                                                                    </a>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h5 style="color:#000000 !important;"><a href="#" style="color:#000000 !important;">القرب من الجامعه</a></h5>
                                                                    يتيح لك الموقع البحث عن طريق المدينه او الجامعه لايجاد سكن مناسب و يلبي احتياجاتك
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
                        
                                <div class="page-section" id='CONTACT' style="background: #ffffff;">
                            <!-- Container Start -->
                            <div class="wide">
                                <div class="row">
                                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="cs-map-section">
                                                    <div class="maps">
                                                        <div class="cs-map">
                                                            <div class="cs-map-content">
                                                                <div class="mapouter">
                                                                    <div class="gmap_canvas" style="float:left; width:100%; height:506px;">
                                                                        <iframe style="width: 100%; height: 100%; border:0;" id="gmap_canvas" src="https://maps.google.com/maps?q=Amman,+Jordan&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="contact-property">
                                                    <div class="element-title align-left ">
                                                        <h2>معلومات الاتصال</h2>
                                                        <p>يرجى ملاحظة أننا لا نبيع منازل ، نحن منصة إعلانية. لأي
للأسئلة المتعلقة بالإدراج يرجى الاتصال بوكيل العقارات الذي لديه<br>
وضع إعلان الملكية.
                                                        </p>
                                                    </div>
                                                    <ul class="contact-info">
                                                        <li> <i style="color:#ffffff !important" class="icon-map5"></i>
                                                            <div class="address-text"><span class="label-title">عنوان</span><span class="info-desc">عمان ,الاردن.</span></div>
                                                        </li>
                                                        <li> <i style="color:#ffffff !important" class="icon-phone2"></i>
                                                            <div class="address-text"><span class="label-title">هاتف </span><span class="info-desc">+962788888888</span></div>
                                                        </li>
<!--                                                        <li> <i style="color:#ffffff !important" class="icon-fax"></i>
                                                            <div class="address-text"><span class="label-title">Fax:</span><span class="info-desc">(001) 123 456 7891</span></div>
                                                        </li>-->
                                                        <li> <i style="color:#ffffff !important" class="icon-envelope3"></i>
                                                            <div class="address-text"><span class="label-title"> عنوان البريد الالكترونى</span><span class="info-desc">info@example.com</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end section row -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Container Start -->
                        </div>
                         </div>
                        <!-- End Page Section -->
                    </div>
                </div>
            </div>
        
  <?= $footer ?>
   </div>
</body>

</html>


