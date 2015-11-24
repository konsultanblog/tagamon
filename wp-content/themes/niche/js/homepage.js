jQuery(document).ready(function () {
    jQuery("#our-blog-gallery").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 2,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        navigation: false
    });
    var owl = jQuery("#our-blog-gallery");
	owl.owlCarousel();
	// Custom Navigation Events
    jQuery(".next").click(function () {
        owl.trigger('owl.next');
    });
    jQuery(".prev").click(function () {
        owl.trigger('owl.prev');
    });
});
