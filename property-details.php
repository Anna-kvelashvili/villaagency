<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Villa Agency - Real Estate</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>
  <?php include('components/header.php'); ?>

<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb"><a href="index.php">Home</a> / Single Property</span>
        <h3>Single Property</h3>
      </div>
    </div>
  </div>
</div>

<div class="single-property section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="main-image">
          <img src="assets/images/single-property.jpg" alt="" />
        </div>
        <div class="main-content">
          <span class="category">Apparment</span>
          <h4>24 New Street Miami, OR 24560</h4>
          <p>
            <strong>the best villa agency</strong> Lorem ipsum dolor sit amet, consectetur...
          </p>
        </div>

        <!-- Accordion -->
        <div class="accordion" id="accordionExample">
          <?php
          $faqs = [
            ["Best useful links ?", "Dolor <strong>almesit amet</strong>..."],
            ["How does this work ?", "Dolor <strong>almesit amet</strong>..."],
            ["Why is Villa the best ?", "Dolor <strong>almesit amet</strong>..."]
          ];
          foreach ($faqs as $index => [$question, $answer]) {
            $collapseId = "collapse" . ($index + 1);
            $headingId = "heading" . ($index + 1);
            $show = $index === 0 ? 'show' : '';
            $collapsed = $index === 0 ? '' : 'collapsed';
            ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="<?= $headingId ?>">
                <button class="accordion-button <?= $collapsed ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                  <?= $question ?>
                </button>
              </h2>
              <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $show ?>" aria-labelledby="<?= $headingId ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body"><?= $answer ?></div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="info-table">
          <ul>
            <?php
            $infoItems = [
              ["assets/images/info-icon-01.png", "450 m2", "Total Flat Space"],
              ["assets/images/info-icon-02.png", "Contract", "Contract Ready"],
              ["assets/images/info-icon-03.png", "Payment", "Payment Process"],
              ["assets/images/info-icon-04.png", "Safety", "24/7 Under Control"],
            ];
            foreach ($infoItems as [$img, $title, $desc]) {
              echo "<li>
                      <img src='$img' alt='' style='max-width: 52px' />
                      <h4>$title<br /><span>$desc</span></h4>
                    </li>";
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Best Deal Section -->
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
                <?php
                $tabs = ['Appartment', 'Villa', 'Penthouse'];
                foreach ($tabs as $i => $tab) {
                  $active = $i === 0 ? 'active' : '';
                  $id = strtolower($tab);
                  echo "<li class='nav-item' role='presentation'>
                          <button class='nav-link $active' id='{$id}-tab' data-bs-toggle='tab' data-bs-target='#$id' type='button' role='tab' aria-controls='$id' aria-selected='" . ($i === 0 ? 'true' : 'false') . "'>$tab</button>
                        </li>";
                }
                ?>
              </ul>
            </div>

            <div class="tab-content" id="myTabContent">
              <?php
              $deals = [
                ['appartment', '540 m2', '3', '8', 'Yes', 'Bank', 'deal-01.jpg', 'All Info About Apartment'],
                ['villa', '250 m2', '26th', '5', 'Yes', 'Bank', 'deal-02.jpg', 'Detail Info About New Villa'],
                ['penthouse', '320 m2', '34th', '6', 'Yes', 'Bank', 'deal-03.jpg', 'Extra Info About Penthouse'],
              ];
              foreach ($deals as $i => [$id, $space, $floor, $rooms, $parking, $payment, $img, $title]) {
                $active = $i === 0 ? 'show active' : '';
                echo "<div class='tab-pane fade $active' id='$id' role='tabpanel' aria-labelledby='{$id}-tab'>
                        <div class='row'>
                          <div class='col-lg-3'>
                            <div class='info-table'>
                              <ul>
                                <li>Total Flat Space <span>$space</span></li>
                                <li>Floor number <span>$floor</span></li>
                                <li>Number of rooms <span>$rooms</span></li>
                                <li>Parking Available <span>$parking</span></li>
                                <li>Payment Process <span>$payment</span></li>
                              </ul>
                            </div>
                          </div>
                          <div class='col-lg-6'>
                            <img src='assets/images/$img' alt='' />
                          </div>
                          <div class='col-lg-3'>
                            <h4>$title</h4>
                            <p>Lorem ipsum dolor sit amet...<br /><br />Swag fanny pack...</p>
                            <div class='icon-button'>
                              <a href='schedule-visit.php'><i class='fa fa-calendar'></i> Schedule a visit</a>
                            </div>
                          </div>
                        </div>
                      </div>";
              }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('components/footer.php'); ?>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>