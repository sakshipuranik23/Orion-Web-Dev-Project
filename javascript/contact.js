// ________navbar______________
    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

// ___________________________envolope__________________________________

$(document).ready(function(){
    $('.frame').click(function(){
        $('.top').addClass('open');
        $('.message').addClass('pull');
    })
});
