
jQuery(document).ready(function () {

/*Testimonail Slider Functions Start*/
if (jQuery(".testimonial-slider .swiper-container").length != '') {
    var swiper = new Swiper('.testimonial-slider .swiper-container', {
        nextButton: '.testimonial-slider .swiper-button-next',
        prevButton: '.testimonial-slider .swiper-button-prev',
        slidesPerView: 'auto',
        autoplay: 2500,
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        breakpoints: {
            1024: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            }
        }
    });
}
/*Fitvideo Script*/
if (jQuery(".responsive-calendar").length != '') {
    jQuery(".responsive-calendar").responsiveCalendar({
        time: "2020-09",
        monthChangeAnimation: false,
        events: {
            "2020-09-16": {
                number: 5
            }
        }
    });
}
/*Fit video Player Function Start*/
if (jQuery("#play-video").length != '') {
    jQuery(document).on('click', '#play-video', function(){
        jQuery('.video-fit-palyer').children('.img-holder').remove();
        jQuery('.video-fit-palyer').html('<div class="fluid-width-video-wrapper" style="padding-top: 56.5217%;"><iframe src="https://player.vimeo.com/video/113282703?app_id=122963?autoplay=1" style="border: none" allow="autoplay; fullscreen" allowfullscreen="" title="House &amp;amp; Monster" name="fitvid0"></iframe></div>')
    });

    /*Fit video Player Function Start*/
    jQuery("body").fitVids();
    /*Testimonail Slider Functions End*/
}
jQuery("a.property-video-btn[data-rel^='prettyPhoto']").prettyPhoto({animation_speed:"fast",slideshow:10000, hideflash: true,autoplay:true,autoplay_slideshow:false});

var wrapHeight;
    jQuery(window).resize(function(){
        wrapHeight=jQuery(".real-estate-property .tab-content > .tab-pane.active").outerHeight();
        jQuery(".real-estate-property.tabs-loaded .tab-content").height(wrapHeight);
    });
    jQuery('.real-estate-property a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        e.target
        e.relatedTarget
        var target=jQuery(e.target).attr("href");
        var prevTarget=jQuery(e.relatedTarget).attr("href");
        var wrapHeight=jQuery(target).outerHeight();
        jQuery(".real-estate-property .tab-content").height(wrapHeight);
        jQuery(prevTarget).addClass("active-moment").find(".animated").removeClass("slideInUp").addClass("fadeOutDown");
        jQuery(target).find(".animated").addClass("slideInUp").removeClass("fadeOutDown");
        setTimeout(function(){
        jQuery(prevTarget).removeClass("active-moment").find(".animated").removeClass("fadeOutDown");
        }, 800);

    });

    if (jQuery('.chosen-select, .chosen-select-deselect, .chosen-select-no-single, .chosen-select-no-results, .chosen-select-width').length != '') {
        var config = {
            '.chosen-select': {width: "100%"},
            '.chosen-select-deselect': {allow_single_deselect: true},
            '.chosen-select-no-single': {disable_search_threshold: 10, width: "100%"},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "95%"}
        };
        for (var selector in config) {
            jQuery(selector).chosen(config[selector]);
        }
    }
    /*
     * Custom Counter
     */
    if (jQuery('.count-num').length != '') {
        jQuery('.count-num').counterUp({
            delay: 10,
            time: 1000
        });
    }
    /*featured-slider slider*/
    if (jQuery(".featured-slider .swiper-container").length) {
        new Swiper(".featured-slider .swiper-container", {
            nextButton: ".swiper-button-next",
            prevButton: ".swiper-button-prev",
            paginationClickable: true,
            slidesPerView: 1,
            slidesPerColumn: 1,
            grabCursor: !0,
            loop: !0,
            spaceBetween: 30,
            arrow: false,
            pagination: ".swiper-pagination",
            breakpoints: {
                1024: {
                    slidesPerView: 1
                },
            }
        })
    }
    /*featured-slider slider End*/
    /*Testimonial Text Holder Slider Function Start*/
    if (jQuery(".testimonial-holder .text-holder .swiper-container").length) {
        var mySwiper = new Swiper('.testimonial-holder .text-holder .swiper-container', {
            autoplay: (5000),
            onSlideChangeStart: function () {
                jQuery('.swiper-pagination-switch').removeClass('active');
                var activeSlide = mySwiper.activeIndex;
                jQuery('.swiper-pagination-switch').eq(activeSlide).addClass('active')
            }
        });
        //navigation
        jQuery(".testimonial-holder .swiper-pagination-switch").click(function (e) {
            e.preventDefault();
        });
        jQuery('.testimonial-holder .swiper-pagination-switch').click(function () {
            // swiper.swipeTo($(this).index());
            mySwiper.slideTo(jQuery(this).index());
            jQuery('.swiper-pagination-switch').removeClass('active');
            jQuery(this).addClass('active');
        });
    }
    /*Testimonial Text Holder Slider Function End*/

    /*Main Navigation Function Start*/
    if (jQuery('.main-navigation>ul').length != "") {
        (function ($) {
            jQuery('.main-navigation>ul') .slicknav({
                prependTo: '.main-nav'
            });
        })(jQuery);
    }
    /*Main Navigation Function End*/
    if (jQuery(".btn-top").length > 0) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery('.btn-top').addClass('show');
                } else {
                    jQuery('.btn-top').removeClass('show');
                }
            };
        backToTop();
        jQuery(window).on('scroll', function () {
            backToTop();
        });
        jQuery(document).on("click", ".back-to-top", function(e) {
            e.preventDefault();
            jQuery("html, body").animate({
                scrollTop: 0
            }, 800);
        });
        /*Back To Top End*/
    }

    /* Wp-rem-dev-dash detail-pkg Function Start */
    if (jQuery('.wp-rem-dev-dash-detail-pkg').length > 0) {
        jQuery(document).on("click", ".wp-rem-dev-dash-detail-pkg", function () {
            "use strict";
            var _this_id = jQuery(this).data("id"),
                package_detail_sec = jQuery("#package-detail-" + _this_id);
            if (!package_detail_sec.is(":visible")) {
                jQuery(".all-pckgs-sec").find(".package-info-sec").hide();
                package_detail_sec.slideDown();
            } else {
                package_detail_sec.slideUp();
            }
        });
    }
    /* Wp-rem-dev-dash detail-pkg Function End */

});

