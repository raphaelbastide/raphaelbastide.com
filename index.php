<?php
// Returns a set of images
function getImages($project_dir) {
  $images = glob("$project_dir/{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
  natsort($images);
  $images = array_values($images);
  return array_map(function($img) {
    $info = pathinfo($img);
    $name = basename($img, '.'.$info['extension']);
    $fullname = basename($img);
    $dimensions = imageDimensions($img);
    return (object)[
      'fullname' => $fullname,
      'name' => $name,
      'width' => $dimensions->width,
      'height' => $dimensions->height,
    ];
  }, $images);
}
// Returns the dimensions of a JPG, PNG, GIF or SVG image file
function imageDimensions($path) {
  $info = pathinfo($path);
  // SVG
  if ($info['extension'] === 'svg') {
    $svg = simplexml_load_file($path);
    $attrs = $svg->attributes();
    $width = (int)round($attrs->width);
    $height = (int)round($attrs->height);
    // Other formats
  } else {
    list($width, $height) = getimagesize($path);
  }
  return (object)[ 'width' => $width, 'height' => $height ];
}
// Get data from a cached file if it exists,
// otherwise call the function and set the cache file.
function getFromCache($name, $callback) {
  $path = __DIR__."/$name-cache.json";
  // Try to get the cached data
  if (file_exists($path)) {
    $rawData = file_get_contents($path);
    if ($rawData) return json_decode($rawData);
  }
  // Cache the data
  $data = $callback();
  file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));
  return $data;
}
?>
<!DOCTYPE html>
<!--
Made by Raphaël Bastide
Source code: https://github.com/raphaelbastide/raphaelbastide.com
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Raphaël Bastide</title>
  <link rel="stylesheet" href="public/font/stylesheet.css">
  <link rel="stylesheet" href="public/css/style.css">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="public/img/favicon.gif"/>
