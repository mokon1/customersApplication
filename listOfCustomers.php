<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <title>Application Service</title>
    <link rel="stylesheet" href ="css/style.css">
</head>
<body>

    <?php
        require("connection.php");
        
        $result = mysql_query('SELECT * FROM customers ORDER BY id DESC');

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
                <td class='deleted'>DELETE</td>
            </tr>";
        }
        echo '</table>';
    ?>
    
</body>
</html>    