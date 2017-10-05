<?php

    require("connection.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $name = "";
        $mail = "";
        //$phone = "";
        $product = "";
        $service = "";
        $price = "";
        $date = "";
        $comment = "";
        
        if(isset($_POST['name']) === true && strlen(trim($_POST['name'])) >= 5) { 
            $name = trim($_POST['name']); 
        } else { 
            echo('Please enter name (at least 5 characters)');
        }
        
        
        if(isset($_POST['mail']) === true) { 
            $mail = trim($_POST['mail']); 
        } else { 
            echo('Please enter mail');
        }
        
        
        if(isset($_POST['phone']) === true && strlen(trim($_POST['phone'])) >= 8) { 
            $phone = $_POST['phone']; 
        } else { 
            echo('Please enter phone (at least 9 characters)');
        }
        
        
        if(isset($_POST['product']) === true) { 
            $product = trim($_POST['product']); 
        }
        
        
        if(isset($_POST['service']) === true) { 
            $service = trim($_POST['service']); 
        }
        
        
        if(isset($_POST['price']) === true) { 
            $price = trim($_POST['price']);
        }
        
        
        if(isset($_POST['date']) === true) { 
            $date = $_POST['date']; 
        } else { 
            echo('Please enter date');
        }
        
        
        if(isset($_POST['comment']) === true && strlen(trim($_POST['comment'])) >0) { 
            $comment = trim($_POST['comment']); 
        } else { 
            echo('Please enter your comment');
        }
        
        
        $values = mysql_query("INSERT INTO customers SET 
            name='{$name}', 
            mail='{$mail}',
            phone = '{$phone}',
            product = '{$product}',
            service = '{$service}',     
            price = '{$price}',
            date = '{$date}',
            comment = '{$comment}'
        ");

        if($values) header('Location: newCustomers.php'); 
        else echo "Error! Something wrong with connection";
        
    }
?>   