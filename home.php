<?php 
get_header();
?>
<main>
    
    <?php
    get_sidebar();
    ?>
    
    <div class="content_home">
    <h3 class="titre_last_articles">Les derniers articles</h3>
        <div class="allarticles">
            <?php wp_reset_postdata();
            query_posts('posts_per_page=5');
            while (have_posts()) : the_post(); ?>
            <li class="derniers_articles">
                <?php  the_excerpt();?>
            </li>
            <?php endwhile; ?>
        </div>
    </div>
</main>
<?php
get_footer();
?>