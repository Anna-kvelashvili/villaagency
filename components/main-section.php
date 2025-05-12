<?php require 'data.php'; ?>
<div class="main-banner">
  <div class="owl-carousel owl-banner">
    <?php
    $banners = [
      ["city" => "Toronto", "country" => "Canada", "text" => "Hurry!Get the Best Villa for you", "class" => "item-1"],
      ["city" => "Melbourne", "country" => "Australia", "text" => "Be Quick!Get the best villa in town", "class" => "item-2"],
      ["city" => "Miami", "country" => "South Florida", "text" => "Act Now!Get the highest level penthouse", "class" => "item-3"]
    ];
    foreach ($banners as $banner): ?>
      <div class="item <?= htmlspecialchars($banner['class']); ?>">
        <div class="header-text">
          <span class="category"><?= htmlspecialchars($banner['city']); ?>, <em><?= htmlspecialchars($banner['country']); ?></em></span>
          <h2><?= htmlspecialchars($banner['text']); ?></h2>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div class="featured section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="left-image">
          <img src="assets/images/featured.jpg" alt="">
          <a href="property-details.html">
            <img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;">
          </a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="section-heading">
          <h6> Featured</h6>
          <h2>Best Appartment &amp; Sea view</h2>
        </div>

        <!-- Accordion Section -->
        <div class="accordion" id="accordionExample">
          <?php
          $accordion = [
            ["id" => "One", "title" => "Best useful links ?", "body" => 'Get <strong>the best villa</strong> Lorem... <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank"></a>.', "show" => true],
            ["id" => "Two", "title" => "How does this work ?", "body" => 'Dolor <strong>almesit amet</strong>...'],
            ["id" => "Three", "title" => "Why is Villa Agency the best ?", "body" => 'Dolor <strong>almesit amet</strong>...']
          ];

          foreach ($accordion as $item):
            $show = isset($item['show']) ? $item['show'] : false;
            $collapseId = 'collapse' . $item['id'];
            $headingId = 'heading' . $item['id'];
          ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="<?= $headingId; ?>">
                <button class="accordion-button <?= $show ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId; ?>" aria-expanded="<?= $show ? 'true' : 'false'; ?>" aria-controls="<?= $collapseId; ?>">
                  <?= $item['title']; ?>
                </button>
              </h2>
              <div id="<?= $collapseId; ?>" class="accordion-collapse collapse<?= $show ? ' show' : ''; ?>" aria-labelledby="<?= $headingId; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body"><?= $item['body']; ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Info Table Section -->
      
        <div class="info-table">
          <ul>
            <?php
            $infos = [
              ["img" => "info-icon-01.png", "title" => "250 m2", "desc" => "Total Flat Space"],
              ["img" => "info-icon-02.png", "title" => "Contract", "desc" => "Contract Ready"],
              ["img" => "info-icon-03.png", "title" => "Payment", "desc" => "Payment Process"],
              ["img" => "info-icon-04.png", "title" => "Safety", "desc" => "24/7 Under Control"],
            ];
            foreach ($infos as $info): ?>
              <li>
                <img src="assets/images/<?= htmlspecialchars($info['img']); ?>" alt="" style="max-width: 52px;">
                <h4><?= htmlspecialchars($info['title']); ?><br><span><?= htmlspecialchars($info['desc']); ?></span></h4>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="video section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| Video View</h6>
          <h2>Get Closer View & Different Feeling</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="video-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="video-frame">
          <img src="assets/images/video-frame.jpg" alt="">
          <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="wrapper">
          <div class="row">
            <?php
            $facts = [
              ["count" => 34, "label" => "Buildings<br>Finished Now"],
              ["count" => 12, "label" => "Years<br>Experience"],
              ["count" => 24, "label" => "Awwards<br>Won 2023"],
            ];
            foreach ($facts as $fact): ?>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="<?= $fact['count']; ?>" data-speed="1000"></h2>
                  <p class="count-text "><?= $fact['label']; ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section best-deal">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-heading">
          <h6>| Best Deal</h6>
          <h2>Find Your Best Deal Right Now!</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="tabs-content">
          <div class="row">
            <div class="nav-wrapper">
              <ul class="nav nav-tabs" role="tablist">
                <?php $first = true; foreach ($deals as $id => $deal): ?>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $first ? 'active' : ''; ?>" id="<?= htmlspecialchars($id); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?= htmlspecialchars($id); ?>" type="button" role="tab" aria-controls="<?= htmlspecialchars($id); ?>" aria-selected="<?= $first ? 'true' : 'false'; ?>">
                      <?= htmlspecialchars($deal['label']); ?>
                    </button>
                  </li>
                <?php $first = false; endforeach; ?>
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <?php $first = true; foreach ($deals as $id => $deal): ?>
                <div class="tab-pane fade <?= $first ? 'show active' : ''; ?>" id="<?= htmlspecialchars($id); ?>" role="tabpanel" aria-labelledby="<?= htmlspecialchars($id); ?>-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <?php foreach ($deal['info'] as $label => $value): ?>
                            <li><?= htmlspecialchars($label); ?> <span><?= htmlspecialchars($value); ?></span></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/<?= htmlspecialchars($deal['image']); ?>" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4><?= htmlspecialchars($deal['desc_title']); ?></h4>
                      <p><?= htmlspecialchars($deal['desc']); ?></p>
                      <div class="icon-button">
                        <a href="schedule-visit.php"><i class="fa fa-calendar"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php $first = false; endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
