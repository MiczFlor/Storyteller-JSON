<?php
if(isset($story['video']['mp4'])) {
  print "
    <source data-src=\"".$story['video']['mp4']."\" type='video/mp4' />";
}
if(isset($story['video']['webm'])) {
  print "
    <source data-src=\"".$story['video']['webm']."\" type='video/webm' />";
}
?>
