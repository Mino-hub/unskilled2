<?php
$args = array(
    'posts_per_page'   => 20, 
    'post_type'        => array('post'),
    'post_status'      => 'publish'
);
$wp_query = new WP_Query($args);
?>

<div id="sidebar__new-article">
    <div id="sidebar__new-article-index">
       最近更新された記事 
    </div>
<?php if (have_posts()) : ?>    
    <ul id="sidebar__new-article-ul">
    <?php while (have_posts()) : the_post(); ?>
        <li class="sidebar__new-article-ul-li">
            <a class="sidebar__new-article-ul-li-a" href="<?php the_permalink(); ?>">
                <?php get_template_part("sidebar__eyecatch");?>
                <div class="sidebar__new-article-wrap1">
                    <div class="sidebar__new-article-ul-li-a-date">
                        <?php echo get_the_modified_date("Y/m/d H:i:s");?>
                    </div>
                    <div class="sidebar__new-article-ul-li-a-title">
                        <?php the_title();?>
                    </div>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; wp_reset_query();?>
</div>
