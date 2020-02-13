<?php 
class santri 
{
	function __construct()
	{
		
	$this->dbh = new PDO('mysql:host=localhost;dbname=pondokIT', "root", "");
	}

	public function read ()
	{
		$query = $this->db->prepare("SELECT * FROM santri");
		$query->execute();
		$data = $query->fetchAll();
		return $data;

	}

}


?>