/* Ready Functions Strat */
jQuery(document).ready(function () {
    /* Field Select Holder Functions Start */
    if (jQuery(".field-select-holder .active").length != "") {
        jQuery(".field-select-holder .active").on("click", function () {
            "use strict";
            jQuery(this).next("ul").slideToggle();
            jQuery(this).parents("ul").toggleClass("open");
            jQuery(".dropdown-select > li > a").on("click", function (e) {
                e.preventDefault();
                var anchorText = jQuery(this).text();
                jQuery(".field-select-holder .active small").text(anchorText);
                jQuery(".field-select-holder .active").next("ul").slideUp();
                jQuery(this).parents("ul").removeClass("open");
            });
        });
        jQuery(document).mouseup(function (e) {
            var container = jQuery(".field-select-holder > ul");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                jQuery(".field-select-holder .active").next("ul").slideUp();
                jQuery(".field-select-holder > ul").removeClass("open");
            }
        });
        jQuery(".field-select-holder ul li ul.delivery-dropdown li").click(function () {
            jQuery(".field-select-holder .active").next("ul").slideUp();
            jQuery(".field-select-holder > ul").removeClass("open");
        });
    }
    /* Field Select Holder Functions End */
    /* User Account Sidebar Responsive Btn Function End */
    if (jQuery('.user-account-nav.user-account-sidebar').length > 0) {
        function SidbarPanelHeight() {
            var WindowHeightForSidbarPanel = jQuery(window).height();
            jQuery(".user-account-nav.user-account-sidebar").css({
                "max-height": WindowHeightForSidbarPanel - 200,
                "overflow-y": "auto"
            });
        }
            if (jQuery(".page-section.account-header").width() < 991) {
            SidbarPanelHeight();
                jQuery(window).resize(function () {
                SidbarPanelHeight();
            });

            if (jQuery('.dashboard-sidebar-panel').length > 0) {
                jQuery('.dashboard-sidebar-panel .dashboard-nav-btn').click(function (e) {
                    e.preventDefault();
                    if (jQuery('.dashboard-sidebar-panel').hasClass('sidebar-nav-open')) {
                        jQuery('.dashboard-sidebar-panel').removeClass('sidebar-nav-open');
                    } else {
                        jQuery('.dashboard-sidebar-panel').addClass('sidebar-nav-open');
                    }
                });
            }
        }
    }
/* User Account Sidebar Responsive Btn Function End */
/* Listing Split Map Function Strat */
// sticky map tooltip
if (jQuery(".wp-rem-split-map-wrap").length > 0) {
    // variables
    var boxWrap = jQuery(".wrapper-boxed");
    var wrapWidth = boxWrap.outerWidth();
    var wrapMarginTop = boxWrap.css("margin-top");
    var wrapMarginBottom = boxWrap.css("margin-bottom");
    var headerOffset = jQuery("#header").offset().top;
    var windowWidth = jQuery(window).width();
    var offsetMargin = (windowWidth - wrapWidth) / 2;
    var holderWidth = jQuery(".wp-rem-split-map-wrap .split-map-holder").width();
    var holderWidthOffset = jQuery(".wp-rem-split-map-wrap .split-map-holder").width() - offsetMargin;
    var mapBottomOffset = jQuery(window).height();
    var mapBottomOffset2 = mapBottomOffset - jQuery("#header").height();
    var rectRight = "rect(" + headerOffset + 'px' + ", " + holderWidthOffset + 'px' + ", " + mapBottomOffset + 'px' + ", 0)";
    var rectLeft = "rect(" + headerOffset + 'px' + ", " + holderWidth + 'px' + ", " + mapBottomOffset + 'px' + ",  " + offsetMargin + 'px' + ")";
    var headerHeight = jQuery("#header").height();
    var stickyHeight = headerHeight - jQuery(".sticky-header").height;
    var windowHeight = jQuery(window).height();
    var mapSplitOffsetbottom = jQuery(".split-map-container").height();
    if (wrapMarginTop == undefined || wrapMarginBottom == undefined) {
        wrapMarginTop = 0;
        wrapMarginBottom = 0;
    }

    function StickyMapTools(element) {
        this.thisElement = element;
        this.isSticky = false;
        this.stickyCheck = function (stickVal) {
            this.isSticky = stickVal;
        }
        this.wpAdminBar = function () {
            this.wpAdminBarVar = jQuery("#wpadminbar").height();
            return this.wpAdminBarVar;
        }
        this.getHeader = function () {
            this.getHeaderHeight = jQuery("#header").height();
            return this.getHeaderHeight;
        }
    }
    StickyMapTools.prototype.stickyToolActive = function () {
        this.thisElement.css("top", this.wpAdminBar() + this.getHeader() + parseInt(wrapMarginTop));
        this.thisElement.addClass("toolSticky-active");
        this.stickyCheck(true);
    };
    StickyMapTools.prototype.stickyToolDisable = function () {
        this.thisElement.css("top", '');
        this.thisElement.removeClass("toolSticky-active");
        this.stickyCheck(false);
    };
    var stickyTools = new StickyMapTools(jQuery(".map-actions, .property-records-sec"));
    if (jQuery(".wp-rem-split-map-wrap.split-map-left,.wp-rem-split-map-wrap.split-map-right").length > 0) {
        stickyTools.stickyToolActive();
    }
    jQuery(".wp-rem-split-map-wrap.split-map-right .wp-rem-ontop-gmap,.wp-rem-split-map-wrap.split-map-left .wp-rem-ontop-gmap").height(windowHeight);
    //========= on scroll map tools===========
    var w = jQuery(window);
    var wrapOffset = jQuery(".wp-rem-split-map-wrap").offset();
    var counter;
    var elementOffset = wrapOffset.top - w.scrollTop();
    counter = elementOffset;
    if (jQuery(".wp-rem-split-map-wrap.split-map-left,.wp-rem-split-map-wrap.split-map-right").length > 0) {
        var filterHeight = jQuery(".filters-sidebar").height();
        jQuery(".wp-rem-split-map-wrap .filters-sidebar + .col-lg-9").css("min-height", w.height() - headerHeight);
        // clip map for box view
        if (jQuery(".wrapper-boxed").length > 0) {
            // for map on right           
            jQuery(".wp-rem-split-map-wrap.split-map-right .split-map-holder").css("clip", rectRight);
            jQuery(".wp-rem-split-map-wrap.split-map-fixed.split-map-right .map-actions").css({
                "right": offsetMargin + 10,
                "left": "auto"
            });
            jQuery(".wp-rem-split-map-wrap.split-map-fixed.split-map-right .property-records-sec").css({
                "right": offsetMargin + jQuery(".map-actions").width() + 20,
                "left": "auto"
            });
            // for map on right
            // for map on left
            jQuery(".wp-rem-split-map-wrap.split-map-left .split-map-holder").css("clip", rectLeft);
            jQuery(".wp-rem-split-map-wrap.split-map-fixed.split-map-left .map-actions").css({
                "left": offsetMargin + 10,
                "right": "auto"
            });
            jQuery(".wp-rem-split-map-wrap.split-map-fixed.split-map-left .property-records-sec").css({
                "left": offsetMargin + jQuery(".map-actions").width() + 20,
                "right": "auto"
            });
            // for map on left
        }
        // clip map for box view
        jQuery(window).scroll(function () {
            var stickyTop = jQuery(".sticky-header").offset().top;
            var winTop = jQuery(window).scrollTop();
            if (counter > 0) {
                if (counter < stickyTop - winTop + jQuery(".sticky-header").height()) {
                    jQuery(".map-actions, .property-records-sec").css("top", jQuery(".sticky-header").height() + jQuery("#wpadminbar").height());
                } else {
                    jQuery(".map-actions, .property-records-sec").css("top", counter);
                    counter = wrapOffset.top - w.scrollTop();
                }
            } else if (counter > elementOffset || counter < 0) {
                counter = stickyTop - winTop + jQuery(".sticky-header").height();
            }
            if (wrapOffset.top - winTop - jQuery(".sticky-header").height() > 0) {
                counter = wrapOffset.top - winTop;
                jQuery(".map-actions, .property-records-sec").css("top", counter);
            }
            var togglerTop = jQuery(".split-map-toggler").offset().top - winTop;
            if (winTop < mapSplitOffsetbottom - jQuery("#header").outerHeight() - jQuery("#footer").outerHeight() - jQuery(".company-logo-holder").outerHeight() - 450) {
                jQuery(".split-map-toggler").css("margin-top", winTop - 20);
            }
            if (jQuery(".wrapper-boxed").length > 0) {
                if (winTop + headerHeight + parseInt(wrapMarginTop) + parseInt(wrapMarginBottom) + jQuery("#footer").height() + 150 > jQuery("#footer").offset().top - headerHeight - jQuery("#footer").height() - jQuery(".company-logo-holder .company-logo").height()) {
                    var rectRight = "rect(" + headerOffset + 'px' + ", " + holderWidthOffset + 'px' + ", " + mapBottomOffset2 + 'px' + ", 0)";
                    jQuery(".wp-rem-split-map-wrap.split-map-right .split-map-holder").css("clip", rectRight);
                    var rectLeft = "rect(" + headerOffset + 'px' + ", " + holderWidth + 'px' + ", " + mapBottomOffset2 + 'px' + ",  " + offsetMargin + 'px' + ")";
                    jQuery(".wp-rem-split-map-wrap.split-map-left .split-map-holder").css("clip", rectLeft);
                } else {
                    var rectRight = "rect(" + headerOffset + 'px' + ", " + holderWidthOffset + 'px' + ", " + mapBottomOffset + 'px' + ", 0)";
                    jQuery(".wp-rem-split-map-wrap.split-map-right .split-map-holder").css("clip", rectRight);
                    var rectLeft = "rect(" + headerOffset + 'px' + ", " + holderWidth + 'px' + ", " + mapBottomOffset + 'px' + ",  " + offsetMargin + 'px' + ")";
                    jQuery(".wp-rem-split-map-wrap.split-map-left .split-map-holder").css("clip", rectLeft);
                }
            }
        });
    }
    //========= on scroll map tools===========
}
/* Listing Split Map Function End */
/* Split Map Wrap Filters Sidebar Function Strat */
if (jQuery("#header").length > 0) {
    var windowHeight = jQuery(window).height();
    var headerHeight = jQuery("#header").height();
    var rHeight = windowHeight - headerHeight;
    var vCenter = rHeight / 2;
    jQuery(".split-map-toggler").css({
        "top": vCenter
    });
    jQuery(".split-map-toggler").click(function () {
        jQuery(this).toggleClass("active");
        jQuery(".wp-rem-split-map-wrap .filters-sidebar").toggleClass("active");
    });
}
/* Split Map Wrap Filters Sidebar Function End */
    /* Detail Nav Toggler Functions Start */
    if (jQuery(".detail-nav-toggler").length != '') {
        jQuery(".detail-nav-toggler").click(function () {
            jQuery(this).next(".detail-nav").slideToggle().toggleClass("open");
        });
    }
    /* Detail Nav Toggler Functions End */
    /*Detail Nav Sticky*/
    function stickyDetailNavBar() {
        "use strict";
        var jQuerywindow = jQuery(window);
        if (jQuerywindow.width() > 980) {
            if (jQuery(".detail-nav").length) {
                var el = jQuery(".detail-nav");
                var stickyTop = jQuery(".detail-nav").offset().top;
                var stickyHeight = jQuery(".detail-nav").height();
                var AdminBarHeight_ = jQuery("#wpadminbar").height();
                if (jQuery("#wpadminbar").length > 0) {
                    stickyTop = stickyTop - AdminBarHeight_;
                }
                jQuery(window).scroll(function () {
                    var windowTop = jQuery(window).scrollTop();
                    if (stickyTop < windowTop) {
                        el.css({
                            position: "fixed",
                            width: "100%",
                            "z-index": "1000",
                            top: "0"
                        });
                        jQuery(".detail-nav").css("margin-top", AdminBarHeight_);
                        jQuery(".property-detail").css("padding-top", stickyHeight);
                        jQuery(".detail-nav-wrap.detail-v5 .detail-nav").addClass("detail-nav-sticky");
                    } else {
                        el.css({
                            position: "relative",
                            width: "100%",
                            "z-index": "initial",
                            top: "auto"
                        });
                        jQuery(".detail-nav").css("margin-top", "0");
                        jQuery(".property-detail").css("padding-top", "0");
                        jQuery(".detail-nav-wrap.detail-v5 .detail-nav").removeClass("detail-nav-sticky");
                    }
                });
            }
        }
    }
    stickyDetailNavBar();
    jQuery(window).resize(function () {
        stickyDetailNavBar();
    });
    /*Detail Nav Sticky*/
    /*Scroll Nav and Active li Start*/
    if (jQuery(".detail-nav-map").length != "" && jQuery(".property-act-btns-list").length === 0) {
        var wpadminbarHeight = 0;
        if (jQuery("#wpadminbar").length) {
            wpadminbarHeight = jQuery("#wpadminbar").height();
        }
        var lastId, topMenu = jQuery(".detail-nav-map"),
            topMenuHeight = topMenu.outerHeight() + 15 + wpadminbarHeight,
            menuItems = topMenu.find("ul li a"),
            scrollItems = menuItems.map(function () {
                var item = jQuery(jQuery(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });
        menuItems.click(function (e) {
            var href = jQuery(this).attr("href");
            if (href.length) {
                offsetTop = href === "#" ? 0 : jQuery(href).offset().top - topMenuHeight + 1;
                jQuery("html, body").stop().animate({
                    scrollTop: offsetTop
                }, 650);
                e.preventDefault();
            }
        });
        jQuery(window).scroll(function () {
            var fromTop = jQuery(this).scrollTop() + topMenuHeight;
            var cur = scrollItems.map(function () {
                if (jQuery(this).offset().top < fromTop)
                    return this;
            });
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            if (lastId !== id) {
                lastId = id;
                menuItems.parent().removeClass("active").end().filter("[href='#" + id + "']").parent().addClass("active");
            }
        });
    }
    /*Scroll Nav and Active li End*/
    /* Property photo Functions Start*/
    jQuery("a.property-video-btn[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: "fast",
        slideshow: 10000,
        hideflash: true,
        autoplay: true,
        autoplay_slideshow: false
    });
    var wrapHeight;
    jQuery(window).resize(function () {
        wrapHeight = jQuery(".real-estate-property .tab-content > .tab-pane.active").outerHeight();
        jQuery(".real-estate-property.tabs-loaded .tab-content").height(wrapHeight);
    });
    jQuery('.real-estate-property a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        e.target
        e.relatedTarget
        var target = jQuery(e.target).attr("href");
        var prevTarget = jQuery(e.relatedTarget).attr("href");
        var wrapHeight = jQuery(target).outerHeight();
        jQuery(".real-estate-property .tab-content").height(wrapHeight);
        jQuery(prevTarget).addClass("active-moment").find(".animated").removeClass("slideInUp").addClass("fadeOutDown");
        jQuery(target).find(".animated").addClass("slideInUp").removeClass("fadeOutDown");
        setTimeout(function () {
            jQuery(prevTarget).removeClass("active-moment").find(".animated").removeClass("fadeOutDown");
        }, 800);
    });
    /* Property photo Functions End */
    /* Chosen Functions Start */
    if (jQuery('.chosen-select, .chosen-select-deselect, .chosen-select-no-single, .chosen-select-no-results, .chosen-select-width').length != '') {
        var config = {
            '.chosen-select': {
                width: "100%"
            },
            '.chosen-select-deselect': {
                allow_single_deselect: true
            },
            '.chosen-select-no-single': {
                disable_search_threshold: 10,
                width: "100%"
            },
            '.chosen-select-no-results': {
                no_results_text: 'Oops, nothing found!'
            },
            '.chosen-select-width': {
                width: "95%"
            }
        };
        for (var selector in config) {
            jQuery(selector).chosen(config[selector]);
        }
    }
    /* Chosen Functions End */
    jQuery(document).ready(function() {
        if("" != jQuery(".featured-multiple-properties").length) {
            var mySlider = new Swiper(".featured-multiple-properties", {
                slidesPerView: 3,
                paginationClickable: !1,
                nextButton: ".swiper-button-prev.default",
                prevButton: ".swiper-button-next.default",
                spaceBetween: 30,
                speed: 2000,
                breakpoints: {
                    991: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    600: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    }
                }
            });
        }
    });
    jQuery(document).ready(function ($) {
        if ("" != jQuery(".team-grid-classic .swiper-container").length) {
            new Swiper(".team-grid-classic .swiper-container", {
                nextButton: ".swiper-button-next",
                prevButton: ".swiper-button-prev",
                paginationClickable: !0,
                slidesPerView: 4,
                slidesPer: 1,
                spaceBetween: 30,
                loop: !0,
                autoplay: 3000,
                speed: 2000,
                breakpoints: {
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    991: {
                        slidesPerView: 2
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            })
        }
    });
    if ("" != jQuery("#company-logo-slider .swiper-container").length) {
        new Swiper("#company-logo-slider .swiper-container", {
            nextButton: "#company-logo-slider .swiper-button-next",
            prevButton: "#company-logo-slider .swiper-button-prev",
            paginationClickable:true,
            slidesPerView: 6,
            slidesPer: 1,
            loop: !0,
            breakpoints: {
                1199: {
                    slidesPerView: 5
                },                                
                991: {
                    slidesPerView: 4
                },
                767: {
                    slidesPerView: 3
                },
                480: {
                    slidesPerView: 2
                },
                360: {
                    slidesPerView: 1
                }
            }
        });
    }
    jQuery(document).ready(function ($) {
        if (jQuery("#property-grid-slider .swiper-container, #property-grid-slider2 .swiper-container").length != "") {
            "use strict";
            var mySlider = new Swiper("#property-grid-slider .swiper-container, #property-grid-slider2 .swiper-container", {
                nextButton: "#property-grid-slider .swiper-button-next, #property-grid-slider2 .swiper-button-next",
                prevButton: "#property-grid-slider .swiper-button-prev, #property-grid-slider2 .swiper-button-prev",
                paginationClickable: !0,
                slidesPerView: 3,
                slidesPer: 1,
                loop: !0,
                autoplay: 2500,
                loop: true,
                autoplayDisableOnInteraction: false,
                breakpoints: {
                    991: {
                        slidesPerView: 2
                    },
                    600: {
                        slidesPerView: 1
                    }
                }
            });
        }
    });
    if (jQuery("#property_type_fields_").length != "") {
        function wp_rem_advanced_search_field(counter, tab, element) {
            "use strict";
            if (tab == 'simple') {
                jQuery('#property_type_fields_' + counter).slideUp();
                jQuery('#nav-tabs-' + counter + ' li').removeClass('active');
                jQuery(element).parent().addClass('active');
            } else if (tab == 'advance') {
                jQuery('#property_type_fields_' + counter).slideDown();
                jQuery('#nav-tabs-' + counter + ' li').removeClass('active');
                jQuery(element).parent().addClass('active');
            } else {
                jQuery('#property_type_fields_' + counter).slideToggle();
            }
        }
    }
    if ("" != jQuery(".rem-tweet-slider").length) {
        new Swiper(".rem-tweet-slider .swiper-container", {
            slidesPerView: 1,
            nextButton: ".swiper-tweet-next",
            prevButton: ".swiper-tweet-prev",
            spaceBetween: 30,
            autoplay: 3000,
            speed: 2000,
        });
    }
    /* Login And Register Form Function Strat */
    if (jQuery('.user-tab-login').length > 0) {
        var $ = jQuery;
        jQuery(document).on('click', '.user-tab-login', function () {
            jQuery('.cs-login-switch').click();
        });
        jQuery(document).on('click', '.cs-forgot-switch', function () {
            var _this_title = $('.wp-rem-dev-login-forget-txt').html();
            var _this_append = $('.wp-rem-dev-login-main-title');
            var data_id = $(this).data('id');
            _this_append.html(_this_title);
            jQuery('.cs-login-pbox-' + data_id).hide();
            jQuery('.cs-forgot-pbox-' + data_id).show();
        });
        jQuery(document).on('click', '.cs-login-switch', function () {
            var _this_title = $('.wp-rem-dev-login-box-t-txt').html();
            var _this_append = $('.wp-rem-dev-login-main-title');
            var data_id = $(this).data('id');
            _this_append.html(_this_title);
            jQuery('.cs-forgot-pbox-' + data_id).hide();
            jQuery('.cs-login-pbox-' + data_id).show();
        });
        jQuery(document).on('click', '.user-registeration a', function () {
            jQuery('#sign-in').modal('hide');
        });
        jQuery(document).on('click', '.user-logging-in a', function () {
            jQuery('#join-us').modal('hide');
        });
        jQuery(document).on('click', '.wp-rem-subscribe-pkg', function () {
            var msg_show = $(this).data('msg');
            jQuery("#sign-in .modal-body .wp-rem-dev-login-top-msg").html(msg_show);
            jQuery("#sign-in .modal-body .wp-rem-dev-login-top-msg").show();
        });
        jQuery(document).on('click', '.cs-popup-login-btn', function () {
            jQuery("#sign-in .modal-body .wp-rem-dev-login-top-msg").html('');
            jQuery("#sign-in .modal-body .wp-rem-dev-login-top-msg").hide();
        });
    }
    /* Login And Register Form Function End */
    /* Blog Slider Functions Start */
    if (jQuery(".blog-slider.swiper-container").length != "") {
        var swiper = new Swiper(".blog-slider.swiper-container", {
            slidesPerView: "auto",
            loop: true,
            autoplay: 5000,
            autoplayDisableOnInteraction: false,
            paginationClickable: true,
            nextButton: ".swiper-button-next",
            prevButton: ".swiper-button-prev"
        });
    }
    if (jQuery(".blog-grid.swiper-container").length != '') {
        var swiper = new Swiper('.blog-grid.swiper-container', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            slidesPerView: 3,
            slidesPerColumn: 1,
            spaceBetween: 15,
            breakpoints: {
                991: {
                    slidesPerView: 3,
                },
                600: {
                    slidesPerView: 2,
                },
                500: {
                    slidesPerView: 1,
                },
            }
        });
    }
    if ("" != jQuery(".member-grid-slider").length) {
        new Swiper(".member-grid-slider .swiper-container", {
            slidesPerView: 4,
            paginationClickable: !1,
            nextButton: ".button-prev-member",
            prevButton: ".button-next-member",
            spaceBetween: 30,
            //autoplay: 3000,
            speed: 2000,
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 15
                }
            }
        });
    }
    if("" != jQuery(".featured-multiple-properties").length) {
        var mySlider = new Swiper(".featured-multiple-properties", {
            slidesPerView: 3,
            paginationClickable: !1,
            nextButton: ".swiper-button-prev.default",
            prevButton: ".swiper-button-next.default",
            spaceBetween: 30,
            speed: 2000,
            breakpoints: {
                991: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 15
                }
            }
        });
    }
    if("" != jQuery("#getting-started").length) {
        var date = '2021/08/31';
        if (jQuery('#getting-started').length != '') {
            jQuery('#getting-started').countdown(date, function (event) {
                jQuery(this).html(event.strftime('<div class="time-box"><h4 class="dd">%D</h4> <span class="label">days</span> </div><div class="time-box"><h4 class="hh">%H</h4><span class="label">hours</span></div><div class="time-box"><h4 class="mm">%M</h4> <span class="label">minutes</span></div><div class="time-box"><h4 class="ss">%S</h4> <span class="label">seconds</span></div> '));
            });
        }
    }
    
    if("" != jQuery(".house-time-to").length) {
        jQuery(".house-time-to").datetimepicker({
            timepicker: true,
            datepicker: false,
            format: "H:i",
        });
    }
    if("" != jQuery(".house-time-from").length) {
        jQuery(".house-time-from").datetimepicker({
            timepicker: true,
            datepicker: false,
            format: "H:i",
        });
    }
    if("" != jQuery(".open-house-date").length) {
        jQuery(".open-house-date").datetimepicker({
            timepicker: false,
            format: "Y/m/d",
        });
    }
    if("" != jQuery("#property-tags").length) {
        jQuery('#property-tags').tagit({
            allowSpaces: true,
            fieldName: 'property_tags[]'
        });
    }
    
    /* Blog Slider Functions End */
    /* Flicker Gallery Slider Functions Start */
    if (jQuery(".flickr-gallery-slider .swiper-container").length != '') {
        var swiper = new Swiper('.flickr-gallery-slider .swiper-container', {
            nextButton: '.flickr-gallery-slider .swiper-button-next',
            prevButton: '.flickr-gallery-slider .swiper-button-prev',
            paginationClickable: true,
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: 2500,
            autoplayDisableOnInteraction: false,
            loop: false,
        });
    }
    /*prettyPhoto Start*/
    if (jQuery(".photo-gallery.gallery").length != "") {
        jQuery("area[data-rel^='prettyPhoto']").prettyPhoto();
        jQuery(".gallery:first a[data-rel^='prettyPhoto']").prettyPhoto({
            animation_speed: "normal",
            theme: "light_square",
            slideshow: 5e3,
            deeplinking: true,
            autoplay_slideshow: true
        });

        jQuery(".gallery:gt(0) a[data-rel^='prettyPhoto']").prettyPhoto({
            animation_speed: "fast",
            slideshow: 5e4,
            deeplinking: false,
            hideflash: true
        });

        jQuery("#custom_content a[data-rel^='prettyPhoto']:first").prettyPhoto({
            custom_markup: '<div id="map_canvas"></div>',
            changepicturecallback: function () {
                initialize();
            }
        });

        jQuery("#custom_content a[data-rel^='prettyPhoto']:last").prettyPhoto({
            custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
            changepicturecallback: function () {
                _bsap.exec();
            }
        });
    }
    /*prettyPhoto End*/
    /* Gallery Counter Start*/
    if (jQuery(".photo-gallery .gallery-counter li").length != "") {
        count = jQuery(".photo-gallery .gallery-counter li").size();
        if (count > 7) {
            jQuery(".photo-gallery .gallery-counter  li:gt(6) .img-holder figure").append("<figcaption><span></span></figcaption>");
            jQuery(".photo-gallery .gallery-counter  li figure figcaption span").append('<em class="counter"></em>');
            jQuery(".photo-gallery .gallery-counter  li figure figcaption span .counter").html("<i class='icon-plus'></i>" + count);
        } else {
            jQuery('<em class="counter"></em>').remove();
        }
        jQuery(".photo-gallery .gallery-counter  li:gt(7)").hide();
    }
    /* Flicker Gallery Slider Functions End */
    /* Property Banner Slider Functions Start */
    if (jQuery(".banner .property-banner-slider .swiper-container").length != "") {
        var mySwiper = new Swiper(".banner .property-banner-slider .swiper-container", {
            pagination: ".swiper-pagination",
            paginationClickable: true,
            loop: false,
            grabCursor: true,
            nextButton: ".banner .property-banner-slider .swiper-button-next",
            prevButton: ".banner .property-banner-slider .swiper-button-prev",
            spaceBetween: 30,
            autoplay: 3e3,
            effect: "fade",
        });
    }
    /* Property Banner Slider Functions End */
    /* Tooltip Functions Strat */
    if (jQuery('[data-toggle="tooltip"]').length != '') {
        jQuery('[data-toggle="tooltip"]').tooltip();
    }
    /* Tooltip Functions End */
    /* Testimonial Holder Advance Slider */
    if (jQuery(".testimonial-holder.advance .swiper-container").length != "") {
        var swiper = new Swiper(".testimonial-holder.advance .swiper-container", {
            nextButton: ".testimonial-holder.advance .swiper-button-next",
            prevButton: ".testimonial-holder.advance .swiper-button-prev",
            paginationClickable: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: 5000,
            autoplayDisableOnInteraction: false,
        });
    }
    /* Testimonial Holder Advance Slider */
    /* Testimonial Holder Advance Slider */
    if (jQuery(".testimonial-holder.default .swiper-container").length != "") {
        var swiper = new Swiper(".testimonial-holder.default .swiper-container", {
            slidesPerView: "auto",
            loop: true,
            autoplay: 5000,
            autoplayDisableOnInteraction: false,
        });
    }
    /* Testimonial Holder Advance Slider */
    /* Map Checkboxes functions Strat */
    if (jQuery('.map-checkboxes .swiper-container').length > 0) {
        new Swiper('.map-checkboxes .swiper-container', {
            spaceBetween: 15,
            nextButton: '.map-checkboxes .swiper-checkbox-next',
            prevButton: '.map-checkboxes .swiper-checkbox-prev',
            slidesPerView: 5,
            speed: 500,
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                998: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                767: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                540: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                380: {
                    slidesPerView: 1,
                    spaceBetween: 15
                }
            }
        });
    }
    /* Map Checkboxes functions End */
    /*Testimonail Slider Functions Start*/
    if (jQuery(".testimonial-slider .swiper-container").length != '') {
        var swiper = new Swiper('.testimonial-slider .swiper-container', {
            nextButton: '.testimonial-slider .swiper-button-next',
            prevButton: '.testimonial-slider .swiper-button-prev',
            slidesPerView: 'auto',
            autoplay: 2500,
            centeredSlides: true,
            paginationClickable: true,
            spaceBetween: 30,
            loop: true,
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 1,
                }
            }
        });
    }
    /*Testimonail Slider Functions End*/
    /* Map Checkboxes V2 functions Strat */
    if (jQuery('.map-checkboxes-v2 .swiper-container').length > 0) {
        new Swiper('.map-checkboxes-v2 .swiper-container', {
            spaceBetween: 15,
            nextButton: '.map-checkboxes-v2 .swiper-checkbox-next',
            prevButton: '.map-checkboxes-v2 .swiper-checkbox-prev',
            slidesPerView: 3,
            speed: 500,
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                998: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                767: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                540: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                380: {
                    slidesPerView: 1,
                    spaceBetween: 15
                }
            }
        });
    }
    /* Map Checkboxes V2 functions End */
    /* Property Grid Slider functions Strat */
    if (jQuery(".property-grid-slider.real-estate-property .swiper-container").length != "") {
        "use strict";
        var swiper = new Swiper(".property-grid-slider.real-estate-property .swiper-container", {
            slidesPerView: 4,
            slidesPerColumn: 1,
            loop: false,
            paginationClickable: true,
            grabCursor: false,
            autoplay: false,
            spaceBetween: 30,
            nextButton: ".property-grid-slider.real-estate-property .swiper-button-next",
            prevButton: ".property-grid-slider.real-estate-property .swiper-button-prev",
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 15
                }
            }
        });
    }
    /* Property Grid Slider functions End */
    /* Reviews Sortby Function Strat */
    jQuery('.reviews-sortby > li').on('click', function () {
        jQuery('.reviews-sortby > li').toggleClass('reviews-sortby-active');
        jQuery('.reviews-sortby > li').siblings();
        jQuery('.reviews-sortby > li').siblings().removeClass('reviews-sortby-active');
    });
    jQuery('.input-reviews > .radio-field label').on('click', function () {
        jQuery(this).parent().toggleClass('active');
        jQuery(this).parent().siblings();
        jQuery(this).parent().siblings().removeClass('active');
        /*replace inner Html*/
        var radio_field_active = jQuery(this).html();
        jQuery(".active-sort").html(radio_field_active);
        jQuery('.reviews-sortby > li').removeClass('reviews-sortby-active');
    });
    /* Reviews Sortby Function End */
    /* Datetime Picker Function Strat */
    if (jQuery(".cs-calendar-from input").length != "") {
        jQuery(".cs-calendar-from input").datetimepicker({
            timepicker: false,
            format: "Y/m/d",
            scrollInput: false
        });
    }
    if (jQuery(".cs-calendar-to input").length != "") {
        jQuery(".cs-calendar-to input").datetimepicker({
            timepicker: false,
            format: "Y/m/d",
            scrollInput: false
        });
    }
    /* Datetime Picker Function End */
    /* Daterange Picker functions Strat */
    if (jQuery('input[name="daterange"]').length != "") {
        jQuery('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    }
    /* Daterange Picker functions End */
    /* Spinner Btn functions Strat */
    if (jQuery('.spinner .btn:first-of-type').length != "") {
        (function ($) {
            $('.spinner .btn:first-of-type').on('click', function () {
                var input = $(this).parent().parent().children('input');
                input.val(parseInt(input.val(), 10) + 1);
            });
            $('.spinner .btn:last-of-type').on('click', function () {
                var input = $(this).parent().parent().children('input');
                var newvalue = parseInt(input.val(), 10) - 1;
                if (newvalue >= 0)
                    input.val(newvalue);
            });
        })(jQuery);
    }
    /* Spinner Btn functions End */

/* Show And Show Less Function Strat */
// Configure/customize these variables.
    if (jQuery(".more").length > 0) {
        var showChar = 200; // How many characters are shown by default
        var ellipsestext = "";
        var moretext = "Show more ...";
        var lesstext = "Show less";
        jQuery('.more').each(function () {
            var content = jQuery(this).html();
            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
                var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                jQuery(this).html(html);
            }
        });
        jQuery(".morelink").click(function () {
            if (jQuery(this).hasClass("less")) {
                jQuery(this).removeClass("less");
                jQuery(this).html(moretext);
            } else {
                jQuery(this).addClass("less");
                jQuery(this).html(lesstext);
            }
            jQuery(this).parent().prev().toggle();
            jQuery(this).prev().toggle();
            return false;
        });
    }
/* Show And Show Less Function End */

/* Compare-Sidebar Function Start */
if (jQuery('#compare-sidebar-panel').length > 0) {
    enquiry_sidebar_arrow();
}
function enquiry_sidebar_arrow() {
jQuery('.fixed-sidebar-panel.right, .compared').click(function (e) {
    e.preventDefault();
    if (jQuery('#compare-sidebar-panel').hasClass('sidebar-panel-open')) {
        jQuery('#compare-sidebar-panel').removeClass('sidebar-panel-open');
    } else {
        jQuery('#compare-sidebar-panel').addClass('sidebar-panel-open');
    }
});
}
/* Compare-Sidebar Function End */

});
/*==============================================
         Document Ready Functions End 
===============================================*/

