<footer class="footer">
			<div class="container">
				<div class="footer__top">	
					<img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="">
					<div class="footer__item">
						<a class="footer__item-title" href="">О клинике</a>
						<ul>
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
					</div>
					<div class="footer__item">
						<a class="footer__item-title" href="http://front.nmedics.srv6.place-start.ru/?cat=4">Доктора</a>
						<a class="footer__item-title" href="http://front.nmedics.srv6.place-start.ru/?cat=2">Услуги и цены</a>						
					</div>
					<div class="footer__item">
						<p class="footer__item-title">Связаться с нами</p>
						<div class="footer__item-last">
							<svg width="13px" height="13px"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Ring-Phone"></use></svg>
							<a href="tel: +7 (3519) 58-30-30">+7 (3519) 58-30-30</a>
						</div>
						<div class="footer__item-last">
							<svg width="10px" height="14px"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Pointer"></use></svg>							
							<a href="https://www.google.com/maps/place/%D0%BF%D0%B5%D1%80%D0%B2%D0%BE%D0%BC%D0%B0%D0%B9%D1%81%D0%BA%D0%B0%D1%8F,+9,+%D0%BC%D0%B0%D0%B3%D0%BD%D0%B8%D1%82%D0%BE%D0%B3%D0%BE%D1%80%D1%81%D0%BA/@53.4320232,58.9823469,3a,75y,197.45h,90t/data=!3m4!1e1!3m2!1sqvez67vGSN_nVmwivh1orA!2e0!4m2!3m1!1s0x43d128b3404ec119:0x8d9e9b35e91bc09e?sa=X&ved=2ahUKEwjz4eOonI_xAhVCi8MKHVlWAb0QxB0wAHoECAcQAg">Магнитогорск, ул. Первомайская, <br> д. 9, помещ. 3</a>
						</div>
						<div class="footer__item-last">
							<svg width="13px" height="10px"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Mail"></use></svg>							
							<a href="mailto:info@nmedics.ru">info@nmedics.ru</a>
						</div>
						<div class="footer__item-last footer__item-logo">
							<a href="https://vk.com/neiromedics"><svg width="31px" height="31px"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Vk"></use></svg>														</a>
							<a href="https://www.instagram.com/nmedics/?igshid=164pedrilbkfx"><img src="<?php echo get_template_directory_uri(); ?>/image/Inst.png" alt="Инстаграм" title="Инстаграм"></a>
							<a href="https://www.facebook.com/%D0%9A%D0%BB%D0%B8%D0%BD%D0%B8%D0%BA%D0%B0-%D0%9D%D0%B5%D0%B8%CC%86%D1%80%D0%BE%D0%BC%D0%B5%D0%B4%D0%B8%D0%BA%D1%81-100327675393845/about/?ref=page_internal"><svg width="31px" height="31px"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#FaceBook"></use></svg></a>
						</div>
					</div>
				</div>				
			</div>
			<div class="footer__bot">
				<div class="container">
					<div class="footer__bot-left">
						<p>© 2020 ООО «Нейромедикс»</p>
						<a href="">Политика конфиденциальности</a>
					</div>
					<a href="https://place-start.ru/"><img src="<?php echo get_template_directory_uri(); ?>/image/PlaceStart.png" alt="PlaceStart" title="PlaceStart"></a>
				</div>				
			</div>
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>	
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
