<?php
print "
<!-- start snippet ".pathinfo(__FILE__)['filename']." -->
  <div class=\"content container-fluid\">";
// check if header info set
if(isset($story['title']) OR isset($story['subtitle'])) {
  print "
    <div class=\"row\">";
  // checking if page title is full page or inline
  if($story['format'] == "fullpage") {
  print "
      <div class=\"col-sm-12 header-fullpage\">
        <div class=\"middle\">";
  if(isset($story['title'])) {
    print "
          <h1>".$story['title']."</h1>";
  }
  if(isset($story['subtitle'])) {
    print "
          <h2>".$story['subtitle']."</h2>";
  }
  print "
        </div>
      </div><!-- / .header-fullpage -->";
  } else {
  print "
      <div class=\"col-sm-12 header\">";
  if(isset($story['title'])) {
    print "
        <h1>".$story['title']."</h1>";
  }
  if(isset($story['subtitle'])) {
    print "
        <h2>".$story['subtitle']."</h2>";
  }
  print "
      </div><!-- / .header -->";
  }
  print "
    </div><!-- / .row -->";
}
// standard content (see below for text centered with embedded images)
if(isset($story['text'])) {
  print "
    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 text\">
        ".$story['text']."
      </div>
    </div><!-- / .row -->";
}
// special content: text centered with embedded images
if((isset($story['snippets']) && count($story['snippets']) > 0) OR (isset($story['intro']) && trim($story['intro']) != "")) {
  print "
    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 text\">";
  if(isset($story['intro'])) {
  print "
        ".$story['intro'];
  }
  // go through the snippets in the array and print text or image 
  foreach($story['snippets'] as $snippetid => $snippetvalues) {
    if(isset($snippetvalues['src'])) {
      print "
          <figure class=\"cms-image ".$snippetvalues['align']."\" style=\"max-width: 360px;\">
            <img src=\"".$snippetvalues['src']."\" style=\"max-width: 100%\" rel=\"resizable\" alt=\"\" />
            <figcaption>".$snippetvalues['title']."
               <span class=\"photographer\">
                 ".$snippetvalues['credits']."
               </span>
            </figcaption>
          </figure>";
    }
    if(isset($snippetvalues['text'])) {
      print "
        ".$snippetvalues['text'];
    }
  } // foreach($story['snippets']
  print "
      </div><!-- / .text -->
    </div><!-- / .row -->";
} // if(isset($story['snippets']))

print "
  </div><!-- / .content -->";
if(isset($story['text'])) {
  print "
  <div class=\"background_gradient\"></div>";
}
print "
<!-- end snippet ".pathinfo(__FILE__)['filename']." -->";
?>
