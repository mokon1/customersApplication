<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <title>Application Service</title>
    <link rel="stylesheet" href ="css/style.css">
</head>
<body>
    <div class="button"><a href="newCustomers.php">ADD CUSTOMER</a></div><br>
    <form>
        <fieldset id="searchTool">
            <label> Type name or mail:
                <input type="text" id="findCustomer" placeholder="Search for names or mail.." title="name or mail">
            </label>
            <label>or type product or service:
                <input type="text" id="findProductOrService" placeholder="Search for product or service.." title="product or service">
            </label>
            <label>or type date:
                <input type="text" id="findDate" placeholder="Search for date.." title="date">
            </label>
        </fieldset>
    </form>    
    <?php
        require("connection.php");
        $result = mysql_query('SELECT * FROM customers ORDER BY id DESC');
        
        echo '<table class="list">
            <tr>
                <th id="id">Id</th>
                <th id="name">Name</th>
                <th id="mail">Mail</th>
                <th>Phone</th>
                <th>Product</th>
                <th>Service</th>
                <th>Price</th>
                <th id="date">Date</th>
                <th>Comment</th>
            </tr>';
        while($row = mysql_fetch_array($result)) {
             echo "<tr>
                <td>{$row['id']}</td>
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
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            
            let findNameOrMail = () => {
                let input, filter, table, allTr, tdName, tdMail, i;
                input = document.querySelector("input#findCustomer");
                
                input.addEventListener("keyup", ()=>{
                    filter = input.value.toUpperCase(); //toUpperCase so that you can find name with capital letter or small letter
                    table = document.querySelector("table.list");
                    allTr = table.querySelectorAll("tr");
                  
                    for (i = 0; i < allTr.length; i++) {
                        tdName = allTr[i].getElementsByTagName("td")[1];
                        tdMail = allTr[i].getElementsByTagName("td")[2];
                        if ((tdName) || (tdMail)){
                            if ((tdName.innerHTML.toUpperCase().indexOf(filter) > -1) || (tdMail.innerHTML.toUpperCase().indexOf(filter) > -1)){ //toUpperCase so that you can find name with capital letter or small letter
                                allTr[i].style.display = "";
                            } else {
                                allTr[i].style.display = "none";
                            }
                        }       
                    }         
                })
            }
            
            findNameOrMail();
            
            
            let findProductOrService =() =>{
                let input, filter, table, allTr, tdName, tdMail, i;
                input = document.querySelector("input#findProductOrService");
                
                input.addEventListener("keyup", ()=>{
                    filter = input.value.toUpperCase();
                    table = document.querySelector("table.list");
                    allTr = table.querySelectorAll("tr");
                  
                    for (i = 0; i < allTr.length; i++) {
                        tdProduct = allTr[i].getElementsByTagName("td")[4];
                        tdService = allTr[i].getElementsByTagName("td")[5];
                        if ((tdProduct) || (tdService)){
                            if ((tdProduct.innerHTML.toUpperCase().indexOf(filter) > -1) || (tdService.innerHTML.toUpperCase().indexOf(filter) > -1)){
                                allTr[i].style.display = "";
                            } else {
                                allTr[i].style.display = "none";
                            }
                        }       
                    }         
                })
            }
            findProductOrService();
            
            let findDate =() =>{
                let input, filter, table, allTr, tdDate, i;
                input = document.querySelector("input#findDate");
                
                input.addEventListener("keyup", ()=>{
                    filter = input.value;
                    table = document.querySelector("table.list");
                    allTr = table.querySelectorAll("tr");
                  
                    for (i = 0; i < allTr.length; i++) {
                        tdDate = allTr[i].getElementsByTagName("td")[7];
                        if (tdDate){
                            if (tdDate.innerHTML.indexOf(filter) > -1){ 
                                allTr[i].style.display = "";
                            } else {
                                allTr[i].style.display = "none";
                            }      
                        }
                    }
                })
            }
            findDate();
        });
                    
    </script>
</body>
</html>    