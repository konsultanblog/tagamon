jQuery(document).ready(function () {
    jQuery(".go-top").click(function () {
        jQuery("html,body").animate({scrollTop: 0}, 1e3);
    });
    jQuery("#search-label").click(function () {
        jQuery(".search-bar").slideToggle("slow");
    });
    headeranim();
});
function headeranim() {
    if (jQuery(window).width() > 767) {
        jQuery("header").css({position: "fixed"});
        jQuery("header").next().css({"padding-top": jQuery("header").height()});
    }
    else {
        jQuery("header").css({"position": 'relative'});
        jQuery("header").next().css({"padding-top": '0'});
    }
}
jQuery(window).resize(function () {
    headeranim();
});



