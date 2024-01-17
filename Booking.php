<?php
// Start the session
session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <title> SaiGon Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/booking.css">
    <link rel="stylesheet" type="text/css" href="css/style-Arrangement.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
    
<body>

<?php
if($_SESSION["loggedin"] == "true")
{
?>
	    <div class="dropdown">
	      <img src="images/user.png" style="width: 35px;height: 35px;margin-left: 10px;margin-bottom: 5px;">
  	      <button class="dropbtn"><?php echo $_SESSION["username"];?></button>
 		 <div class="dropdown-content">
      		   <a href="info_update.php">Update Info</a>
      		   <a href="booking_check.php">Booking Check</a>
      	           <a href="logout.php">Log Out</a>
</div>
</div> 	
		 		
<?php  		
}else{
?>	
		<a href="login.php" class="w3-button" >Login</a>
	 	<a href="signUp.php"  class="w3-button" >Sign Up</a>
<?php  		
}
?>
    <header class="header">
        <img class="logo" src="images/SaiGonHotel.png" alt="SaiGon Hotel">
        <nav class="nav">
       <div>
            <ul>
                <li class="list"><a href="index.php">Home</a></li>
                <li class="list"><a href="explore.php">Explore</a></li>
                <li class="list"><a href="rooms.php">Rooms</a></li>
                <li class="list"><a href="loginStatues.php">Booking</a></li>
		<li class="list"><a href="Gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>    
            </div>
        </nav>
    </header>
     
   <article class="main">
   <form action="Booking.php" method="POST">

 <!--  Day Time  -->
  <div class="form-group">
    <br>
    <h2 class="heading">Day & Time </h2>
 
  <div class="controls">
        <label for="arrive" class="label-date">Arrive</label>
	<br>
        <input type="date" id="arrive" class="info" name="arrive" required min="<?php echo date('Y-m-d'); ?> ">
  </div>      
 
  <div class="controls">
        <label for="depart" class="label-date">Depart</label>
	<br>
        <input type="date" id="depart" class="info" name="depart" required min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" />
  </div>      
  
  <div class="controls">
     <label for="people">People</label>	
     <br>
     <select class="info" name="person" required>
	  <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
         
    <div class="controls">
      <label for="RoomType">Room</label>
      <br>
      <select class="info" name="room_type" required>
	<option value="1">Ambsassador Suite</option>
        <option value="2">Junior Suite</option>
        <option value="3">Family Room</option>
        <option value="5">Premium Suite</option>
        <option value="4">Premium Plus</option>
        <option value="6">V.I.P Room</option>    
      </select>
      </div>
      <br>
      <br>
     <input type="submit" value="Submit" class="w3-button w3-block w3-black w3-margin-bottom" name="room_check">
       
  </div> 
</form>
</article>
 

<footer class="footer">
        <div class="us">
        <p class="bold">About Us</p>
        <p>We are in top 5 hotels in HCM city. With high quality service, we hope you will have a nice trip with us.</p>    
        </div>
        <div class="mContact">
        <p class="bold">Contact</p>
        <p>764 Tr?n H?ng ??o,P.7,Q.5 TPHCM</p>
        <p> Phone : 0909.534.678</p>
        <p>  Email : Saigonhotel@gmail.com</p>    
        </div>
        <br/>
    </footer>
    

<?php


if(isset($_POST['room_check'])) 
{
setcookie("arrive", $_POST["arrive"] , time() + 600);
setcookie("depart", $_POST["depart"] , time() + 600);
setcookie("person", $_POST["person"] , time() + 600);
setcookie("room_type", $_POST["room_type"] , time() + 600);

header("Location: confirm_booking.php");
exit();
}
?>

</body>    
</html>