
<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
<?php get_template_part("content-header");?>
<div id="continer">
<div id="main">
<div id="content-header__wrap2">
    <?php get_template_part("content-header-outline"); ?>
    <div class="sd">
        <img src="<?php echo get_stylesheet_directory_uri()."/img/300-250.png"; ?>">
    </div>
</div>
<?php get_template_part("content-header-related"); ?>
<div id="content-header__wrap2">
    <div class="sd">
        <img src="<?php echo get_stylesheet_directory_uri()."/img/300-250.png"; ?>">
    </div>
</div>
<div id="content">
    <?php the_content(); ?>
</div>
<div id="content-footer">
    <div id="content-footer__wrap1">
        <div class="sd">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/300-250.png"; ?>">
        </div>
    </div>
    <div class="sep"></div>
    <?php get_template_part("sns-center"); ?>
    <div class="sep"></div>
    <?php related_posts(); ?>
    <div class="sep"></div>
</div>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>
