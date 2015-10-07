<?php
print "
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->
<section class=\"no-effects part text_align-center";
if($story['colors'] == "light") { // color schemes
print " reverse_colors";
}
print "\" name=\"story".$storycounter."\">";
include("sub-content.php");
print "
</section>
<!-- end snippet ".pathinfo(__FILE__)['filename']." -->";
?>
