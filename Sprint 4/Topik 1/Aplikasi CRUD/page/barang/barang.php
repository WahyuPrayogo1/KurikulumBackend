 <?php 
include '../../koneksi.php';
$query = $db->prepare("SELECT * FROM barang");
    $query->execute();
    $data = $query->fetchAll();
 ?>
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Barang</h1>

        <div class="page-header-actions">
          <a class="btn btn-sm btn-success btn-outline btn-round" href="?page=barang&aksi=tambah">Tambah Data
        <i class="icon wb-plus" aria-hidden="true"></i>

       
      </a>
        </div>
      </div>

      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
          <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Table Barang</h3>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr style="text-align: center;">
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr style="text-align: center;">
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
              	<?php $i = 1; ?>
              	<?php foreach ($data as $value) : ?>
                <tr style="text-align: center;">
                  <td><?= $i;  ?></td>
                  <td><?= $value ['nama_barang'] ?></td>
                  <td><?= $value ['harga'] ?></td>
                  <td><?= $value ['jumlah'] ?></td>
                  <td>
                  	<a onclick="return confirm('Yakin Data Mau Di Hapus ?')" href="?page=barang&aksi=delete&id= <?= $value['id'] ?>" class="btn btn-sm btn-danger btn-outline ">Hapus</a>
                    
                  	<a href="?page=barang&aksi=ubah&id=<?= $value['id'] ?>" class="btn btn-sm btn-primary btn-outline ">Edit</a>
                  </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Basic --> 
      </div>
    </div>
    <!-- End Page -->