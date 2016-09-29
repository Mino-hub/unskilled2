<?php
    $posttags = get_the_tags();
    echo "<ul id=\"content-header__tag-ul\">";
    if ($posttags) {
        foreach($posttags as $tag) {
            echo "<li class=\"content-header__tag-ul-li\"><a class=\"content-header_tag-ul-li-a\" href=\"". get_tag_link($tag->term_id) ."\">" . $tag->name . "</a></li>";
        }
    }
    echo "</ul>";
?>
