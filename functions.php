<?php 

add_theme_support( 'post-thumbnails' );

function my_post_queries( $query ) {
    // vérifier qu'on n'est pas sur une page admin
    if ( !is_admin() && $query->is_main_query() ) {

        if ( is_author() ) {

            // montrer tous les articles
            $query->set( 'posts_per_page', -1 );
            $query->set( 'post_type', array( 'post' ) );
        }

    }
}
add_action( 'pre_get_posts', 'my_post_queries' )

?>