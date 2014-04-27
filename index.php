<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Raphaël Bastide</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/font/stylesheet.css">
  </head>
  <body>
    <header>
    <p>Raphaël Bastide</p>
    <p>Graphic designer, coder, artist.<br/>Lives and Works in Paris.<br/>Uses, design and modify free software.</p>
    <p><a href="mailto:bonjour@raphaelbastide.com">Email</a> - <a href="http://eepurl.com/o-nJj">Newsletter</a> - <a href="http://twitter.com/raphaelbastide">Twitter</a> - <a href="https://github.com/raphaelbastide/">GitHub</a><p>
    </header>
    <p class="recent"><a href="http://raphaelbastide.com/esad2014/">Workshop ESAD Valence</a></p>
    <div class="images cycle-slideshow" 
      data-cycle-loader="true"
      data-cycle-random="true"
      data-cycle-log="false"
      data-cycle-fx="fadeout"
      data-cycle-swipe="true"
      data-cycle-swipe-fx="scrollHorz"
      data-cycle-pause-on-hover="true"
      data-cycle-timeout="5000"
      data-cycle-speed="100">
      <?
      $directory = "public/projects/";
      $images = glob($directory."{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
      natsort($images);
      foreach ($images as $img) {
        $info = pathinfo($img);
        $imageName =  basename($img,'.'.$info['extension']);
        list($width, $height, $type, $attr)= getimagesize($img);
        echo "<img src='$img' class='cycle-next ".$imageName."' width='$width' height='$height' /> \n";
      }
      ?>
    </div>
    <script src='public/js/jquery.js'></script>
    <script src='public/js/cycle.js'></script>
    <script src='public/js/main.js'></script>
  </body>
</html>
