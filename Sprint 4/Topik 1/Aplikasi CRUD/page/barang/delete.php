<?php 
include '../../koneksi.php';
    $query = $db->prepare("DELETE FROM barang WHERE id=:id");
    $query->bindParam(":id", $_GET["id"]);
    $query->execute();

if ($query ) {
       ?>
        	<script type="text/javascript">
        		alert("Data Berhasil");
        		window.location.href="?page=barang";
        	</script>
        	<?php 
        }

 ?>