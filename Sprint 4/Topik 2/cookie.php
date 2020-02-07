<!-- <?php error_reporting(E_ALL ^(E_NOTICE | E_WARNING)); ?> -->

 <?php 

if (isset($_COOKIE['email'])) {
    header('location: cookie2.php');
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="jumbotron">
  <div class="card">
    <div class="card-body">
 <form method="POST">
      <div class="container">
        <h1 style="text-align: center;">SELAMAT DATANG</h1>
        <div class="row">
          <div class="col-6 col-sm-6">
              <div class="form-group">
                  <label for="email">Email </label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Nama" required>                  
              </div> 

          </div>
          <div class="col-6 col-sm-6">
              <div class="form-group">
                  <label for="myInput">Password</label>
                  <input type="password" name="password" class="form-control" id="myInput" placeholder="Masukan Password" required>
          
              </div>
          </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="hehee">

      </div>
      </form>


    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


<?php 
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

  setcookie('email', $email, time() +6400,"/");
  setcookie('password', $password, time() +6400,"/");
	header('location: cookie2.php');
 	        	
} 


