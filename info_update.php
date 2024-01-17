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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/style-Arrangement.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
    
<body>

<?php


//create the connection to the database
$mydb = new mysqli("localhost","f31dnguyen","f31dnguyen136","C354_f31dnguyen");

// Check connection 
if ($mydb -> connect_errno) 
{
  echo "Failed to connect to MySQL: " . $mydb -> connect_error;
  exit();
}


//update click 
if(isset($_POST['update'])) 
{
//update data to databse 
    $ID = $_SESSION["ID"];
     $update_query = "UPDATE `SGHotel` SET `Name`='".$_POST['name']."',`Contact`='".$_POST['contact']."',
     `Email`='".$_POST['email']."',`Birth`='".$_POST['birth']."',`Address`='".$_POST['address']."' WHERE ID =" .$ID;

    $update_result = mysqli_query($mydb,$update_query);    
  if($update_result){
      header("Location: index.php");
      exit();
    }else{
      echo "Something went wrong";
    }
}

// get the data (name , email ...) for display in input box
$ID = $_SESSION["ID"];
$queryFetch = "select  Name , Email, Contact , Address , Birth FROM  SGHotel where ID = ".$ID ;
$result = mysqli_query($mydb,$queryFetch);
$row = mysqli_fetch_array($result);

?>

    <header class="header">
        <img class="logo" src="images/SaiGonHotel.png" alt="SaiGon Hotel">
    </header>

<form action="info_update.php" method="POST">
<div class="update" style=" padding-left: 40%; padding-right: 40%;">
<h1 class="heading">Info Update</h1>

<label for="name"><b>Name:</b></label>
<br>
<input type="text" name="name" id="name" value="<?php echo $row['Name']; ?>" required>
<br></br>

<label for="email"><b>Email</b></label>
<br>
<input type="email" value="<?php echo $row['Email']; ?>"  name="email" id="email"  required>
<br></br>

<label for="contact"><b>Contact:</b></label>
<br>
<input type="text" value="<?php echo $row['Contact']; ?>"  name="contact" id="contact" required>
<br></br>

<label for="address"><b>Address:</b></label>
<br>
<input type="text" value="<?php echo $row['Address']; ?>"  name="address" id="address" required>
<br></br>

<label for="birth"><b>Date Of Birth</b></label>
<br>
<input type="date" value="<?php echo $row['Birth']; ?>" name="birth" id="birth" required>

<br>
<br>
<br>

<button type="submit" name="update" class="w3-button block w3-black w3-margin-bottom" style="
    width: 30%;
    margin-left: 139px;
">Update</button><br>
<br>

</div>

</form>



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
