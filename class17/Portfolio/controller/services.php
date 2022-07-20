<section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light" id="services-section">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <?php 
              $selecServicestQry = "SELECT * FROM services WHERE services_status=1";
              $servicesList = mysqli_query($dbCon, $selecServicestQry);

              foreach($servicesList as $services ){
                ?>
                
            <a class="nav-link px-4" id="<?= $services['id']; ?>" data-toggle="pill" href="#<?= $services['id']; ?>" role="tab"
              aria-controls="<?= $services['id']; ?>" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> <?= $services['services_name']; ?></a>

            <?php  } ?>

          </div>
        </div>
        <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
          <div class="tab-content pl-md-5" id="v-pills-tabContent">

  
            <div class="tab-pane fade show py-5" id="<?= $servicesContent['id']; ?>" role="tabpanel" aria-labelledby="<?= $servicesContent['id']; ?>">
              <span class="icon mb-3 d-block flaticon-ideas"></span>
              <h2 class="mb-4"><?= $servicesContent['services_name']; ?></h2>
              <p><?= $servicesContent['services_details']; ?></p>
              <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>