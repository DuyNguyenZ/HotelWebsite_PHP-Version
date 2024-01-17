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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/explore.css">
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
    
    
   
    
   <section class="expsection">
    <div class="exp1">
     <h1> Luxorious Rooms</h1>  
     <img src="images/room.png">
     <p> &emsp; The first bedroom here, designed by Mauritz Snyman, uses soft and soothing grays and
        silvers to create a sparkling, luxurious feel. From a modern chandelier 
        that dangles over the bed to a plush silvery gray carpet that practically begs for 
        your bare feet, waking up in this bedroom would be like waking up inside a warm storm cloud.</p>
     </div>  
    </section>
 
   <section class="expsection">
      <div class="exp2">
        <h1> Swimming Pools</h1>  
        <img src="images/swimming.png" >
  	<p> &emsp; After a long day of traveling or sightseeing, there’s nothing like a refreshing dip in the pool.
        If you’re looking to make a splash on your next vacation, we’ve rounded up the most exquisite pools 
        from five-star hotels around the world. With gorgeous designs and indulgent features, these luxurious hotel
        pools take an afternoon swim to another level.</p>

      </div>  
      </section>
    
    
     <section class="expsection">
       <div class="exp1">
         <h2>Indoor Bar</h2>  
         <img src="images/bar.png">
         <p> &emsp; Enjoy a drink in our spacious lounge bar, is a truly enjoyable experience – the views of 
         the natural harbour, no ships just a variety of birds and may be even spot a stray seal or 
         penguin and then across the water with the opposite side comprising of natural terrain, with the
         names of ships picked out by natural stones will help to ensure that you will have a “relaxing drink”</p>
       </div>  
    </section>
    
    
   <section class="expsection">
       <div class="exp2">
          <h1> Indoor  Game Room</h1>  
          <img src="images/play.png" >
	  <p> &emsp; If you want more guests and patrons, your hotel or resort needs to be remembered as much as the rest 
          of the trip. A hot hotel game room is a great way to deepen the experience of your guests and keep them
          coming back for more</p>
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