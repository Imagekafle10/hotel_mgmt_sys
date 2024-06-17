 <?php
$conn=mysqli_connect("localhost","root","","hotelmgmtsys");
if($_SERVER['REQUEST_METHOD']==='POST'){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$gender=$_POST['gender'];
$uname=$_POST['username'];
$pword=$_POST['password'];
$cword=$_POST['confirmpassword'];

$imagedir="images/";
$citizen=$_FILES['citizenship'];
$imagepath=$imagedir.basename($citizen['name']);

if($pword == $cword)
{
// username remove duplicate
$select="SELECT *FROM adminreg WHERE Username='$uname'";
$result=mysqli_query($conn,$select);
$rowcount=mysqli_num_rows($result);
if($rowcount>0)
{
    echo"<div class='display-eror'>Username already exist</div>";
}else{
    if(move_uploaded_file($citizen['tmp_name'],$imagepath)){
        echo"";
    }else{
        echo"Eror in File path";
    }






    $query="INSERT INTO adminreg(Firstname,Lastname,Gender,Username,Passwords,Images) VALUES ('$firstname','$lastname'
    ,'$gender','$uname','$pword','$imagepath')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo"<script>window.location.href='adminlog.php'</script>";
    }else{
        echo'Data not Inserted';
    }

}
}else{
    echo"<div class='display-eror'>Password wasnot matched</div>";
    
}

}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
   <style>
    *{
        padding: 0;
        margin: 0;
    }
    .container{
        height: 100vh;
        width: auto;
        background-color: bisque;
    }
    .sub-container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }
    .register-details{
        /* border: 2px solid black; */
        text-align: center;
        width: 25vw;
        padding: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border-radius: 1.25rem;
        font-size: 20px;
        background-color: white;
        box-shadow: 5px 5px 15px rgba(0, 0, 0,0.5);
    }
    input{
        font-size: 15px;
        border-radius: 1.5rem;
        border: 1px solid black;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 10px;
        
    
    }
    input[name="gender"]{
        border: 1px solid black;
    }
    input#citizen{
        /* display: flex; */
        /* margin-left: 10vmin; */
        /* border: none; */
        width: 15vw;
        border: none;

    }
    input[type='radio']{
        cursor: pointer;
    }

    input[type='submit']{
        background-color: grey;
        width: 10vw;
        border: none;
        transition: 0.5s;
        cursor: pointer;
    }
    input[type='submit']:hover{
        background-color: orange;
        
    }
    .display-eror{
        background-color: red;
        color: antiquewhite;
        display:flex;
        justify-content:center;
        font-size: 20px;
        text-align:center;

        /* background-color: rgb(31, 184, 133); */
        
    }
    .not-match{
        position: absolute;
        /* font-weight:bold; */
        right: 16vw;
       font-size:20px;
       margin-top:50px;
       /* border:1px solid black; */
       padding:20px;
       border-radius:1.5rem;
       background: red;
       color:white;
       display:none;
        
    }
    .submit{
        border: 2px solid black
    }


   </style>
</head>
<body>
    <div class="container">
        <div class="sub-container">
<div class="register-details">
        <form action="register.php" method="post" enctype="multipart/form-data">
        <input type="text" name="fname" id="fname" pattern="[A-Za-z]+" title="Please enter aplhabet" placeholder="Enter your Firstname" required> <br><br>
        <input type="text" name="lname" id="lname" pattern="[A-Za-z]+" title="Please enter aplhabet" placeholder="Enter your Lastname" required> <br><br>
        <label for="gender">Gender</label> <br>
        <input type="radio" value="male" name="gender" required>Male
        <input type="radio" value="female" name="gender" required>Female <br><br>
        <input type="email" name="username" placeholder="Username or Email" pattern="[a-z0-9]+@gmail.com"  title="Username must be lowecase & @gmail.com" required> <br><br>
        <input type="text" name="password" minlength="8" id="password" pattern="[A-za-z0-9]+" title="Atleast enter eight digit" placeholder="Password" required> <br><br>
        <input type="text" name="confirmpassword" minlength="8" id="confirm-password"  pattern="[A-za-z0-9]+" title="Atleast enter eight digit" placeholder="Confirm-Password" required> <br><br>
        <label for="citizenship">Citizensip</label> <br>
        <input type="file" name="citizenship" value="citizenship" id="citizen" > <br><br>
        <input type="submit" value="submit" name="submit" >
    </form>
</div>
<div class="not-match">
    <p>Password didnot match</p>
</div>

</div>

</div>
</body>
<script>
    var notMatch=document.querySelector(".not-match");
    var submit=document.querySelector(".submit")
    // document.addEventListener('DOMContentLoaded', function() {

        
        document.getElementById("password").addEventListener("input", cpassword);
     document.getElementById("confirm-password").addEventListener("blur", cpassword);
    function cpassword(){
     var confirmpassword=document.getElementById("confirm-password").value;
     var password=document.getElementById("password").value;
     if (password !== "" && confirmpassword !== ""  ){
        if( password == confirmpassword){
          notMatch.style.display="none";
          
        }else{
         notMatch.style.display="block";
        //  submit.style.pointerEvents= "none";
        }
    };
};
    

// passwordInput.addEventListener("input", checkPasswordMatch);
// confirmPasswordInput.addEventListener("input", checkPasswordMatch);

// function checkPasswordMatch() {
//     var password = passwordInput.value;
//     var confirmPassword = confirmPasswordInput.value;

//     if (password === confirmPassword) {
//         passwordMismatchMessage.style.display = "none";
//     } else {
//         passwordMismatchMessage.style.display = "block";
//     }
// }

    // });

</script>
</html>