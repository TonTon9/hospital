<?php get_header(); 
//Услуги и цены
if ( in_category( 2 )) {
    ?>
    <section class="cost">
            <div class="container">
                <div class="cost__body">
                    <div class="block404__bread">						
                        <a style="color: #A9A9A9;" href="#"> <?php true_breadcrumbs(); ?> </a> 
                    </div>
                    
                    <p class="page__title"><?php the_title(); ?></p>
                    <table>
    <?php
    // проверяем есть ли в повторителе данные
    if( have_rows('services') ):
        // перебираем данные
    while ( have_rows('services') ) : the_row();
            ?>
            <tr>
                <td><?php the_sub_field('services_name'); ?></td>
                <td><?php the_sub_field('services_cost'); ?></td>
                <td><p id="call">Записаться</p></td>
            </tr>
            <?php
        // отображаем вложенные поля   
    endwhile;
    else :

    // вложенных полей не найдено

    endif;
    ?>
    </table>
                    <div class="kart__form">				
                        <p>Остались вопросы?</p>
                        <p>Оставьте  номер телефона и наш администратор свяжется с вами в ближайшее время </p>
                        <form action="" method="">
                            <div class="form__doby">
                                <input id="Name" type="text">
                                <label for="Name">Имя</label>
                                <input id="Phone" class="phone" type="text">
                                <label for="Phone">Телефон</label>
                                <input type="submit" value="Отправить данные">
                            </div>
                            <p>Нажимая кнопку, вы соглашаетесь <a href="">на обработку персональных данных</a></p>						
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
//Доктора
if ( in_category( 4 )) {
    ?>
    <section class="document_">
			<div class="container">
				<div class="document__body">
                    <div class="block404__bread">						
                        <a style="color: #A9A9A9;" href="#"> <?php true_breadcrumbs(); ?> </a> 
                    </div>                   
    <?php
    ?>
                    <div class="document__ava">
                        <?php echo get_the_post_thumbnail() ?>
						<button id="call">Записаться на прием</button>
					</div>
                    <div class="document__wiki">
						<p><?php the_field('position'); ?></p>
						<p><?php the_title(); ?></p>
						<p class="document__staj">Стаж</p>
						<p class="document__staj-nmber"><?php the_field('staj'); ?></p>
						<p class="document__staj">Звания степени</p>
						<p class="document__staj-nmber"><?php the_field('general'); ?></p>
					</div>
                    <div class="document__spoilerses">
						<div class="accordion" id="accordionExample">
                        <?php
                        $count = 0;
                        // проверяем есть ли в повторителе данные
                        if( have_rows('spoilers') ):
                            // перебираем данные
                            while ( have_rows('spoilers') ) : the_row();
                                    $count++;
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading<?php echo $count?>">
                                            <button style="background: white; border-bottom: 1px solid #CFCFCF;"  class="spoiler__button accordion-button  collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count?>" aria-expanded="true" aria-controls="collapse<?php echo $count?>">
                                                <p style="color: black;"><?php the_sub_field('spoilers_name'); ?></p>
                                                <span></span>
                                            </button>
                                        </h2>
                                        <div id="collapse<?php echo $count?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $count?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p><p><?php the_sub_field('spoilers_tex'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //// -->                                    
                                    <?php
                                // отображаем вложенные поля   
                            endwhile;
                        else :
                            
                        // вложенных полей не найдено

                        endif;
                        ?> 
						</div>					
					</div>
                    <div class="document__cost">
						<p>Оказывает услуги</p>
							<table>
    <?php
    // проверяем есть ли в повторителе данные
    if( have_rows('services_doc') ):
        // перебираем данные
        while ( have_rows('services_doc') ) : the_row();
                ?>
                <tr>
                    <td><?php the_sub_field('services_doc_name'); ?></td>
                    <td><?php the_sub_field('services_doc_cost'); ?></td>
                    </tr>
                <?php
            // отображаем вложенные поля   
        endwhile;
    else :
        
    // вложенных полей не найдено

    endif;
    ?>    
        </table>
                    </div>
				</div>
			</div>
		</section>                
    <?php
}
//Новости
if ( in_category( 5 )) {
    ?>
    <section class="text">
		<div class="container">
			<div class="news__body2">
                    <div class="block404__bread">						
                        <a style="color: #A9A9A9;" href="#"> <?php true_breadcrumbs(); ?> </a> 
                    </div>                   
    <?php
    if( have_rows('flex') ):
        // перебираем данные
        while ( have_rows('flex') ) : the_row();
            //Поле ввода первого уровня
            if( get_row_layout() == 'text_h1' ):
                //Вставляем заголовок первого уровня
                ?>
                <h1> <?php the_sub_field('text_h1_title'); ?></h1>
                <p> <?php the_sub_field('text_h1_text'); ?></p>								
                <?php    
            endif;
            //Поле ввода второго уровня
            if( get_row_layout() == 'text_h2' ):
                //Вставляем заголовок второго уровня
                ?>
                <h2> <?php the_sub_field('text_h2_title'); ?></h2>
                <p> <?php the_sub_field('text_h2_text'); ?></p>								
                <?php    
            endif;
            //Поле ввода третьего уровня
            if( get_row_layout() == 'text_h3' ):
                //Вставляем заголовок третьего уровня
                ?>
                <h3> <?php the_sub_field('text_h3_title'); ?></h3>
                <p> <?php the_sub_field('text_h3_text'); ?></p>								
                <?php    
            endif;
            //Поле ввода большого изображения
            if( get_row_layout() == 'big_img' ):
                //Вставляем изображение
                ?>
                <img src="<?php the_sub_field('bit_img_img'); ?>" alt="Изображение" title="Изображаение">							
                <?php    
            endif;
            //Поле ввода нумерованного списка
            if( get_row_layout() == 'ol' ):								
                ?>
                <h3 style="margin-top: 36px;"><?php the_sub_field('ol_title'); ?></h3>
                <ol>
                    <?php
                    //Поле ввода подпунктов нумерованного списка									
                    // проверяем есть ли в повторителе данные
                    if( have_rows('ol_li') ):
                        // перебираем данные
                        while ( have_rows('ol_li') ) : the_row();
                            // отображаем вложенные поля
                            ?>
                            <li><?php the_sub_field('ol_li_item');?></li>							
                            <?php 											
                        endwhile;
                    else :
                    // вложенных полей не найдено
                    endif;
                    ?>
                </ol>
                <?php    
            endif;
            //Поле ввода маркированного списка
            if( get_row_layout() == 'ul' ):								
                ?>
                <h3 style="margin-top: 36px;"><?php the_sub_field('ul_title'); ?></h3>
                <ul>
                    <?php
                    //Поле ввода подпунктов маркированного списка									
                    // проверяем есть ли в повторителе данные
                    if( have_rows('ul_li') ):
                        // перебираем данные
                        while ( have_rows('ul_li') ) : the_row();
                            // отображаем вложенные поля
                            ?>
                            <li><?php the_sub_field('ul_li_item');?></li>							
                            <?php 											
                        endwhile;
                    else :
                    // вложенных полей не найдено
                    endif;
                    ?>
                </ul>
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
            if( get_row_layout() == 'img2' ):								
                ?>
                <div class="text__img1">
                    <div class="text__img1-body">
                <?php
                //Поле ввода подпунктов маркированного списка									
                // проверяем есть ли в повторителе данные
                if( have_rows('img2_repeater') ):
                    // перебираем данные
                    while ( have_rows('img2_repeater') ) : the_row();
                        // отображаем вложенные поля
                        ?>
                        <img src="<?php the_sub_field('img2_repeater_img');?>" alt="Изображение" title="Изображаение">	
                        <?php 											
                    endwhile;
                else :
                // вложенных полей не найдено
                endif;
                ?>
                    </div>
                <p><?php the_sub_field('img2_title');?></p>
                </div>
                <?php    
                endif;	
            //Поле ввода изображение 3
            if( get_row_layout() == 'img3' ):								
                ?>
                <div class="text__img2">
                    <div class="text__img2-body">
                <?php
                //Поле ввода подпунктов маркированного списка									
                // проверяем есть ли в повторителе данные
                if( have_rows('img3_repeater') ):
                    // перебираем данные
                    while ( have_rows('img3_repeater') ) : the_row();
                        // отображаем вложенные поля
                        ?>
                        <img src="<?php the_sub_field('img3_repeater_img');?>" alt="Изображение" title="Изображаение">	
                        <?php 											
                    endwhile;
                else :
                // вложенных полей не найдено
                endif;
                ?>
                    </div>
                <p><?php the_sub_field('img3_title');?></p>
                </div>
                <?php    
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
            //Поле ввода таблиц
            if( get_row_layout() == 'table' ):
                //Вставляем заголовок второго уровня
                ?>
                <table>
                    <tr>
                        <td><?php the_sub_field('table_title_1'); ?></td>
                        <td><?php the_sub_field('table_title_2'); ?></td>
                    </tr>
                    <tr>
                        <td><?php the_sub_field('table_text_1_2'); ?></td>
                        <td><?php the_sub_field('table_text_2_2'); ?></td>
                    </tr>
                    <tr>
                        <td><?php the_sub_field('table_text_1_3'); ?></td>
                        <td><?php the_sub_field('table_text_2_3'); ?></td>
                    </tr>
                    <tr>
                        <td><?php the_sub_field('table_text_1_4'); ?></td>
                        <td><?php the_sub_field('table_text_2_4'); ?></td>
                    </tr>
                    <tr>
                        <td><?php the_sub_field('table_text_1_5'); ?></td>
                        <td><?php the_sub_field('table_text_2_5'); ?></td>
                    </tr>
                </table>				
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
}
?>    
			</div>
		</div>		
	</section>              
    <?php
?>
<?php get_footer(); 


?>