<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST['Confirm'])){
    // if(isset($_POST['gnder'])){
        
        
        $fullname = $_POST['Fullname'];
        $username= $_POST['Username'];
        $password= $_POST['Password'];
        $day = $_POST['Day'];
        $month = $_POST['Month'];
        $year = $_POST['Year'];
        
       
        $gender = $_REQUEST['gender'];
        // print_r($_POST);


// creating date format
    $dateobject =mktime(0,0,0,$month,$day,$year);
    $birthday  = date('Y-m-d', $dateobject);
    
    $conn = mysqli_connect("localhost","root","","hotelmgmtsys");
    $usernameValidate = "SELECT *FROM clientreg where Username ='$username'";
    $result = mysqli_query($conn,$usernameValidate);
    $rowcount = mysqli_num_rows($result);
    if( $rowcount > 0){
      echo"<script>alert('Username Already Exist')</script>";
      echo "<script>window.location.href ='login.html'</script>";

    }else{

    $inser ="INSERT INTO clientreg(Fullname,Username,Password,Birthday,Gender) VALUES ('$fullname','$username','$password','$birthday','$gender')";
    $run = mysqli_query($conn,$inser);
    if($run == true){
      echo"<script>alert('Registered Successfull')</script>";
       echo "<script>window.location.href ='login.html'</script>";
        
    

    }else{
        echo 'Registered UnSuccessfull';

    }
};
}
    
}
?>