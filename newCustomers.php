<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <title>Customers Application</title>
    <link rel="stylesheet" href ="css/style.css">
</head>
<body>
     <form class="list" action="send.php" method="POST">
         <fieldset>
         <h2>Our Customers:</h2>
         <label>Name:<input type="text" name="name"></label>
         <label>Mail:<input type="email" name="mail"/></label>
         <label>Phone:<input type="tel" name="phone"/></label>
         <label>Product:<input type="text" name="product"/></label>
         <p>Service:</p><textarea class="service" cols="20" rows="5"></textarea>
         <label>Price:<input type="number" name="price"/></label>
         <label>Date:<input type="date" name="date"/></label>
         <p>Comment:</p><textarea class="comment" rows="5"></textarea>
         <input type="submit" name="newCustomer" value="ADD NEW CUSTOMERS"/>
        </fieldset>
    </form>
    <input type="submit" name="customers" value="ALL CUSTOMERS"/>     
    <table class="list">
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Phone</th>
            <th>Product</th>
            <th>Service</th>
            <th>Price</th>
            <th>Date</th>
            <th>Comment</th>
        </tr>
    </table>
            
   <script type="text/javascript">
       document.addEventListener("DOMContentLoaded", function(){
           console.log("ok");

            //variables    
           const form= document.querySelector("form");
           const table = document.querySelector("table");
           const textarea = document.querySelector("textarea");
            
           const name = document.querySelector("input[name='name']");
           const mail = document.querySelector("input[name='mail']");
           const phone = document.querySelector("input[name='phone']");
           const product = document.querySelector("input[name='product']");
           const price = document.querySelector("input[name='price']");
           const date = document.querySelector("input[name='date']");
           const service = document.querySelector("textarea.service");        
           const comment = document.querySelector("textarea.comment");        
           const addCustomer = document.querySelector("input[name='newCustomer']");
            
           const allCustomers = document.querySelector("input[name='customers']");

           addCustomer.addEventListener("click", function(e){
               e.preventDefault();
               console.log("okgg");
               let nameValue = name.value;
               let mailValue = mail.value;
               let phoneValue = phone.value;
               let productValue = product.value;
               let priceValue = price.value;
               let dateValue = date.value;
               let serviceValue = service.value;
               let commentValue = comment.value;

               const newLine = document.createElement("tr");
               newLine.classList.add("newLine");
                
               const newName = document.createElement("td");
               newName.classList.add("newName");
               newName.innerText = nameValue;
               const newMail = document.createElement("td");
               newMail.classList.add("newMail");
               newMail.innerText = mailValue;
               const newPhone = document.createElement("td");
               newPhone.classList.add("newPhone");
               newPhone.innerText = phoneValue;
               const newProduct = document.createElement("td");
               newProduct.classList.add("newProdunct");
               newProduct.innerText = productValue;
               const newPrice = document.createElement("td");
               newPrice.classList.add("newPrice");
               newPrice.innerText = priceValue;
               const newDate = document.createElement("td");
               newDate.classList.add("newDate");
               newDate.innerText = dateValue;
               const newService = document.createElement("td");
               newService.classList.add("newService")
               newService.innerText = serviceValue;
               const newComment = document.createElement("td");
               newComment.classList.add("newComment");
               newComment.innerText = commentValue;
               const deleteBtn = document.createElement("div");
               deleteBtn.innerText = "DELETE";
               deleteBtn.classList.add("deleteBtn");
               //newComment.classList.add("newComment");
               //newComment.innerText = commentValue;
                 
                
               table.appendChild(newLine);
               newLine.appendChild(newName);
               newLine.appendChild(newMail);
               newLine.appendChild(newPhone);
               newLine.appendChild(newProduct);
               newLine.appendChild(newPrice);
               newLine.appendChild(newDate);
               newLine.appendChild(newService);
               newLine.appendChild(newComment);
               newLine.appendChild(deleteBtn);
       
           });
            
            
           allCustomers.addEventListener("click", function(e){
               console.log("dziala"); //toDo
           }); 
            
    });
    
    </script>
    
   
</body>
</html>