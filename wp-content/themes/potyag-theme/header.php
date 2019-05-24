<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<title>Potyag-Bar</title>

	<link type="text/css" rel="stylesheet" href="/wp-content/themes/potyag-theme/assets/css/animate.css">
	<link type="text/css" rel="stylesheet" href="/wp-content/themes/potyag-theme/assets/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="/wp-content/themes/potyag-theme/assets/css/jquery.fancybox.css">
	<link  type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="/wp-content/themes/potyag-theme/assets/css/style.css"/>




	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<?php wp_head(); ?>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

<div id="pageBackground" class="background-video" data-load-rules="true" data-day-rule-part="night">
	<div class="overlay"></div>
	<video class="video" style="opacity: 1;" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
		<source src="/wp-content/themes/potyag-theme/assets/img/dum.mp4">
		<img src="/binaries/content/gallery/greygoose/homepage/homepage-night--background.jpg" alt="">
	</video>
	<div class="image" style="display:none;"></div>
</div>

<div class="wrapper">
	<header>
		<div class="fix-menu">
			<div class="logo-phone">
				<div class="container">
					<div class="row">
						<div class="content col-md-12">
							<div class="logo-wrapper">
								<img src="/wp-content/themes/potyag-theme/assets/img/logo.jpg" alt="" class="logo">
							</div>
							
							<div class="phone-wrapper">
								<a href="tel:+380636219018" class="phone">+38 097 471 71 10</a>
								<a href="#" class="callback" data-toggle="modal" data-target="#quest-modal">Забронювати</a>
							</div>

							<a href="#" class="mob-menu-btn" id="menu-btn">
								<div></div>
								<div></div>
								<div></div>
							</a>
							<nav class="mob-menu" id="mob-menu">
								<ul>
									<li><a href="#main-banner" class="scroll-to">Головна</a></li>
									<li><a href="#about-us" class="scroll-to">Про нас</a></li>
									<li><a href="#gallery" class="scroll-to">Галерея</a></li>
									<li><a href="#testimonials" class="scroll-to">Відгуки</a></li>
									<li><a href="#address-map" class="scroll-to">Контакти</a></li>
									<li><a href="menu">Меню</a></li>
								</ul>
								<div class="fix-content">
									<div class="mob-phone-wrapper">
										<div class="inner">

											<div>
												<p>График работы: Пн-Чт (16:00 - 00:00) Пт-Вс (16:00 - 02:00)</p>
											</div>
											<div>
												<a href="tel:+380636219018" class="phone">+38 097 471 71 10</a>
												<a href="#" class="callback" data-toggle="modal" data-target="#quest-modal">Забронювати</a>
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
									<li><a href="#main-banner" class="scroll-to">Головна</a></li>
									<li><a href="#about-us" class="scroll-to">Про нас</a></li>
									<li><a href="#gallery" class="scroll-to">Галерея</a></li>
									<li><a href="#testimonials" class="scroll-to">Відгуки</a></li>
									<li><a href="#address-map" class="scroll-to">Контакти</a></li>
									<li><a href="menu">Меню</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
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
									<h2>Онлайн бронирование стола</h2>
									<h2>Скоро будет доступно</h2>
<!--									<h2 class="block-title">Потрібна консультація?</h2>-->
<!--									<p class="contact-us__form-text">Надішліть інформацію про вас і ми зв’яжемось з вами</p>-->
<!--									<form id="contact-us__form">-->
<!--										<div class="form-col">-->
<!--											<div class="form-group inp-name has-feedback">-->
<!--												<label for="q-name">Ім’я</label>-->
<!--												<input type="text" class="form-control" name="name" id="q-name" placeholder="Введіть ваше ім’я" data-error="Введіть своє ім’я" required>-->
<!--											</div>-->
<!--											<div class="form-group inp-phone has-feedback">-->
<!--												<label for="q-tel">Телефон</label>-->
<!--												<input type="tel" class="form-control required-field" name="phone" id="q-tel" placeholder="Введіть ваш телефон" data-error="Введіть свій телефон" required>-->
<!--												<div class="help-block with-errors"></div>-->
<!--											</div>-->
<!--											<div class="form-group inp-phone has-feedback">-->
<!--												<label for="q-tel">Время</label>-->
<!--												<input type="time" class="form-control required-field" name="time" id="q-tel" placeholder="На яке время забронювати?"  required>-->
<!--												<div class="help-block with-errors"></div>-->
<!--											</div>-->
<!--											<button type="submit" class="button send-btn">Відправити</button>-->
<!--											<div class="alert-form" style="display: none">Заповніть всі поля!-->
<!--											</div>-->
<!--										</div>-->
<!--										<div class="form-col">-->
<!--											<div class="form-group inp-phone has-feedback">-->
<!--												<label for="q-company">Прізвище</label>-->
<!--												<input type="text" class="form-control" name="company" id="q-company" placeholder="Вкажіть ваше прізвище" data-error="Введіть прізвище" required>-->
<!--											</div>-->
<!---->
<!--											<div class="form-group inp-email has-feedback">-->
<!--												<label for="q-email">Email</label>-->
<!--												<input type="email" class="form-control required-field" name="email" id="q-email" placeholder="Введіть ваш email" data-error="Введіть свій email" required>-->
<!--												<div class="help-block with-errors"></div>-->
<!--											</div>-->
<!--											<button type="submit" class="button send-btn send-mobile">Відправити</button>-->
<!---->
<!--										</div>-->
<!--										<input type="hidden" name="lid-name" value="Вопрос с сайта">-->
<!--									</form>-->
<!--									<div id="contat-us__success-message" class="notification" style="display: none">-->
<!--										Дякуємо!<br>-->
<!--										Наш менеджер незабаром зв'яжеться з Вами.<br>-->
<!--										Гарного дня!-->
<!--									</div>-->
<!--									<div class="disclaimer-form">-->
<!--										<p>Відправляючи заявку на консультацію, ви даєте згоду на обробку ваших персональних даних.-->
<!--										</p>-->
<!---->
<!--									</div-->
<!--								</div>-->

							</div>
						</div>
					</section>
					<button type="button" class="close close-modal" data-dismiss="modal">&times;</button>
				</div>

			</div>
		</div>
	</div>
	