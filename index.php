<?php 
/*
 *    @license    http://www.gnu.org/licenses/gpl.txt
 *    @copyright  2014,2015 Sourcefabric z.u.
 *    @link       http://www.sourcefabric.org
 *    @author     Micz Flor <micz.flor@sourcefabric.org>
*/

// read the JSON file
$storyboard = json_decode(file_get_contents("storyboard.json"), true); // use true to make it an array

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" id="modernizrcom" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php print $storyboard['meta']['title']; ?></title>
  <meta name="author" content="Micz Flor" >
  
  <meta name="description" content="<?php print $storyboard['meta']['description']; ?>">
  
  <meta name="keywords" content="" />

  <!-- RSS & Pingback -->
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php print $storyboard['meta']['rsspingback']; ?>">

  <meta property="og:title"       content="<?php print $storyboard['meta']['title']; ?>" />
  <meta property="og:type"        content="article" />
  <meta property="og:url"         content="<?php print $storyboard['meta']['src']; ?>" />
  <meta property="og:site_name"   content="<?php print $storyboard['meta']['site_name']; ?>" />
  <meta property="og:description" content="<?php print $storyboard['meta']['description']; ?>" />
  <meta property="og:image"       content="<?php print $storyboard['meta']['site_img']; ?>" />

  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link rel="apple-touch-icon" href="assets/img/touch-icon.png">

  <link href="assets/css/style.css" rel="stylesheet">
  
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script-->
  <script src="assets/js/jquery2.1.3.min.js"></script>
  
</head>

<body class="longform" name="top">

<?php
if($storyboard['meta']['share']['facebook'] == "true") {
print "
  <div id='fb-root'></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>";
}
?>

<div id="loader-wrapper" >
  
  <div id="loader-image" data-src="<?php print $storyboard['meta']['site_img']; ?>" ></div>
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>

  <!-- main audio -->
  <audio id="master-audio" preload="none" autoplay="autoplay" loop="loop"></audio>
  <a href="#" class="mute">Mute</a>
    

<?php 

// first loop for table of contents, second loop for content itself

// first loop for table of contents

include("php-snippets/navigation.php"); 

print "
<article>";

// second loop for content itself

foreach($storyboard['items'] as $storycounter => $values) {
  //print "<pre>";print key($values);print_r($values);print "</pre>";//???
  $story = $values[key($values)]; // get the story into an array without the key
  switch(key($values)) {
    case ("videobackground"):
      include("php-snippets/videobackground.php");
      break;
    case ("textcentered"):
      include("php-snippets/textcentered.php");
      break;
    case ("imagebackground"):
      include("php-snippets/imagebackground.php");
      break;
    case ("videofullpage"):
      include("php-snippets/videofullpage.php");
      break;
    case ("slideshowhorizontal"):
      include("php-snippets/slideshowhorizontal.php");
      break;
    case ("slideshowvertical"):
      include("php-snippets/slideshowvertical.php");
      break;
    case ("imageparallax"):
      include("php-snippets/imageparallax.php");
      break;
  }
}

?>



</article>

<div class="social-buttons credits">
<?php
include("php-snippets/sub-socialbuttons.php");
?>
</div>	

<script src="assets/js/all.js"></script>

</body>
</html>
