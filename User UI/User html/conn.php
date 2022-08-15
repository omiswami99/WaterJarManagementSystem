<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "water_jar";


$conn = mysqli_connect($servername, $username, $password);
$queryCreateDB = "CREATE DATABASE $database";
$rQueryCreateDB = mysqli_query($conn, $queryCreateDB);
if ($rQueryCreateDB) {
    $conn = mysqli_connect($servername, $username, $password, $database);

    $queryCreate_customer_table  = "CREATE TABLE `customers` ( 
        `cust_id` INT NOT NULL AUTO_INCREMENT , 
        `cust_name` VARCHAR(255) NOT NULL , 
        `email` VARCHAR(255) NOT NULL,
        `ph_no` VARCHAR(255) NOT NULL , 
        `address` VARCHAR(255) NOT NULL , 
        `username` VARCHAR(255) NOT NULL , 
        `password` VARCHAR(255) NOT NULL , 
        `type` VARCHAR(255) NOT NULL , 
        PRIMARY KEY (`cust_id`)) ENGINE = InnoDB
    ";
    

    $queryCreate_jar_table = "CREATE TABLE `jar` ( 
        `jar_id` INT NOT NULL AUTO_INCREMENT ,  
        `capacity` VARCHAR(255) NOT NULL , 
        `price` INT NOT NULL ,  
        `stock` INT NOT NULL ,    
        PRIMARY KEY  (`jar_id`)) ENGINE = InnoDB
    ";

    $queryCreate_orders_table = "CREATE TABLE `water_jar`.`orders` (
        `order_id` INT NOT NULL AUTO_INCREMENT, 
        `total_price` INT, 
        `cust_id` INT, 
        `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`order_id`), 
        FOREIGN KEY(`cust_id`) REFERENCES `customers`(`cust_id`))
    ";

    $query_order_jar_relation = "CREATE TABLE `water_jar`.`order_jar_relation` (
        `order_id` INT, 
        `jar_id` INT, 
        `purchase_qty` INT, 
        FOREIGN KEY(`order_id`) REFERENCES `orders`(`order_id`) , 
        FOREIGN KEY(`jar_id`) REFERENCES `jar`(`jar_id`))
    ";

    $resultQueryCreate_customer_table = mysqli_query($conn, $queryCreate_customer_table);
    $resultQueryCreate_jar_table =  mysqli_query($conn, $queryCreate_jar_table);
    $resultQueryCreate_orders_table = mysqli_query($conn, $queryCreate_orders_table);
    $resultQuery_order_jar_relation = mysqli_query($conn, $query_order_jar_relation);

    if((!$resultQueryCreate_customer_table) && (!$resultQueryCreate_jar_table) && (!$resultQueryCreate_orders_table) && (!$resultQuery_order_jar_relation)) {
        echo "problem to create database tables";
    }

}

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn) {
    ?>
        <script>
            alert("Problem to connect with server, Please come later");
        </script>
    <?php
}

?>