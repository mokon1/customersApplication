<?php

    require("connection.php");
        $name = $_POST['name']; //name of input
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $product = $_POST['product'];
        $service = $_POST['service'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $comment = $_POST['comment'];


        if($name and ($mail or $phone)) {

            $values = mysql_query("INSERT INTO customers SET 
                name='{$name}', 
                mail='{$mail}',
                phone = '{$phone}',
                product = '{$product}',

                price = '{$price}',
                date = '{$date}'

        
            "); //add comment & service

            if($values) header('Location: newCustomers.php'); 
            else echo "Błąd nie udało się dodać nowego rekordu";

        } 
?>   