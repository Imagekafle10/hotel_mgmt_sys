<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Panel</title>
    <link rel="stylesheet" href="panel.css">
</head>
<body>
    <div class="conatiner">
        <div class="sub-conatiner">
            <div class="order-details">
                
                <div class="side-bar">
                    <ul style="list-style-type: none;">
                <li> <button id="food-order" >Food Order</button></li>
                <li> <button> Reserves</button></li>
                <li> <button id="checked"> Check in/out</button></li>
                <li> <button> Access</button></li>
                
            </ul>
            <button type="submit" value="clearData" id="logOutBtn"> Log Out</button>
            
        </div>
        <div class="details">
            <?php

$conn=mysqli_connect("localhost","root","","hotelmgmtsys");
$query="SELECT *FROM onlineorders";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
    ?>
<table  border="5px"  >
    <tr class="table-head">
        <td >OrderNumber</td>
        <td>Name</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>View Orders</td>
    </tr>
    <?php

// Session Work
    session_start();
    if(isset($_SESSION['userdata'])){
$userGmail = $_SESSION['userdata'];
echo $userGmail['Username'];
// session_destroy();
    }else{
        echo "";
    };



while ($result=mysqli_fetch_assoc($data))
{
echo"
<tr>
    <td> ".$result['OrderNumber']."</td>
    <td>".$result['Item']."</td>
    <td>".$result['Quantity']."</td>
    <td>".$result['Price']."</td>
    <td><a href='update.php?on=$result[OrderNumber] &stat=$result[Status] &fullname=$result[Fullname] &fn=$result[Name] 
    &qn=$result[Quantity] &fp=$result[Price] &itm= $result[Item] &mbl=$result[Mobile]
     &loc=$result[Location]'>View</a> </td>
    </tr>
";    
}
}
else{
   echo"Wait";
}



?>
</table>


            </div>
            </div>
            
            
        </div>
    </div>
</body>
<script >
    document.getElementById("food-order").addEventListener("click",()=>{
        location.reload();
    });
   var logout = document.getElementById("logOutBtn");
    logout.addEventListener("click",()=>{
        var confirmation = confirm("Are you sure want to Logout");
        if( confirmation == true)
        {
            
            window.location.href = "./adminout.php"
        }
        else{
            return false;
        }
    
    // window.location.href = "./adminlog.php"
    });
    document.getElementById("checked").addEventListener("click",()=>{
            window.location.href = "http://localhost/imagephp/onlinerestaurant/adminpanel/checkinout.php"

})    

</script>
</html>