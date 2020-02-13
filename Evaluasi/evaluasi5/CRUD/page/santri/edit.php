<?php 
  include '../../koneksi.php';
   $query = $db->prepare("SELECT * FROM santri WHERE id = :id");
   $query->bindParam(":id", $_GET['id']);
   $query->execute();
   $data = $query->fetch();
 ?>

<div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">edit Data</h3>
              </div>
              <div class="panel-body container-fluid">
<form method="POST">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control empty" name="nama" value="<?= $data['nama'];?>">
                    <label class="floating-label">Nama</label>
                  </div>
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control empty" name="umur" value="<?= $data['umur'];?>">
                    <label class="floating-label">Umur</label>
                  </div>

                  <div class="form-group " data-plugin="formMaterial">
                      <div>ALamat</div>
                   <textarea name="alamat" id="" cols="30" rows="10" value="<?= $data['alamat'];?>"></textarea>

                  </div>

                  <button type="submit" name="submit" class="btn btn-sm btn-success btn-outline btn-round">Tambah</button>

</form>
              </div>
</div>

<?php 
include "../../koneksi.php";

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
  		  $umur = htmlentities($_POST['umur']);
        $alamat = htmlentities($_POST['alamat']);

        $query = $db->prepare("UPDATE santri SET nama=:nama,umur=:umur,alamat=:alamat WHERE id=:id");

  		  $query->bindParam(":nama", $nama);
        $query->bindParam(":umur", $umur);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":id", $_GET['id']);
        $query->execute();
        if ($query == true) {
        	?>
        	<script type="text/javascript">
        		alert("Data Berhasil");
        		window.location.href="?page=santri";
        	</script>
        	<?php 
        }
    }