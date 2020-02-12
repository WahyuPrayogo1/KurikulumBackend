<?php 
session_start();
if (isset($_SESSION["email"])) {
    header('location: dashboard.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Register PDO</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="register.php">REGISTER</a>
      <a class="navbar-brand" href="index.php">LOGIN</a>
    </div>
  </div>
</nav>
<br />
<h2 align="center">Please Login</h2>
<br />
<form method="post">
    
 <div class="form-group">
   <label>ENTER EMAIL</label>
   <input type="email" class="form-control" name="email" placeholder="Email address*">
 </div>
 <div class="form-group">
   <label>ENTER PASSWORD</label>
   <input type="password" class="form-control" name="password" placeholder="Password*">
 </div>
 <div class="form-group">
   <button class="btn btn-primary" type="submit" name="login">LOGIN</button>
 </div>
</form>
</div>
</body>
</html>

<?php

include "config.php";
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;

  $admin = $db->prepare("SELECT * FROM user WHERE email = :email");

  $admin->bindParam(":email", $email);
  $admin->execute();

  $row = $admin->fetch(PDO::FETCH_ASSOC);

  if($row){
    // verifikasi password
    if(password_verify($password, $row["password"])){

        // login sukses, alihkan ke halaman dashboard
        header("Location: dashboard.php");
    }
  }else{
  echo"Password atau email ada yang salah";
}
}

?>