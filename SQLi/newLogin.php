<html>
<title>New User Login</title>
<body>
<div>
<h1> New Login Page</h1>
</div>
<div>
To create a new Account, please fill in the following fields and click submit.<br>

NOTE: all passwords are encrypted with <b>md5</b>  for increased security!
<h4>GUIDELINES FOR ACCOUNT CREATION</h4>
<h4>
  <ul>
    <li>Usernames, Passwords and First/Last Names must be Alphanumeric ONLY</li>
  </ul>
</h4>

<form action="/addUser.php" method="GET">
Username:<br>
<input type ="text" name = "username"><br>
First Name:<br>
<input type ="text" name = "firstName"><br>
Last Name:<br>
<input type ="text" name = "lastName"><br>
Password:<br>
<input type ="password" name = "password"><br>

<input type="submit" value="Submit">
</form>
</div>
</body>
</html>
