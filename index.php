<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <title>Customers Application</title>
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

        //create table
        mysql_select_db("customersdatabase", $host);
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

        header('Location:customers.php');

    ?>
    
</body>
</html>