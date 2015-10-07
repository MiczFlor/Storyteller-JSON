<?php
if($storyboard['meta']['share']['facebook'] == "true") {
  print "
    <div class='fb-share-button' data-href='".$storyboard['meta']['url']."' data-layout='button'></div>";
}
if($storyboard['meta']['share']['twitter'] == "true") {
  print "
    <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"".$storyboard['meta']['url']."\" data-via=\"".$storyboard['meta']['site_name']."\" data-count=\"none\">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>";
}
?>
