
<section class="text">
		<div class="container">
			<div class="text__telo">
				<div class="text__menu">
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
						<!-- <li><a href="">Дерматология</a></li>
						
						<li><a href="">Неврология</a></li>
						<li><a href="">Нейрохирургия</a></li>
						<li><a href="">Онкология</a></li>
						<li><a href="">Оториноларингология</a></li>
						<li><a href="">Офтальмология</a></li>
						<li><a href="">Педиатрия</a></li> -->
					</ul>
				</div>
				<div class="text__body">
					<div class="block404__bread">						
						<a style="color: #A9A9A9;" href="#"> <?php true_breadcrumbs(); ?> </a> 
					</div>					
						<?php
						if( have_rows('flex') ):
							the_content();							
							// перебираем данные
							while ( have_rows('flex') ) : the_row();
							//Поле ввода первого уровня
								if( get_row_layout() == 'default_main' ):
									//Вставляем заголовок первого уровня									
									?>	
									<div>
										<?php the_sub_field("default_body"); ?>
									</div>								
									<?php    
								endif;							
								//Поле ввода цитаты
								if( get_row_layout() == 'quote' ):
									//Вставляем изображение
									?>
									<div class="text__que">
										<p><?php the_sub_field('quote_text'); ?></p>
									</div>						
									<?php    
								endif;
								//Поле ввода изображение 2
								if( get_row_layout() == 'img_block' ):	
									if( get_sub_field('img_chose') == "3" ) {
									?>
											<div class="text__img2">
												<div class="text__img2-body">
											<?php
											//Поле ввода подпунктов маркированного списка									
											// проверяем есть ли в повторителе данные
											if( have_rows('img_repeater') ):
												// перебираем данные
												while ( have_rows('img_repeater') ) : the_row();
													// отображаем вложенные поля
													?>
													<img src="<?php the_sub_field('img_img');?>" alt="Изображение" title="Изображаение">	
													<?php 											
												endwhile;
											else :
											// вложенных полей не найдено
											endif;
												
											?>		
												</div>
											<p><?php the_sub_field('img_name');?></p>
										</div>
									<?php
									}
									if( get_sub_field('img_chose') == "2" ) {
										?>
												<div class="text__img1">
													<div class="text__img1-body">
												<?php
												//Поле ввода подпунктов маркированного списка									
												// проверяем есть ли в повторителе данные
												if( have_rows('img_repeater') ):
													// перебираем данные
													while ( have_rows('img_repeater') ) : the_row();
														// отображаем вложенные поля
														?>
														<img src="<?php the_sub_field('img_img');?>" alt="Изображение" title="Изображаение">	
														<?php 											
													endwhile;
												else :
												// вложенных полей не найдено
												endif;
													
												?>		
													</div>
												<p><?php the_sub_field('img_name');?></p>
											</div>
										<?php
										}
									
								endif;														
								//Поле ввода сертефикатов
								if( get_row_layout() == 'sert' ):								
									?>
									<div class="text__sert">
									<?php
									//Поле ввода подпунктов маркированного списка									
									// проверяем есть ли в повторителе данные
									if( have_rows('sert_repeater') ):
										// перебираем данные
										while ( have_rows('sert_repeater') ) : the_row();
											// отображаем вложенные поля
											?>
											<div class="text__sert-item">
											<img src="<?php the_sub_field('sert_repeater_img');?>" alt="Сертификат" title="Сертификат">
											<p><?php the_sub_field('sert_title');?></p>
											</div>
											<?php 											
										endwhile;
									else :
									// вложенных полей не найдено
									endif;
									?>
										<p><?php the_sub_field('img3_title');?></p>
										</div>
									<?php    
								endif;
								
								//Поле ввода документов
								if( get_row_layout() == 'pdf' ):								
									?>
									<div  class="document">
									<?php
									//Поле ввода подпунктов маркированного списка									
									// проверяем есть ли в повторителе данные
									if( have_rows('pdf_file') ):
										// перебираем данные
										while ( have_rows('pdf_file') ) : the_row();
											// отображаем вложенные поля											
											?>
											<a href="<?php the_sub_field('pdf_file_file'); ?>">
												<div style="min-height: 166px;" class="document__item">
													<p><?php the_sub_field('pdf_file_name'); ?></p>
													<div class="document__bot">
														<svg width="19px" height="23px"><use xlink:href="<?php echo get_template_directory_uri(); ?>/image/iconstest.svg#download"></use></svg>							
														<p><?php the_sub_field('pdf_file_size'); ?></p>
														
														<?php															
															echo filesize(get_sub_field("pdf_file_file"));															
															?>

													</div>
												</div>
											</a>
											<?php 											
										endwhile;
									else :
									// вложенных полей не найдено
									endif;
									?>
										</div>
									<?php    
								endif;
							endwhile;
						else :
						// макетов не найдено
						endif;
						?>					
				</div>
			</div>
		</div>		
	</section>
	

