<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <title> SaiGon Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/style-Arrangement.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
    
<body>

    <header class="header">
        <img class="logo" src="images/SaiGonHotel.png" alt="SaiGon Hotel">
    </header>

<form action="signUp.php" method="POST">
<div class="signup">
 <h1 class="heading">Sign Up</h1>

<div class="info">

<div class="login_info">
<label for="name"><b>Name:</b></label>
<br>
<input type="text" placeholder="Your Name" name="name" id="name" required>
<br></br>

<label for="email"><b>Email</b></label>
<br>
<input type="email" placeholder="Enter Email" name="email" id="email" required>
<br></br>

<label for="psw"><b>Password</b></label>
<br>
<input type="password" placeholder="Enter Password" name="psw" id="psw" required>
<br></br>

<label for="rpsw"><b>Confirm Password</b></label>
<br>
<input type="password" placeholder="Confirm Password" name="rpsw" id="rpsw" required>
<br></br>
</div>

<div class="personal_info">
<label for="contact"><b>Contact:</b></label>
<br>
<input type="text" placeholder="Contact" name="contact" id="contact" required>
<br></br>

<label for="address"><b>Address:</b></label>
<br>
<input type="text" placeholder="Address" name="address" id="address" required>
<br></br>

<label for="birth"><b>Date Of Birth</b></label>
<br>
<input type="date" placeholder="Date Of Birth" name="birth" id="birth" required>

<br></br>
<br>
<br>
<input type="checkbox" id="checkbox" name="checkbox" value = "checked">
<label for="checkbox"> </label>I Accept the terms & conditions <br>
</div>
</div>
<br>
<br>
<button type="submit" name="insert" class="w3-button block w3-black w3-margin-bottom" >Sign Up</button>
<br>
<br>

</div>
</form>


<?php


//create the connection to the database
$mydb = new mysqli("localhost","f31dnguyen","f31dnguyen136","C354_f31dnguyen");

// Check connection 
if ($mydb -> connect_errno) 
{
  echo "Failed to connect to MySQL: " . $mydb -> connect_error;
  exit();
}


//creating tables using MySQL CREATE TABLE query
$create_query= "CREATE TABLE SGHotel (
    ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	  Name varchar(255),
    Email varchar(255),
    Password varchar(255),
    Confirm_Password varchar(255),  
	  Contact varchar(255),   
    Address varchar(255),   
    Birth   DATE,
    Date_In DATE,
    Date_Out DATE,
    Guest varchar(255),
    Room_Type varchar(255),
    Room_Price varchar(255),
    Booking_Date DATE,
    Status varchar(255),
    Days_Stay varchar(255),
    Total varchar(255)
    )";

mysqli_query($mydb,$create_query);
$result = mysqli_query($mydb ,"SELECT * FROM  SGHotel");

//When the insert button onclick => Validations check then insert data
if(isset($_POST['insert'])) 
{

//Validations Part
//validations for password match 

//bolean value for check all pass the Validations or not 
$validated = true; 

$password = $_POST['psw'];
$re_password = $_POST['rpsw'];

//Validate match password
if($re_password != $password){
   echo 'repeat password is not match with password';
   $validated = false; 
}

//Validate the checkbox 
$checkbox =  $_POST['checkbox'];

if(!isset($checkbox)){
   echo 'Please Accept the rules';
   $validated = false; 
}



//insert data to databse only if $validated = true; 
if($validated == true){
    $insert_query = "INSERT INTO SGHotel ( `Name`,  `Email`, `Password`, `Confirm_Password`, `Contact` , `Address` ,  `Birth` ) 
    VALUES ( '".$_POST['name']."' ,  '".$_POST['email']."' , '".$_POST['psw']."' , '".$_POST['rpsw']."' , '".$_POST['contact']."' , '".$_POST['address']."' , '".$_POST['birth']."' )";

    $insert_result = mysqli_query($mydb,$insert_query);
    if($insert_result){
      header("Location: login.php");
      exit();
    }else{
      echo "Something went wrong";
    }
}
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
