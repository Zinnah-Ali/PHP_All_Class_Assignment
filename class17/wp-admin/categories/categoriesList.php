<?php
	if( basename(__DIR__) !== "wp-admin" ){
		$baseUrl = "../";
		$wpUrl = false;
	}else{
		$baseUrl = "./";
		$wpUrl = true;
	}
?>
<?php 
	// Include PHP File
	include('../include/head.php'); 
	require("../controller/dbConfig.php"); 
?>
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
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Project List</li>
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

					<!-- Banners List -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Project List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li style="margin-right: 10px; color:#fff; "><a href="<?php echo $wpUrl == true ? "our_project/" : ""; ?>projectListAdd.php" class="btn btn-primary add-new">Add New</a></li>
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>

						</div>
						<?php 
						if ( isset($_GET['msg']) ) {
						?>
							<div class="alert alert-success no-border">
								<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
								<span class="text-semibold">Well done!</span> <?php echo $_GET['msg']; ?>
							</div> 
						<?php }?>

						<?php
							$categorySelecetQry = "SELECT * FROM categories WHERE category_delete_status=1";
							$categorys = mysqli_query($dbCon, $categorySelecetQry);
						?>
						<table class="table table-bordered datatable-basic ">
							<thead style="border-top:1px solid #000;">
								<tr>
									<th width="15%">Sl.</th>
									<th width="40$">Category Name</th>
									<th width="30$">Category Status</th>
									<th width="15%" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
		

								<?php
									foreach ($categorys as $key => $category) {	
								?>
								<tr>
									<td><?= ++$key; ?></td>
									<td><?= $category['categories_name']; ?></td>
									<td><?= $category['categories_status'] == 1 ? "Active" : "In Active"; ?></td>
									<td class="text-center">
										<a href="categoriesListUpdate.php?category_id=<?php echo $category['id']; ?>"><i class="icon-pencil7"></i></a>
										<a href="categoriesDelete.php?category_id=<?php echo $category['id']; ?>"><i class="icon-trash"></i></a>
									</td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2014. <a href="#">Portfolio Web App</a> by Zinnah Ali
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
