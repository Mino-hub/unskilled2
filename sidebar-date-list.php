<div id="sidebar__date-list">
    <div id="sidebar__date-list-index">
        アーカイブ
    </div>
    <div id="sidebar__date-list-block">
    <?php
    $args = array(
        'type'            => 'monthly',
        'limit'           => '',
        'format'          => 'html', 
        'before'          => '',
        'after'           => '',
        'show_post_count' => true,
        'echo'            => 1,
        'order'           => 'DESC'
    );
    wp_get_archives( $args );
    ?>
    </div>
</div>
