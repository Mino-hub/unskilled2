<div id="index-content-header">
    <div id="content-header__warp1">
        <div id="content-header__moddate">
            <?php echo get_the_modified_date("Y/m/d H:i:s");?>
        </div>
        <h1 id="content-header__title-h1">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <?php get_template_part("sns"); ?>
        <div class="sep"></div>
        <?php get_template_part("content-header-category-list"); ?>
        <?php get_template_part("content-header-tag-list"); ?>
    </div>
    <?php get_template_part("content-header-eyecatch");?>
    <div class="sep"></div>
</div>
