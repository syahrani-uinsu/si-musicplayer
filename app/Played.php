<?php
namespace App;

class Played extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }
    public function tampil() 
    {
        $sql = "SELECT played.*, track.*, album.*, artist.* FROM played JOIN track ON played.track_id=track.track_id JOIN album ON played.album_id=album.album_id JOIN artist ON played.artist_id=artist.artist_id";
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
		$i_played = $_POST['i_played'];
		$i_id_album = $_POST['i_id_album'];
		$i_id_track = $_POST['i_id_track'];
		$i_id_artist = $_POST['i_id_artist'];

		$sql = "INSERT INTO played VALUES (:artist_id, :album_id, :track_id, :played)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":played", $i_played);
		$stmt->bindParam(":artist_id", $i_id_artist);
		$stmt->bindParam(":album_id", $i_id_album);
		$stmt->bindParam(":track_id", $i_id_track);
		$stmt->execute();
	}
}