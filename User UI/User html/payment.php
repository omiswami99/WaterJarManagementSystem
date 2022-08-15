<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Payment getway form </title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" type="text/css" href="\waterjarmanagementsystem\User UI\User css\payment.css">

</head>

<body>

	<?php
        require("header.php");
    ?>
	<img src="\waterjarmanagementsystem\User UI\user pics\payment-back.png" class="payment-back" />
	<div class="container">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form>
				Full name
				<input type="text" name="" placeholder="Enter name " required>
				Email
				<input type="text" name="" placeholder="Enter email" required>

				Address
				<input type="text" name="" placeholder="Enter address" required>

				City
				<input type="text" name="" placeholder="Enter City" required>
				<div id="zip">
					<label>
						State
						<select>
							<option>Choose State..</option>
							<option>Rajasthan</option>
							<option>Maharastra</option>
							<option>Banglore</option>
							<option>Pune</option>
						</select>
					</label>
					<label>
						Zip code
						<input type="number" name="" placeholder="Zip code" required>
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form action="/action_page.php">
				Accepted Card <br>
				<img src="\waterjarmanagementsystem\User UI\user pics\card1.png" width="100">
				<img src="\waterjarmanagementsystem\User UI\user pics\card2.jpg" width="50">
				<br><br>

				Credit card number
				<input type="text" name="" placeholder="Enter card number" required>

				Exp month
				<input type="text" name="" placeholder="Enter Month" required>
				<div id="zip">
					<label>
						Exp year
						<select>
							<option>Choose Year..</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</label>
					<label>
						CVV
						<input type="number" name="" placeholder="CVV" required>
					</label>
				</div>
			</form>
			<input type="submit" name="" value="Proceed to Checkout" onclick="validation()" id="proceed">
		</div>
	</div>
	<script type="text/javascript">
		function validation() {
			Swal.fire(
				'Thank You!',
				'Payment Successful!',
				'success'
			)
		}

		document.getElementById(proceed).innerHTML("Proceed to pay");
	</script>
</body>

</html>