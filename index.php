<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <title>Customers Application</title>
    <link rel="stylesheet" href ="css/style.css">
</head>
<body>
    
    <?php
        require("connect.php");
    
    
        if (!($host) ) {
            echo "Error";
            exit();
        }else{
            echo "Connection with server";
        }

        if(mysql_query("CREATE DATABASE customersdatabase", $host)){
            echo "created database";
        }else{
            echo "database exists ";
        }

        mysql_select_db("customersdatabase", $host); //active database on the server
        
        $sql = "CREATE TABLE `customers`(
            `id` INT AUTO_INCREMENT,
            `name` TEXT,
            `mail` TEXT,
            `phone` INT,
            `product` TEXT,
            `service` TEXT,
            `price` FLOAT,
            `date` DATE,
            `comment` TEXT,
            PRIMARY KEY(`id`)
        )";

        mysql_query($sql,$host); //create table    

        header('Location:newCustomers.php');

    ?>
    
</body>
</html>