<html>
    <head>
    <title>Staff Panel</title>
    <link rel="stylesheet" href="panel.css">
</head>
<style>
    .order-details{
        width: 100vw;
        /* display: inline-block; */
    }
    .inside-order{
        margin-left: 20vw ;
        width: 100vw;
        display: flex;
    }
    .inside-update{
        /* border: 1px solid black; */
        display: flex;
        flex-wrap: wrap;
        width:18vw;
        height: auto;
        position: relative;
        top: 2vmin;
        left: 8vw;
        padding:30px;
        font-size:22px;
        /* font-weight:bold; */
        color: rgb(75, 149, 35);
        /* text-align:center; */
        background-color: #ffbf65;
        border-radius: 0.7rem;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);

    }
    .inside-update label{
        color: black;
    }

     input#update{
        padding: 6px;
        border-radius: 0.5rem;
        border:none;
        background: #59615d;
        /* gap: 5px; */
        transition:0.5s;
        cursor:pointer;
        padding: 20px;
        font-size: 20px;
        color: aliceblue;
        font-weight: bold;
    }
    input#update:hover{
        background: #ffa23a;
        color: black;
    }
    




    .userDetails{
        /* border : 1px solid black; */
        position: absolute;
        top: 2vmin;
        right: 8vw;
        width:18vw;
        border-radius: 0.7rem;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);
        display: flex;
        flex-wrap: wrap;
        padding:30px;
        font-size:22px;
        color : rgb(75, 149, 35);
        
        /* font-weight:bold; */
        /* text-align:center; */
        background-color: #ffbf65;

    }
    .userDetails label{
        color : black;
        font-weight:;

    }
   .orderDetails{
    border: 3px solid black;
    margin-left: 20vw ;
    

    position: absolute;
    top: 300px;
   }
   .orderOperation table{
    width: 79.6vw;
    /* padding: 20px; */

   }

   .orderOperation tr{
    /* padding : 30px; */
    font-size: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    height:7vh;
    
   }
   .orderOperation th{
    background-color: #9797f6;
}
.orderOperation input{
    font-size: 20px;
    border-radius: 1rem;
    border: none;
    width: 10vw;
    text-align: center;
}
div.btn{
    position: absolute;
    top:425px;
    right: 20px;
    /* padding: 20px; */
}
div.btn input{
    padding: 25px;
}

    #state{ 
        border-radius:1rem;
        width:10vw;
        height:4vh;
        text-align:center;
        font-size:15px;
    }









</style>
<body>
    <div class="conatiner">
        <div class="sub-conatiner">
            <div class="order-details">
                
                <div class="side-bar">
                    <ul style="list-style-type: none;">
                        <li> <button id="food-order" >Food Order</button></li>
                        <li> <button> Reserves</button></li>
                        <li> <button> Check in/out</button></li>
                        <li> <button> Access</button></li>
                        
                    </ul>
                </div>
                <div class="inside-order">
                    <div class="inside-update">
                        <label for="">Location</label> <br>
                        <?php echo $_GET['loc'] ?> 
                        <label for="">Name</label>   <br>
                        <?php echo $_GET['fullname']; ?> <br><br>
                        <!-- Quantity<input type="text" name="Quantity" value="<?php echo $_GET['qn']; ?>" > <br><br>
                        Price<input type="text" name="Price" value="<?php echo $_GET['fp']; ?>" > <br><br> -->
                        
                    </div>
                    
                    
                    <div class="userDetails">
                        <div class="userInformation">
                            <label for="">User-Name</label> <br>
                            <?php echo $_GET['fn']; ?> <br><br>
                            <label for="">Mobile-Number</label> <br>
                            <?php echo $_GET['mbl']; ?> <br>
                            
                            
                            
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>    
        <div class="orderDetails">
            <div class="orderOperation">
                <table >
                    <tr>
                        <th> Order Number </th>
                        <th> Item</th>
                        <th> Status</th>
                        <th> Quantity</th>
                        <th> Price</th>
                    </tr>
                <tr>
                    <form action="" method="post">
                        <td> <input type="text" name="OrderNumber" value="<?php echo $_GET['on']; ?>" Readonly> </td>
                        <td> <input type="text" name="Item" value="<?php echo $_GET['itm']; ?>"> </td>
                            <td>
                            <div class="statusCondition">
                                <select name="status" id="state">
                                    <option disabled selected><?php echo $_GET['stat'];?></option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Delivered">Delivered</option>    
                                </select>
                            </div>
                            </td>
                        <td> <input type="text" name="Quantity" value="<?php echo $_GET['qn']; ?>"> </td>
                        <td> <input type="text" name="Price" value="<?php echo $_GET['fp']; ?>"> </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="btn">
                <input type="submit" name="update" value="Update" id="update">
               <input type="submit" name="delete"  value="Delete" id="update" onclick="confirm('Do you want to Delete this Order?')" >
            </div>
            </div>
</div>
            </body>


             <?php
            $conn=mysqli_connect("localhost","root","","hotelmgmtsys");
            error_reporting(0);
            $_Get['on'];
            $_Get['fullname'];
            $_Get['fn'];
            $_Get['stat'];
            $_Get['qn'];
            $_Get['fp'];
            $_Get['itm'];
            ?>
            <?php
            if($_POST['update'])
            {
            $ordern=$_POST['OrderNumber'];
            $name=$_POST['Name'];
            $status=$_POST['status'];
            $quantityn=$_POST['Quantity'];
            $pricen=$_POST['Price'];
            $item=$_POST['Item'];
        $query="UPDATE  onlineorders SET  Item='$item', status='$status',Quantity='$quantityn', Price='$pricen' where OrderNumber='$ordern'";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo  '<script>window.location.href="panel.php"</script>';
        }
        else{
            echo "Record not updated";
        }
        }

        if($_POST['delete']){
$conn=mysqli_connect("localhost","root","","hotelmgmtsys");
$order=$_GET['on'];
$query="DELETE from onlineorders where OrderNumber='$order' ";
$data=mysqli_query($conn,$query);
if($data){
     echo"<script>window.location.href='panel.php';</script>"; 
}else{
    echo"Record hasnot been deleted";
}
        }
        ?> 

        <script>
            var selectedOption = document.getElementById('state');
        if(selectedOption.value == "")
        {
        document.getElementsByTagName('option')[0].innerHTML = "None";
             console.log("Done");
        };
        
         document.getElementById("food-order").addEventListener("click",()=>{
           window.location.href='panel.php';

          });
          
           
        </script>
        </html>