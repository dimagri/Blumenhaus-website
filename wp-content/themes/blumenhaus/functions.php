<?php
function theme_register_nav_menu() {
	register_nav_menu( 'left', 'Left Menu' );
	register_nav_menu( 'right', 'Right Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
?>
<?php add_theme_support('post-thumbnails');
	add_image_size( 'bouquet-thumbnail', 300, 300, FALSE );
?>