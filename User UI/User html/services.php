<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location: \waterjarmanagementsystem\User UI\user html\login.php");
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Services page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='\waterjarmanagementsystem\User UI\User css\services.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet">
</head>


<body>
    <!-- <img src="https://img.freepik.com/free-vector/abstract-watercolor-pastel-background_87374-137.jpg?w=2000"
        class="back-img" /> -->

    <?php
        require("header.php");
    ?>
    <div class="Web">
        <h1>TickTech IT Solutions Software Development Services</h1>
        <p>TickTech IT Solutions is the best technology partner for all your business needs. Be it full-service mobile
            apps and
            software development or creating intelligent software products using big data technologies and artificial
            intelligence,
            we do it all! Our focus is innovation and industry folks call us the pioneers in ‘innovation-outsourcing’.
            We believe in
            doing the ordinary with extraordinary simplicity and efficiency. Our deliverables are beautiful, always. And
            we give
            attention to detail, making the products perfect.</p>
    </div>
    <img src="https://www.simform.com/static/10430cc/3720c/custom-software-banner%402x.png" class="Web-img" />
    <div class="web-app">
        <h1>Web Applications</h1>
        <p>Web designing is an Art, the right vision and various colors make the masterpiece. Similar is the case with
            websites.
            All the variables like layout, font, graphics, load time, play an important role in the web designing
            process. It not
            only impacts the look and feel of the website but also the user experience while surfing the website.
            A website with unique design is intended to bring you more business and increases the visibility of your
            products and
            services to the customers on-line. Developing a website design is not a simple thing; it acts as the medium
            to the
            customers for understanding about your business.</p>
    </div>
    <img src="\waterjarmanagementsystem\User UI\user pics\webapp.png" class="webapp-img" />
    <div class="android">
        <h1>Mobile App IOS & Android </h1>
        <p>Evolving business challenges require mobile technology solutions that are adaptive and scalable to boost your
            business
            growth. Choose TickTech IT Solutionsto stay ahead of competition.
            Be it Hybrid or Native, TickTech IT SolutionsTeam knows how to utilize the power of modern technologies to
            build amazing
            mobile apps that help your business to grow.</p>

    </div>
    <img src="https://www.simform.com/static/f813fd9/78d45/mobile-app-banner%402x.png" class="android-img" />
    <div class="Desktop">
        <h1>Desktop Applications</h1>
        <p>We develop cross-platform desktop applications for Windows and MacOS. We implement tailored complex desktop
            applications
            providing a robust, secure and fast system that can be run without Internet access.</p>

    </div>
    <img src="https://iphtechnologies.com/wp-content/uploads/2022/04/desktop-app-development.png" class="Desktop-img" />
    <div class="api">
        <h1>API Development </h1>
        <p>With the development of an API, individual applications are unified and brought together so they can operate
            as a whole,
            thus overcoming potential compatibility issues. This simplifies processes such as purchasing,content
            publishing and
            information sharing.</p>

    </div>
    <img src="\waterjarmanagementsystem\User UI\user pics\api.png" class="api-img" />

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