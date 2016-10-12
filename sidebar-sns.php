<ul id="sidebar-sns__ul">
    <li class="sns__ul-li">
        <a href="http://twitter.com/share?url=<?php echo site_url(); ?>&text=<?php the_title(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/twitter.svg"; ?>">
        </a>
    </li>
    <li class="sns__ul-li">
        <a href="http://www.facebook.com/share.php?u=<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/facebook.svg"; ?>">
        </a>
    </li>
    <li class="sns__ul-li">
        <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo site_url() ?>">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/hatena.svg"; ?>">
        </a>
    </li>
    <li class="sns__ul-li">
        <a href="https://plus.google.com/share?url=<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/google-plus.svg"; ?>">
        </a>
    </li>
</ul>
