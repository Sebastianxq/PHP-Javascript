<?php
   if( $_GET["fileName"]) {
      $vuln = $_GET['fileName'];
      echo "Sorry no user found named " .$vuln ."<br /><br />";
      include($vuln);
      exit();
   }
?>
<html>
   <h1> Welcome to Path Traversals Inc.</h1>
   
   This page uses a get request that can be manipulated from the url or maybe even from the submission line 
   if you do it right ;)
   <br><br>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "fileName" />
         <input type = "submit" />
      </form>
</html>
