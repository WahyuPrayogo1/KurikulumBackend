<?php 
if (isset($_POST['submit'])) {
	header('location: cookie2.php');
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
  <form  method="POST">
        <button type="submit" name="logout" class="btn btn-primary">Logout</button>
      </form>
 
 </body>
 </html>
      

 <?php 
if (isset($_POST['logout'])) {


  setcookie('email', $email, time() -6400,"/");
  setcookie('password', $password, time() -6400,"/");
	header("location:cookie.php");
}

  ?>     


