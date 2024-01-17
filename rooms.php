<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SaiGon Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style-Arrangement.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="w3-content" style="max-width:1532px; margin-top: 50px; box-shadow: 0 0 15px #3f51b5; ">
            <br>

            <!-- ROOMS TYPE -->
            <div class="w3-row-padding w3-padding-16">

                <a name="rooms"></a>

                <div class="w3-third w3-margin-bottom">
                    <img src="images/room6.png" alt="Serbia" style="width:100%">
                    <div class="w3-container w3-white">
                        <h3>Ambassador Suite</h3>
                        <h6 class="w3-opacity">From $100</h6>
                        <p>1 Bed / 2 People / Request Extra Bed</p>
                        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                        <a href="loginStatues.php" class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</a>
                    </div>
                </div>

                <div class="w3-third w3-margin-bottom">
                    <img src="images/room4.png" alt="Serbia" style="width:100%">
                    <div class="w3-container w3-white">
                        <h3>Junior Suite</h3>
                        <h6 class="w3-opacity">From $200</h6>
                        <p>1 Bed / 1 Sofa Bed / 2 People</p>
                        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                        <a href="loginStatues.php" class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</a>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="images/room3.png" alt="Serbia" style="width:100%">
                    <div class="w3-container w3-white">
                        <h3>Family Room</h3>
                        <h6 class="w3-opacity">From $300</h6>
                        <p>1 King Size Bed & 2 Single Beds</p>
                        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                        <a href="loginStatues.php" class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</a>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="images/room5.png" alt="Serbia" style="width:100%">
                    <div class="w3-container w3-white">
                        <h3>Premium Suite</h3>
                        <h6 class="w3-opacity">From $400</h6>
                        <p>1 Bed / 2 People</p>
                        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                        <a href="loginStatues.php" class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</a>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="images/room2.png" alt="Serbia" style="width:100%;">
                    <div class="w3-container w3-white">
                        <h3>Premium Plus</h3>
                        <h6 class="w3-opacity">From $600</h6>
                        <p>1 Bed / 2 People</p>
                        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                        <a href="loginStatues.php" class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</a>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="images/room1.png" alt="Serbia" style="width:100%">
                    <div class="w3-container w3-white">
                        <h3>V.I.P Room</h3>
                        <h6 class="w3-opacity">From $800</h6>
                        <p>King Size OR Twin Bed</p>
                        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                        <a href="loginStatues.php" class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</a>
                    </div>
                </div>
            </div>
          </div>
         <br><br><br>


    </article>

   
   
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

</div>
</body>
</html>
