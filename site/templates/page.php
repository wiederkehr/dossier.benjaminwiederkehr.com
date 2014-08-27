<?= snippet('page-header') ?>
<?= snippet('meta') ?>

<div class="image-container header-image--<?= strtolower($page->title()) ?>">
  <div class="container">
    <div id="content-header" class="span-18 prepend-6 last">
      <h1><?= html($page->title()) ?></h1>
      <h2><?= html($site->author()) ?></h2>
      <p class="lead"><?= html($page->lead()) ?></p>
    </div>
  </div>
</div>
<div class="container">
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last page-content">
    <?= kirbytext($page->text()) ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <div id="sidebar" class="span-5 secondary">
    <?= snippet(strtolower($page->title().'-sidebar')) ?>
  </div>
</div><!-- .container -->
<?= snippet('page-footer') ?>