<?php 

add_theme_support( 'post-thumbnails' );

function my_post_queries( $query ) {
    // vérifier qu'on n'est pas sur une page admin
    if ( !is_admin() && $query->is_main_query() ) {

        if ( is_author() ) {

            // montrer tous les articles
            $query->set( 'posts_per_page',7 );
            $query->set( 'post_type', array( 'post' ) );
        }

    }
}
add_action( 'pre_get_posts', 'my_post_queries' );

add_filter('user_contactmethods','wpm_user_fields',10,1);

function wpm_user_fields( $contactmethods ) {
	// On ajoute le stack
	$contactmethods['stack'] = 'Stack';

	//On ajoute la devise
    $contactmethods['devise'] = 'Devise';
    
    //on ajoute Github
    $contactmethods['github'] = 'GitHub';

    //on ajoute Linkedin
    $contactmethods['linkedin'] = 'Linkedin';
    
	return $contactmethods;
}

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'primary' => __( 'main_nav', 'theme-vcb' ),
) );