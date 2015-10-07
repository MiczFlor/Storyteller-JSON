<?php
print "
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->
<section class=\"st-video part inview \" name=\"story".$storycounter."\">";
print "
<div class=\"video-container\"
  data-loop=\"loop\"
  data-preload=\"none\"";
include("sub-data-poster-loadingimage.php");
print "
  >";
if(isset($story['video'])) {
  include("sub-videosource.php");
}
print "
</div>";
include("sub-content.php");
print "
</section>
<!-- end snippet ".pathinfo(__FILE__)['filename']." -->";
?>
