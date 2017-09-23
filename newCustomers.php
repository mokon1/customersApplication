<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <title>Customers Application</title>
    <link rel="stylesheet" href ="css/style.css">
</head>
<body>
     <form class="list" method="POST" action="send.php">
         <fieldset>
         <h2>Our Customers:</h2>
         <label>Name:<input type="text" name="name"></label>
         <label>Mail:<input type="email" name="mail"/></label>
         <label>Phone:<input type="tel" name="phone"/></label>
         <label>Product:<input type="text" name="product"/></label>
         <p>Service:</p><textarea class="service" name="service" cols="20" rows="5"></textarea>
         <label>Price:<input type="number" name="price"/></label>
         <label>Date:<input type="date" name="date"/></label>
         <p>Comment:</p><textarea class="comment" name="comment" rows="5"></textarea>
         <input type="submit" name="newCustomer" value="ADD NEW CUSTOMERS"/>
        </fieldset>
    </form>
   <a href="listOfCustomers.php"><input type="submit" name="customers" value="ALL CUSTOMERS"/></a>
    
    <?php
        require("connect.php");
        $result = mysql_query('SELECT * FROM customers ORDER BY date DESC LIMIT 3');

        echo '<table class="list">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Product</th>
                <th>Service</th>
                <th>Price</th>
                <th>Date</th>
                <th>Comment</th>
            </tr>';
        while($row = mysql_fetch_array($result)) {
             echo "<tr>
                <td class='row'>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['mail']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['product']}</td>
                <td>{$row['service']}</td>
                <td>{$row['price']}</td>
                <td>{$row['date']}</td>
                <td>{$row['comment']}</td>
            </tr>";
        }
        echo '</table>';
?>

</body>
</html>