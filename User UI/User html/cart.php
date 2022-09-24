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
    <title>cart page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='\waterjarmanagementsystem\User UI\User css\cart.css'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .checkout1 p{
            padding-left: 12px;
            padding-top: 14px;
            margin: 50px 150px 0;
            height: 50px;
            width: 100px;
            background: #A7F9F4;
            border-radius: 50px;
        }

        .checkout1{
            color: #000000;
            text-decoration: none;
        }

    </style>

</head>


<body>
    <?php
        require("header.php");
    ?> 
    <form action="payment.php" method='GET'>
    <div class="cart-content">
        <div class="right-content">
            <p class="prod-name">10 Litre Water Can</p>
            <p class="desc">The 10 LTR pack is BIG enough to meet needs of a family, but LIGHT enough to carry, hold &
                pour.</p>
            <p class="price">₹ 90/-Per can</p>
            <p class="inclusive">(Inclusive of all taxes)</p>

        </div>
        <p class="quantity"><strong>Quantity:</strong> </p>
        <div class="counter">
            <span class="down" onClick='decreaseCount(event, this)'>-</span>
            <input type="text" value="1" name="qty">
            <span class="up" onClick='increaseCount(event, this)'>+</span>
        </div>
        <div class="prod-img">
            <img src="\waterjarmanagementsystem\User UI\user pics\10 lit.png" class="ten-lit" />

        </div>
    </div>
    <div class="date">
        <label><strong>Start Date</strong></label>
        <input type="date" value="0000-00-00">
        <label><strong> </strong></label>
        <label><strong>End Date</strong></label>
        <input type="date" value="0000-00-00">
        

        <br><br><br>
        <input type="submit" class="checkout1"></input>
        <input type="hidden" name="rs" value="90"></input>
        </a>
    </div></form>
    <div class="time">
        <!-- <p class="title-time"><strong>Delivery Time:-</strong>
            <select>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select> -->
            <!-- <select>
                <option value="15">00</option>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>


            </select>


            <select>
                <option value="AM">AM</option>
                <option value="PM">PM</option>
            </select>
        </p> -->

        
           
            
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
    <script type="text/javascript">
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }
        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }
        }
    </script>
</body>


</html>