/*==============================================
          Window Load Functions Strat
===============================================*/
/* Singlerangeslider Function Strat */
jQuery(window).load(function () {
    if (jQuery("#singlerangeslider").length > 0) {
        jQuery("#singlerangeslider").slider();
        jQuery("#singlerangeslider").on("slide", function (slideEvt) {
            jQuery("#singlerangesliderSliderVal").text(slideEvt.value);
        });
    }
    if (jQuery("#singlerangeslider-Property").length > 0) {
        jQuery("#singlerangeslider-Property").slider();
        jQuery("#singlerangeslider-Property").on("slide", function (slideEvt) {
            jQuery("#singlerangeslider-PropertySliderVal").text(slideEvt.value);
        });
    }
    if (jQuery("#singlerangeslider-deposit").length > 0) {
        jQuery("#singlerangeslider-deposit").slider();
        jQuery("#singlerangeslider-deposit").on("slide", function (slideEvt) {
            jQuery("#singlerangeslider-depositSliderVal").text(slideEvt.value);
        });
    }
    if (jQuery("#singlerangeslider-annual").length > 0) {
        jQuery("#singlerangeslider-annual").slider();
        jQuery("#singlerangeslider-annual").on("slide", function (slideEvt) {
            jQuery("#singlerangeslider-annualSliderVal").text(slideEvt.value);
        });
    }
    if (jQuery("#singlerangeslider-year").length > 0) {
        jQuery("#singlerangeslider-year").slider();
        jQuery("#singlerangeslider-year").on("slide", function (slideEvt) {
            jQuery("#singlerangeslider-yearSliderVal").text(slideEvt.value);
        });
    }
    /* Singlerangeslider Function End */
    /* Range Slider two Function Strat */
    if (jQuery("#rang-slider-multiple").length > 0) {
        jQuery("#rang-slider-multiple").slider({
            step: 1000,
            min: 1000,
            max: 50000,
            value: [1000, 50000],
        });
        jQuery("#rang-slider-multiple").on("slideStop", function () {
            var rang_slider_val = jQuery("#rang-slider-multiple").val();
        });
    }
    if (jQuery("#rang-slider-two").length > 0) {
        jQuery("#rang-slider-two").slider({
            step: 1000,
            min: 1000,
            max: 50000,
            value: [1000, 50000],
        });
        jQuery("#rang-slider-two").on("slideStop", function () {
            var rang_slider_val = jQuery("#rang-slider-two").val();
        });
    }
    /* Range Slider two Function End */
    /* Flex Slider Function Strat */
    if (jQuery("#slider").length > 0) {
        jQuery('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            drag: true,
            mousewheel: false,
            touch: true,
            smoothHeight: true,
            sync: "#carousel",
            start: function (slider) {
                jQuery("#slider").removeClass("cs-loading");
            }
        });
        jQuery('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            directionNav: false,
            itemWidth: 102.9,
            drag: true,
            mousewheel: false,
            touch: true,
            itemMargin: 5,
            asNavFor: "#slider",
            start: function (slider) {
                jQuery("#carousel").show();
            }
        });

        function sliderResize() {
            var slider2 = jQuery('#carousel').data("flexslider");
            if (jQuery(window).width() < 1024 && jQuery(window).width() > 767) {
                slider2.vars.itemWidth = 99;
                slider2.doMath();
            }
            if (jQuery(window).width() < 768 && jQuery(window).width() > 668) {
                slider2.vars.itemWidth = 101;
                slider2.doMath();
            }
            if (jQuery(window).width() < 668 && jQuery(window).width() > 500) {
                slider2.vars.itemWidth = 102;
                slider2.doMath();
            }
            if (jQuery(window).width() < 500 && jQuery(window).width() > 450) {
                slider2.vars.itemWidth = 109;
                slider2.doMath();
            }
            if (jQuery(window).width() < 450) {
                slider2.vars.itemWidth = 125;
                slider2.doMath();
            }
            if (jQuery(window).width() < 385 && jQuery(window).width() > 360) {
                slider2.vars.itemWidth = 104;
                slider2.doMath();
            }
            if (jQuery(window).width() < 360) {
                slider2.vars.itemWidth = 93;
                slider2.doMath();
            }
        }
        sliderResize();
        jQuery(window).bind("resize", function () {
            setTimeout(function () {
                var slider1 = jQuery('#slider').data("flexslider");
                slider1.resize();
            }, 1000);
            sliderResize()
        });
    }
    /* Flex Slider Function Strat */
    /* Property detail modal Function Strat */
    if (jQuery(".property-detail .enquire-holder .enquire-btn").length > 0) {
        jQuery(document).on("click", ".property-detail .enquire-holder .enquire-btn", function () {
            "use strict";
            jQuery("#enquiry-modal").find("form")[0].reset();
            jQuery("#arrange-modal").find("form")[0].reset();
            jQuery("#enquiry-modal .response-message").html("");
            jQuery("#arrange-modal .response-message").html("");
        });
    }
    /* Property detail modal Function End */
    /* Property detail modal Function Strat */
    if (jQuery(".pretty-photo-slider").length > 0) {
        jQuery(document).on("click", ".pretty-photo-slider", function () {
            "use strict";
            jQuery(".gallery-first-img").click();
        });
    }
    if (jQuery("a.property-video-btn[data-rel^='prettyPhoto").length > 0) {
        jQuery("a.property-video-btn[data-rel^='prettyPhoto']").prettyPhoto({
            animation_speed: "fast",
            slideshow: 10000,
            hideflash: true,
            autoplay: true,
            autoplay_slideshow: false
        });
    }
    /* Property detail modal Function Strat */
    /* Calendar holder toggle Function Strat */
    if (jQuery(".book-btn").length > 0) {
        jQuery(".book-btn").click(function () {
            // show hide paragraph on button click
            jQuery(".calendar-holder").toggle("slow", function () {
                // check paragraph once toggle effect is completed
            });
        });
    }
    /* Calendar holder toggle Function End */
    /* Addclass and Removeclass Function Strat */
    //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
    jQuery(".add-more").on("click", function () {
        jQuery(".invite-member").addClass("active");
    });
    //removes the "active" class to .popup and .invite-member when the "Close" button is clicked 
    jQuery(".cancel").on("click", function () {
        jQuery(".invite-member").removeClass("active");
    });

    //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
    jQuery(".wp-rem-radius-location").on("click", function () {
        jQuery(".select-popup").addClass("popup-open");
    });
    //removes the "active" class to .popup and .invite-member when the "Close" button is clicked 
    jQuery(".location-close-popup").on("click", function () {
        jQuery(".select-popup").removeClass("popup-open");
    });
    /* Addclass and Removeclass Function End */
    /* Modal Backdrop Function Strat */
    if (jQuery(".main-search .search-popup-btn").length > 0) {
        jQuery(".main-search .search-popup-btn").click(function () {
            setTimeout(function () {
                jQuery(".modal-backdrop").appendTo(".main-search.fancy");
            }, 4);
        });
    }
    if (jQuery(".filters-sidebar .email-alert-btn").length > 0) {
        jQuery(".filters-sidebar .email-alert-btn").click(function () {
            setTimeout(function () {
                jQuery(".modal-backdrop").appendTo(".filters-sidebar");
            }, 4);
        });
    }
    if (jQuery(".detail-nav-map .enquire-holder a").length > 0) {
        jQuery(".detail-nav-map .enquire-holder a").click(function () {
            setTimeout(function () {
                jQuery(".modal-backdrop").appendTo(".detail-nav");
            }, 4);
        });
    }
    if (jQuery(".detail-v5 .detail-nav ul li a").length > 0) {
        jQuery(".detail-v5 .detail-nav ul li a").click(function () {
            setTimeout(function () {
                jQuery(".modal-backdrop").appendTo(".detail-nav");
            }, 4);
        });
    }
    if (jQuery(".profile-info.boxed .submit-btn").length > 0) {
        jQuery(".profile-info.boxed .submit-btn").click(function () {
            setTimeout(function () {
                jQuery(".modal-backdrop").appendTo(".detail-nav");
            }, 4);
        });
    }
    /* Modal Backdrop Function End */

});
/*==============================================
    Window Load Functions End 
===============================================*/

