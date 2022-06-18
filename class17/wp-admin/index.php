<?php
	if( basename(__DIR__) !== "wp-admin" ){
		$baseUrl = "../";
		$wpUrl = false;
	}else{
		$baseUrl = "./";
		$wpUrl = true;
	}
	
	$activeUrl = basename(__DIR__);
?>
<?php include('include/head.php'); ?>
<body>
	<!-- Main navbar -->
	<?php include('include/headNav.php'); ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<?php include('include/content.php'); ?>
	<!-- /page container -->

	<?php include('include/script.php'); ?>
</body>
</html>