</head>
<body>
<main>
  <header>
    <h1>Raphaël Bastide</h1>
    <p>Art, code and graphic design.<br/>Uses, designs and modifies free software and alternative tools.</p>
    <p><a href="mailto:bonjour@raphaelbastide.com">Email</a> - <span class="formBtn">Newsletter</span> - <a href="http://twitter.com/raphaelbastide">Twitter</a> -  <a href="https://github.com/raphaelbastide/">GitHub</a> - <a href="http://raphaelbastide.com/keys/bitcoin.txt">Bitcoin</a> - <a href="http://raphaelbastide.com/keys/pgp.txt">PGP</a><p>
    <div id="newsletter-form">
      <form action="//raphaelbastide.us5.list-manage.com/subscribe/post?u=475756c12dd6e1f054910142e&amp;id=ad85720904" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <input type="email" value="" name="EMAIL" placeholder="Email address" class="required email" id="mce-EMAIL">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_475756c12dd6e1f054910142e_ad85720904" tabindex="-1" value=""></div>
        <input type="submit" value="➞ Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
      </form>
    </div>
  </header>
  <section id="diff">
    <h2><a target="_blank" href="http://raphaelbastide.com/diff/">Diff</a></h2>
    <p class="description">2015, project shown during a solo exhibition at Suzanne Gallery Brussels</p>
  </section>
  <section id="very-slow">
    <h2><a target="_blank" href="http://raphaelbastide.com/very-slow-and-approximative-browsing-experience-provider/">very slow and approximative browsing experience provider</a></h2>
    <p class="description">2014, a long title for a speed project</p>
  </section>
  <section id="marathonVTF">
    <h2><a target="_blank" href="http://velvetyne.fr/marathongeneral/">Vagabondage Typographique Festif </a></h2>
    <p class="description">2014, libre typography workshop</p>
  </section>
  <section id="usemodify">
    <h2><a target="_blank" href="http://usemodify.com/">Use &amp; Modify</a></h2>
    <p class="description">2014, font list</p>
  </section>
  <section id="ofont">
    <h2><a target="_blank" href="http://ofont.net/">ofont</a></h2>
    <p class="description">2014, online tool for font curration and classification</p>
  </section>
  <section id="esad2014">
    <h2><a target="_blank" href="http://raphaelbastide.com/esad2014/">Objets Versionnés</a></h2>
    <p class="description">2014, workshop at ESAD Valence</p>
  </section>
  <section id="steps-mono">
    <h2><a target="_blank" href="http://raphaelbastide.com/steps-mono/">Steps Mono</a></h2>
    <p class="description">2014, open source font designed with <a href="http://cargocollective.com/jbmrz">JB Morizot</a></p>
  </section>
  <section id="revisable1">
    <h2><a target="_blank" href="http://raphaelbastide.com/revisable/1">Révisable 1</a></h2>
    <p class="description">2013, personal exhibition at iMAL, Brussels</p>
  </section>
  <section id="branch">
    <h2><a target="_blank" href="http://raphaelbastide.com/branch/">BRANCH</a></h2>
    <p class="description">2013, personal exhibition at De La Charge, Brussels</p>
  </section>
  <section id="webdesign">
    <h2><a target="_blank" href="http://raphaelbastide.com/webdesign/">Webdesign</a></h2>
    <p class="description">Selection of commissioned websites</p>
  </section>
  <section id="volumes">
    <h2>Volumes</h2>
    <p class="description">2012, exhibition with <a href="http://kevinbray.biz/">Kevin Bray</a> at 22 Rue Muller, Paris</p>
  </section>
  <section id="lisezmoi">
    <h2><a target="_blank" href="http://lisezmoi.org/">LISEZMOI</a></h2>
    <p class="description">2012 to ∞, selection of projects made with <a href="http://pierrebertet.net/">Pierre Bertet</a></p>
  </section>
  <section id="parallax">
    <h2><a target="_blank" href="http://raphaelbastide.com/parallax/">Parallax</a></h2>
    <p class="description">2012, Dirty Web design workshop at Festival de l’Affiche et du Graphisme in Chaumont, France</p>
  </section>
  <section id="whois-mono">
    <h2><a target="_blank" href="https://github.com/raphaelbastide/Whois-mono/">Whois Mono</a></h2>
    <p class="description">2012, open source font</p>
  </section>
  <section id="1962">
    <h2><a target="_blank" href="http://raphaelbastide.com/1962/">1962</a></h2>
    <p class="description">2012, version-based installations</p>
  </section>
  <section id="scri.ch">
    <h2><a target="_blank" href="http://scri.ch">scri.ch</a></h2>
    <p class="description">2011, web app made with <a href="http://pierrebertet.net">Pierre Bertet</a></p>
  </section>
  <section id="terminal-grotesque">
    <h2><a target="_blank" href="https://github.com/raphaelbastide/Terminal-Grotesque">Terminal Grotesque</a></h2>
    <p class="description">2011, open source font</p>
  </section>
  <section id="digimp">
    <h2><a target="_blank" href="http://raphaelbastide.com/digimp/">DIGIMP</a></h2>
    <p class="description">2009, instrument for graphic improvisation</p>
  </section>
  <section id="screen-over-book">
    <h2><a target="_blank" href="http://raphaelbastide.com/screen-over-book/">Screen Over Blank Book</a></h2>
    <p class="description">2009, installation</p>
  </section>
  <section id="ecogex">
    <h2><a target="_blank" href="http://ecogex.com/">ECOGEX</a></h2>
    <p class="description">2009, persona, ongoing</p>
  </section>
  <section id="alice-leonards">
    <h2><a target="_blank" href="http://parthenogenic.com/">Alice Leonards</a></h2>
    <p class="description">2009, persona, ongoing</p>
  </section>
  <section id="fabien-mousse">
    <h2><a target="_blank" href="http://fabien-mousse.fr/">Fabien Mousse</a></h2>
    <p class="description">2008, persona, ongoing</p>
  </section>
  <section id="niei">
    <h2><a target="_blank" href="http://niei.neocities.org/">N.I.E.I.</a></h2>
    <p class="description">2008, persona, ongoing</p>
  </section>
  </main>
  <!-- <section id="deeper" class="hide">
    <h2><a target="_blank" href="">…</a></h2>
    <ul>Bonus:
      <li><a href="http://outilslibresalternatifs.org/">Outils Libres Alternatifs</a></li>
      <li><a href="http://libreobjet.org">Libre Objet</a></li>
      <li><a href="http://old.raphaelbastide.com">Old websites</a></li>
      <li><a href="http://bm.raphaelbastide.com">Bookmarks</a></li>
      <li><a href="http://music.raphaelbastide.com">Music</a></li>
      <li><a href="http://notesondesign.org/raphael-bastide/">Portrait par Sylvia Fredriksson, 2014</a></li>
      <li><a href="https://github.com/raphaelbastide/vomimage">Vomimage, punk image gallery</a></li>
      <li><a href="http://lab.raphaelbastide.com/minutehack/">Minute Hack</a></li>
    </ul>
  </section> -->
  <div class="images">
    <?php
    $images = getFromCache('images', function() {
      return getImages(__DIR__.'/public/projects');
    });
    shuffle($images);
    foreach ($images as $img): ?>
      <img src="public/projects/<?= $img->fullname ?>" id="<?= $img->name ?>-img" class="<?= $img->name ?>-img" width="<?= $img->width ?>" height="<?= $img->height ?>">
    <?php endforeach ?>
  </div>
</body>
<script src='public/js/bundle.js'></script>
</html>
