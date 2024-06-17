<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="check.css">
</head>
<body>
  <div class="slider_main" id="gallary">
    <a href="./../../../onlinerestaurantui/restaurant.php" id="home_btn" >Go To Home</a>
    <!-- <button id="home_btn"></button> -->
        <div class="slider_heading">Availabe reservation</div>
    
        <div class="slider">
    
          <div class="slide_track">
    
            <div class="slide">
              <img src="../hotel.png" alt="">
            </div>
    
            <div class="slide">
              <img src="../HALL.jpg" alt="">
            </div>
    
            <div class="slide">
              <img src="../HOTEL ROOM.jpg" alt="">
            </div>
    
            <div class="slide">
              <img src="../pool.jpg" alt="">
            </div>
    
            <div class="slide">
              <img src="../SINGLE BED.jpg" alt="">
            </div>
    
      
          </div>
    
    
    
          <!-- double same img -->
    
          <div class="slide">
            <img src="../hotel.png" alt="">
          </div>
  
          <div class="slide">
            <img src="../HALL.jpg" alt="">
          </div>
  
          <div class="slide">
            <img src="../HOTEL ROOM.jpg" alt="">
          </div>
  
          <div class="slide">
            <img src="../pool.jpg" alt="">
          </div>
  
          <div class="slide">
            <img src="../SINGLE BED.jpg" alt="">
          </div>
  
    
        </div>
      </div>
      <h1>Room booking and reservation 
        (delux ac room,hall reservation,single room, Double room) </h1> 
      
      <title>Check In / Check Out Form with Room Selection</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 100vh;
      margin: 50px auto;
      background-color: #6eb2cb7c;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"], input[type="date"], select, input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Check In / Check Out Form</h2>
    <form action="#" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="checkin_date">Check In Date:</label>
      <input type="date" id="checkin_date" name="checkin_date" required>

      <label for="checkout_date">Check Out Date:</label>
      <input type="date" id="checkout_date" name="checkout_date" required>

      <label for="room">Room:</label>
      <select id="room" name="room" required>
        <option value="">Select Room</option>
        <option value="single">Delux ac Room (Rs: 1,700/-)</option>
        <option value="single">hall reservation     (Rs:8,000/-)</option>
        <option value="single">Single Room     (Rs:1,000/-)</option>
        <option value="double">Double Room     (Rs:1500/-)</option>
      </select>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
    </body>
    </html>
</body>
<?php
$conn = new mysqli('localhost','root','','hotelmgmtsys');
if($_SERVER['REQUEST_METHOD']==="POST"){
$fullname = $_POST['name'];
$indate = $_POST['checkin_date'];
// print_r($indate);
$outdate = $_POST['checkout_date'];
$room = $_POST['room'];
$insertSql="INSERT INTO checkinout(Name,Indate,Outdate,Room) VALUES('$fullname','$indate','$outdate','$room')";
if(mysqli_query($conn,$insertSql)){
    echo "<script>alert('The Room is Booked by $fullname')</script>";
    // header('Location:http://localhost/imagephp/onlinerestaurant/onlinerestaurantui/basil/check/check.php');
}else{
    echo "EROR:BETA";
}
};
?>
</html>
