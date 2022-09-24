<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location: \waterjarmanagementsystem\User UI\user html\login.php");
}


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Payment </title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" type="text/css" href="\waterjarmanagementsystem\User UI\User css\payment.css">

	<style>

	.container {
		position: absolute;
		top: 170px;
		background: rgba(255, 255, 255, 0.6);
		max-width: 800px;
		min-height: 200px;
		left: 600px;
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 0.5rem 1.5rem;
	}

	</style>

</head>

<body>

	<?php
        require("header.php");
		
		$qty = $_GET['qty'];
		$rs = $_GET['rs'];
		// 
		$username = $_SESSION['username'];
	
    ?>
	<img src="\waterjarmanagementsystem\User UI\user pics\payment-back.png" class="payment-back" />
	<div class="container" >
		<div >
			<h3>BILL</h3>
			<form>
			<!-- <form action="sell.php" method="POST"> -->
				<p>You need to pay Rs. <?php echo $rs*$qty;  ?> for <?php echo $qty; ?> jars.</p>
				<input type="hidden" name="rs" value="<?php echo $rs*$qty; ?>">
				<input type="hidden" name="qty" value="<?php echo $qty; ?>">
			
			<input type="submit" name="" value="Proceed to Checkout" onclick="validation()" id="proceed">
			</form>
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