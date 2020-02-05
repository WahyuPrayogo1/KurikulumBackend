<!-- Panel Floating Labels -->

			<div class="card">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Tambah Data</h3>
              </div>
              <div class="panel-body container-fluid">
                <form method="POST">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_barang" />
                    <label class="floating-label">Nama Barang</label>
                  </div>

                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="number" class="form-control" name="harga" />
                    <label class="floating-label">Harga</label>
                  </div>

                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="number" class="form-control" name="jumlah" />
                    <label class="floating-label">Jumlah</label>
                  </div>
                  <input type="submit" name="submit" class=" btn btn-success" value="Tambah" >
                  
                </form>
              </div>
            </div>
            </div>

  <?php
    include '../koneksi.php';
    if(isset($_POST['submit'])){
        $nama_barang = htmlentities($_POST['nama_barang']);
  		  $harga = htmlentities($_POST['harga']);
        $jumlah = htmlentities($_POST['jumlah']);
        
        $query = $db->prepare("INSERT INTO barang(nama_barang,harga,jumlah)
        VALUES (:nama_barang,:harga,:jumlah)");

  		  $query->bindParam(":nama_barang", $nama_barang);
        $query->bindParam(":harga", $harga);
        $query->bindParam(":jumlah", $jumlah);
        $query->execute();
        if ($query == true) {
        	?>
        	<script type="text/javascript">
        		alert("Data Berhasil");
        		window.location.href="?page=barang";
        	</script>
        	<?php 
        }
    }
?>