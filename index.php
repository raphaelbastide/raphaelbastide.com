<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Raphaël Bastide</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="public/img/favicon.gif"/>
    <link rel="stylesheet" href="public/font/stylesheet.css">
  </head>
  <body>
    <main>
      <header>
        <p>Raphaël Bastide</p>
        <img src="public/img/favicon-paused.gif">
          <p>Art, code and graphic design.<br/>Lives and Works in Paris.<br/>Uses, designs and modifies free software and alternative tools.</p>
          <p><a href="mailto:bonjour@raphaelbastide.com">Email</a> - <a href="http://raphaelbastide.com/keys/pgpkey.txt">PGP</a> - <a href="http://eepurl.com/o-nJj">Newsletter</a> - <a href="http://twitter.com/raphaelbastide">Twitter</a> - <a href="https://github.com/raphaelbastide/">GitHub</a> - <a href="http://raphaelbastide.com/keys/bitcoin.txt">Bitcoin Adress</a><p>
      </header>
      <section class="recent" id="usemodify">
        <p><a href="http://usemodify.com/">Use & Modify</a> is a libre font list I curate.</p>
      </section>
      <section class="recent" id="ofont">
        <p><a href="http://ofont.net/">ofont</a> is an online tool for font classification. <a href="https://github.com/raphaelbastide/ofont">Download</a> the sources on GitHub.</p>
      </section>
      <section class="recent" id="esad2014">
        <p>Workshop ESAD Valence <a href="http://raphaelbastide.com/esad2014/">Objets Versionnés</a>.</p>
        <time>2014 April</time>
      </section>
      <section id="lgm-usemodify">
        <p>Talk at Libre Graphics Meeting: <a href="#usemodify">Use & Modify</a>.</p>
        <time>2014 March</time>
      </section>
      <section id="steps-mono">
        <p><a href="https://github.com/raphaelbastide/Whois-mono/">Steps Mono</a> designed with <a href="http://cargocollective.com/jbmrz">JB Morizot</a> (Open Font License)</p>
        <time>2014</time>
      </section>
      <section id="revisable1">
        <p>Personal exhibition <a href="http://raphaelbastide.com/revisables/">Révisable 1</a> at iMAL, Brussels.</p>
        <time>2013 August</time>
      </section>
      <section id="branch">
        <p>Personal exhibition <a href="http://raphaelbastide.com/branch/">BRANCH</a> at De La Charge, Brussels.</p>
        <time>2013 February</time>
      </section>
      <section id="volumes">
        <p>Exhibition Volumes with <a href="http://kevinbray.biz/">Kevin Bray</a> at 22 Rue Muller, Paris.</p>
        <time>2012 November</time>
      </section>
      <section id="parallax">
        <p>Dirty Web design workshop <a href="http://raphaelbastide.com/parallax/">Parallax</a> at Festival de l’Affiche et du Graphisme in Chaumont, France</p>
        <time>2012 June</time>
      </section>
      <section id="whois-mono">
        <p><a href="https://github.com/raphaelbastide/Whois-mono/">Whois Mono</a> (Open Font License)</p>
        <time>2012 June</time>
      </section>
      <section id="1962">
        <p><a href="http://raphaelbastide.com/1962/">1962</a></p>
        <time>2012 February</time>
      </section>
      <section id="skypapers">
        <p><a href="http://lab.raphaelbastide.com/skypapers/">Skypapers</a></p>
        <time>2011 October</time>
      </section>
      <section id="digimp">
        <p>Graphic improvisations using <a href="http://raphaelbastide.com/digimp/">DIGIMP</a></p>
        <time>2009</time>
      </section>
      <section id="screen-over-book">
        <p><a href="http://raphaelbastide.com/screen-over-book/">Screen Over Blank Book</a></p>
        <time>2009</time>
      </section>
      <section id="fabien-mousse">
        <p><a href="http://fabien-mousse.fr/">Fabien Mousse</a></p>
        <time>2008, ongoing</time>
      </section>
      <section id="niei">
        <p><a href="http://niei.neocities.org/">N.I.E.I.</a></p>
        <time>2008, ongoing</time>
      </section>
    </main>
    <div class="images cycle-slideshow cycle-next" 
      data-cycle-loader="true"
      data-cycle-random="true"
      data-cycle-log="false"
      data-cycle-fx="fadeout"
      data-cycle-swipe="true"
      data-cycle-swipe-fx="scrollHorz"
      data-cycle-pause-on-hover="true"
      data-cycle-timeout="7000"
      data-cycle-loader=true
      data-cycle-progressive="#loader"
      data-cycle-next=".cycle-next"
      data-cycle-speed="70">
<!--  <img src='public/projects/40.jpg' id='40-img' class='cycle-next' width='1200' height='803' />
      <script id="loader" type="text/cycle">-->
        <?
        $directory = "public/projects/";
        $images = glob($directory."{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
        natsort($images);
        foreach ($images as $img) {
          $info = pathinfo($img);
          $imageName =  basename($img,'.'.$info['extension']);
          list($width, $height, $type, $attr)= getimagesize($img);
          echo "<img src='$img' id='".$imageName."-img' class='".$imageName."-img' width='$width' height='$height' /> \n";
        }
        ?>
<!--   </script>-->
    </div>
    <script src='public/js/jquery.js'></script>
    <script src='public/js/cycle.js'></script>
    <script src='public/js/jquery.jsPlumb-1.4.0-all.js'></script>
    <script src='public/js/main.js'></script>
  </body>
</html>
