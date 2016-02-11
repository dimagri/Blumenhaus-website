		<aside class="sidebar">
			<ul class="catalogs-list">
<!-- 				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/универсальные-букеты">Универсальные букеты</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/праздничные-букеты">Праздничные букеты</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/мужские-букеты">Мужские букеты</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/детские-букеты">Детские букеты</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/свадебные-букеты">Свадебные букеты</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/дополнение-к-букету">Дополнение к букету</a></li> -->
				<?php
					$cat_arguments = array(
					  'orderby' => 'count',
					  'parent' => 0,
					  'hide_empty' => 0,
					  'order' => 'DESC'
					  );
					$cats = get_categories($cat_arguments);
					foreach($cats as $category) {
						if($cat != $category->term_id) { 
							echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>'; 
						} else {
							echo '<li class="current-cat" ><a href="#">'.$category->name.'</a></li>'; 
						}
					}
				?>
			</ul>
		</aside>