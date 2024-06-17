<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderState</title>
</head>
<style>
    *{
        padding: 0;
        margin:0;
    }
    .container{
    height: 99.5vh;
    background-color: aliceblue;

    }
    .sub-container{
        border-top:none;
        height: 55vh;
        border-radius: 0px 0px 500px 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(183, 248, 231);
        opacity: 1;
        
    }
    .box{
        height: 75vh;
        width: 60vh;
        position: relative;
        top: 150px;
        border-radius: 0.5rem;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.8);
        background-color: aliceblue;
        animation-name: box-animated;
        animation-duration: 0.8s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
    }
    @keyframes box-animated{
        From{
           top: 0px;
        }
        To{
            top: 150px;
        }
        
    }



    .inside-box{
        border-radius: 0px 0px 50px 50px;
        height: 30vh;
        display: flex;
      justify-content: center;
      background-color: rgb(136, 226, 202);
      
      
    }
    .logo-image{
        background-image: url(grocery.jpg);
        background-size: cover;
        border-radius: 150px;
        height: 18vh;
        width: 9vw;
        position: relative;
        top: 50px;
    

    }
    .inside-box-description{
        height: 34vh;
        display: inline-flex;
        flex-wrap: wrap;
        margin-top: 20px;
        justify-content: center;
    }
    .inside-box-description h1{
   color: rgb(19, 138, 106);
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .inside-box-description p {
        width: 25vw;
        height: 15vh;
        font-size: 20px;
        text-align: center;
        /* align-items: center */
        flex-wrap: wrap;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
#btn-click{
    border: none;
    padding: 0 30px 0 30px;
    width: 25vw;
    margin-bottom: 10px;
    border-radius: 0.2rem;
   font-size: 20px;
   font-weight: 700;
   background-color: rgb(45, 215, 170);
cursor: pointer;
}
#btn-click:hover{
    opacity: 0.8;
}

    
</style>
<?php
session_start();
$orderno = $_SESSION['OrderNumber']; 
?>
<body>
    <div class="container">
        <div class="sub-container">
            <div class="box">
                <div class="inside-box">
                    <div class="logo-image">
                        <!-- <img src="grocery.jpg" alt="" height="18vh"  width="9vw"> -->

                    </div>
                </div>
                <div class="inside-box-description">
                    <h1>Order Confirmed!</h1>
    
                        <p>Your OrderNumber is  <b><?php echo "$orderno" ;?></b>.Your Order 
                            Was Placed Succesfully and you will soon 
                        received your order confirmation via Email </p>
                        <button  id="btn-click">Home</button>
                    </div>
            </div>
        </div>
    </div>
    
</body>
<script>
    
    document.getElementById('btn-click').addEventListener("click",function(){
   window.location.href= "http://localhost/imagephp/onlinerestaurantui/restaurant.php";
    });
</script>
</html>