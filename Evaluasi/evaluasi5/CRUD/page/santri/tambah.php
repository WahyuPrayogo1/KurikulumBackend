<div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Tambah Data</h3>
              </div>
              <div class="panel-body container-fluid">
<form method="POST">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control empty" name="nama">
                    <label class="floating-label">Nama</label>
                  </div>
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control empty" name="umur">
                    <label class="floating-label">Umur</label>
                  </div>

                  <div class="form-group " data-plugin="formMaterial">
                      <div>ALamat</div>
                   <textarea name="alamat" id="" cols="30" rows="10"></textarea>

                  </div>

                  <button type="submit" name="submit" class="btn btn-sm btn-success btn-outline btn-round">Tambah</button>

</form>
              </div>
</div>

<?php 
include "../../koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    $query = $db->prepare("INSERT INTO santri(nama,umur,alamat)
        VALUES ('$nama','$umur','$alamat')");
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

?>