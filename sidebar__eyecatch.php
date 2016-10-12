<?php
echo "<div class=\"sidebar__eyecatch\">";
if(has_post_thumbnail()){
    the_post_thumbnail();
    // if($pt_caption = get_post(get_post_thumbnail_id())->post_excerpt){ 
        // echo '<div class="wp-caption-header"><p>'.$pt_caption.'</p></div>';
    // }
}else{
    echo "<img src=\"" . get_stylesheet_directory_uri() . "/img/noimg.png\">";
}
    echo "</div>";
?>
