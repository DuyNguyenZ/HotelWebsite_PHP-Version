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
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style-Arrangement.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
    
<body>

    <header class="header">
	<a href="index.php">
        <img class="logo" src="images/SaiGonHotel.png" alt="SaiGon Hotel">
	</a>
    </header>

<form action="login.php" method="POST">
<div class="login">
 <h1 class="heading">Sign In</h1>


<div class="login_info">


<label for="email"><b>Email</b></label>
<br>
<input type="email" placeholder="Enter Email" name="email" id="email" required>
<br></br>

<label for="psw"><b>Password</b></label>
<br>
<input type="password" placeholder="Enter Password" name="psw" id="psw" required>
<br></br>

<a href="signUp.php" style="padding-left: 19%;">Create Accounnt</a>

<br>
<br>
</div>
<button type="submit" name="login" class="w3-button block w3-black w3-margin-bottom" >Sign In</button>

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




if(isset($_POST['login'])) 
{

$user = $_POST['email'];
$password = $_POST['psw'];

$result = mysqli_query($mydb, "SELECT Email , Password , ID , Name FROM SGHotel WHERE Email='$user' AND Password='$password'");
$row = mysqli_fetch_array($result);

$check_username = $row['Email'];
$check_password = $row['Password'];

if ($user == $check_username && $password == $check_password) {

    $_SESSION["loggedin"] = "true";
    $_SESSION["username"] = $row['Name'];
    $_SESSION["ID"] = $row['ID'];

    header("Location: index.php");
} else {
    $message = "Wrong username or password.Please try again";
    echo "<script type='text/javascript'>alert('$message');</script>";
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

