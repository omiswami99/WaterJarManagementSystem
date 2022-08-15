<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	require("conn.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM customers where username='$username'";
	$result = mysqli_query($conn, $sql);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row['password'])) {
			session_start();
			$_SESSION['username'] = $username;
			header("location: \waterjarmanagementsystem");
		} else {
			echo "<script>alert('password is wrong');</script>";
		}
	} else {
		echo "<script>alert('username is wrong');</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="\waterjarmanagementsystem\User UI\User css\log-reg.css">
	<title> Login Page</title>
</head>

<body class="Login_Body">

	<div class="Headerforallpages" id="myHeader">
		<div class="header" style="height: 100px;">
			<img src="\waterjarmanagementsystem\User UI\user pics\logo_part1.png" class="logo" />
			<img src="\waterjarmanagementsystem\User UI\user pics\logo_part2.png" class="name" />
			<a href="register.php" style="margin-left: 800px;">Register</a>
		</div>
	</div>

	<img src="\waterjarmanagementsystem\User UI\user pics\Login_Image.png" class="Login_Body" />
	<div class="main" style="margin-top:170px;"> 
		<p class="main_heading"> Login </p>
		<div class="sub-main" style="height: 400px;margin-top: 0px;">
			<div class="form">
				<form action="\waterjarmanagementsystem\user ui\user html\login.php" method="POST">
					<div class="user">
						<label>Username </label><input type="text" name="username" required>
					</div>
					<br>
					<div class="pass">
						<label>Password </label><input type="password" name="password" required>
					</div>

					<!-- <h6 class="fgtpswd"> Forgot Password? <a href="#">click here</a> </h6> -->
					<input type="submit" class="subm">
				</form>
			</div>
		</div>
	</div>

</body>

</html>