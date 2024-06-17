<?php
$conn = mysqli_connect("localhost","root","","hotelmgmtsys");
// if($_SERVER['REQUEST_METHOD'] === 'POST'){
if(isset($_POST['login']))
{
    $username = $_POST['email'];
    $password = $_POST['password'];
    // print_r($_POST);
    $obj = mysqli_query($conn,"SELECT *FROM clientreg where Username ='$username' ");
    $numcount = mysqli_num_rows($obj);
    if($numcount > 0){
        $data = mysqli_fetch_assoc($obj);
        if($data['Password'] == $password ){
            echo "Correct Password";
            echo"<script> window.location.href = 'http://localhost/imagephp/onlinerestaurantui/restaurant.php' </script>";
            session_start();
            $_SESSION['clientUserData'] = $data;
            // print_r($_SESSION['clientUserData']);


        }else{
            echo"InCorrect Password";
            echo"<script> window.location.href = 'http://localhost/imagephp/clientlogin/login.html?message='+ encodeURIComponent('Incorrect Password'); </script>";

    }
}else{
    echo "InCorrect Username";
    echo"<script> window.location.href = 'http://localhost/imagephp/clientlogin/login.html?message='+ encodeURIComponent('Incorrect Username'); </script>";
    
} 
};
// };
?>