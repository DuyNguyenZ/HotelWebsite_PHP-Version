<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SaiGon Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/style-Arrangement.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
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

       <a href="index.php">
        <img class="logo" src="images/SaiGonHotel.png" alt="SaiGon Hotel">
       </a>
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
    
  
    <div class="MainImg">
			<div>
                        <div class="HomeImg"><img class="Himage" src="images/main2.jpg" alt=""> 
                        <div class="slidertext">
                        <p class="bold">SaiGon Hotel</p>
                        <p class="normal">Designed for natural living </p></div>
                        </div></div>
    </div>
    
<?php
// Start the session

?>


    


    
<section class="slider room flex">
      
                    <div class="rooms">
                       <img  src="images/room1.png">
                       <a href="rooms.html"> <p class="s">Ambassador</p> </a>

                    </div>
                        <div class="rooms">
                        <img  src="images/room2.png">
                        <a href="rooms.html"> <p class="s">Junior Suite</p></a>

                    </div>
                        <div class="rooms">
                        <img  src="images/room3.png">
                        <a href="rooms.html">  <p>Family Room</p></a>

                    </div>
                    <div class="rooms">
                        <img  src="images/room4.png">
                        <a href="rooms.html"> <p class="s">Premium Room</p> </a>

                    </div>
                        <div class="rooms">
                        <img  src="images/room5.png">
                        <a href="rooms.html"> <p>Premium Plus</p></a>

                    </div>
                        <div class="rooms">
                        <img  src="images/room6.png">
                        <a href="rooms.html">  <p>Master Suite</p></a>

                    </div>
            
                  
</section>

    
    
    
    
    <section class="servicesection">
         <div class="service">
              <img class="serimage" src="images/bell.png">
             <div>
                        <p class="b">Room Service</p>
                        <p> Enjoy your stay with excellent and timely room service </p> </div>
        </div>
        <div class="service">
              <img class="serimage" src="images/coffee.png">
             <div>
                        <p class="b">Free Breakfast</p>
                        <p> Enjoy Free breakfast every morning</p> </div>
        </div>
    </section>
    <section class="servicesection">

        <div class="service">
              <img class="serimage" src="images/car-front.png">
             <div>
                        <p class="b">Free Airport Pickup</p>
                        <p> No need to pay any extra charges</p> </div>
        </div>
        <div class="service">
              <img class="serimage" src="images/spa.png">
             <div>
                        <p class="b">Free Drink</p>
                        <p> Relax at the inhouse with tea and beer </p> </div>
        </div>

    </section>
    
       
       
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