<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    .container{
        background-color: rgb(135, 167, 222);
        height: 100vh;
        width:  99.6vw;
        display: flex;
        justify-content: center;
    
    }
    .sub-container{
        height: 100vh;
        width:  87vw;
        margin-left:190px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        background-color: rgb(143, 242, 255);
     }
   .table-info{
    margin-top: 40px;
    width: 90vw;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
text-align: center;
   }

   .table-info h1{
    font-weight: 750;
    color: rgb(87, 130, 216);
   }

   .table-info table{
     width: 86.7vw;
     box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);

    }
    table th{
     padding: 20px;
     background-color: #e26666;
     font-size: 22px;
     font-weight: 500;
    }
   table td{
    background-color:rgb(202, 228, 250);
    padding: 20px;
    font-weight: 500;

   }
   .anyBtn{
    position: absolute;
    left:0px;
    display:flex;
    flex-wrap:wrap;
    width: 12.5vw;
   }
   .btnSelected{
    margin:4px;
    height:10vh;
    width:13vw;
    cursor:pointer;
    font-size:22px;
    border-radius:0.5rem;
    border:none;
   }
</style>
<?php

session_start();
$currentUser = $_SESSION['clientUserData'];
$userName = $currentUser['Username'];
$conn = mysqli_connect("localhost","root","","hotelmgmtsys");
$selectedData =mysqli_query($conn,"SELECT *From onlineorders Where Name= '$userName'");
$numCount = mysqli_num_rows($selectedData);
if($numCount > 0 ){
    ?>
<body>
    <div class="container">
        <div class="sub-container">
            <div class="table-info">
                <h1>Order History</h1>
                <table>
                    <tr>
                        <th>Order-Date</th>
                        <th>Order-Number</th>
                        <th>Status</th>
                        <th>Item</th>
                        <th>Total-Price</th>
                        <th>View</th>
                    </tr>
                    <?php
                while($data = mysqli_fetch_assoc($selectedData)){
                echo"
                    <tr>
                        <td>".$data['OrderDate']."</td>
                        <td>" .$data['OrderNumber']."</td>
                        <td>" .$data['Status']."</td>
                        <td>" .$data['Item']. "</td>
                <td>".$data['Price']."</td>
                <td> <a href='myOrderUpdate.php?orderno=$data[OrderNumber] &state=$data[Status] &itm=$data[Item] 
                &qty=$data[Quantity] &pri=$data[Price]'>ViewOrder</a></td>
                </tr>
                    ";
            };
        };
                ?>
                <!-- // <td> <a href="">OrderDetails</a>;</td> -->
        </table>
    </div>
</div>
<div class="anyBtn">
    <button class="btnSelected" id="homeBtn">Home</button>
    <button class="btnSelected">ManageOrder</button>
    <button class="btnSelected">FAQ</button>
</div>
</div>
</body>
<script>
    document.querySelector("#homeBtn").addEventListener("click",function(){
        window.location.href = "http://localhost/imagephp/onlinerestaurantui/restaurant.php";
    });
</script>
</html>