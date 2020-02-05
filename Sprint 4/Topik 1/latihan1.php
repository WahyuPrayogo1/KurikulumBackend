


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
                  <label for="nama">Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" id="nama" placeholder="Masukan Nama" required>                  
              </div> 

          </div>
          <div class="col-6 col-sm-6">
              <div class="form-group">
                  <label for="Harga">Harga</label>
                  <input type="number" name="harga" class="form-control" id="Harga" placeholder="Masukan Harga" required>
              </div>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    <br>
    <br>
    <br>
        <form method="GET"  >
          <div class="container">

          <div class="row">
          <div class="col-6 col-sm-6">
              <div class="form-group">
                  <label for="nama_kurir">Nama Kurir</label>
                  <input type="text" name="nama_kurir" class="form-control" id="nama_kurir" placeholder="Masukan Nama" required>                  
              </div> 

          </div>
          <div class="col-4 col-sm-6">
              <div class="form-group">
                  <label for="nama_pengirim">Nama Pengirim</label>
                  <input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim" placeholder="Masukan Pengirim" required>
              </div>
          </div>

                 <div class="col-6 col-sm-6">
              <div class="form-group">
                  <label for="asal_barang">Asal Barang</label>
                  <input type="text" name="asal_barang" class="form-control" id="asal_barang" placeholder="Masukan Asal Barang" required>                  
              </div> 

          </div>
          <div class="col-6 col-sm-6">
              <div class="form-group">
                  <label for="tujuan_barang">Tujuan Barang</label>
                  <input type="text" name="tujuan_barang" class="form-control" id="tujuan_barang" placeholder="Masukan Tujuan" required>
              </div>
          </div>
          </div>
          <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
        </div>
        </form>
        <br>
         <?php 


if (isset($_POST['submit'])) {
  $nama_barang  = $_POST['nama_barang'];
  $harga  = $_POST['harga']; 
  echo "Nama Barang : ".$nama_barang ."<br>";
  echo "Harga Barang : ".$harga ."<br>";

}
if (isset($_GET['submit1'])) {
  $nama_kurir  = $_GET['nama_kurir'];
  $nama_pengirim  = $_GET['nama_pengirim'];
  $asal_barang  = $_GET['asal_barang'];
  $tujuan_barang  = $_GET['tujuan_barang'];   
  echo "Nama Kurir : ".$nama_kurir ."<br>";
  echo "Nama Pengirim : ".$nama_pengirim ."<br>";
  echo "Asal Barang : ".$asal_barang ."<br>";
  echo "Tujuan Barang : ".$tujuan_barang ."<br>";
}

 ?>
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
