<?php
print "
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->
<section class=\"part parallax\" name=\"story".$storycounter."\">
  <div class=\"bg-image\"
      data-src=\"".$story['image']['srcmain']."\"
      data-srcMedium=\"".$story['image']['srcmedium']."\"
      data-srcPhone=\"".$story['image']['srcphone']."\"
  >
  </div>";
include("sub-content.php");
print "
  </div>
</section>
<!-- end snippet ".pathinfo(__FILE__)['filename']." -->";
?>
