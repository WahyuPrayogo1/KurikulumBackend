

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
<h2 align="center">Please Register</h2>
<br/>
<form method="post">
 <div class="form-group">
   <label>FULNAME</label>
   <input type="text" class="form-control" name="nama" placeholder="Full Name*" required="required">
 </div>

 <div class="form-group">
   <label for="email">EMAIL</label>
   <input type="email" class="form-control" name="email" id="email" placeholder="Email Address*" required="required">
 </div>
 <div class="form-group">
   <label for="password">PASSWORD</label>
   <input type="password" class="form-control" name="password" placeholder="Confirm Password*" required="required">
 </div>
 <div class="form-group">
     <input type="submit" class="btn btn-primary" name="submit" value="REGISTER">
 </div>
</form>
</div>
</body>
</html>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['nama']);
  		  $email = htmlentities($_POST['email']);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

   
        
        $query = $db->prepare("INSERT INTO user(nama,email,password)
        VALUES (:nama,:email,:password)");
    
        $query->bindParam(":nama",$nama);
        $query->bindParam(":email",$email);
        $query->bindParam(":password",$password);
        $query->execute();
      
      
      if ($query == true) {
        	?>
        	<script type="text/javascript">
        		alert("Data Berhasil Di tambahkan");
        		window.location.href="index.php";
        	</script>
        	<?php 
        }

    }
?>