<section id="home-section" class="hero">
    <div class="home-slider js-fullheight owl-carousel">
    <?php 
        $selectQry = "SELECT * FROM banners WHERE banners_status=1";
        $bannersList = mysqli_query($dbCon, $selectQry);
      ?>

      <?php
        foreach ($bannersList as $key => $banner) {	
      ?>
      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
            data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight"
              style="background-image:url(../wp-admin/uploads/bannersImg/<?= $banner['banners_img']; ?>)">
              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
              data-scrollax=" properties: { translateY: '70%' }">
              <div class="text">
                <span class="subheading"><?= $banner['sub_title']; ?></span>
                <h1 class="mb-4 mt-3"><?= $banner['title']; ?></h1>
                <p><?= $banner['details']; ?></p>
                <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?> 
    </div>
  </section>