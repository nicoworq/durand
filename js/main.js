$(document).ready(function () {

    $(window).scroll(function () {
        var scrollTop = $(document).scrollTop();
        var navBar = $('.navbar');
        if (scrollTop >= 200) {
            navBar.addClass('scrolled');
        } else {
            navBar.removeClass('scrolled');
        }
    });

});


