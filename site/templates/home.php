<?= snippet('home-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="content-header" class="span-24">
    <h1><?= html($page->title()) ?></h1>
    <h2><?= html($page->subtitle()) ?></h2>
    <p class="lead"><?= html($page->lead()) ?></p>
  </div>
</div>
<div class="container">
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-24">
    <div class="span-8">
      <div class="teaser teaser--vita">
        <a href="<?= url('/vita') ?>">Vita</a>
      </div>
    </div>
    <div class="span-8">
      <div class="teaser teaser--work">
        <a href="<?= url('/work') ?>">Work</a>
      </div>
    </div>
    <div class="span-8 last">
      <div class="teaser teaser--studio">
        <a href="<?= url('/studio') ?>">Studio</a>
      </div>
    </div>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <div id="credits" class="span-24 secondary">
    <h3 class="ui">Acknowledgement</h3>
    <?= kirbytext($site->acknowledgement()) ?>
  </div>
</div><!-- .container -->
<?= snippet('home-footer') ?>