<?php
    session_start();
    if(isset($_SESSION['clientUserData'])){
$currentUser = $_SESSION['clientUserData'];
// echo $currentUser['Username'];
}else{
    echo"Not Set";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Service</title>
    <link rel="stylesheet" href="restaurant.css">
</head>
<body>
    <div class="allbody">
        <div class="header">
            <div class="conatiner">
                <div class="navbar">
                    <img src="Burger King Fries.png" >
                </div>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
        <li><a href="#featuredProducts">About</a></li>
        <li><a href="./../onlinerestaurant/basil/check/check.php">Service</a></li>
        <li><a href="#" id="accountInfo">Account</a></li>
        <p id="clientFullname" ><?php echo $currentUser['Fullname']  ?></p>
        <div class="displayAccountInfo">
            <ul>
        <li><a href="#" id="lastLogin"></a></li>
        <li><a href="#">  <?php echo $currentUser['Username']  ?></a></li>
        <li><a href="myOrders.php">My Orders</a></li>
        <li><a href="#" > <button name="logOut" id="userLogoutBtn">Log Out </button></a></li>
           </ul>
        </div>
        
    </nav>
</ul>
</div>

   <div class="row">
    <div class="col">
        <b><h1>Enjoy your  Delicious<br> Meal and Experience!</h1>
        <p>Welcome to the Oasis Restaurant</p><br></b>
        <a href="#featuredProducts" class="btn">Explore Now &#8594;</a>
        
    </div>
   </div>
   </div>
   <!-- Featured Categories -->
   <div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-1">
             <img src="sandwich.jpg" width="400px"height="350px" >
            </div>
            <div class="col-1">
                <img src="vegpizza.jpg"  width="400px"height="350px">
            </div>
             <div class="col-1">
                <img src="bbq chi pizza.webp"  width="400px"height="350px">
        </div>
        </div>
    </div>
   </div>
   <!-- Featured products -->
   <div class="small-container" id="featuredProducts">
    <h2 class="title"> Featured Products</h2>
    <div class="row">
        <div class="col-2">
            <img src="chicken roll.webp" width="400px"height="350px" >
            <div class="rating">
                <img src="4star.png" width="100px" height="20px" >
            </div>
            <h2 id="items" >Chicken burger</h2>
            <div class="add-btn">
            <button id="add" class="add">+</button>
            <p id="price"> 500</p>
            <button id="sub" class="sub">-</button>
            </div>
            <div class="displayAction">
                <p>Total-Quantity   </p>
                <div class="displayQuantity">                
                </div>
                <p>Total-Price </p>

                <div class="displayPrice">
                    
                </div>
                <div class="confirmorder">
                    <button id="confirmsall">Confirm</button>
                </div>
            </div>
</div>


<div class="col-2">
            <img src="Chicken pot pie.png" width="400px"height="350px" >
            <div class="rating">
                <img src="4star.png" width="100px" height="20px" >
            </div>
            <h2 id="items">Chicken pot pier</h2>
             <div class="add-btn">
                <button id="add" class="add">+</button>
                <p id="price"> 500</p>
                <button id="sub" class="sub">-</button>
                </div>
                <div class="displayAction">
                    <p>Total-Quantity</p>
                    <div class="displayQuantity">                
                    </div>
                    <p>Total-Price</p>
                    <div class="displayPrice">
                        
                    </div>
                    <div class="confirmorder">
                        <button id="confirmsall">Confirm</button>
                    </div>
    
                </div>
    


        </div><div class="col-2">
            <img src="Lasagna.png"width="400px"height="350px" >
            <div class="rating">
                <img src="4star.png" width="100px" height="20px" >
            </div>
            <h2 id="items">Lasagna</h2>
            <div class="add-btn">
                <button id="add" class="add">+</button>
                <p id="price"> 500</p>
                <button id="sub" class="sub">-</button>
                </div>
                <div class="displayAction">
                    <p>Total-Quantity</p>
                    <div class="displayQuantity">                
                    </div>
                    <p>Total-Price</p>
                    <div class="displayPrice">
                        
                    </div>
                    <div class="confirmorder">
                        <button id="confirmsall">Confirm</button>
                    </div>
    
                </div>
    

        </div>
    </div>
   </div>
   


   <!-- latetest products -->
   <div class="products">
   <div class="small-container">
    <h2 class="title"> Latest Products</h2>
    <div class="row">
        <div class="col-2">
            <img src="Chicken-Chow-Mein.jpg" width="400px"height="350px" >
            <div class="rating">
                <img src="4star.png" width="100px" height="20px" >
            </div>
            <h2 id="items">Chicken-ChowMein</h2>
            <div class="add-btn">
                <button id="add" class="add">+</button>
                <p id="price"> 150</p>
                <button id="sub" class="sub">-</button>
                </div>
                <div class="displayAction">
                    <p>Total-Price</p>
                    <div class="displayQuantity">                
                    </div>
                    <p>Total-Price</p>
                    <div class="displayPrice">
                        
                    </div>

                    <div class="confirmorder">
                        <button id="confirmsall">Confirm</button>
                    </div>
    
                </div>
    

    
        </div>
        <div class="col-2">
            <img src="Oreo Shake Burger King.png" width="400px"height="350px" >
            <div class="rating">
                <img src="4star.png" width="100px" height="20px" >
            </div>
            <h2 id="items">Oreo Shake</h2>
            <div class="add-btn">
                <button id="add" class="add">+</button>
                <p id="price"> 50</p>
                <button id="sub" class="sub">-</button>
                </div>
                <div class="displayAction">
                    <p>Total-Quantity</p>
                    <div class="displayQuantity">                
                    </div>
                    <p>Total-Price</p>

                    <div class="displayPrice">
                        
                    </div>

                    <div class="confirmorder">
                        <button id="confirmsall">Confirm</button>
                    </div>
    
                </div>
    



    
        </div>
        <div class="col-2">
            <img src="chilli-chicken.webp" width="400px"height="350px" >
            <div class="rating">
                <img src="4star.png" width="100px" height="20px" >
            </div>
            <h2 id="items">chilli-chicken</h2>
            <div class="add-btn">
                <button id="add" class="add">+</button>
                <p id="price"> 250</p>
                <button id="sub" class="sub">-</button>
                </div>
                <div class="displayAction">
                    <p>Total-Quantity</p>
                    <div class="displayQuantity">                
                    </div>
                    <p>Total-Price</p>
                    <div class="displayPrice">
                        
                    </div>
                    <div class="confirmorder">
                        <button id="confirmsall">Confirm</button>
                    </div>
    
                </div>
    

    
        </div>
    </div>
   </div>
   </div>
   <!-- offer -->
   <div class="offer">
       <div class="small-container">
           <h3 class="title">Offer!</h3>

          


           <div class="row">
            <div class="lol">
                
                <img src="Chicken burger.png" class="offer-img" >
           <div class="lol">
                <p>Exclusively available in our Restaurant</p><br>
                <h4>Yummy Burger with extra chese</h4><br>
                <small>
                    First 10 order will get extra 50% discount
                </small><br>
                <br>
                <a class="buynow">Buy Now &#8594;</a>
                </div>
               
            </div>
        </div>
    </div>
   </div>
   
   
   <!-- testimonial -->
   <div class="testimonial">
    <div class="small-container">
        <div class="row">
           
            <div class="col-6">
                <p>Hello World  “The staff was great. 
                    <br>The receptionists were very helpful <br> 
                    and answered all our questions. <br>
                     The  service was always on time. <br>
                      Will be Ordering back! 
                      <br> Thank you so much.”
                    </p>
            
             <div class="rating">
                        <img src="4star.png" width="100px" height="20px">
                      </div>
                      <img src="9.jpg">
                      <h5>Emma Watson</h5>
            </div>
               <div class="col-6">
                <p>Hello World <br>
                    here the product i order <br>
                    is expectation equal to relaity and <br>
                    the delivery services are also fast <br>
                    and good. <br>
                 </p>
             <div class="rating">
                        <img src="4star.png"width="100px" height="20px">
                      </div>
                      <img src="8.jpg">
                      <h5>The Rock</h5>
               </div>
                <div class="col-6">
                    <p>Hello World <br>
                        Amazing <br> The largest online retailer in the world, <br> offering a wide range <br> of products and services, <br> such  clean, <br> On time, <br> and Productivity.
                     </p>
                 <div class="rating">
                            <img src="4star.png"width="100px" height="20px">
                          </div>
                          <img src="10.jpg">
                          <h5>Jeniffer Clint</h5>
    
                </div>
        </div>
    </div>
   </div>
   <!-- Brands -->
   <div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-7">
                <img src="11.jpg"  width="50px" >
            </div>
            <div class="col-7">
                <img src="12.png"width="50px">
            </div>
            <div class="col-7">
                <img src="13.png"width="50px">
            </div>
            <div class="col-7">
                <img src="14.png"width="50px">
            </div>
            <div class="col-7">
                <img src="16.png"width="50px">
            </div>
        </div>
    </div>
   </div>
   <!-- Footer -->
   <div class="footer">
    <div class="small-conatiner">
        <div class="row">
            <div class="footer-col-1">
                <h7>Dowload our app</h7><br>
                <p>Download App For Android and IOS Device</p>
                <div class="applogo">
                    <img class="play" src="19.png" width="180px">
                    <img class="app" src="appstore.png"width="170px">
                </div>
            </div>
                <div class="footer-col-2">
                    <img src="16.png"width="50px"height="50px">
                <p >Our Purpose is to make pleasure</p>
                
            </div>
            <div class="linksFollows">
             <div class="footer-col-3">
                <!-- <h7> Useful links</h7> -->
                <!-- <ol style="list-style: none;">
                    <li>Coupons</li>
                    <li>Ranks</li>
                    <li>Quality</li>
                    <li>policy</li>
                    </ol> -->
            </div>
            <div class="footer-col-4">
                <h7> Follow Us On:</h7>
                <ol style="list-style-type: none;">
                    <li>Facebook</li>
                    <li>Youtube</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                </ol>
            </div>
            </div> 
        </div>
        <hr size="0.5">
        <div class="copyRight">
            <h8 style="color:white;">ALL RIGHT RESERVED @2024</h8>
        </div>
    </div>
   </div>
   </div>
</body>
<script src="restaurant.js"></script>
</html>