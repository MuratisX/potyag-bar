jQuery(function() {

    jQuery(document).on('click', '.send', function() {
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



    jQuery(document).on('click', '.up-btn', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    //SCROLL MENU

    jQuery('.item-tobacco').mouseenter(function(){
        jQuery(this).find('.disclaimer').show(200);
    });
    jQuery('.item-tobacco').mouseleave(function(){
        jQuery(this).find('.disclaimer').hide(300);
    });






    jQuery('.gallery-items').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        appendArrows: false,
        slidesToShow: 2,
        prevArrow: jQuery('.arrow__prev'),
        nextArrow: jQuery('.arrow__next'),
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
        prevArrow: jQuery('.arrow__prev'),
        nextArrow: jQuery('.arrow__next'),

    });

    jQuery('.testimonials-carousel').slick({
        autoplay: true,
        autoplaySpeed: 8000,
        appendArrows: false,
        slidesToShow: 1,
        dots: true,


    });

    // jQuery('#sbi_images').slick({
    //     autoplay: true,
    //     autoplaySpeed: 8000,
    //     appendArrows: false,
    //     slidesToShow: 1,
    //     dots: true,
    //
    //
    // });





    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() >=400) {
            jQuery(".info-container").slideUp();
        } else if ((jQuery(this).scrollTop() <=100)){
            jQuery(".info-container").slideDown();
        }
    });

    jQuery(document).on('click', '.close-modal', function() {
        jQuery('#quest-modal').hide();
    });

    // CASTOME SLIDER ARROWS




   //
   //  jQuery('#carouselExampleIndicators').carousel({
   //      interval: 2000
   //  })

    jQuery('[data-fancybox]').fancybox({
        protect: true
    });



    jQuery("input[type=tel]").mask("+38(999) 999-99-99");


    //

    jQuery('#menu-btn').on('click', function (e) {
        e.preventDefault();

        jQuery(this).toggleClass('active-menu');
        jQuery('#mob-menu').toggleClass('active-mob-menu');
    });

    jQuery('#mob-menu .scroll-to').on('click', function () {
        jQuery('#menu-btn').toggleClass('active-menu');
        jQuery('#mob-menu').toggleClass('active-mob-menu');
    });

    //

    jQuery('#open-more-speakers').on('click', function (e) {
       e.preventDefault();

        jQuery(this).fadeOut(400);
        jQuery('.more-speakers').slideDown(400);
        jQuery('.more-speakers').css({'display':'flex'});
    });

    //

    jQuery('#btn-program-open').on('click', function (e) {
        e.preventDefault();

        jQuery(this).toggleClass('active-program');
    });

    //

    jQuery('.flow-open').on('click', function (e) {
       e.preventDefault();

        jQuery(this).toggleClass('active-flow');
    });

    jQuery(".modal").on("show.bs.modal", function () {
        jQuery(this).css('display','flex');
    });

    //



    //

    jQuery('#go-pay-form').submit( function () {

        var myPackeg = jQuery('#go-pay-form').find('input[name=package]').val();
        var myEmail = jQuery('#go-pay-form').find('input[name=email]').val();
        var myPhone = jQuery('#go-pay-form').find('input[name=phone]').val();
        var myName = jQuery('#go-pay-form').find('input[name=name]').val();

        localStorage.setItem('myKeyValue4', myPackeg);
        localStorage.setItem('myKeyValue3', myEmail);
        localStorage.setItem('myKeyValue2', myPhone);
        localStorage.setItem('myKeyValue1', myName);

        jQuery('#pay-ok').find('input[name=package]').val(myPackeg);
        jQuery('#pay-ok').find('input[name=email]').val(myEmail);
        jQuery('#pay-ok').find('input[name=phone]').val(myPhone);
        jQuery('#pay-ok').find('input[name=name]').val(myName);

        var th = $(this);
        jQuery.ajax({
            type: "POST",
            url: "send-2.php", //Change
            data: th.serialize()
        });

    });

    var localValue1 = localStorage.getItem('myKeyValue1');
    var localValue2 = localStorage.getItem('myKeyValue2');
    var localValue3 = localStorage.getItem('myKeyValue3');
    var localValue4 = localStorage.getItem('myKeyValue4');

    jQuery('#pay-ok').find('input[name=package]').val(localValue4);
    jQuery('#pay-ok').find('input[name=email]').val(localValue3);
    jQuery('#pay-ok').find('input[name=phone]').val(localValue2);
    jQuery('#pay-ok').find('input[name=name]').val(localValue1);




});
