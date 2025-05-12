<?php require 'data.php'; ?>
   <!-- ***** Sub Header Start ***** -->
<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <ul class="info">
          <li><i class="fa fa-envelope"></i> <?= $contact_info['email'] ?></li>
          <li><i class="fa fa-map"></i> <?= $contact_info['location'] ?></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4">
        <ul class="social-links">
          <?php foreach ($social_links as $social): ?>
            <li><a href="<?= $social['url'] ?>" target="_blank"><i class="<?= $social['icon'] ?>"></i></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- ***** Sub Header End ***** -->
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- Logo -->
          <a href="index.php" class="logo">
            <h1>VILLAAGENCY</h1>
          </a>
          <!-- Menu -->
          <ul class="nav">
            <?php foreach ($menu_items as $item): ?>
              <li>
                <a href="<?= $item['link'] ?>" <?= isset($item['active']) && $item['active'] ? 'class="active"' : '' ?>>
                  <?= $item['title'] ?>
                </a>
              </li>
            <?php endforeach; ?>
           <li><a href="schedule-visit.php"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
          </ul>
          <a class='menu-trigger'><span>Menu</span></a>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->