/* Doughnut Chart Function Strat */
var randomScalingFactor = function () {
    return Math.round(Math.random() * 100);
};
var config = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
            ],
            backgroundColor: [
                '#5a2e8a',
                '#d64521',
                '#555555'
            ],
            label: 'Dataset 1'
        }],
        labels: [
            'Your price',
            'Your deposit',
            'Your interest'
        ]
    },
    options: {
        responsive: true,
        legend: {
            position: 'right',
        },
        title: {
            display: false,
            text: 'Chart.js Doughnut Chart'
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    }
};

if (jQuery("#chart-area").length > 0) {
    jQuery( function() {
        window.onload = function () {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myDoughnut = new Chart(ctx, config);
        };
    });
};

if (jQuery("randomizeData").length != '') {
    document.getElementById('randomizeData').addEventListener('click', function () {
        config.data.datasets.forEach(function (dataset) {
            dataset.data = dataset.data.map(function () {
                return randomScalingFactor();
            });
        });
        window.myDoughnut.update();
    });
}
if (jQuery("addDataset").length != '') {
    document.getElementById('addDataset').addEventListener('click', function () {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };
        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());
            var colorName = colorNames[index % colorNames.length];
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }
        config.data.datasets.push(newDataset);
        window.myDoughnut.update();
    });
    var colorNames = Object.keys(window.chartColors);
}
if (jQuery("addData").length != '') {
    document.getElementById('addData').addEventListener('click', function () {
        if (config.data.datasets.length > 0) {
            config.data.labels.push('data #' + config.data.labels.length);
            var colorName = colorNames[config.data.datasets[0].data.length % colorNames.length];
            var newColor = window.chartColors[colorName];
            config.data.datasets.forEach(function (dataset) {
                dataset.data.push(randomScalingFactor());
                dataset.backgroundColor.push(newColor);
            });
            window.myDoughnut.update();
        }
    });
}
if (jQuery("removeDataset").length != '') {
    document.getElementById('removeDataset').addEventListener('click', function () {
        config.data.datasets.splice(0, 1);
        window.myDoughnut.update();
    });
}
if (jQuery("removeData").length != '') {
    document.getElementById('removeData').addEventListener('click', function () {
        config.data.labels.splice(-1, 1); // remove the label first

        config.data.datasets.forEach(function (dataset) {
            dataset.data.pop();
            dataset.backgroundColor.pop();
        });
        window.myDoughnut.update();
    });
}
if (jQuery("changeCircleSize").length != '') {
    document.getElementById('changeCircleSize').addEventListener('click', function () {
        if (window.myDoughnut.options.circumference === Math.PI) {
            window.myDoughnut.options.circumference = 2 * Math.PI;
            window.myDoughnut.options.rotation = -Math.PI / 2;
        } else {
            window.myDoughnut.options.circumference = Math.PI;
            window.myDoughnut.options.rotation = -Math.PI;
        }
        window.myDoughnut.update();
    });
}
/* Doughnut Chart Function End */
/* Property detail modal Function Strat */
if (jQuery(".wp-rem-open-register-tab").length > 0) {
    jQuery(document).on("click", ".wp-rem-open-register-tab", function (e) {
        e.stopImmediatePropagation();
        jQuery(".wp-rem-open-register-button").click();
    });
}
if (jQuery(".wp-rem-open-signin-tab").length > 0) {
    jQuery(document).on("click", ".wp-rem-open-signin-tab", function (e) {
        e.stopImmediatePropagation();
        jQuery(".wp-rem-open-signin-button").click();
    });
}
if (jQuery(".property-detail .enquire-holder .enquire-btn").length > 0) {
    jQuery(document).on("click", ".property-detail .enquire-holder .enquire-btn", function () {
        "use strict";
        jQuery("#enquiry-modal").find("form")[0].reset();
        jQuery("#arrange-modal").find("form")[0].reset();
        jQuery("#enquiry-modal .response-message").html("");
        jQuery("#arrange-modal .response-message").html("");
    });
}
/* Property detail modal Function End */

/* Cell Number Hide Show Function Strat */
jQuery(document).on("click", ".ch-cnt-show-num", function () {
    var main_dvi = jQuery(this).parent(".sh-hde-cnt-num");
    var chnge_dvi = main_dvi.find(".ch-cntct-num");
    var valuer = main_dvi.data("onum");
    var decodedString = valuer; //encodePlain(valuer);
    if (chnge_dvi.html() == "xxxx") {
        chnge_dvi.html(decodedString);
        jQuery(this).html("Hide");
    } else {
        chnge_dvi.html("xxxx");
        jQuery(this).html("Show");
    }
});
/* Cell Number Hide Show Function End */