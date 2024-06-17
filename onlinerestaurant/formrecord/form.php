<?php
session_start();
if(isset($_SESSION['clientUserData'])){
$userData = $_SESSION['clientUserData'];
}else{
    echo"Not set";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Data</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color:rgb(186, 248, 248);
        }
        .container{
            height: 70vmin;
        }
        .small-conatiner{
           margin-top: 2vmin;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        form{
        padding: 40px;
        border-radius: 0.5rem;
        box-shadow: 0,0,0,5 rgba(red, green, blue, alpha);
        font-size: 3vmin;
        font-weight: bold;
        border: none;
        background-color: rgb(138, 230, 206);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);

    }
        form .details{
            gap: 20vmin;
        }
        input{
            display: inline-block;
            width: 45vmin;
            padding: 2px;
            border-radius: 1.5vmin;
            border: none;
           font-size: 2.5vmin;
            text-align : center;
            background-color : rgb(227, 226, 249); 
        }
         #submit{
        margin: 10px;
        width: 20vw;
        border-radius: 1.5rem;
        font-size: 3.5vmin;
        cursor:pointer;
        background-color: rgb(100, 100, 206);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: blanchedalmond;
   
    }
    #submit:hover{
        opacity: 0.9;
    }

    
    </style>
</head>
<body>
    <div class="container">
        <div class="small-conatiner">
    <form action="record.php" method="POST">
        <div class="details">
            <input type="hidden" name="FullName" value="<?php echo $userData['Fullname'] ?>"readonly>
            Item <br> 
            <input type="text" id="Item-name" name="Item" readonly> <br><br>
             Order-number <br> 
            <input type="text" id="order-number" name="OrderNumber" readonly> <br><br>
            User-Name <br>
            <input type="text" id="name" name="Name" value="<?php echo $userData['Username']  ?>" readonly> <br><br>
            Total-Quantity <br>
            <input type="text" id="price-number"  name="Quantity" readonly><br><br>
            Total-Price <br>
            <input type="text" id="quantity-number" name="Price" readonly><br><br>
            Address <br> 
            <input type="text" id="Address" name="Location" placeholder="Helps Ryder for Delivery" required> <br><br>
            Mobile-no <br>
        <input type="text" id="Mobile-number" name="Mobile" placeholder="Customer-Confirmation" required><br><br>
    </div>
        <input type="submit" name="Submit" value="Submit" id="submit">
    </form>
        </div>
    </div>
    
</body>
<script>
    var urlParams= new URLSearchParams(window.location.search)
    var receivedNumber=urlParams.get('number2');
    var receivedNumber2=urlParams.get('number');
    var receivedNumber3=urlParams.get('number3');
    var item = urlParams.get('item');
    
    var numberDisplayElement=document.getElementById('price-number');
    var numberDisplayElement2=document.getElementById('quantity-number');
    var numberDisplayElement3=document.getElementById('order-number');
    var itemName = document.getElementById('Item-name');

    numberDisplayElement.value= parseInt(receivedNumber2);
    numberDisplayElement2.value= parseInt(receivedNumber);
    numberDisplayElement3.value= parseInt(receivedNumber3);
    itemName.value= item;

    </script>
</html>