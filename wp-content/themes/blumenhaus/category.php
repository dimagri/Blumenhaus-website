<?php get_template_part('header') ?>

	<main class="content catalog-page padding-top">
		<?php get_template_part('sidebar') ?>

		<section class="products-list section-left">
			
			<?php if ( have_posts() ) { ?>
				<ul>	
					<?php while ( have_posts() ) : the_post(); ?>
					
						<li>
							<div class="product-image-wrap">
								<?php the_post_thumbnail('bouquet-thumbnail'); ?>
								<span class="price"><?php the_field('цена'); ?><span class="small"> грн.</span></span>
							</div>
							<div class="product-info">
								<a href="<?php the_permalink(); ?>" class="buy-btn">купить</a>
								<div class="product-info-inner">
									<h2 class="product-name"><?php the_title(); ?></h2>
									<span class="model">Модель: <?php the_field('модель'); ?></span>
									<span class="availability">Наличие: <?php the_field('наличие'); ?></span>
								</div>
							</div>
						</li>				

					<?php endwhile; ?>
				</ul>
			<?php } else { ?>
				<p class="empty"><?php _e('Записи отсутствуют'); ?></p>
			<?php } ?>

			
		</section>
	</main>
	
<?php get_template_part('footer') ?>
