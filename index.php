<?php get_header(); ?>
<?php if (have_posts()) : ?>    
<div id="continer">
<div id="main">
    <div id="is__wrap">
        <?php get_template_part("is"); ?>
        <?php get_template_part("pagenation"); ?>
        <div class="sep"></div>
    </div>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part("index-content-header");?>
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php get_template_part("pagenation");?>
<?php get_footer(); ?>
