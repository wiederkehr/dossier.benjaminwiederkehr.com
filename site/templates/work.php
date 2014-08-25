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
  <div id="content" class="span-24 page-content">
    <div class="work-projects">
      <h2 class="divider-headline">Smart Cities</h2>
      <div class="member span-5 append-19 last">
        <h3 class="member__name">Benjamin Wiederkehr</h3>
        <p class="member__description">
          <span class="member__role">Managing Director</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
    </div>
    <div class="work-projects">
      <h2 class="divider-headline">Personal Finance</h2>
      <div class="member span-5 append-19 last">
        <h3 class="member__name">Benjamin Wiederkehr</h3>
        <p class="member__description">
          <span class="member__role">Managing Director</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
    </div>
    <div class="work-projects">
      <h2 class="divider-headline">Open Research</h2>
      <div class="member span-5 append-19 last">
        <h3 class="member__name">Benjamin Wiederkehr</h3>
        <p class="member__description">
          <span class="member__role">Managing Director</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
    </div>
    <div class="work-projects">
      <h2 class="divider-headline">Interactive Storytelling</h2>
      <div class="member span-5 append-19 last">
        <h3 class="member__name">Benjamin Wiederkehr</h3>
        <p class="member__description">
          <span class="member__role">Managing Director</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
    </div>
  </div>
</div><!-- .container -->
<?= snippet('page-footer') ?>