<?= snippet('home-header') ?>

<div class="container">
  <div id="header" class="span-24">
    <h1 class="logo">
      <a href="<?= url('/') ?>" rel="me" title="<?php echo h($site->title()) ?>">
        <img src="<?= url('assets/img/logos/benjaminwiederkehr_logo.png') ?>" width="230" height="110" alt="<?= html($site->title()) ?>" />
      </a>
    </h1>
  </div>
  <div id="content-header" class="span-24 home">
    <h1><?= html($page->title()) ?></h1>
    <h2><?= html($page->subtitle()) ?></h2>
    <p class="lead"><?= html($page->lead()) ?></p>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-24">
    <div class="span-7 append-1">
      <h2><a href="<?= url('/vita') ?>">Vita</a></h2>
      <p><?= html($page->vita()) ?></p>
    </div>
    <div class="span-7 append-1">
      <h2><a href="<?= url('/work') ?>">Work</a></h2>
      <p><?= html($page->work()) ?></p>
    </div>
    <div class="span-7 last">
      <h2><a href="<?= url('/studio') ?>">Studio</a></h2>
      <p><?= html($page->studio()) ?></p>
    </div>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <div id="credits" class="span-24 secondary">
    <h3 class="ui">Acknowledgement</h3>
    <p><?= html($site->copyright()) ?>. Built with <a href="http://getkirby.com/">Kirby</a> and running smoothly on a <a href="http://hostpoint.ch" title="">Hostpoint</a> Server.</p>
  </div>
</div><!-- .container -->
<?= snippet('home-footer') ?>