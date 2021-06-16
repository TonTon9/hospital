<!DOCTYPE html>
<html>
<head>	
	<?php
		ini_set('display_errors', 0);
		ini_set('display_startup_errors', 0);
		error_reporting(E_ALL);
	?>
	<title><?php the_title(); ?></title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/404.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/cart.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/Doctors.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/text.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/news.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/prices.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/cost.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/documents.css">
	<meta name="viewport" content="width=device-width">
	<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/iLogo.ico" type="image/x-icon">
</head>
<body>
	<div class="wrapper">		
		<div class="popup">
			<div class="modal__body">
				<span class="crest"></span>
				<p class="modal__title">Хотите записаться на приeм?</p>
				<p class="modal__text">Оставьте  номер телефона и наш администратор свяжется с вами в ближайшее время</p>
				<form action="" method="">
					<input id="Name" type="text">
					<label for="Name">Имя</label>
					<input id="Phone" type="text">
					<label for="Phone">Телефон</label>
					<input type="submit">
					<p>Нажимая вы соглашаетесь на <a href="">обработку персональных данных</a></p>
				</form>
			</div>
		</div>
		<div class="header">
			<div class="header__bg"></div>
			<div class="container">
				<div class="header__body">
					<div class="menu__bur">						
					</div>
					<div class="header__logo">
						<a href="http://front.nmedics.srv6.place-start.ru"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" title="Логотип Нейромедик" alt="Логотип Нейромедик"></a>						
					</div>
						<a class="phone__media" href="tel: 7 (3519) 58-30-30 "><svg  width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Phone"></use></svg></a>
					<div class="header__info">
						<nav class="header__nav">
							<ul>
								<li class="header__nav-item header__furstsub"><a href="http://front.nmedics.srv6.place-start.ru/?page_id=69">О клинике</a>
									<ul class="header__sub">
										<li><a href="http://front.nmedics.srv6.place-start.ru/?page_id=69">Публичные документы</a></li>
										<?php
											// указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
											$query = new WP_Query( 'cat=2&nopaging=1' ); 
											if( $query->have_posts() ){
												while( $query->have_posts() ){
													$query->the_post();
													?>
													<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
													<?php
												}
												wp_reset_postdata(); // сбрасываем переменную $post
											} 
											else
												echo 'Записей нет.';
											?>
									</ul>
								</li>
								<li class="header__nav-item"><a href="http://front.nmedics.srv6.place-start.ru/?cat=4">Доктора</a></li>
								<li class="header__nav-item"><a href="http://front.nmedics.srv6.place-start.ru/?cat=2">Услуги и цены</a></li>
								<li class="header__nav-item"><a href="http://front.nmedics.srv6.place-start.ru/?cat=5">Новости и акции</a></li>
								<li class="header__nav-item"><a href="http://front.nmedics.srv6.place-start.ru/?page_id=9">Контакты</a></li>							
							</ul>
						</nav>
						<div class="header__address">
							<div class="header__adress-adress">
								<svg width="10" height="14"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Pointer"></use></svg>							
								<a href="#">Магнитогорск, ул. Первомайская, д. 9, 	помещ. 3</a>
							</div>
							<div class="header__adress-timer">
								<h3>Ежедневно с 8:00 до 20:00</h3>
							</div>							
						</div>
						<div class="header__button">
							<button id="call" type="button" class="btn btn-warning shadow-none">Перезвонить мне</button>
						</div>
						<div class="number">
							<a href="tel: 7 (3519) 58-30-30 " mb-checked="1" data-tip="">+7 (3519) 58-30-30</a>
						</div>
						<div class="header__address header__address-media">
							<div class="header__adress-adress">								
								<a href="#">Магнитогорск, ул. Первомайская, д. 9, 	помещ. 3</a>
							</div>
							<div class="header__adress-timer">
								<h3>Ежедневно с 8:00 до 20:00</h3>
							</div>
							<button  type="button" class="btn btn-warning sale__button sale__button-media shadow-none">
								<h3>Заказать консультацию</h3>								
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	