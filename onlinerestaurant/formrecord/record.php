<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order is placed</title>
</head>
<style>
    body{
        background-color: rgb(138, 230, 206);

        
        font-size: 8vmin;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
               
    }
</style>
<body>


<?php
if($_SERVER["REQUEST_METHOD"] === "POST" ){
$conn=mysqli_connect("localhost","root","","hotelmgmtsys");
$ordern=$_POST['OrderNumber'];
$fullname=$_POST['FullName'];
$name=$_POST['Name'];
$quantityn=$_POST['Quantity'];
$pricen=$_POST['Price'];
$mobile = $_POST['Mobile'];
$location = $_POST['Location'];
$item = $_POST['Item'];
$dateTime = new DateTime();
$orderDate = date("Y-m-d");
// echo $orderDate;

$inser=("INSERT INTO onlineorders(OrderNumber,OrderDate,FullName,Name,Quantity,Price,Mobile,Location,Item) VALUES ('$ordern','$orderDate','$fullname',
'$name','$quantityn','$pricen','$mobile','$location','$item')");
$run=mysqli_query($conn,$inser);
if($run == true){
    session_start();
    $_SESSION['OrderNumber'] = $ordern;
    // echo $_SESSION['OrderNumber'];
    header('Location:http://localhost/imagephp/onlinerestaurant/formrecord/paymentMethod.html');
  exit();
    // echo('<br> Go To <a href="http://localhost/imagephp/onlinerestaurantui/restaurant.php" style="text-decoration: none;"> Home</a>');
}else{
    echo"Sorry! Order Is not Confirmed";
}
}
?>
</body>
</html>