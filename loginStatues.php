<?php
// Start the session
session_start();
?>

<html>
<head>

<?php

// login go to booking
//not login go to login.php
if($_SESSION["loggedin"] == "true"){
header("Location: Booking.php");
}else{
header("Location: login.php");
}
?>

</body>    
</html>