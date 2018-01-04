<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= html($site->title()) ?></title>
  <!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?= html($site->description()) ?>" />
  <meta name="Keywords" content="<?= html($site->keywords()) ?>" />
  <meta name="Author" content="<?= html($site->author()) ?>" />
  <meta name="Copyright" content="<?= $site->copyright() ?>" />
  <meta name="Distribution" content="Global" />
  <meta name="Language" content="EN" />
  <meta name="Robots" content="noindex" />
  <!-- ——————————————————————————————————————————————————————————————————— OPEN GRAPH -->
  <meta property="og:url" content="<?= html($site->url()) ?>" />
  <meta property="og:title" content="<?= html($site->title()) ?>" />
  <meta property="og:site_name" content="<?= html($site->name()) ?>" />
  <meta property="og:description" content="<?= html($site->description()) ?>" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@wiederkehr">
  <meta name="twitter:creator" content="@wiederkehr">
  <!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
  <meta property="og:image" content="<?= html($site->url()) ?>/assets/img/benjaminwiederkehr_photo.png" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="<?= html($site->url()) ?>/assets/img/favicon.ico" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?= css('assets/css/style.css') ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <script src="http://use.typekit.com/aea1puq.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
</head>

<body>
