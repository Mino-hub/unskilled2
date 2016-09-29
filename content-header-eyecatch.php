<?php
if(has_post_thumbnail()){
    echo "<div id=\"content-header__eyecatch\">";
    the_post_thumbnail();
    if($pt_caption = get_post(get_post_thumbnail_id())->post_excerpt){ 
        echo '<div class="wp-caption-header"><p>'.$pt_caption.'</p></div>';
    }
    echo "</div>";
}
?>
