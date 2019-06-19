<!DOCTYPE html>
<html class="eyebrow ltr js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths desktop landscape linux 32bit chrome chrome60 chrome60_0 webkit en-us prefpane" lang="en" data-rtl="false" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="./AppleLoginTest_files/fonts" type="text/css">
<style type="text/css">
     .kelvin0 {
        position: absolute;
        z-index: -99999999;
        width: 0;
        height: 0;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0,0,0,0);
        border: 0;
    }
</style>
<link rel="stylesheet" type="text/css" media="all" href="./AppleLoginTest_files/app-eyebrow.css">                    
<link rel="stylesheet" type="text/css" href="./AppleLoginTest_files/ac-globalnav.built.css">
<link rel="stylesheet" type="text/css" href="./AppleLoginTest_files/ac-globalfooter.built.css">

<title>loginPage </title>
<body>
	<div>
	  <h2 class="title separator tk-section-headline your-account">
	    Login Page
	  </h2>
	</div>
	<div>
		<form action = "/login.php" method="get">

		Username:<br>
		<input type = "text" name = "username"><br>

		Password:<br>
		<input type = "password" name = "password"><br>

		<input type = "submit" value = "Submit">
		</form>
	</div>


	<div>
		<form action = "/newLogin.php" method="get">
		<input type = "submit" value = "Create a new account">
		</form>	
	</div>

</body>
</html>
<?php
$host="localhost"; //the server name that is hosting the db
$user="root"; //username for the system
$password="toor"; //pw for the username to log into the db
$dbname="users"; //the name of the database you want to use
$tableName = "userInfo"; //the name of the table you want to manipulate

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$query = "SELECT username FROM $tableName";

$result = mysqli_query($conn,$query);

$rows =  $result->num_rows;

echo "Number of users signed up: $rows <br>";

session_start();
if($_SESSION['loginError'] > 0){
   echo "wrong pw or username";
}

?>
