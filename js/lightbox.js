jQuery(document).ready(function ($) {
    $("area[data-rel^='prettyPhoto']").prettyPhoto();
    $("a[data-rel^='prettyPhoto']").prettyPhoto();
    $(".light-box:first a[data-rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', slideshow: 3000, autoplay_slideshow: true});
    $(".light-box:gt(0) a[data-rel^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: true});

    $("#custom_content a[data-rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function () {
            initialize();
        }
    });

    $("#custom_content a[data-rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function () {
            _bsap.exec();
        }
    });
});
