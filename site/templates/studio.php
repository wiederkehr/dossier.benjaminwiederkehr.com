<?= snippet('page-header') ?>
<?= snippet('meta') ?>

<div class="image-container header-image--<?= strtolower($page->title()) ?>">
  <div class="container">
    <div id="content-header" class="span-24">
      <h1><?= html($page->title()) ?></h1>
      <h2><?= html($site->author()) ?></h2>
      <p class="lead"><?= html($page->lead()) ?></p>
    </div>
  </div>
</div>
<div class="container">
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-24 page-content">
    <div class="team-members">
      <h2 class="divider-headline">Partners</h2>
      <div class="member span-5 append-19 last">
        <h3 class="member__name">Benjamin Wiederkehr</h3>
        <p class="member__description">
          <span class="member__role">Managing Director</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Christian Siegrist</h3>
        <p class="member__description">
          <span class="member__role">Design Lead</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Christoph Schmid</h3>
        <p class="member__description">
          <span class="member__role">Experience Lead</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Jeremy Stucki</h3>
        <p class="member__description">
          <span class="member__role">Visualization Lead</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1 last">
        <h3 class="member__name">Peter Gassner</h3>
        <p class="member__description">
          <span class="member__role">Engineering Lead</span>
          <span class="member__title">MA Interaction Design</span>
        </p>
      </div>
    </div>
    <div class="team-members">
      <h2 class="divider-headline">Employees</h2>
      <div class="member span-5 append-1">
        <h3 class="member__name">Ilya Boyandin</h3>
        <p class="member__description">
          <span class="member__role">Visualization Engineer</span>
          <span class="member__title">PhD Software Engineer</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Jan Wächter</h3>
        <p class="member__description">
          <span class="member__role">Interaction Designer</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Jonas Wyssen</h3>
        <p class="member__description">
          <span class="member__role">Interaction Design Intern</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1 last">
        <h3 class="member__name">Julia Punnacherry</h3>
        <p class="member__description">
          <span class="member__role">Studio Manager</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Mark Hintz</h3>
        <p class="member__description">
          <span class="member__role">Interaction Engineer</span>
          <span class="member__title">BA Computer Science</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Piotr Fedorczyk</h3>
        <p class="member__description">
          <span class="member__role">Interaction Engineer</span>
          <span class="member__title">BA Linguisitcs</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Tania Boa</h3>
        <p class="member__description">
          <span class="member__role">Interaction Designer</span>
          <span class="member__title">MA Interaction Design</span>
        </p>
      </div>
    </div>
    <div class="team-members">
      <h2 class="divider-headline">Alumni</h2>
      <div class="member span-5 append-1">
        <h3 class="member__name">Christian Gross</h3>
        <p class="member__description">
          <span class="member__role">Interaction Design Intern</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Estelle Hary</h3>
        <p class="member__description">
          <span class="member__role">Interaction Design Intern</span>
          <span class="member__title">BA Interaction Design</span>
        </p>
      </div>
      <div class="member span-5 append-1">
        <h3 class="member__name">Flavio Gortana</h3>
        <p class="member__description">
          <span class="member__role">Interaction Design Intern</span>
          <span class="member__title">BSc Computer Science</span>
        </p>
      </div>
      <div class="member span-5 append-1 last">
        <h3 class="member__name">Martina Franzen</h3>
        <p class="member__description">
          <span class="member__role">Interaction Design Intern</span>
          <span class="member__title">MA Interaction Design</span>
        </p>
      </div>
    </div>
  </div>
</div><!-- .container -->
<?= snippet('page-footer') ?>