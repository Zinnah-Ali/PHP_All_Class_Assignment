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
									$staff_id = $_GET['staff_id'];
									$updateSelectQry = "SELECT * FROM our_staff WHERE id={$staff_id}";
									$updateStafftList = mysqli_query($dbCon, $updateSelectQry);
								?>
								<?php
									foreach ($updateStafftList as $key => $singleStaff) {
								?>
									<form class="form-horizontal" action="../controller/staffConfig.php?staff_id=<?php echo $singleStaff['id']; ?>" method="POST" enctype="multipart/form-data" >
										<fieldset class="content-group">

											<div class="form-group">
												<label class="control-label col-lg-2" for="staff_name">Staff Name</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="staff_name" value="<?= $singleStaff['staff_name']; ?>" id="staff_name">
												</div>
											</div>

											<div class="form-group">
												<label for="" class="control-label col-lg-2" for="staff_img">Projects Image</label>
												<div class="col-lg-10">

													<input type="file" class="file-input" multiple="multiple" name="staff_img" value="<?= $singleStaff['staff_img']; ?>" id="staff_img">
													
													<div class="file-preview">
														<div class="close fileinput-remove text-right">×</div>
														<div class="file-preview-thumbnails">
														<div class="file-preview-frame" id="preview-1657084120586">
														<img src="../uploads/staffImg/<?= $singleStaff['staff_img']; ?>" class="file-preview-image" title="<?= $singleStaff['staff_img']; ?>" alt="<?= $singleStaff['staff_img']; ?>" style="width:auto;height:160px;">
														</div>
														</div>
														<div class="clearfix"></div>   <div class="file-preview-status text-center text-success"></div>
														<div class="kv-fileinput-error file-error-message" style="display: none;"></div>
													</div>
												</div>
											</div>

											<!-- <div class="form-group">
												<label class="control-label col-lg-2" for="staff_img">Staff Image</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="staff_img"  value="<?= $singleStaff['staff_img']; ?>" id="staff_img">
												</div>
											</div> -->

											<div class="form-group">
												<label class="control-label col-lg-2" for="facebook">Facebook Link</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="facebook" value="<?= $singleStaff['facebook']; ?>" id="facebook">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-2" for="twitter">Twitter Link</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="twitter" value="<?= $singleStaff['twitter']; ?>" id="twitter">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-2" for="linkedin">Linkdine Link</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="linkedin" value="<?= $singleStaff['linkedin']; ?>" id="linkedin">
												</div>
											</div>

										</fieldset>

										<div class="text-right">
											<a href="staffList.php" class="btn btn-default">Back To Stff List List</a>
											<button type="submit" class="btn btn-primary" name="update_staff"> Update Staff </button>
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
