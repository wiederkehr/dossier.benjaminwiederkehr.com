<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= html($page->title()) ?> &mdash; <?= html($site->author()) ?></title>
  <!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?= excerpt($page->text(), 300) ?>" />
  <meta name="Keywords" content="<?= html($site->keywords()) ?>" />
  <meta name="Author" content="<?= html($site->author()) ?>" />
  <meta name="Copyright" content="<?= $site->copyright() ?>" />
  <meta name="Distribution" content="Global" />
  <meta name="Language" content="EN" />
  <meta name="Robots" content="noindex" />
  <!-- ——————————————————————————————————————————————————————————————————— OPEN GRAPH -->
  <meta property="og:url" content="<?= html($page->url()) ?>" />
  <meta property="og:title" content="<?= html($page->title()) ?>" />
  <meta property="og:site_name" content="<?= html($site->name()) ?>" />
  <meta property="og:description" content="<?= excerpt($page->text(), 300) ?>" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@wiederkehr">
  <meta name="twitter:creator" content="@wiederkehr">
  <!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
  <meta property="og:image" content="<?= html($site->url()) ?>/assets/img/teaser_<?= strtolower($page->title()) ?>.png" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="<?= html($site->url()) ?>/assets/img/favicon.ico" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?= css('assets/css/style.css') ?>
  <?= css('assets/css/responsive.css') ?>
  <?= css('assets/css/dossier.css') ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <script src="http://use.typekit.com/aea1puq.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
</head>

<body class="body--<?= strtolower($page->title()) ?>">
