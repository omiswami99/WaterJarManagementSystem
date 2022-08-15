<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location: \waterjarmanagementsystem\User UI\user html\login.php");
}
$username = $_SESSION['username'];
echo "The quantity is : ". $username;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	require("conn.php");
	$sql = "SELECT * FROM customers where username='$username'";
	$result = mysqli_query($conn, $sql);

	if(!$result){
		echo "not fetched";
    }else{
        $num = mysqli_num_rows($result);
        if($num > 1){
            while($row = mysqli_fetch_assoc($result)){
               $cust_id = $row['cust_id'];
            }
        }
    }

    
    $total_price = $_POST['qty'];
    //$total_price = $_POST[''];

    $insertSql = "INSERT INTO `orders` (`total_price`, `cust_id`, `dt`) VALUES ('$total_price', '$cust_id', current_timestamp())";
    $resultInsert = mysqli_query($conn, $insertSql);

	if(!$resultInsert){
		echo "not inserted";
	}
}



?>