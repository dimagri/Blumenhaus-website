<?php get_template_part('header') ?>

	<main class="content catalog-page section-min-height sidebar-arrow-up padding-top">
		<?php get_template_part('sidebar') ?>
		<section class="products-list section-left">
			<ul>

				<?php $temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('showposts=30' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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
				<?php wp_reset_postdata(); ?>

			</ul>
		</section>
	</main>
	
<?php get_template_part('footer') ?>
