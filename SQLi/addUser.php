<?php 
$hn = '127.0.0.1';
$db = 'users';
$un = "root";
$pw = "toor";
#echo date("Y-m-d h:i:s A")." at ".time() . "<br>";

#Checks first to see if the all userinfo was properly set, if not: return to the page and try again
if (isset($_GET['username']) && isset($_GET['password']) && isset($_GET['firstName']) && isset($_GET['lastName']) )
{
$username=$_GET['username'];
$password=md5($_GET['password']);
$firstName=$_GET['firstName'];
$lastName=$_GET['lastName'];
$signupDate = date('m-d-Y');
echo $signupDate;
}

//Creates the connection to the db
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error)die("Fatal Error");
echo "conn<br>";

//Queries and gets the current highest ID to iterate for a new account
$getHighIDQuery  = "SELECT * FROM userInfo";
$result = mysqli_query($conn,$getHighIDQuery);
$rows = $result->num_rows;

//Debug, checks for proper data
//echo "Current largest ID is: $rows<br>";
$id = $rows+1;
echo "$id";


//Stores new user into the database
$addUserQuery = " INSERT INTO userInfo(id,username,firstName,lastName,password, signupDate) VALUES('$id','$username','$firstName','$lastName','$password','$signupDate') ";
if (mysqli_query($conn,$addUserQuery) == true){
   echo "Account succesfully made!";
   }else{
	echo "Error: ". $addUserQuery . "<br>" . $conn->error;
	}
header("Location: /userLookup.php");

