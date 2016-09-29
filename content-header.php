<div id="content-header">

    <div id="content-header__eyecatch-title-wrap">
        <?php get_template_part("content-header-eyecatch");?>
        <div id="content-header__date-title-wrap">
            <ul id="content-header__date-ul">
                <li id="content-header__date-ul-li">
                    <?php echo get_the_modified_date("Y/m/d H:i:s");?>
                </li>
                <li id="content-header__moddate-ul-li">
                    <?php echo get_the_modified_date("Y/m/d H:i:s");?>
                </li>
            </ul>
            <h1 id="content-header__title-h1">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <div id="content-header__outline-sd-category-tag-wrap">
        <div id="content-header__outline-sd-wrap">
            <?php get_template_part("content-header-outline"); ?>
            <div class="sd">
                <img id="topimg-img" src="<?php  echo get_stylesheet_directory_uri()."/img/300-250.png"; ?>">
            </div>
        </div>
        <div id="content-header__category-tag-wrap">
            <div id="content-header__category">
                <?php get_template_part("content-header-category-list"); ?>
            </div>
            <div id="content-header__tag">
                <?php get_template_part("content-header-tag-list"); ?>
            </div>
        </div>
    </div>
</div>
