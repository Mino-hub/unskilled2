
<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
<?php get_template_part("content-header");?>
<div id="content">
    <?php the_content(); ?>
</div>
<div id="cotent-footer">
</div>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>
