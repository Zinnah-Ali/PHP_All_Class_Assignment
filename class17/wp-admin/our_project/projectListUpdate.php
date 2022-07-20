<?php
	if( basename(__DIR__) !== "wp-admin" ){
		$baseUrl = "../";
		$wpUrl = false;
	}else{
		$baseUrl = "./";
		$wpUrl = true;
	}
?>
<?php include('../include/head.php'); ?>
<?php require('../controller/dbConfig.php');?>
<body>
	<!-- Main navbar -->
	<?php include('../include/headNav.php'); ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
		<?php include('../include/sidebarNav.php'); ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"> Edite Project</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

				<!-- Default options -->
				<div class="row">
					<div class="col-md-12">

						<!-- Basic examples -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Edite Project</h5>
								<div class="heading-elements">
									<ul class="icons-list">
										<li><a data-action="collapse"></a></li>
									</ul>
								</div>
							</div>

							<div class="panel-body">
							<?php
									if ( isset( $_GET['msg']) ) {
								?>
								<div class="alert alert-info no-border">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold"></span> <?php echo $_GET['msg']; ?>
								</div> 
								<?php } ?>
								<?php 
									$project_id = $_GET['project_id'];
									$updateSelectQry = "SELECT * FROM our_project WHERE id={$project_id}";
									$updateProjectList = mysqli_query($dbCon, $updateSelectQry);
								?>
								<?php
									foreach ($updateProjectList as $key => $singleProject) {
								?>
									<form class="form-horizontal" action="../controller/projectConfig.php?project_id=<?php echo $singleProject['id']; ?>" method="POST" enctype="multipart/form-data">
										<fieldset class="content-group">

											<?php
												$categorySelecetQry = "SELECT * FROM categories WHERE categories_status=1";
												$categoryList = mysqli_query($dbCon, $categorySelecetQry);
											?>
											<div class="form-group">
											<label class="control-label col-lg-2" for="category_id">Category Name</label>
												<div class="col-lg-10">
													<select name="category_id" class="form-control" id="category_id">
														<?php
															foreach ($categoryList as $key => $category) {
			
														?>
														<option <?php echo $category['id'] == $singleProject['category_id'] ? 'selected' : '' ?> value="<?php echo $category['id'];?>"><?php echo $category['categories_name'];?></option>

														<?php
															}
														?>
													</select>
												</div>
											</div>	
											<div class="form-group">
												<label class="control-label col-lg-2" for="project_name">Project Name</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="project_name" value= "<?= $singleProject['project_name']; ?>" id="project_name">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-2" for="project_link">Project Link</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="project_link"  value= "<?= $singleProject['project_link']; ?>" id="project_link">
												</div>
											</div>

											
											<div class="form-group">
												<label for="" class="control-label col-lg-2" for="project_thumb">Projects Image</label>
												<div class="col-lg-10">

													<input type="file" class="file-input" multiple="multiple" name="project_thumb" value="<?= $singleProject['project_thumb']; ?>" id="project_thumb">
													
													<div class="file-preview">
														<div class="close fileinput-remove text-right">×</div>
														<div class="file-preview-thumbnails">
														<div class="file-preview-frame" id="preview-1657084120586">
														<img src="../uploads/projectsImg/<?= $singleProject['project_thumb']; ?>" class="file-preview-image" title="<?= $singleProject['project_thumb']; ?>" alt="<?= $singleProject['project_thumb']; ?>" style="width:auto;height:160px;">
														</div>
														</div>
														<div class="clearfix"></div>   <div class="file-preview-status text-center text-success"></div>
														<div class="kv-fileinput-error file-error-message" style="display: none;"></div>
													</div>
												</div>
											</div>


											<!-- <div class="form-group">
												<label class="control-label col-lg-2" for="project_thumb">Project Image</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="project_thumb" value= "<?= $singleProject['project_thumb']; ?>" id="project_thumb">
												</div>
											</div> -->

										</fieldset>

										<div class="text-right">
											<a href="projectList.php" class="btn btn-default">Back To Project List</a>
											<button type="submit" class="btn btn-primary" name="update_project"> Update singleProject </button>
										</div>
									</form>
								<?php } ?>
						</div>
					</div>
						</div>
						<!-- /basic examples -->

					</div>

				</div>
				<!-- /default options -->

				<!-- Footer -->
				<div class="footer text-muted">
					&copy; 2015. <a href="#">Limitless Web App Kit</a> by Zinnah Ali Eugene Kopyov</a>
				</div>
				<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

<?php include('../include/script.php'); ?>

</body>
</html>
