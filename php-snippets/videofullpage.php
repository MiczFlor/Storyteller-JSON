<?php
print "
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->
<section class=\"st-content-video part inview snap\" name=\"story".$storycounter."\">
  <div class=\"video-container\"
    data-preload=\"none\"";
include("sub-data-poster-loadingimage.php");
print "
    >";
include("sub-videosource.php");
print "
  </div>
  <div class=\"caption\">
    <div class=\"button-container\">
      <button class=\"pauseplay\"></button>
    </div>
    <div class=\"text\">
      <h3>".$story['title']."</h3>
      ".$story['text']."
    </div>
  </div>
</section>
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->";
?>
