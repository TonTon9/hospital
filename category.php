<?php get_header(); ?>

<?php  if ( in_category( 2 )) {  ?>
	<section class="prices">
		<div class="container">
			<div class="newcontainer">
				<div class="prices__body">
					<div class="block404__bread">						
						<a style="color: #A9A9A9;" href="#"> <?php true_breadcrumbs(); ?> </a> 
					</div>
                    <p><?php echo get_cat_name(2);?></p>
                    <div class="prices__main">
<?php
// проверяем есть ли посты в глобальном запросе - переменная $wp_query
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();
		?>
            
            <div class="prices__item">		
				<span><?php the_field("first_letter"); ?></span>	    
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>				
			</div>				           

			
		<?php
	}
	?>					
					</div>	
				</div>
			</div>
		</div>
	</section>
<?php

}
else 
{	
}
?>
<?php  if ( in_category( 4 )) {  ?>
	<div class="Doctors">
		<div class="container">
			<div class="Doctors__body">
			<div class="block404__bread">						
				<a style="color: #A9A9A9;" href="#"> <?php true_breadcrumbs(); ?> </a> 
			</div>
				<p><?php echo get_cat_name(4);?></p>
				<div class="Doctors__cart">	
<?php
// проверяем есть ли посты в глобальном запросе - переменная $wp_query
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();
		?>            				
					<div class="Doctors__item">
						<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail() ?></a>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p><?php the_field("position"); ?></p>
					</div>			
		<?php
	}
	?>
							</div>	
                        </div>
					</div>	
				</div>
			</div>
		</div>
<?php
}
else 
{
}
if ( in_category( 5 )) {  ?>
	<section class="news">
		<div class="container">
			<div class="newcontainer">
				<div class="news__body">
				<div class="block404__bread">						
					<a style="color: #A9A9A9;" href="#"> <?php true_breadcrumbs(); ?> </a> 
				</div>
				<p class="page__title"><?php echo get_cat_name(5);?></p>
				<div class="news__main">
<?php
// проверяем есть ли посты в глобальном запросе - переменная $wp_query
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();
		?>
            		<a class="news__item" href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail() ?>
						<div class="news__item-text">
							<p><?php the_field("date"); ?></p>								
							<p><?php the_title(); ?></p>
						</div>
					</a>								
				           
	
		<?php
	}
	?>
						</div>
				</div>
			</div>
		</div>
	</section>
<?php
}
else 
{
}
 get_footer();  
 ?>
