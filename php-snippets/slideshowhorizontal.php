<?php
print "
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->
<script>
  if(galleryLinksContainer===undefined){
    var galleryLinksContainer = [];
  }
</script>

<section class=\"part slideshow-horizontal snap \" name=\"story".$storycounter."\">
  <div class=\"blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls\">
    <div class=\"slides\"></div>
    <a class=\"prev\">&lsaquo;</a>
    <a class=\"next\">&rsaquo;</a>
    <div class=\"slide-caption\"></div>
  </div>
</section>

         
<script>
  var galleryLinks = [];
";

  //print "<pre>";print key($imgarray);print_r($story['images']);print "</pre>";
foreach($story['images'] as $imageid => $imgarray) {
  print "
  galleryLinks.push({
    title: '".$imgarray['title']."',
    photographer: '".$imgarray['credits']."',
    href: '".$imgarray['src']."',
    original_id: 'imgID".$imageid."',
    type: '".$imgarray['type']."'
  });";
};
print "
  
  galleryLinksContainer.push(galleryLinks);

</script>
<!-- end snippet ".pathinfo(__FILE__)['filename']." -->";
?>
