<?php
namespace KodingWaelah;

class autoloadLogin
{
    function __construct()
    {
        $this->db = new \PDO('mysql:host=localhost;dbname=pondokIT', "root", "");
    }
    public function register($nama,$email,$password){
        $tampil = $this->db->prepare("INSERT INTO user(nama,email,password) VALUES (:nama,:email,:password)");

        $tampil->bindParam(":nama",$nama);
        $tampil->bindParam(":email",$email);
        $tampil->bindParam(":password",$password);
        $tampil->execute();
        $data = $tampil->fetchAll();
        

        if ($data == true) {
        	?>
        	<script type="text/javascript">
        		alert("Data Berhasil");
        		window.location.href="register.php";
        	</script>
        	<?php 
        }
        
        
               
    }
    

    
}

?>