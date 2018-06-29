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
            
            <li class="list_style_none">
                <?php the_category(); ?>
                <div class="derniers_articles">
                    <?php the_post_thumbnail(); ?>
                    <h4 class="article_title"><?php the_title();?></h4>
                    <p class="article_author">- <?php the_author();?> -</p>
                    <p class="the_excerpt"><?php echo  get_the_excerpt(); ?></p> 
                    <a class="en_savoir_plus" href="<?php echo get_permalink(); ?>">En savoir plus</a>
                </div>
            </li>
            <?php endwhile; ?>
        </div>
    </div>
</main>
<?php
get_footer();
?>