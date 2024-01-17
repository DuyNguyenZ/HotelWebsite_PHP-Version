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
    <link rel="stylesheet" type="text/css" href="css/confirm_booking.css">
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

<?php
//id of customer
$ID = $_SESSION["ID"];


//sql 
$mydb = new mysqli("localhost","f31dnguyen","f31dnguyen136","C354_f31dnguyen");

// Check connection
if ($mydb -> connect_errno) 
{
  echo "Failed to connect to MySQL: " . $mydb -> connect_error;
  exit();
} 

// get the data from sql
$queryFetch = "select * from SGHotel where ID = ". $ID; 
$result = mysqli_query($mydb,$queryFetch);
$row = mysqli_fetch_array($result);

if($row['Date_In'] != null){ 

//set the data
$customer_name=  $row['Name'];
$customer_phone= $row['Contact'];
$customer_email= $row['Email'] ;  
$arrive =  $row['Date_In'] ; 
$depart =  $row['Date_Out']; 
$person =  $row['Guest'];
$booking_date =  $row['Booking_Date'];
$room_name = $row['Room_Type'];  
$room_price =  $row['Room_Price']; 
$status =  $row['Status'];
$stay_days =  $row['Days_Stay']; 
$total_money =  $row['Total'] ;

?>

<h1 class="heading">Your Booking</h1>
<div class="booking">
<div class="booking_detail">   
 <br>
 <h2 class="heading">Booking Details</h2>

    <div class="detail"> 
    <p class="w3-large">Check-in</p>
    <p class="w3-large"><strong> &emsp; &ensp; <?php echo $arrive ;?> </strong></p>
    </div> 

    <br>
    <div class="detail"> 
    <p class="w3-large">Check-out</p>
    <p class="w3-large"><strong> &emsp; <?php echo $depart ; ?> </strong></p>
    </div>

    <br>
    <div class="detail"> 
    <p class="w3-large">Guest</p>
    <p class="w3-large"><strong> &emsp; &emsp; &ensp;<?php echo $person ." cutomers"; ?> </strong></p>
    </div>

    <br>
    <div class="detail"> 
    <p class="w3-large">Unit</p> 
    <p class="w3-large"><strong> &emsp; &emsp; &ensp; &ensp;<?php echo $room_name; ?> </strong></p>
    </div>

</div> 

<br>
<h2 class="heading">Booked By</h2>

<div class="other_info">
<div class="customer_info">
    <p class="w3-large"><?php echo $customer_name ; ?></p> 
    <br>
    <p class="w3-large"><?php echo $customer_email; ?></p> 
    <br>
    <p class="w3-large"><?php echo $customer_phone; ?></p>  
    <br>
</div> 

<div class="booking_date">
   
    <div class="detail"> 
    <p class="w3-large">Booking Date:</p> 
    <p class="w3-large">&ensp;<?php echo $booking_date; ?></p>
    </div>

    <br>
    <div class="detail"> 
    <p class="w3-large">Status:</p> 
    <p class="w3-large">&ensp; Draft</p>
    </div> 
</div> 
</div> 

<table>
    <tr>
    <th class="main_column" id="column1"><strong> Description</strong> </th>
    <th class="main_column" id="column2"><strong> Amount</strong> </th>    
    </tr>
   
    <tr>
    <td id="column1"><?php echo $stay_days ."x Nights ($ ". $room_price . ".00)" ;?> </td>
    <td id="column2"><?php echo "$ ". $total_money. ".00" ; ?> </td>
    </tr>

    <tr>
    <td class="total_column" id="total"><strong> Total </strong> </td>
    <td class="total_column" id="column2"> <strong> <?php echo "$ ". $total_money. ".00" ; ?></strong> </td>
    </tr>

</table>

<br>
<h2 class="heading">Additional Information</h2>
<p class="w3-large">Check in from 1 PM</p> 
<br>
<p class="w3-large">Check out until 11 AM</p>  
<br>
<br>
<br>
</div> 
<?php  		
}else{
?>
    <h2 class="heading">Something Went Wrong ...</h2>
    <p class="w3-large" style="margin-bottom: 10%;">We are sorry that we can't find your booking.More detail please email us.</p> 
<?php  		
}
?>

 

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