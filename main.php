<section class="sale">
			<div class="container">
				<div class="sale__body">
					<h1>30% скидка <br> за консультацию </h1>
					<h3>С 1 сентября скидка на профосмотр <br>для пенсионеров и школьников</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/image/Girl.png" alt="Врач" title="Врач">
					<svg class="sale__back-child" width="59" height="36"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Light"></use></svg>						
					<button id="call" type="button" class="btn btn-warning sale__button shadow-none">
						<h3>Заказать консультацию</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/image/Girl.png" alt="Врач" title="Врач">
						<svg class="sale__back-child" width="59" height="36"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Light"></use></svg>						
					</button>
				</div>				
			</div>
		</section>	
		<section class="services">
			<div class="container">
				<div class="services__body">
					<a href="http://front.nmedics.srv6.place-start.ru/?p=173">
						<div class="services__item">						
							<h3>Акушерство <br> и гинекология</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/GridDefault.png" alt="">
							<img class="services__item-hover" src="<?php echo get_template_directory_uri(); ?>/image/Services1.png" alt="">
						</div>		
					</a>
					<a href="http://front.nmedics.srv6.place-start.ru/?p=14">
						<div class="services__item">
							<h3>Гастроэнтерология</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/Grid.png" alt="">
							<img class="services__item-hover" src="<?php echo get_template_directory_uri(); ?>/image/Services2.png" alt="">
						</div>
					</a>
					<a href="http://front.nmedics.srv6.place-start.ru/?p=135">
						<div class="services__item">
							<h3>Дерматология</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/Grid2.png" alt="">
							<img class="services__item-hover" src="<?php echo get_template_directory_uri(); ?>/image/Services3.png" alt="">
						</div>
					</a>
					<a href="http://front.nmedics.srv6.place-start.ru/?p=137">
						<div class="services__item">
							<h3>Кардиология</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/Grid3.png" alt="">
							<img class="services__item-hover" src="<?php echo get_template_directory_uri(); ?>/image/Services4.png" alt="">
						</div>
					</a>
					<a href="http://front.nmedics.srv6.place-start.ru/?p=145">
						<div class="services__item">
							<h3>Неврология</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/GridDefault.png" alt="">
							<img class="services__item-hover" src="<?php echo get_template_directory_uri(); ?>/image/Services5.png" alt="">
						</div>
					</a>
					<a href="http://front.nmedics.srv6.place-start.ru/?p=14">
						<div class="services__item">
							<h3>Нейрохирургия</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/Grid4.png" alt="">
							<img class="services__item-hover" src="<?php echo get_template_directory_uri(); ?>/image/Services6.png" alt="">
						</div>	
					</a>
					<a href="http://front.nmedics.srv6.place-start.ru/?p=149">
						<div class="services__item">
							<h3>Онкология</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/Grid5.png" alt="">
							<img class="services__item-hover" src="<?php echo get_template_directory_uri(); ?>/image/Services7.png" alt="">
						</div>
					</a>
					<a href="http://front.nmedics.srv6.place-start.ru/?cat=2">
						<div class="services__item services__item__last">
							<h3>Посмотреть все услуги</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/image/Grid6.png" alt="">
							<button type="button" class="btn btn-outline-primary next__button shadow-none">Все услуги</button>
						</div>
					</a>
					
					
					
									
					
										
				</div>
			</div>
		</section>
		<section class="doctors"> 
			<div class="doctors__body">
				<div class="doctors__control">
					<div class="doctors__info">
						<div class="doctors__info-title "><h2>Доктора</h2></div>
						<p>
							Наши врачи не только лечат, но и помогают сохранить здоровье!
						</p>
						<p>
							Это семейная клиника, в которой в комфортных условиях, без очередей вы сдадите все необходимые анализы, пройдете нужных специалистов.
						</p>
						<div>
							<a href="http://front.nmedics.srv6.place-start.ru/?cat=4">Все доктора</a>
							<svg width="23" height="11"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#Right-Arrow"></use></svg>							
						</div>
					</div>
					<div class="doctors__controlls">
						<button class="doctor__nextb"><p>Назад</p></button>
						<button class="doctor__back"><p>Вперед</p></button>						
					</div>
				</div>
				<div class="doctors__carts">
				<?php
					// проверяем есть ли в повторителе данные
					if( have_rows('doctor_slide') ):						
						// перебираем данные
						while ( have_rows('doctor_slide') ) : the_row();
						$post_object = get_sub_field('doctor_chose');
							if( $post_object ): 
								// перезаписать $post
								$post = $post_object;
								setup_postdata( $post ); 							
								?>
								<div class="doctors__item">
									<div class="doctor__prew">
										<h3 class="doctors__title"><?php the_field('position'); ?></h3>
										<?php echo get_the_post_thumbnail() ?>
										<h4 class="doctors__name"><?php the_title(); ?></h4>
									</div>
									<div class="doctor__next">
										<h3 class="doctors__title">Оказывает услуги</h3>
										<a href="<?php the_permalink(); ?>">									
										<?php
										// проверяем есть ли в повторителе данные
										if( have_rows('services_doc') ):
											$cost = true;
											// перебираем данные
											while ( have_rows('services_doc') ) : the_row();
												if($cost){
												the_sub_field('services_doc_name');																				
												}
												$cost = false;						
											endwhile;
										else :
											// вложенных полей не найдено
										endif;
										?>
										</a>
										<a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-outline-primary doctor__next-button next__button shadow-none">Подробнее</button></a>
									</div>
								</div>
								<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
							<?php endif; ?>

							<?php
							// отображаем вложенные поля
						endwhile;
					else :
						// вложенных полей не найдено
					endif;
					?>					
				</div>
				<div class="doctors__controlls doctors__controlls-media">
					<button class="doctor__nextb"><p>Назад</p></button>
					<button class="doctor__back"><p>Вперед</p></button>						
				</div>
			</div>
		</section>
		<section class="about">
			<img class="about__text" src="<?php echo get_template_directory_uri(); ?>/image/AboutImg.png">
			<div class="container">
				<div class="about__body">
					<div class="about__info">		
						<p>О нас</p>
						<p>Наша клиника располагают возможностью однодневно посетить до 20 узких специалистов, сдать любые виды анализов, сделать УЗИ, получить грамотные консультации, расшифровку любых анализов. </p>
						<p>Это семейная клиника, в которой в комфортных условиях, без очередей вы сдадите все необходимые анализы, пройдете нужных специалистов,  при высокой температуре вызовите врача на дом.</p>						
						<a href="http://front.nmedics.srv6.place-start.ru/?page_id=69"><button type="button" class="btn btn-outline-primary next__button shadow-none">Подробнее</button></a>
					</div>
					<img class="about__img" src="<?php echo get_template_directory_uri(); ?>/image/Office.png" alt="Офис" title="Офис">
				</div>
				
			</div>
		</section>
		<section class="kart">
			<div class="kart-kart">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1188.5236619779844!2d58.9811847000164!3d53.43186210934433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45c1151fa09bc810!2z0J3QtdC50YDQvtC80LXQtNC40LrRgQ!5e0!3m2!1sru!2sru!4v1622727541401!5m2!1sru!2sru" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="kart__form">				
				<p>Хотите записаться <br> на приём?</p>
				<p>Оставьте  номер телефона и наш администратор <br> свяжется с вами в ближайшее время </p>
				<form action="" method="">
					<input id="Name" type="text">
					<label for="Name">Имя</label>
					<input id="Phone" class="phone" type="text">
					<label for="Phone">Телефон</label>
					<div class="kart__form-bot">
						<p>Нажимая кнопку, вы соглашаетесь <br>  <a href=""><u>на обработку персональных данных</u></a></p>
						<input type="submit" value="Отправить данные">
					</div>					
					
				</form>
			</div>
		</section>
