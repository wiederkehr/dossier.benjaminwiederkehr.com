<?= snippet('page-header') ?>
<?= snippet('meta') ?>

<div class="image-container header-image--<?= strtolower($page->title()) ?>">
  <div class="container">
    <div id="content-header" class="span-24 last">
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
      <h2 class="divider-headline">Projects</h2>
      <h2>Smart Cities</h2>
      <p class="projects__claim">Understanding urban structures in order to make them work better for people.</p>
      <div class="project project--candeo span-6">
        <div class="project__text vspan-2">
          <h3 class="project__name">Candeo</h3>
          <p class="project__description">
            <span class="project__tye">Academic Research</span>
            <span class="project__partner">ZHdK, 2008</span>
          </p>
        </div>
        <div class="project__image vspan-6">
          <a href="#">Visit Project</a>
        </div>
      </div>
      <div class="project project--youcity span-6">
        <div class="project__text vspan-2">
          <h3 class="project__name">YouCity</h3>
          <p class="project__description">
            <span class="project__tye">Academic Research</span>
            <span class="project__partner">ETH, 2009</span>
          </p>
        </div>
        <div class="project__image vspan-6">
          <a href="#">Visit Project</a>
        </div>
      </div>
      <div class="project project--ecoplace span-12 last">
        <div class="project__text vspan-2">
          <h3 class="project__name">Ecoplace Dashboard</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">AXA Winterthur, 2013</span>
          </p>
        </div>
        <div class="project__image vspan-6">
          <a href="#">Visit Project</a>
        </div>
      </div>
      <div class="project project--villevivante span-24">
        <div class="project__image vspan-10">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Ville Vivante</h3>
          <p class="project__description">
            <span class="project__tye">Exhibition Commission</span>
            <span class="project__partner">City of Geneva, 2012</span>
          </p>
        </div>
      </div>
    </div>
    <div class="work-projects">
      <h3>Open Research</h3>
      <p class="projects__claim">Making scientific insights accessible and understandable to anyone.</p>
      <div class="project project--wide span-9">
        <div class="project__image vspan-14">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">WIDE</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">UNESCO, 2012</span>
          </p>
        </div>
      </div>
      <div class="project project--zhaw span-9">
        <div class="project__image vspan-14">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Competence Browser</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">ZHAW, 2014</span>
          </p>
        </div>
      </div>
      <div class="project project--wef span-6 last">
        <div class="project__image vspan-4">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Global Agenda Councils</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">WEF, 2012</span>
          </p>
        </div>
      </div>
      <div class="project project--snsf span-6 last">
        <div class="project__image vspan-4">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Portfolio Browser</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">SNSF, 2013</span>
          </p>
        </div>
      </div>
    </div>
    <div class="work-projects">
      <h3>Personal Finance</h3>
      <p class="projects__claim">Democratizing knowledge about economics and increase financial literacy.</p>
      <div class="project project--ewm span-14">
        <div class="project__text vspan-2">
          <h3 class="project__name">Wealth Management Application</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">EWM, 2011</span>
          </p>
        </div>
        <div class="project__image vspan-6">
          <a href="#">Visit Project</a>
        </div>
      </div>
      <div class="project project--allfinance span-10 last">
        <div class="project__text vspan-2">
          <h3 class="project__name">All-Finance Platform</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">NZZ Media Group, 2013</span>
          </p>
        </div>
        <div class="project__image vspan-6">
          <a href="#">Visit Project</a>
        </div>
      </div>
      <div class="project project--hellowallet span-10">
        <div class="project__image vspan-10">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Savings Management Application</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">Hello Wallet, 2012</span>
          </p>
        </div>
      </div>
      <div class="project project--master span-14 last">
        <div class="project__image vspan-10">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Exploratory Tools for Personal Finance</h3>
          <p class="project__description">
            <span class="project__tye">Academic Research</span>
            <span class="project__partner">ZHdK, 2014</span>
          </p>
        </div>
      </div>
    </div>
    <div class="work-projects">
      <h3>Interactive Storytelling</h3>
      <p class="projects__claim">Telling data-driven narratives with an open intent and meaningful impact.</p>
      <div class="project project--frauenwelten span-12">
        <div class="project__image vspan-10">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Frauenwelten</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">Neue Zürcher Zeitung, 2013</span>
          </p>
        </div>
      </div>
      <div class="project project--lobbyisten span-12 last">
        <div class="project__image vspan-10">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Lobbyisten</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">Neue Zürcher Zeitung, 2014</span>
          </p>
        </div>
      </div>
      <div class="project project--weltenbrand span-12">
        <div class="project__image vspan-10">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Weltenbrand</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">Neue Zürcher Zeitung, 2014</span>
          </p>
        </div>
      </div>
      <div class="project project--fukushima span-12 last">
        <div class="project__image vspan-10">
          <a href="#">Visit Project</a>
        </div>
        <div class="project__text vspan-2">
          <h3 class="project__name">Fukushima</h3>
          <p class="project__description">
            <span class="project__tye">Commercial Project</span>
            <span class="project__partner">Neue Zürcher Zeitung, 2013</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div><!-- .container -->
<?= snippet('page-footer') ?>