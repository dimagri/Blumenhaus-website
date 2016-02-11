<?php get_template_part('header') ?>

	<main class="content single">
		
		<?php get_template_part('sidebar') ?>

		<section class="single-page section-left">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php 

							$image = get_field('большое_изображение');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>

				<div class="product-info-single">
					<div class="product-info-inner">
						<h2 class="product-name"><?php the_title(); ?></h2>
						<span class="model">Модель: <?php the_field('модель'); ?></span>
						<span class="availability">Наличие: <?php the_field('наличие'); ?></span>
					</div>

					<ul class="product-buttons">
						<li><a href="" class="buy-btn amount" >1 букет</a></li>
						<li><a href="" id="open-popup" class="buy-btn">купить</a></li>
					</ul>
				</div>

				<div class="flower-info">
					<h2 class="flower-name"><?php the_title(); ?></h2>
					<span class="flower-description">Гиацинт, Анемон</span>
				</div>
			<?php endwhile;  endif; ?>
		</section>

		<section class="order-popup">
			<button id="close-popup"></button>
			<div class="form-wrapper">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>post.php" method="get" id="order-form" >
					<ul>
						<li><input type="text" required placeholder="Имя" name="name" ></li>
						<li><input type="text" required placeholder="Телефон" name="phone" ></li>
						<li><input type="text" required placeholder="Адрес" name="address" ></li>
						<li><input type="submit" value="Оформить заказ" ></li>
					</ul>
				</form>
				<div class="success">
					<h2>Мы свяжемся с вами в ближайшее время !</h2>	
				</div>
			</div>
		</section>
	</main>
<?php get_template_part('footer') ?>
