<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location: \waterjarmanagementsystem\User UI\user html\login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" type="text/css" href="\waterjarmanagementsystem\User UI\User css\aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet">
    <title>About us</title>
</head>

<body>
    <?php
        require("header.php");
    ?>

    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>
                        About Us
                    </h1>

                </div>
                <div class="content">
                    <p>
                        TickTech IT Solutions is a software development company in Pune, India. We started our journey
                        with a small team, specialized and committed and now we are providing our services across the
                        India.</p><br>


                    <p>Our passion for work inspires us to keep learning and develop innovative products
                        following high quality standards and industry best practices. We seek to build solid long-term
                        relationships based on trust. As such, we take our commitments very seriously, assuming
                        responsibility for the project throughout the entire process.
                    </p>
                    <br>
                    <p>We provide various services which includes but not limited to software development, website
                        development, iphone app development, android app development, custom hybrid mobile app
                        development and ecommerce website development. If you have any project ideas, reach out to us.
                        Our team of highly skilled designers and developers makes your ideas into reality at affordable
                        price.
                    </p>

                    </p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>

                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="">
            </div>
        </div>
    </div>
    <div class="footer">
        <footer class="footer-distributed">

            <div class="footer-left">

                <p class="footer-links"></p>
                <p>Secure Payments</p>
                <a href="#"><img src="\waterjarmanagementsystem\User UI\user pics\visa.png" /></a> ·
                <a href="#"><img src="\waterjarmanagementsystem\User UI\user pics\mastercard.png" /></a> ·
                <a href="#"><img src="\waterjarmanagementsystem\User UI\user pics\paytm.png" /></a> ·
                <a href="#"><img src="\waterjarmanagementsystem\User UI\user pics\Gpay.png" /></a> ·



                <p class="footer-company-name">India &copy; 2022</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>India,</span>Pune</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>022-xxxxxx</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href=""></a>something@gmail.com</p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Follow us</span>
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

            </div>

        </footer>

        <script>
            window.onscroll = function() {
                myFunction()
            };

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