<?php 
session_start();

if (!isset($_SESSION)) {
	header('location: dashboard.php');
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
 <h1>
 <?php 
 echo $_SESSION["username"];
 ?>
 </h1>
  <form action="" method="POST">
        <button type="submit" name="logout" class="btn btn-primary">Logout</button>
      </form>
 
 </body>
 </html>
      
   


 <?php 
if (isset($_POST['logout'])) {
	
	session_unset();
	header("location:index.php");
}

  ?>  
