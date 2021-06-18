<?php

namespace App;

class Track extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }
    public function tampil() 
    {
        $sql = "SELECT track.*, album.*, artist.* FROM track JOIN album ON track.album_id=album.album_id JOIN artist ON track.artist_id=artist.artist_id";
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
		$i_time = $_POST['i_time'];
		$i_id_album = $_POST['i_id_album'];
		$i_id_artist = $_POST['i_id_artist'];

    	$sql = "INSERT INTO track VALUES (NULL, :track_name, :artist_id, :album_id, :time)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_name", $i_nama);
		$stmt->bindParam(":time", $i_time);
		$stmt->bindParam(":artist_id", $i_id_artist);
		$stmt->bindParam(":album_id", $i_id_album);
		$stmt->execute();
	}
}