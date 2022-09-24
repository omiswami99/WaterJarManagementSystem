<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location: \waterjarmanagementsystem\User UI\user html\login.php");
}


?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Profile Form</title>
    <link rel="stylesheet" href="\waterjarmanagementsystem\User UI\User css\profile.css">
    <script src="https://kit.fontawesome.com/bceb8952ef.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        require("header.php");
        require("conn.php");

        $username = $_SESSION['username'];
        $sql = "SELECT * FROM customers WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
    ?>

    <h1>Your Profile</h1>
    <div class="container">

        <div class="row">
            <div class="col-10">
                <label for="fname">Full Name</label>
            </div>
            <!-- <div class="icon">
                <a href="#"><img src="\waterjarmanagementsystem\User UI\user pics\edit.png" alt="HTML tutorial" style="width:28px;height:30px;" hspace="4">Edit</a>
                <a href="#"><img src="\waterjarmanagementsystem\User UI\user pics\sa.png" alt="HTML tutorial" style="width:29px;height:30px;" hspace="5">Save</a>
            </div> -->
            <div class="col-90">
                <br>
                <p><?php echo $row['cust_name']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="email">Email:</label>
            </div>
            <div class="col-90">
                <br>
                <p><?php echo $row['email']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="mobile">Mobile:</label>
            </div>
            <div class="col-90">
                <br>
                <p><?php echo $row['ph_no']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="address">Address:</label>
            </div>
            <div class="col-90">
                <br>
                <p><?php echo $row['address']; ?></p>
            </div>
        </div>
        
    </div>
    
    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>