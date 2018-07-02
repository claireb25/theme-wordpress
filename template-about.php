<?php

/**
 * Template Name: About
 */

get_header();
?>
<div class="main-a-propos">
<?php the_content();?>

<?php wp_list_authors(); ?>
</div>
<?php get_footer();?>