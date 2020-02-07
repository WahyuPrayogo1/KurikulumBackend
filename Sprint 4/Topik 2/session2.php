<?php 
session_start();

if (!isset($_SESSION)) {
	header('location: session2.php');
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
  <form action="" method="POST">
        <button type="submit" name="logout" class="btn btn-primary">Logout</button>
      </form>
 
 </body>
 </html>
      

 <?php 
if (isset($_POST['logout'])) {
	
	session_unset();
	header("location:session1.php");
}

  ?>     


