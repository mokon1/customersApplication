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
             <hr>
             <label>Name:<input type="text" name="name" id="name"></label>
             <label>Mail:<input type="email" name="mail" id="email"/></label>
             <label>Phone:<input type="tel" name="phone" id="phone"/></label>
             <label>Product:<input type="text" name="product"/></label>
             <p>Service:</p><textarea class="service" name="service" cols="20" rows="5"></textarea>
             <label>Price:<input type="number" name="price"/></label>
             <label>Date:<input type="date" name="date" id="date"/></label>
             <p>Comment:</p><textarea class="comment" name="comment" rows="5" id="comment"></textarea>
             <input type="submit" name="newCustomer" value="ADD NEW CUSTOMERS"/>
         </fieldset>
    </form>
   <a href="listOfCustomers.php"><input type="submit" name="customers" value="ALL CUSTOMERS"/></a>
    
    <?php
        require("connection.php");
        $result = mysql_query('SELECT * FROM customers ORDER BY date DESC LIMIT 3');
        
        echo '<h2>The last 3 added customers (order by date)</h2>';
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
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            const button = document.querySelector("input[type='submit']");
            const name = document.querySelector("#name");
            const email = document.querySelector("#email");
            const phone = document.querySelector("#phone");
            const date = document.querySelector("#date");
            const comment = document.querySelector("#comment");
            
            button.addEventListener("click", (event)=>{
                if(name.value.length<5){
                    event.preventDefault();
                    alert("Please enter name (at least 5 characters)");
                }else if(email.value.indexOf("@")<0){
                  event.preventDefault();
                  alert("Please enter email address with '@'");
                }else if(phone.value.length < 9){
                  event.preventDefault();
                  alert("Please enter phone (at least 9 characters)");
                }else if(date.value.length == 0){
                    event.preventDefault();
                    alert("Please enter date");
                }else if(comment.value.length ==0){
                    event.preventDefault();
                    alert("Please enter your comment");
                }
            });         
        });
    </script>

</body>
</html>