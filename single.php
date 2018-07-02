<?php get_header();?>
<main>
<div class="single-article-content">
    <div class="single-article">
        <?php the_category(); ?>
        <div class="single-article-border">        
            <?php the_post_thumbnail(); ?>
            <h4 class="article_title"><?php the_title();?></h4>
            <div class="the-article"><?php the_content();?></div>
        </div>
    </div>

    <div class="author-meta">
        <div class="name-avatar">
            <h4 class="title-author title-h4">par <?php the_author_posts_link(); ?></h4>
            <?php echo get_avatar(get_the_author_meta('ID' , 72 )); ?>
        </div>  
        <p class="description-author"><?php the_author_meta('description'); ?></p>
        <div class="links-author">
            <a href="mailto:<?php echo antispambot(get_the_author_meta('email')); ?>"><img class="logo" src="wp-content/themes/theme-vcb/assets/images/mail.png"/></a>
            <a href="<?php get_the_author_meta('twitter'); ?>"><img class="logo" src="URL DE VOTRE IMAGE"/></a>
        </div>
        <div class="author-other-articles">
            <h4 class="title-other-articles title-h4">ses autres articles</h4>
            <ul class="ul-other-articles">

            <?php          
            $current_user = wp_get_current_user();                     

            $args = array(
            'author'        =>  $current_user->ID, 
            'orderby'       =>  'post_date',
            'order'         =>  'DESC',
            'posts_per_page' => -1 // no limit
            );

            $query = new WP_Query( $args );


            //var_dump($my_query);
            if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?> 
                <li class="other-articles-li"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; 
            endif; ?>
            </ul>
</div>
</main>
<?php get_footer(); ?>