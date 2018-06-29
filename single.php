<?php get_header();?>
<?php the_category(); ?>
<?php the_post_thumbnail(); ?>
<h4 class="article_title"><?php the_title();?></h4>
<?php the_content();?>
<?php 
get_footer();
?>