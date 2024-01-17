
<?php
session_start();

//destroy all session and data
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();

header("Location: index.php");

?>
