<?php
// Start the session
session_start();
?>


<!DOCTYPE html><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
     <script src="js/slide.js" async></script>
    <title> SaiGon Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
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

     
<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext"></div>
  <img src="images/room2.png" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext"></div>
  <img src="images/room3.png" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext"></div>
  <img src="images/room1.png" style="width:100%">
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>



<footer class="footer">
        <div class="us">
        <p class="bold">About Us</p>
        <p>We are in top 5 hotels in HCM city. With high quality service, we hope you will have a nice trip with us.</p>    
        </div>
        <div class="mContact">
        <p class="bold">Contact</p>
        <p>764 Trần Hưng Đạo,P.7,Q.5 TPHCM</p>
        <p> Phone : 0909.534.678</p>
        <p>  Email : Saigonhotel@gmail.com</p>    
        </div>
        <br/>
    </footer>
 </body>
    
</html>
    