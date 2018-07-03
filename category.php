<?php 
get_header();?>

 <div class="content_home content-margin">
<?php // Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
    <p class="presentation-cat titre_last_articles">Tous les articles de la catégorie : <?php single_cat_title(); ?></p>
</header>
<div class="allarticles">
<?php while ( have_posts() ) : the_post(); ?>
<li class="list_style_none">
<div class="derniers_articles">
<div class="thumbnail-perso-big" style="background-image : url('<?php  echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');"></div>
    <h4 class="article_title"> <?php the_title(); ?></h4>
    <p class="article_author">- <span><?php the_author_posts_link() ?><span> -<p>
    <div class="the_excerpt"><?php the_excerpt(); ?></div>
    <a class="en_savoir_plus" href="<?php echo get_permalink(); ?>">En savoir plus</a>
</div>  
</li>
    <?php endwhile; ?>
 </div>
<?php else: ?>
    <p>Sorry, no posts matched your criteria.</p>


    <?php endif; ?>

</div>
    <?php 
get_footer();
?>