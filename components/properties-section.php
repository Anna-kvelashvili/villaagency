<?php require 'data.php'; ?>
<div class="properties section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| Properties</h6>
          <h2>We Provide The Best Property You Like</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($properties as $property): ?>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.php"><img src="<?= $property['image'] ?>" alt=""></a>
            <span class="category"><?= $property['category'] ?></span>
            <h6><?= $property['price'] ?></h6>
            <h4><a href="property-details.php"><?= $property['address'] ?></a></h4>
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
  </div>
</div>
