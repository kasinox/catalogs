/*--------DDsmoothmenu Initialization--------*/
ddsmoothmenu.init({
    mainmenuid: "menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
});
//Fade images
jQuery(document).ready(function () {
    jQuery("ul.social_logos li a").hover(function () {
        jQuery(this).stop().animate({
            opacity: "0.3"
        }, '500');
    },
            function () {
                jQuery(this).stop().animate({
                    opacity: "1"
                }, '500');
            });
});

//Slider Settings
jQuery(function () {
    jQuery('#slides').slides({
        preload: true,
        preloadImage: obj.template_url + '/images/loading.gif',
        play: 3000,
        pause: 2500,
        hoverPause: true,
    });
});
//Contact validate
jQuery(document).ready(function () {
    jQuery("#contactForm").validate();
});