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
    <div class="row">
      <h2 class="divider-headline">Expertise</h2>
      <div class="span-11 append-1">
        <h3>User Experience Design</h3>
        <p class="expertise__item">User Experience Design is a way to work on digital products and services that looks closely at how real people actually use them. Interactive Things helps their clients to apply this design method and to benefit from the results of truly user-centred design solutions.</p>
      </div>
      <div class="span-11 append-1 last">
        <h3>Data Visualization</h3>
        <p class="expertise__item">Data Visualization is a powerful way to explore, understand and communicate insights burried in vast amounts of raw data. By building bespoke data visualizations 
Interactive Things helps their clients to work smarter, make better decisions and tell more compelling stories.</p>
      </div>
    </div>
    <div class="row">
      <h2 class="divider-headline">Clients</h2>
      <div class="span-12">
        <h3>Non-profit Organizations</h3>
        <p class="clients__list">United Nations (UNDP &amp; UNESCO), World Economic Forum (WEF), Swiss Confederation, Democracy International, Social Progress Imperative, Open Knowledge Foundation (OKNF)</p>
      </div>
      <div class="span-12 last">
        <h3>Academic Institutions</h3>
        <p class="clients__list">Swiss National Science Foundation (SNSF), ETH Zürich, Zürich University of the Arts (ZHdK), University St. Gallen (HSG), Zürich University of Applied Science (ZHAW), Università Iuav di Venezia (IUAV), FH Potsdam</p>
      </div>
      <div class="span-11 append-1">
        <h3>Media Companies</h3>
        <p class="clients__list">Neue Zürcher Zeitung (NZZ), National Geographic, John Wiley &amp; Sons Publishing, TagesWoche, Le Temps, Springer</p>
      </div>
      <div class="span-11 append-1 last">
        <h3>Technology Startups</h3>
        <p class="clients__list">Mozilla, HelloWallet, Thumbtack, FreshBooks, Bundle, Livebeats, Scandit, Lift</p>
      </div>
      <div class="span-11 append-1">
        <h3>Financial Service Providers</h3>
        <p class="clients__list">UBS, Credit Suisse, Raiffeisen, RBS Coutts, Cornercard, Globalance, Eurex, Executive Wealth Management (EWM)</p>
      </div>
      <div class="span-11 append-1 last">
        <h3>For-profit Corporations</h3>
        <p class="clients__list">Swisscom, Migros, AXA Winterthur, Swiss Post, UEFA, FIFA, PricewaterhouseCoopers (PwC)</p>
      </div>
    </div>
    <div class="row">
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
    <div class="row">
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
    <div class="row">
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