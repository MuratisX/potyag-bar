$(function() {

    $(document).on('click', '.send', function() {
    jQuery.ajax({
        url: 'https://potyagtest.joinposter.com/api/v2/auth/access_token',
        headers: {'Access-Control-Allow-Origin': 'https://kaznikolas.joinposter.com/api/v2/auth/access_token', 'Access-Control-Allow-Origin': '*' },
        type: 'POST',
      
        data: {
        'application_id': 473,
            'application_secret': '32ca41523ac015ddb113abc7d4db4203',
            'grant_type': 'authorization_code',
            'redirect_uri': 'https://habr.com/ru/post/175375/',
            'code': '3e8462c489f1589f7f6a2d1550257850',
    }
    }).done(function(data){
        var response = jQuery.parseJSON(data)
        if (response.success) {
            console.log(response.success)
        } else {
            jQuery('<p/>', {
                'html': response.error,
                'class': 'contact-us__error-msg'
            }).appendTo('.fix-menu');
        }
    });
    });



    $(document).on('click', '.up-btn', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    //SCROLL MENU

    $('.item-tobacco').mouseenter(function(){
        $(this).find('.disclaimer').show(200);
    });
    $('.item-tobacco').mouseleave(function(){
        $(this).find('.disclaimer').hide(300);
    });



    var wow = new WOW(
        {
            boxClass:     'wow',
            animateClass: 'animated',
            offset:       0,
            mobile:       true,
            live:         true,
            scrollContainer: null,
        }
    );
    wow.init();

   $(document).on('click', '.scroll-to', function (e) {
       e.preventDefault();

       var href = $(this).attr('href');

       $('html, body').animate({
           scrollTop: $(href).offset().top
       }, 1000);

   });


    jQuery('.gallery-items').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        appendArrows: false,
        slidesToShow: 2,
        prevArrow: $('.arrow__prev'),
        nextArrow: $('.arrow__next'),
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]

    });

    jQuery('.menu-items').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        appendArrows: false,
        slidesToShow: 1,
        prevArrow: $('.arrow__prev'),
        nextArrow: $('.arrow__next'),

    });

    jQuery('.testimonials-carousel').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        appendArrows: false,
        slidesToShow: 1,
        dots: true,


    });


    


    $(window).scroll(function () {
        if ($(this).scrollTop() >=400) {
            $(".info-container").slideUp();
        } else if (($(this).scrollTop() <=100)){
            $(".info-container").slideDown();
        }
    });

    setTimeout(function() {
        $('.cookie-container').slideDown(500);
    }, 3000);

    $('.cookie-container .button').on('click', function(e) {
        e.preventDefault();

        $('.cookie-container').slideUp(400);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() >=100) {
            $(".go-top").fadeIn();
        } else{
            $(".go-top").fadeOut();
        }
    });

    $(document).on('click', '.close-modal', function() {
        $('#quest-modal').hide();
    });

    // CASTOME SLIDER ARROWS




   //


    $('[data-fancybox]').fancybox({
        protect: true
    });


    
    $('.banner').delay(4000).show('fade');
    $('.js-onload').delay(4000).show('down');
    //

    $('form').validator();

    // DTA VALUE REPLACE






    //





    //






    // PHONE MASK

    $("input[type=tel]").mask("+38(999) 999-99-99");


    //

    $('#menu-btn').on('click', function (e) {
        e.preventDefault();

        $(this).toggleClass('active-menu');
        $('#mob-menu').toggleClass('active-mob-menu');
    });

    $('#mob-menu .scroll-to').on('click', function () {
        $('#menu-btn').toggleClass('active-menu');
        $('#mob-menu').toggleClass('active-mob-menu');
    });

    //

    $('#open-more-speakers').on('click', function (e) {
       e.preventDefault();

       $(this).fadeOut(400);
       $('.more-speakers').slideDown(400);
       $('.more-speakers').css({'display':'flex'});
    });

    //

    $('#btn-program-open').on('click', function (e) {
        e.preventDefault();

        $(this).toggleClass('active-program');
    });

    //

    $('.flow-open').on('click', function (e) {
       e.preventDefault();

        $(this).toggleClass('active-flow');
    });

    $(".modal").on("show.bs.modal", function () {
        $(this).css('display','flex');
    });

    //



    //

    $('#go-pay-form').submit( function () {

        var myPackeg = $('#go-pay-form').find('input[name=package]').val();
        var myEmail = $('#go-pay-form').find('input[name=email]').val();
        var myPhone = $('#go-pay-form').find('input[name=phone]').val();
        var myName = $('#go-pay-form').find('input[name=name]').val();

        localStorage.setItem('myKeyValue4', myPackeg);
        localStorage.setItem('myKeyValue3', myEmail);
        localStorage.setItem('myKeyValue2', myPhone);
        localStorage.setItem('myKeyValue1', myName);

        $('#pay-ok').find('input[name=package]').val(myPackeg);
        $('#pay-ok').find('input[name=email]').val(myEmail);
        $('#pay-ok').find('input[name=phone]').val(myPhone);
        $('#pay-ok').find('input[name=name]').val(myName);

        var th = $(this);
        $.ajax({
            type: "POST",
            url: "send-2.php", //Change
            data: th.serialize()
        });

    });

    var localValue1 = localStorage.getItem('myKeyValue1');
    var localValue2 = localStorage.getItem('myKeyValue2');
    var localValue3 = localStorage.getItem('myKeyValue3');
    var localValue4 = localStorage.getItem('myKeyValue4');

    $('#pay-ok').find('input[name=package]').val(localValue4);
    $('#pay-ok').find('input[name=email]').val(localValue3);
    $('#pay-ok').find('input[name=phone]').val(localValue2);
    $('#pay-ok').find('input[name=name]').val(localValue1);

    /*function setcookie(a,b,c) {
        if(c){
            var d = new Date();
                d.setTime(d.getTime()+c);
        }
        if(a && b) document.cookie = a+'='+ encodeURIComponent(b) +(c ? '; expires='+d.toUTCString() : '');else return false;
    }

    function getcookie(a) {
        var b = new RegExp(a+'=([^;]){1,}');
        var c = b.exec(document.cookie);
        if(c) c = c[0].split('=');else return false;return c[1] ? decodeURIComponent(c[1]) : false;
    }

    soundButton.click(function() {
        if(!sound) sound = 1;
        if (sound == 1) {
            setcookie("sound","1",30*3600*24*30*1000);
            document.getElementById("sound").style.backgroundPosition = "0px";
            audioLink.play();
        } else if (sound == 0) {
            setcookie("sound","0",30*3600*24*30*1000)
            document.getElementById("sound").style.backgroundPosition = "-40px";
        }
    });

    $(function () {
        if (getcookie("sound") == "1") audioLink.play()
    });*/



});
