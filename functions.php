<?php

add_theme_support('post-thumbnails');

function content_ad($atts){
if((bool)$atts["bool"] === true){
echo <<<aaa
<div class="sd">
<style>
.ad_in { width: 336px; height: 280px; }
@media(min-width: 320px) { .adresponsive_in { width: 300px; height: 250px; } }
@media(min-width: 356px) { .adresponsive_in { width: 336px; height: 280px; } }
@media(min-width: 426px) { .adresponsive_in { width: 336px; height: 280px; } }
@media(min-width: 769px) { .adresponsive_in { width: 336px; height: 280px; } } 
@media(min-width: 1025px){ .adresponsive_in { width: 336px; height: 280px; } } 
@media(min-width: 1367px){ .adresponsive_in { width: 336px; height: 280px; } }
</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- unskilled.site記事中レスポンシブ -->
<ins class="adsbygoogle adresponsive_in"
     style="display:block"
     data-ad-client="ca-pub-2508992942318870"
     data-ad-slot="5196356408"
     data-ad-format="rectangle"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
aaa;
}
}
add_shortcode("cad", "content_ad");

function gacode(){
if ( !is_user_logged_in() ){
echo <<<aaa
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-36078315-9', 'auto');
          ga('send', 'pageview');
        </script>
aaa;
}
}
