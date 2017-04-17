$(document).ready(function () {
    $('#close-nav, #open-nav' ).click(function () {
        $('.navbar-nav').slideToggle(300);
        $('#close-nav').toggleClass("remove-btn");
        $('#open-nav').toggleClass("remove-btn");
    });
});