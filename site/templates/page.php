<?= snippet('page-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="content-header" class="span-18 prepend-6 last">
    <h1><?= html($page->title()) ?></h1>
    <h2><?= html($page->subtitle()) ?></h2>
    <p class="lead"><?= html($page->lead()) ?></p>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last page-content">
    <?= kirbytext($page->text()) ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <div id="sidebar" class="span-5 secondary">
    <h3 class="sidebar-title ui">Résumé</h3>
    <ul class="sidebar-content">
      <li><a href="#section-1-1">Practice</a></li>
      <li><a href="#section-1-2">Research</a></li>
      <li><a href="#section-1-3">Writing</a></li>
      <li><a href="#section-1-4">Mandates</a></li>
      <li><a href="#section-1-4">Speaking</a></li>
      <li><a href="#section-1-4">Exhibitions</a></li>
      <li><a href="#section-1-4">Coverages</a></li>
      <li><a href="#section-1-4">Publications</a></li>
      <li><a href="#section-1-4">Recognitions</a></li>
    </ul>
    <h3 class="sidebar-title ui">Curriculum Vitae</h3>
    <ul class="sidebar-content">
      <li><a href="#section-2-1">Personal</a></li>
      <li><a href="#section-2-2">Education</a></li>
      <li><a href="#section-2-3">Experience</a></li>
      <li><a href="#section-2-4">Activities</a></li>
      <li><a href="#section-2-5">Languages</a></li>
      <li><a href="#section-2-6">Expertiese</a></li>
      <li><a href="#section-2-7">Tuition</a></li>
      <li><a href="#section-2-8">Presentations</a></li>
      <li><a href="#section-2-9">Advisory</a></li>
    </ul>
  </div>
</div><!-- .container -->
<?= snippet('page-footer') ?>