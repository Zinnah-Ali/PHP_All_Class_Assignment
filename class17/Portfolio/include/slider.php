<?php
require('../wp-admin/controller/dbConfig.php');
$sliderQry = "SELECT * FROM banners WHERE banners_status = 1";
$sliderlist = mysqli_query( $dbCon,  $sliderQry );
?>

<section id="home-section" class="hero">
    <h3 class="vr">Welcome to DigiLab</h3>
    <div class="home-slider js-fullheight owl-carousel">
    <?php
      foreach ($sliderlist as $slider) {
    ?>
      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
            data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight"
              style="background-image:url(../wp-admin/uploads/bannersImg/<?= $slider['banners_img']; ?>)">
              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
              data-scrollax=" properties: { translateY: '70%' }">
              <div class="text">
                <span class="subheading"><?= $slider['sub_title']; ?></span>
                <h1 class="mb-4 mt-3"><?= $slider['title']; ?></h1>
                <p><?= $slider['details']; ?></p>
                <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
</section>