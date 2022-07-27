<?php
session_start();
include("./controller/dbConfig.php");

$usersQry = " SELECT * FROM users";
$users = mysqli_query( $dbCon, $usersQry );

foreach ($users as $user) {
	$dbEmail 	= $user['email'];
	$dbPassword = $user['password'];
}


if ( isset( $_POST['login'] ) ) {
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

	if (  $email == $dbEmail ) {
		if ( $password == $dbPassword ) {
			$_SESSION['email'] = $email;
			header("Location: banners/bannersList.php");
		}else{
			echo "Password is Wrong";
		}
	}else{
		echo "Email is Wrong";
	}
}


if( isset( $_SESSION['email'] ) ){
	header("Location: banners/bannersList.php");
}else{

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		body{
			margin: 0;
			background:#ddd;
		}
		.login-box{
			background: #fff;
			width:300px;
			margin:auto;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			border: 1px solid #ccc;
			border-radius: 10px;
			padding: 20px;
			text-align: center;
		}
		.login-box input{
			width: 100%;
			display: block;
			margin: 10px 0;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		.login-box input[type="submit"]{
			cursor: pointer;
			background: #3898db;
			color: #fff;
		}
	</style>
</head>
<body>
	
	<div class="login-box">
		<h2>Login Box</h2>
		<form action="" method="POST">
			<input type="email" 	placeholder="Emaail"   	value = "<?php echo isset( $_POST['login'] ) ?  $email :  '';  ?>"	name="email">
			<input type="password"  placeholder="Password"  name="password">
			<input type="submit" 	value="Login" 			name="login">
		</form>
	</div>


</body>
</html>