
<!DOCTYPE html>
<html lang="ua">
  <head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="/img/og.png" />

    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">


      <meta name="msapplication-TileColor" content="#000000">

      <meta name="theme-color" content="#000000">

    <title>Potyag-Bar</title>

      <link rel="stylesheet" href="/css/animate.css">
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/jquery.fancybox.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="css/style.css"/>

      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','<?php echo config("GTM_KEY") ?>');</script>
      <!-- End Google Tag Manager -->
  </head>
  <body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo config("GTM_KEY") ?>"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="loader" id="loader"></div>

        <header>
            <div class="fix-menu">
                
                <div class="logo-phone">
                    <div class="container">
                        <div class="row">
                            <div class="content col-md-12">
                                <div class="logo-wrapper">
                                    <img src="/img/logo.jpg" alt="" class="logo">
                                </div>
                                <div class="info-work">
                                    <p>Пн-Чт (16:00 - 00:00) <br> Пт-Вс (16:00 - 02:00)</p>
                                    <p>Киев. ул.Першотравнева 27</p>
                                </div>

                                <div class="phone-wrapper">
                                    <a href="tel:+380636219018" class="phone">+38 097 471 71 10</a>
                                    <a href="#" class="callback" data-toggle="modal" data-target="#quest-modal">Замовити стіл</a>
                                </div>

                                <a href="#" class="mob-menu-btn" id="menu-btn">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </a>
                                <nav class="mob-menu" id="mob-menu">
                                    <ul>
                                        <li><a href="#set-services" class="scroll-to">Послуги</a></li>
                                        <li><a href="#our-team" class="scroll-to">Команда</a></li>
                                        <li><a href="#address-map" class="scroll-to">Контакти</a></li>
                                    </ul>
                                    <div class="fix-content">
                                        <div class="mob-phone-wrapper">
                                            <div class="inner">
                                                <img src="/img/phone-icon.svg" alt="">
                                                <div>
                                                    <p>Розклад роботы: Пн-Чт (16:00 - 00:00) Пт-Вс (16:00 - 02:00)</p>
                                                </div>
                                                <div>
                                                    <a href="tel:+380636219018" class="phone">+38 097 471 71 10</a>
                                                    <a href="#" class="callback" data-toggle="modal" data-target="#quest-modal">Замовити стіл</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="container">
                        <div class="row">
                            <div class="content col-md-12">
                                <div class="menu">
                                    <ul>
                                        <li><a href="/" class="scroll-to">Головна</a></li>
                                        <li><a href="#about-us" class="scroll-to">Про нас</a></li>
                                        <li><a href="#our-tobacco" class="scroll-to">Галерея</a></li>
                                        <li><a href="#our-tobacco" class="scroll-to">Наш табак</a></li>
                                        <li><a href="#address-map" class="scroll-to">Відгуки</a></li>
                                        <li><a href="#address-map" class="scroll-to">Контакти</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="header-content">
                <video id="myVideo" loop="" autoplay="" preload  width="100%" height="100%" >
                    <source src="/img/dum.mp4" type="video/mp4" codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
<!--                <div class="img-overlay"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="content content-text col-md-12">
                            <div class="banner-buttons">
                                <a href="#address-map" class="button scroll-to">Контакти</a>
                                <a href="/menu" class="button">Меню</a>
                            </div>

<!--                            <img src="/img/header-mob-pic.png" alt="" class="mob-pic">-->
<!--                            <h1>Кальян-бар <br> "Потяг"</h1>-->
                            <img src="/img/banner.png" alt="banner" class="banner">

                            <a href="#" class="button js-onload" data-toggle="modal" data-target="#quest-modal" style="display: none">Замовити стіл</a>
<!--                            <img src="/img/header-pic.png" alt="" class="pic">-->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="modal fade" id="quest-modal" role="dialog">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">


                        <section class="questions">
                            <div class="container">
                                <div class="row">
                                    <div class="content col-md-12">
                                        <h2 class="block-title">Потрібна консультація?</h2>
                                        <p class="contact-us__form-text">Надішліть інформацію про вас і ми зв’яжемось з вами</p>
                                        <form id="contact-us__form">
                                            <div class="form-col">
                                                <div class="form-group inp-name has-feedback">
                                                    <label for="q-name">Ім’я</label>
                                                    <input type="text" class="form-control" name="name" id="q-name" placeholder="Введіть ваше ім’я" data-error="Введіть своє ім’я" required>
                                                </div>
                                                <div class="form-group inp-phone has-feedback">
                                                    <label for="q-tel">Телефон</label>
                                                    <input type="tel" class="form-control required-field" name="phone" id="q-tel" placeholder="Введіть ваш телефон" data-error="Введіть свій телефон" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <button type="submit" class="button send-btn">Відправити</button>
                                                <div class="alert-form" style="display: none">Заповніть всі поля!
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <div class="form-group inp-phone has-feedback">
                                                    <label for="q-company">Компанія</label>
                                                    <input type="text" class="form-control" name="company" id="q-company" placeholder="Вкажіть назву компанії" data-error="Введіть назву компанії" required>
                                                </div>

                                                <div class="form-group inp-email has-feedback">
                                                    <label for="q-email">Email</label>
                                                    <input type="email" class="form-control required-field" name="email" id="q-email" placeholder="Введіть ваш email" data-error="Введіть свій email" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <button type="submit" class="button send-btn send-mobile">Відправити</button>

                                            </div>
                                            <input type="hidden" name="lid-name" value="Вопрос с сайта">
                                        </form>
                                        <div id="contat-us__success-message" class="notification" style="display: none">
                                            Дякуємо!<br>
                                            Наш менеджер незабаром зв'яжеться з Вами.<br>
                                            Гарного дня!
                                        </div>
                                        <div class="disclaimer-form">
                                            <p>Відправляючи заявку на консультацію, ви даєте згоду на обробку ваших персональних даних.
                                            </p>
                                          
                                        </div>
                                        <img src="/img/question-pic.png" alt="" class="pic">
                                    </div>

                                </div>
                            </div>
                        </section>
                        <button type="button" class="close close-modal" data-dismiss="modal">&times;</button>
                    </div>

                </div>
            </div>
        </div>
        <?php include_once 'components/all-conditions.php'?>

        <?php include_once 'components/about-us.php'?>
        <?php include_once 'components/gallery.php'?>
        <?php include_once 'components/main-topics.php'?>
        <?php include_once 'components/our-tobacco.php'?>
        <?php include_once 'components/testimonials.php'?>


        <?php include_once 'components/address-map.php'?>
        <?php include_once 'components/pre-footer.php'?>


        
    </div>



    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 7]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo config('GOOGLE_MAP_API_KEY')?>"></script> <!--&callback=initMap -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <script src="/js/jquery-3.2.1.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>

    <script src="/js/validator.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
<!--    <script src="/js/youtube.js"></script>-->
    <script src="/js/wow.min.js"></script>
    <script src="/js/map.js"></script>

    <script src="/js/js.js"></script>
    
  </body>
</html>
