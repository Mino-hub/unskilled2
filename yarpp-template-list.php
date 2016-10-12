<div id="content-footer__related">
    <div id="content-footer__related-index">
        こちらの記事もオススメ
    </div>
<?php if (have_posts()) : ?>    
    <ul id="content-footer__related-ul">
    <?php while (have_posts()) : the_post(); ?>
        <li class="content-footer__related-ul-li">
            <a class="content-footer__related-ul-li-a" href="<?php the_permalink(); ?>">
                <div class="content-footer__related-ul-li-img">
                    <img src="<?php echo get_stylesheet_directory_uri()."/img/ra2.svg"; ?>">
                </div>
                <div class="content-footer__related-ul-li-a-title">
                    <?php the_title();?>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif;?>
</div>
