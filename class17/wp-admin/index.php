<?php

	if( basename(__DIR__) !== "wp-admin" ){
		$baseUrl = "../";
		$wpUrl = true;
	}else{
		$baseUrl = "";
		$wpUrl = false;
	}
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
