<?php 

include "../../koneksi.php";
$query = $db->prepare("SELECT * FROM santri");
$query->execute();
$data = $query->fetchAll();



 ?>
<div class="page">
      <div class="page-header">
        <h1 class="page-title">Santri</h1>

        <div class="page-header-actions">
          <a class="btn btn-sm btn-success btn-outline btn-round" href="?page=santri&aksi=tambah">Create
        <i class="icon wb-plus" aria-hidden="true"></i>

       
      </a>
        </div>
      </div>

      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
          <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Table Artikel</h3>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr style="text-align: center;">
                  <th>No</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Isi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr style="text-align: center;">
				  <th>No</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Isi</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
				  <?php $i = 1;?>
			  <?php foreach ($data as $value): ?>
 				<tr style="text-align: center;">
					<td><?= $i; ?></td>
					 <td><?= $value['nama']; ?></td>
					 <td><?= $value['umur']; ?></td>
					 <td><?= $value['alamat']; ?></td>
					 <td>
						 <a class="btn btn-sm btn-primary btn-outline" href="?page=santri&aksi=edit&id <?= $value['id'];?>">Edit</a>
						 <a class="btn btn-sm btn-danger btn-outline" href="?page=santri&aksi=hapus&id <?= $value['id'];?>">Hapus</a>
					 </td>
				 </tr>
				 
				 <?php $i++;?>
 			  <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Basic --> 
      </div>
    </div>
    <!-- End Page -->
