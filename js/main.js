$(function() {
    'use strict';

    $(".profile-account-two ul li").click(function (ee){
        // ee.preventDefault();
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('.owl-footer-adjust .owl-carousel').owlCarousel({
        rtl:true,
        // loop:true,
        margin:10,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
    $('.posts .owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        margin:50,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });

    $('.sayings .owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        margin:50,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    
    $('.sliding .owl-carousel').owlCarousel({
        margin:10,
        nav:true,
        rtl:true,
        loop: true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('#smartwizard').smartWizard({
        lang: { 
                next: 'التالى',
                previous: 'السابق'
            },
        transitionSpeed: '1000',
        transitionEffect: 'fade',
        enableAnchorOnDoneStep: true  
    });

    

    $('.sliding .owl-nav .owl-prev, .sliding .owl-nav .owl-next').empty();

    // $('.grid').isotope({
    //     itemSelector: '.grid-item',
    //     percentPosition: true,
    //     masonry: {
    //         columnWidth: '.grid-item'
    //     }
    // });
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: '.grid-item',
      });


    //     var elem = document.querySelector('.grid');
    //     var msnry = new Masonry( elem, {
    //     // options
    //     itemSelector: '.grid-item',
    //     columnWidth: 71,
    //     cols: 4,
    //     resize: false
    //     });

      
      $(".progress-bar1").loading();

      CKEDITOR.replace( 'editor' );

      //menu



});



$('.hhhhh').click(function() {
    var page = $(this).attr('data');
    $('#ssaaaa').load(page+'.php');
});

$(document).ready(function(){
    $('.main .op').click(function(){
        $('.menu2').css({"width":"70%",})
        $('.main').css({"right":"70%",})
        $(this).toggle();
        $('.main span').toggle();
 
    });
    $('.menu2 .clo').click(function(){
        $(this).parent().css({"width":"0",})
        $('.main').css({"right":"0",})
        $('.main .op').toggle();
        $('.main span').toggle();
    });
        $('.opop').click(function(){
        $('.men').slideToggle();
    });
 
 });