<?php
$args = array(
    'posts_per_page'   => 8, 
    'orderby'          => 'rand',
    'post_type'        => array('post'),
    'post_status'      => 'publish'
);
$wp_query = new WP_Query($args);
?>

<div id="content-header__related">
    <div id="content-header__related-index">
         関連するこちらの記事もオススメ
    </div>
<?php if (have_posts()) : ?>    
    <ul id="content-header__related-ul">
    <?php while (have_posts()) : the_post(); ?>
        <li class="content-header__related-ul-li">
            <a class="content-header__related-ul-li-a" href="<?php the_permalink(); ?>">
                <div class="content-header__related-ul-li-img">
                    <img src="<?php echo get_stylesheet_directory_uri()."/img/ra2.svg"; ?>">
                </div>
                <div class="content-header__related-ul-li-a-title">
                    <?php the_title();?>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; wp_reset_query();?>
</div>
