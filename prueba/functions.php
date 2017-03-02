<?php
add_theme_support('menus');
function register_theme_menus() {
    register_nav_menus(
            array(
                'primary-menu' => __('Primary Menu'),
                'primary-menu2' => __('Primary Menu2'), 
				'primary-menu3' => __('Primary Menu3'), 
                'menu-footer' => __('Menu Footer')
            )
    );
}
add_action('init', 'register_theme_menus');



add_filter( 'upload_mimes', 'custom_upload_mimes' );
function custom_upload_mimes( $existing_mimes = array() ) {
    // Add the file extension to the array
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}

?>