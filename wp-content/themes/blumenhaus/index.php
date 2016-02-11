
<?php get_template_part('header') ?>

	<main class="content">
		<section class="slider">
			<ul>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/02.jpg" alt="">
					<div class="flower-info">
						<h2 class="flower-name">COLORS</h2>
						<span class="flower-description">Гиацинт, Анемон</span>
					</div>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/03.jpg" alt="">
					<div class="flower-info">
						<h2 class="flower-name">AFINA</h2>
						<span class="flower-description">Гиацинт, Анемон</span>
					</div>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/04.jpg" alt="">
					<div class="flower-info">
						<h2 class="flower-name">AFRODITA</h2>
						<span class="flower-description">Гиацинт, Анемон</span>
					</div>
				</li>
			</ul>
		</section>
		<section class="about-studio-block wrap">
			<h2 class="section-title">О СТУДИИ</h2>
			<section class="text">
				<p>Студия флористики BLUMENHAUS – это команда опытных и талантливых флористов, которые любят цветы и свою работу. Годы опыта позволили нам реализовать огромное количестве работ, провести тысячи творческих экспериментов, изучить все существующие флористические техники и придумать множество своих, чтобы сегодня уверенно сказать: мы знаем о цветах все и можем реализовать оформление цветами на любой вкус и по любому поводу!</p>
				<p>BLUMENHAUS – это не просто салон цветов в центре Киеве, это оазис цветочного настроения и идей!</p>
			</section>
		</section>
		<section class="catalog-block">
			<h2 class="section-title">КАТАЛОГ БУКЕТОВ</h2>

			<ul class="catalogs-list-extended">
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/универсальные-букеты"><div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/images/41.jpg" alt="">
							<div class="catalog-info">
								<h3 class="catalog-name">УНИВЕРСАЛЬНЫЕ</h3>
								<span class="catalog-category">БУКЕТЫ</span>
							</div>
						</div></a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/праздничные-букеты"><div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/images/44.jpg" alt="">
							<div class="catalog-info">
								<h3 class="catalog-name">ПРАЗДНИЧНЫЕ</h3>
								<span class="catalog-category">БУКЕТЫ</span>
							</div>
						</div></a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/мужские-букеты"><div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/images/45.jpg" alt="">
							<div class="catalog-info">
								<h3 class="catalog-name">МУЖСКИЕ</h3>
								<span class="catalog-category">БУКЕТЫ</span>
							</div>
						</div></a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/детские-букеты"><div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/images/46.jpg" alt="">
							<div class="catalog-info">
								<h3 class="catalog-name">ДЕТСКИЕ</h3>
								<span class="catalog-category">БУКЕТЫ</span>
							</div>
						</div></a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/свадебные-букеты"><div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/images/40.jpg" alt="">
							<div class="catalog-info">
								<h3 class="catalog-name">СВАДЕБНЫЕ</h3>
								<span class="catalog-category">БУКЕТЫ</span>
							</div>
						</div></a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/дополнение-к-букету"><div class="inner">
							<img src="<?php bloginfo('template_url'); ?>/images/47.jpg" alt="">
							<div class="catalog-info">
								<h3 class="catalog-name">ДОПОЛНЕНИЕ</h3>
								<span class="catalog-category">К БУКЕТАМ</span>
							</div>
						</div></a>
				</li>
			</ul>
		</section>
		<section class="instagram-block">
			<h2 class="section-title">INSTAGRAM</h2>

			<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/ca0e8e8024d755d8896af9f6bd7c125a.html" id="instansive_ca0e8e8024" name="instansive_ca0e8e8024"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
		</section>
	</main>
	<footer class="footer wrap">
		<?php wp_nav_menu( array( 'theme_location' => 'left', 'container' => 'nav','container_class' => 'menu-nav menu-nav-left', 'menu_class' => '' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'right', 'container' => 'nav','container_class' => 'menu-nav menu-nav-right', 'menu_class' => '' ) ); ?>
		<h1 class="footer-logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/footer-logo.svg" alt=""></a></h1>
	</footer>

<?php get_template_part('footer') ?>
