<?php 
get_header();
?>
<main>
<?php
    get_sidebar();
    ?>
<div class="content_home">
    <div id="author-info">
        <div id="author-avatar">
            <?php echo get_avatar(get_the_author_meta('ID' , 100 ))?>
            <h2 class="title-author title-h2">
                <?php echo get_the_author(); ?>
            </h2>
        </div>
        <div id="author-description">
            <div class="description">
                <?php the_author_meta('description'); ?>
            </div>
            
            <div class="stack"> 
                <h4 class="subpart-author">Stack</h4>
                <?php the_author_meta('stack');?>
            </div>
            <div class="citation">
                <h4 class="subpart-author">Devise</h4>
                <?php the_author_meta('devise');?>
            </div>
            <div class="social-media">
                <h4 class="subpart-author">Réseaux sociaux</h4>
                <a href="https://twitter.com/<?php the_author_meta('twitter');?>" target="_blank"><img src="wp-content/themes/theme-vcb/assets/images/mail.png" width="40" height="auto" alt="twitter"> </a>
                <a href="https://github.com/<?php the_author_meta('github');?>" target="_blank"><img src="wp-content/themes/theme-vcb/assets/images/mail.png" width="40" height="auto" alt="twitter"> </a>
                <a href="https://linkedin.com/<?php the_author_meta('linkedin');?>" target="_blank"><img src="wp-content/themes/theme-vcb/assets/images/mail.png" width="40" height="auto" alt="twitter"> </a>
            </div>
        </div>
    </div>


</div>
</main>

<?php 
get_footer();
?>