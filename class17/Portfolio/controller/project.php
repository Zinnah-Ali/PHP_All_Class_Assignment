<section class="ftco-section ftco-project bg-light" id="projects-section">
    <div class="container px-md-5">
      <div class="row justify-content-center pb-5">

        <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">This is sub title</span>
        <h2 class="mb-4"> This is Title </h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem perferendis, eum obcaecati, quaerat deleniti nisi praesentium consequatur assumenda repellendus molestiae id, excepturi suscipit molestias. Vero consequatur voluptatum laborum quia nemo?</p>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12 testimonial">
          <div class="carousel-project owl-carousel">
      
          <?php 
              $projectListQry = "SELECT our_project.*,categories.categories_name FROM `our_project` 
              INNER JOIN categories ON our_project.category_id = categories.id
              WHERE project_status = 1";
              $projectList = mysqli_query($dbCon, $projectListQry);

              foreach($projectList as $project ){
              ?>
              <div class="item">
                <div class="project">
                  <div class="img">
                    <img src="../wp-admin/uploads/projectsImg/<?php echo $project['project_thumb']; ?>" class="img-fluid"
                      alt="Colorlib Template">
                    <div class="text px-4">
                      <h3><a href="<?php echo $project['project_link']; ?>"><?php echo $project['project_name']; ?></a></h3>
                      <span><?php echo $project['categories_name']; ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>