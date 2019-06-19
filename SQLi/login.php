
<html>
<title>loginVerification</title>
<?php
$hn = '127.0.0.1';
$db = 'users';
$un = "root";
$pw = "toor";

//stores the previous pages username and password entry
$loginAttemptUserName = $_GET["username"];
$loginAttemptPassword = md5($_GET["password"]);

//Debug, checks that user/pw were retrieved from previous page
//echo "$loginAttemptUserName and $loginAttemptPassword";

//Creates a connection to the database.
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error)die("Fatal Error");


//Looks for user/pw combo in database
$query = "SELECT * FROM userInfo WHERE username = '$loginAttemptUserName'
AND password = '$loginAttemptPassword'";

//If no username/pw match in the database then the user will be denied entry
$result = $conn->query($query) or trigger_error(mysql_error()." ".$query);

session_start();

if(!$result)
die("Fatal Error");

session_start();
if($result->num_rows==0){
    $_SESSION['loginError'] = 1;
    header("Location: /loginPage.php");
}
else{
    $_SESSION['loginError'] = 0;
    header("location: /userLookup.php");
}

$row = $result->fetch_array(MYSQL_ASSOC);

