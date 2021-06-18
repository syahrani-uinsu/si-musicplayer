<?php

namespace App;

class Album extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil() 
    {
        $sql = "SELECT album.*, artist.* FROM album, artist WHERE album.artist_id=artist.artist_id";
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
		$i_id_artist = $_POST['i_id_artist'];

		$sql = "INSERT INTO album VALUES (NULL, :album_name, :artist_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $i_nama);
		$stmt->bindParam(":artist_id", $i_id_artist);
		$stmt->execute();
	}
}