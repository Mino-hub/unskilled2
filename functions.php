<?php

add_theme_support('post-thumbnails');

function content_ad($atts){
if((bool)$atts["bool"] === true){
$code = <<<aaa
<div id="content-footer__wrap1">
<div class="sd">
<style>
@media(max-width: 319px) { .ad_in { width: 300px; height: 250px; } }
@media(max-width: 320px)and(max-width: 355px){ .ad_in { width: 300px; height: 250px; } }
@media(min-width: 356px)and(max-width: 425px) { .ad_in { width: 336px; height: 280px; } }
@media(min-width: 426px)and(max-width: 769px) { .ad_in { width: 336px; height: 280px; } }
@media(min-width: 769px)and(max-width: 1024px) { .ad_in { width: 336px; height: 280px; } } 
@media(min-width: 1025px)and(max-width: 1366px){ .ad_in { width: 336px; height: 280px; } } 
@media(min-width: 1367px){ .ad_in { width: 336px; height: 280px; } }
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
</div>
aaa;
}
return $code;
}
add_shortcode("cad", "content_ad");

function gacode(){
if ( !is_user_logged_in() ){
$code = <<<aaa
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
return $code;
}
