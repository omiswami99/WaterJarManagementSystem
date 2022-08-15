<?php

session_start();
session_unset();
session_destroy();

header("location: \waterjarmanagementsystem\User UI\user html\Login.php");

?>
