<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
    <?php
        require("header.php");
    ?>
    <h1>
        <center>Products</center>
    </h1>
    <div class="Product-1">
        <h1>10 Litters Water Jar</h1>
        <img src="\waterjarmanagementsystem\User UI\user pics\10 lit.png" class="prod1-img" />
        <p class="price"><strong>Price: &#x20b9; 90/- per jar</strong></p>
        <a href="\waterjarmanagementsystem\User UI\user html\cart.php" style="height: 50px;width: 100px;padding-top: 15px;">Order Now</a>
        </a>
    </div>
    <div class="Product-1">
        <h1>20 Litters Water Jar</h1>
        <img src="\waterjarmanagementsystem\User UI\user pics\10 lit.png" class="prod1-img" />
        <p class="price"><strong>Price: &#x20b9; 110/- per jar</strong></p>
        <a href="\waterjarmanagementsystem\User UI\user html\cart.php" style="height: 50px;width: 100px;padding-top: 15px;">Order Now</a>
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




    <script>
        var index = 0;
        var slides = document.querySelectorAll(".slides");
        var dot = document.querySelectorAll(".dot");

        function changeSlide() {

            if (index < 0) {
                index = slides.length - 1;
            }

            if (index > slides.length - 1) {
                index = 0;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dot[i].classList.remove("active");
            }

            slides[index].style.display = "block";
            dot[index].classList.add("active");

            index++;

            setTimeout(changeSlide, 2000);

        }

        changeSlide();
    </script>
</body>


</html>