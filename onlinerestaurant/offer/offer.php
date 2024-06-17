<?php
 if($_SERVER['REQUEST_METHOD'] === "POST"){


$conn = mysqli_connect("localhost","root","","hotelmgmtsys");
$orderno = $_POST['Orderno'];
$quantity = $_POST['Quantity'];
$price = $_POST['Price'];
$discount = $_POST['Discount'];
$finalprice = $_POST['FinalPrice'];
$inser = "INSERT INTO offers(Orderno,Quantity,Price,Discount,FinalPrice) VALUES ('$orderno','$quantity','$price','$discount','$finalprice')";
$run = mysqli_query($conn,$inser);

if( $run ==true){
    echo "Order Confirmed! Thanks For Choosing Us";
}else{
    echo "Sorry! Order is not Confirmed";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="offer.css">
</head>
<body>
    <div class="offerDetails">
        <!-- <div class="offerdetailsview"> -->
        <div class="addBtn">
            <input type="button" value="+" id="add">
        </div>
           <div class="offerDetailsContainer">
               <form action="offer.php" method="POST">
                <label for="Order Number">Order Number</label>
                <input type="text" name="Orderno" placeholder="OrderNumber" id="ordernumber" readonly>
                <label for="Quantity">Quantity</label>
                <input type="text" name="Quantity" placeholder="Quantity" id="quantity" readonly>
                <label for="Actual Price">Actual Price</label>
                <input type="text" name="Price" placeholder="Actual Price" id="price" readonly>
                <label for="Discount Amount">Discount Amount</label>
                <input type="text" name="Discount" placeholder="Discount Amount" id="discountAmount" readonly>
                <label for="Final Price">Final Price</label>
                <input type="text"  name="FinalPrice" placeholder="Final Price" id="finalPrice" readonly>
                <input type="submit" name="submit" value="Confirm">

               </form>
           </div>
       <div class="subBtn">
        <input type="button" value="-" id="sub">
       </div>
        <!-- </div> -->
        </div>      
</body>
<script src="offer.js"></script>
</html>