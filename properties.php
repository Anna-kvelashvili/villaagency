<?php require 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Property Listing</title>

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
<?php include('components/header.php');?>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
        <h3>Properties</h3>
      </div>
    </div>
  </div>
</div>

<div class="section properties">
  <div class="container">
    <ul class="properties-filter">
      <li><a class="is_active" href="#!" data-filter="*">Show All</a></li>
      <li><a href="#!" data-filter=".adv">Apartment</a></li>
      <li><a href="#!" data-filter=".str">Villa House</a></li>
      <li><a href="#!" data-filter=".rac">Penthouse</a></li>
    </ul>
    <div class="row properties-box">
      <?php foreach ($properties1 as $property): ?>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 <?= $property['class'] ?>">
          <div class="item">
            <a href="property-details.html"><img src="<?= $property['image'] ?>" alt=""></a>
            <span class="category"><?= $property['category'] ?></span>
            <h6><?= $property['price'] ?></h6>
            <h4><a href="property-details.html"><?= $property['title'] ?></a></h4>
            <ul>
              <li>Bedrooms: <span><?= $property['bedrooms'] ?></span></li>
              <li>Bathrooms: <span><?= $property['bathrooms'] ?></span></li>
              <li>Area: <span><?= $property['area'] ?></span></li>
              <li>Floor: <span><?= $property['floor'] ?></span></li>
              <li>Parking: <span><?= $property['parking'] ?></span></li>
            </ul>
            <div class="main-button">
              <a href="schedule-visit.php"><i class="fa fa-calendar"></i> Schedule a visit</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a class="is_active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">>></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


  <?php include('components/footer.php');?>

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