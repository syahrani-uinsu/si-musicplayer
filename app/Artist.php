<?php

namespace App;

class Artist extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil() 
    {
        $sql = "SELECT * FROM artist";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    
    public function input()
	{
		$i_nama = $_POST['i_nama'];

		$sql = "INSERT INTO artist VALUES (NULL, :artist_name)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_name", $i_nama);
		$stmt->execute();
	}
    public function edit()
	{
		$sql = "SELECT * FROM artist WHERE artist_id=:artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();
		return $row;
	}

    public function update()
	{
		$i_nama = $_POST['i_nama'];
		$i_id = $_POST['i_id'];

		$sql = "UPDATE artist SET artist_name=:artist_name WHERE artist_id=:artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_name", $i_nama);
		$stmt->bindParam(":artist_id", $i_id);
		$stmt->execute();
	}    
}