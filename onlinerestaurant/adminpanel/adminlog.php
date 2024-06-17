 <?php
$conn=mysqli_connect("localhost","root","","hotelmgmtsys");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
if($_POST['submit'])
{
    $username=$_POST['user'];
    $password=$_POST['pass'];
    // print_r($username);
$obj=mysqli_query($conn,"SELECT *FROM adminreg where Username='$username'");
    $num=mysqli_num_rows($obj);
    if($num>0){
        $data=mysqli_fetch_assoc($obj);
        if($data['Passwords'] == $password){
            // echo"Correct password";
            echo '<script> window.location.href="panel.php";</script>';
            session_start();
            $_SESSION['userdata'] = $data;
            // print_r($_SESSION['userdata']['Firstname']);
        }else{
            echo"<div class='display-eror'>Wrong Password</div>";
            echo"
            <script>

            setTimeout(
                function(){
                  var eror = document.getElementsByClassName('display-eror');
                    eror.style.display ='none' ;
                    }
            ,3000)
            </script>
            ";
            // print_r($data);
        }
    }
    else{
        echo "<div class='display-eror'>Wrong User-ID</div>";
    }
}
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .display-eror{
        background: red;
        display:flex;
        font-size:20px;
        color:white;
        justify-content:center;
        text-align:center;
    }
        .container{
            height: 100vh;
            background-color:bisque;
        }
        .sub-container{
            /* border: 2px solid black; */
            height: 80vh;
            display: flex;
            justify-content: center;
        }
        .user-login{
        /* border: 2px solid black; */
        background-color: white; 
        position: absolute;
          top: 20vh;
          padding: 40px;
          text-align: center;
          box-shadow: 5px 5px 15px rgba(0,0,0,0.5);
        }
        input{
            width: 20vw;
            padding: 15px;
            /* border: 1.5px solid black; */
            border-radius: 1rem;
        }
        .forgot-password{
            list-style-type: none;
            text-decoration: none;
        }
       .login{
        cursor: pointer;
        border: none;
        padding:10px;
        width: 10vw;
    font-size: 18px;
    font-weight: bold;
    /* background-color: rgb(31, 184, 133); */
    transition: 0.8s;
    }
    .login:hover{
        background-color: orange;
    }

    .line{
        padding: 15px;
    }


    </style>
</head>
<body>
    <div class="container">
        <div class="sub-container">
          <div class="user-login">
            <form action="adminlog.php" method="POST">
            <input type="text"  name="user" placeholder="Enter username" required> <br><br>
            <input type="text" name="pass" placeholder="Enter password" required><br><br>
            <input type="submit" name="submit" value="Log in" class="login">
           </form>
           <div class="line">
            <hr size="1">
           </div>
           <a href="#" class="forgot-password">Forgot Password</a>
         </div>
        </div>
    </div>
</body>
</html>