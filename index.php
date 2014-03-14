<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Raphaël Bastide</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="public/font/stylesheet.css">
  </head>
  <body>

<?php
$dir    = 'public/v';
$cleanDirs = array_diff(scandir($dir), array('..', '.'));
print_r($cleanDirs);


require_once('lib/Git.php');
$repo = Git::open('');

$branches = $repo->list_branches();
foreach ($branches as $branch) {
    echo $branch;
}

?> 
    <p><a href="mailto:bonjour@raphaelbastide.com">email</a> <a href="http://eepurl.com/o-nJj">newsletter</a> <a href="http://twitter.com/raphaelbastide">Twitter</a> <a href="https://github.com/raphaelbastide/">GitHub</a><p>
  </body>
</html>
