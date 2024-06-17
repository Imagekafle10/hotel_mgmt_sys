<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckInOut</title>
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
                <li> <button> Check in/out</button></li>
                <li> <button> Access</button></li>
                
            </ul>
            <button type="submit" value="clearData" id="logOutBtn"> Log Out</button>
            
        </div>
        <div class="details">
            <?php

$conn=mysqli_connect("localhost","root","","hotelmgmtsys");
$query="SELECT *FROM checkinout";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
    ?>
<table  border="5px"  >
    <tr class="table-head">
        <td>Name</td>
        <td>In_Date</td>
        <td>Out_Date</td>
        <td>TotalPrice</td>
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
    <td> ".$result['Name']."</td>
    <td>".$result['Indate']."</td>
    <td>".$result['Outdate']."</td>
    <td>".$result['Room']."</td>
    <td><a href='checkdelete.php?name=$result[Name] &in=$result[Indate] &out=$result[Outdate] &room=$result[Room]'>View</a> </td>
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
        location.replace('http://localhost/imagephp/onlinerestaurant/adminpanel/panel.php');
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

</script>
</html>