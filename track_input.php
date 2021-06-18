<?php

$track = new App\Track();
$rows = $track->tampil();

$artist = new App\Artist();
$rows = $artist->tampil();

?>
           
<h2>Tambah Data Track</h2>
<form action="track_proses.php" method="POST">
<table>
        <tr>
			<td>NAMA</td>
			<td><input type="text" name="i_nama"></td>
		</tr>
		<tr>
			<td>Artist</td>
			<td>
                <select name="i_id_artist">
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td>Allbum</td>
			<td>
				<?php
				$album = new App\Album();
				$rows = $album->tampil();
				?>
                <select name="i_id_album">
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td>TIME</td>
			<td><input type="text" name="i_time"></td>
		</tr>
        
        <tr>
			<td></td>
			<td><input type="submit" name="b_input" value="SIMPAN"></td>
		</tr>
</table>
</form>
