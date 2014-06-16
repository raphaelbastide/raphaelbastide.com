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
        <h1>Raphaël Bastide</h1>
          <p>Art, code and graphic design.<br/>Lives and Works in Paris.<br/>Uses, designs and modifies free software and alternative tools.</p>
          <p><a href="mailto:bonjour@raphaelbastide.com">Email</a> - <a href="http://raphaelbastide.com/keys/pgp.txt">PGP</a> - <a href="http://eepurl.com/o-nJj">Newsletter</a> - <a href="http://twitter.com/raphaelbastide">Twitter</a> - <a href="https://github.com/raphaelbastide/">GitHub</a> - <a href="http://raphaelbastide.com/keys/bitcoin.txt">Bitcoin</a><h2>
      </header>
      <section id="usemodify">
        <h2><a href="http://usemodify.com/">Use & Modify</a></h2>
        <p class="description">2014, font list</p>
      </section>
      <section id="ofont">
        <h2><a href="http://ofont.net/">ofont</a></h2>
        <p class="description">2014, online tool for font curration and classification</p>
      </section>
      <section id="esad2014">
        <h2><a href="http://raphaelbastide.com/esad2014/">Objets Versionnés</a></h2>
        <p class="description">2014, workshop at ESAD Valence</p>
      </section>
      <section id="steps-mono">
        <h2><a href="https://github.com/raphaelbastide/Whois-mono/">Steps Mono</a></h2>
        <p class="description">2014, open source font designed with <a href="http://cargocollective.com/jbmrz">JB Morizot</a></p>
      </section>
      <section id="revisable1">
        <h2><a href="http://raphaelbastide.com/revisables/">Révisable 1</a></h2>
        <p class="description">2013, personal exhibition at iMAL, Brussels</p>
      </section>
      <section id="branch">
        <h2><a href="http://raphaelbastide.com/branch/">BRANCH</a></h2>
        <p class="description">2013, personal exhibition at De La Charge, Brussels</p>
      </section>
      <section id="volumes">
        <h2>Volumes</h2>
        <p class="description">2012, exhibition with <a href="http://kevinbray.biz/">Kevin Bray</a> at 22 Rue Muller, Paris</p>
      </section>
      <section id="parallax">
        <h2><a href="http://raphaelbastide.com/parallax/">Parallax</a></h2>
        <p class="description">2012, Dirty Web design workshop at at Festival de l’Affiche et du Graphisme in Chaumont, France</p>
      </section>
      <section id="whois-mono">
        <h2><a href="https://github.com/raphaelbastide/Whois-mono/">Whois Mono</a></h2>
        <p class="description">2012, open source font</p>
      </section>
      <section id="1962">
        <h2><a href="http://raphaelbastide.com/1962/">1962</a></h2>
        <p class="description">2012, versioned sculpture</p>
      </section>
      <section id="scri.ch">
        <h2><a href="http://scri.ch">scri.ch</a></h2>
        <p class="description">2011, web app</p>
      </section>
      <section id="terminal-grotesque">
        <h2><a href="https://github.com/raphaelbastide/Terminal-Grotesque">Terminal Grotesque</a></h2>
        <p class="description">2011, open source font</p>
      </section>      
      <section id="skypapers">
        <h2><a href="http://lab.raphaelbastide.com/skypapers/">Skypapers</a></h2>
        <p class="description">2011, curation</p>
      </section>
      <section id="digimp">
        <h2><a href="http://raphaelbastide.com/digimp/">DIGIMP</a></h2>
        <p class="description">2009, instrument for graphic improvisation</p>
      </section>
      <section id="screen-over-book">
        <h2><a href="http://raphaelbastide.com/screen-over-book/">Screen Over Blank Book</a></h2>
        <p class="description">2009, installation</p>    
      </section>
      <section id="fabien-mousse">
        <h2><a href="http://fabien-mousse.fr/">Fabien Mousse</a></h2>
        <p class="description">2008, persona ongoing</p>
      </section>
      <section id="niei">
        <h2><a href="http://niei.neocities.org/">N.I.E.I.</a></h2>
        <p class="description">2008, persona ongoing</p>
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
