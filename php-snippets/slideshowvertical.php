<?php
print "
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->
<section class=\"part slideshow \" name=\"story".$storycounter."\">";

  //print "<pre>";print key($imgarray);print_r($story['images']);print "</pre>";
foreach($story['images'] as $imageid => $imgarray) {
  print "
  <div class=\"bg-image\"
  data-src=\"".$imgarray['srcmain']."\"
  data-srcMedium=\"".$imgarray['srcmedium']."\"
  data-srcPhone=\"".$imgarray['srcphone']."\"
  >
    <div class=\"caption\">".$imgarray['title']."
      <span>".$imgarray['credits']."</span>
    </div>
  </div>";
};
print "
</section>
<!-- end snippet ".pathinfo(__FILE__)['filename']." -->";
?>
