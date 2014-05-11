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
      <p>Art, code and graphic design.<br/>Lives and Works in Paris.<br/>Uses, design and modify free software and alternative tools.</p>
      <p><a href="mailto:bonjour@raphaelbastide.com">Email</a> - <a href="http://eepurl.com/o-nJj">Newsletter</a> - <a href="http://twitter.com/raphaelbastide">Twitter</a> - <a href="https://github.com/raphaelbastide/">GitHub</a><p>
    </header>
    <main>
      <section class="recent" id="usemodify">
        <p><a href="http://usemodify.com/">Use & Modify</a> is a libre font list I curate.</p>
      </section>
      <section class="recent" id="ofont">
        <p><a href="http://ofont.net/">ofont</a> is an online tool for font classification. <a href="https://github.com/raphaelbastide/ofont">Download</a> the sources on GitHub.</p>
      </section>
      <section class="recent" id="esad-2014">
        <p>Workshop ESAD Valence <a href="http://raphaelbastide.com/esad2014/">« Objets versionnés »</a>.</p>
        <time>2014 April</time>
      </section>
      <section id="lgm-usemodify">
        <p>Talk at Libre Graphics Meeting <a href="#usemodify">Use & Modify</a>.</p>
        <time>2014 March</time>
      </section>
      <section id="revisable-1">
        <p>Personal exhibition <a href="http://raphaelbastide.com/revisables/">Révisable B</a> at iMAL, Brussels.</p>
        <time>2013 August</time>
      </section>
      <section id="branch">
        <p>Personal exhibition <a href="http://raphaelbastide.com/branch/">BRANCH</a> at De La Charge, Brussels.</p>
        <time>2013 February</time>
      </section>
      <section id="volumes">
        <p>Exhibition “Volumes” with <a href="http://kevinbray.biz/">Kevin Bray</a> at 22 Rue Muller, Paris.</p>
        <time>2012 November</time>
      </section>
      <section id="parallax">
        <p>Dirty Web design workshop <a href="http://raphaelbastide.com/parallax/">Parallax</a> at Festival de l’Affiche et du Graphisme in Chaumont, France.</p>
        <time>2012 June</time>
      </section>
      <section id="fabien-mousse">
        <p>Creation of the persona <a href="http://fabien-mousse.fr/">Fabien Mousse</a>.</p>
        <time>2008 December</time>
      </section>
      <section id="niei">
        <p>Creation of the persona <a href="http://niei.neocities.org/">Network Identity Experiment Institute</a>.</p>
        <time>2008 February</time>
      </section>
    </main>
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
