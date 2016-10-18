
<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
<?php get_template_part("content-header");?>
<div id="continer">
<div id="main">
<div id="content-header__wrap2">
    <?php get_template_part("content-header-outline"); ?>
    <?php get_template_part("top_unit"); ?>
</div>
<?php get_template_part("content-header-related"); ?>
<div id="content">
    <?php the_content(); ?>
</div>
<div id="content-footer">
    <div id="content-footer__wrap1">
        <?php get_template_part("bottom_unit"); ?>
    </div>
    <div class="sep"></div>
    <?php get_template_part("sns-center"); ?>
    <div class="sep"></div>
    <?php related_posts(); ?>
    <div class="sep"></div>
</div>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>
