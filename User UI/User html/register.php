<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require("conn.php");

	$name = $_POST["name"];
	$email = $_POST["email"];
	$ph_no = $_POST["ph_no"];
	$address = $_POST["address"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	//firstly checking username already exists or not
	$usernameExists = "SELECT * FROM customers where username='$username'";
	$resultUsernameExists = mysqli_query($conn, $usernameExists);

	$numRows = mysqli_num_rows($resultUsernameExists);

	if ($numRows > 0) {
		// $showError1 = true;
		echo "<script>alert('username already exists');</script>";
	} else {

		if ($password == $cpassword) {
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO `customers` (`cust_name`, `email`, `ph_no`, `address`, `username`, `password`, `type`) VALUES ('$name', '$email', '$ph_no', '$address', '$username', '$hash', 'user')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				echo "<script>alert('user created successfully');</script>";
				header("location: login.php");
			} else {
				echo "<script>alert('enable to create try after some time..');</script>";
			}
		} else {
			echo "<script>alert('password doesn't matching');</script>";
			// $showError = "password doesn't matching";
		}
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="\waterjarmanagementsystem\User UI\User css\log-reg.css">
	<title> Register Page </title>
</head>

<body>

	<div class="Headerforallpages" id="myHeader">
		<div class="header" style="height: 100px;">
			<img src="\waterjarmanagementsystem\User UI\user pics\logo_part1.png" class="logo" />
			<img src="\waterjarmanagementsystem\User UI\user pics\logo_part2.png" class="name" />
			<a href="login.php" style="margin-left: 800px;">Login</a>
		</div>
	</div>

	<main>
		<p class="main_heading"> Registration </p>
		<img src="\waterjarmanagementsystem\User UI\user pics\Register_Icon.png" class="Login_Body" />

		<div class="man" style="height: 500px;">
			<form action="register.php" method="POST">
				<div>
					<label>Full Name</label><input type="text" name="name" required>
				</div>
				<br>
				<div>
					<label>Email-Id</label><input type="email" name="email" required>
				</div>
				<br>
				<div>
					<label>Mobile No.</label><input type="text" name="ph_no" required>
				</div>
				<br>
				<div>
					<label>Address</label><textarea rows="3" name="address" required></textarea>
				</div>
				<br>
				<div>
					<label>Username</label><input type="text" name="username" required>
				</div>
				<br>
				<div>
					<label>Password</label><input type="password" name="password" required>
				</div>
				<br>
				<div>
					<label>Confirm Password</label><input type="password" name="cpassword" required>
				</div>
				<br>

		</div>
		<input type="submit" class="subm">
		</form>



	</main>

</body>

</html>