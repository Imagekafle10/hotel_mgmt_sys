<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Product</title>
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
   .tableInfo{
    background-color: rgb(150, 222, 251);
    margin-top: 7vh;
    padding: 15px;
    border-radius: 1em;
    width: 25vw;
    display: flex;
    flex-wrap: wrap;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    height: 73vh;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);
   }
   .formInfo{
    margin-top: 25px;
   }
   .tableInfo label{
       font-size: 30px;
    }
    
    .tableInfo input,select{
    width: 25vw;
    height: 5vh;
    border-radius: 0.5em;
    text-align: center; 
    font-size:20px;   
border: none;
box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);

}

.tableInfo input[type="submit"]{
margin-top: 3.5vh;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
font-weight: bold;
font-size: 15px;
cursor: pointer;
}
#updateBtn{
    background-color:rgb(98, 219, 98);
}#deleteBtn{
    background-color:rgb(239, 88, 88);
}
</style>
<body>
    <div class="container">
        <div class="sub-container">
            <!-- <h1>Manage-Order</h1> -->
            <div class="anyBtn">
        <button class="btnSelected" id="homeBtn">Home</button>
        <button class="btnSelected"><a href="./myOrders.php">ManageOrder</a></button>
        <button class="btnSelected">FAQ</button>
    </div>
    <div class="tableInfo">
        <table>
            <div class="formInfo">
                <form action="#" method="post">
                    <label for="OrderNumber">OrderNumber</label>
                    <input type="text" name='OrderNumber' value="<?php echo $_GET['orderno'] ?>"readonly>
                    <label for="">Status</label>
                    <input type="text" name='status' id="state" value="<?php echo $_GET['state'];?>">
                <label for="">Item</label>
                <select name="Item"  id="selectitm" >
                    <option  value="<?php echo trim($_GET['itm'])?>" disabled selected><?php echo $_GET['itm']?></option>
                    <option value="ChickenBurger">ChickenBurger</option>
                    <option value="Chicken pot pier">Chicken pot pier</option>
                    <option value="Lasagna">Lasagna</option>
                    <option value="ChickenChowmein">ChickenChowmein</option>
                    <option value="OreoShake">OreoShake</option>
                    <option value="ChiliChiken">ChiliChiken</option>
                </select> 
                <label for="">Quantity</label>
                <input type="text" name='Quantity' value="<?php echo $_GET['qty'] ?>">
                <label for="">Price</label>
                <input type="text" name='Price' value="<?php echo $_GET['pri'] ?>">
                <input type="submit" name='update' value="Update" id='updateBtn'>
                <input type="submit" name='delete' value="Delete" id='deleteBtn' onclick="confirm('Do you want to delete this Order? ')">
            </form>
        </div>

       </table> 
    </div>
        </div>
    </div>
</body>
<?php
$conn = new mysqli('localhost','root','','hotelmgmtsys');
if($_SERVER['REQUEST_METHOD']==="POST"){
    if(isset($_POST['update']))
    {
        if(trim($_POST['status']) ==="" || trim($_POST['status']) === 'Accepted'){   
            // print_r($_POST['status']);
            $ordern=$_POST['OrderNumber'];
            $status=$_POST['status'];
            $pricen=$_POST['Price'];
            $quantityn=$_POST['Quantity'];
            $item=trim($_POST['Item']);
            $query="UPDATE  onlineorders SET  Item='$item', Status='$status', Quantity='$quantityn', Price='$pricen' where OrderNumber='$ordern'";
            $data=mysqli_query($conn,$query);
            if($data)
            {
                header("Location:http://localhost/imagephp/onlinerestaurantui/myOrders.php");
            }
            else{
                echo "Record not updated";
            }

        }else{
echo"<script>alert('The order has Been Proceed')</script>";

        }
    }
if(isset($_POST['delete'])){
    if(trim($_POST['status']) ==="" || trim($_POST['status']) === 'Accepted'){   
    $ordern=$_GET['orderno'];
    $query="DELETE from onlineorders where OrderNumber='$ordern' ";
    $data=mysqli_query($conn,$query);
    if($data){
        header("Location:http://localhost/imagephp/onlinerestaurantui/myOrders.php");
    }else{
        echo"Record hasnot been deleted";
    }
    }else{
echo"<script>alert('The order has Been Proceed')</script>";
    }
}
};
?>
<script>
    document.getElementById('homeBtn').addEventListener('click',()=>{
        window.location.href="http://localhost/imagephp/onlinerestaurantui/restaurant.php"
    });
    var presentStatus = document.getElementById('state');
    // document.getElementById('updateBtn').addEventListener('click',(e)=>{
    //     if(presentStatus.value != "" || presentStatus.value != 'Accepted '){

    //         e.preventDefault();
    //     }
    // });
    // document.getElementById('deleteBtn').addEventListener('click',(e)=>{
    //     if(presentStatus.value != null || presentStatus.value != 'Accepted '){
    //       console.log('Delete_clicked');
    //         // e.preventDefault();
    //     }
    // });
</script>
</html>