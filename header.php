<?php

session_start();
if(isset($_SESSION['username'])){
    
    echo "<div class='Headerforallpages' id='myHeader'>
    <div class='header' >
    <img src='\waterjarmanagementsystem\User UI\user pics\logo_part1.png' class='logo' />
    <img src='\waterjarmanagementsystem\User UI\user pics\logo_part2.png' class='name' />
    
            <a href='\waterjarmanagementsystem\' class='btn-home'> Home </a>
            <a href='\waterjarmanagementsystem\User UI\user html\services.php' class='btn-service'> Services </a>
            <a href='\waterjarmanagementsystem\User UI\user html\profile.php' class='btn-home'> Profile </a>
          
            <a href='\waterjarmanagementsystem\User UI\user html\cart.php' class='btn-cart'> View Cart</a>
            
            </div>
            <div class='dropdown'>
            <span class='dropbtn'><img src='\waterjarmanagementsystem\User UI\user pics\user.png' /></span>
            <div class='dropdown-content'>
                <a href='aboutus.php' class='btn-about'> About us </a>
                <a href='logout.php'>Logout</a>
            </div>
        </div>
                </div>
                </div>
                </div>";
}else{
    
    echo "<div class='Headerforallpages' id='myHeader'>
        <div class='header' style='height: 100px;'>
            <img src='\waterjarmanagementsystem\User UI\user pics\logo_part1.png' class='logo' />
            <img src='\waterjarmanagementsystem\User UI\user pics\logo_part2.png' class='name' />
            
            
        </div>

        <div class='dropdown'>
            <span class='dropbtn'><img src='\waterjarmanagementsystem\User UI\user pics\user.png' /></span>
            <div class='dropdown-content'>
                <a href='\waterjarmanagementsystem\User UI\user html\Register.php'>Register</a>
                <a href='\waterjarmanagementsystem\User UI\user html\login.php'>Login</a>
            </div>
        </div>
    </div>";    
}

?>

