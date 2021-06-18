<?php

$artist = new App\Artist();
$rows = $artist->tampil();

?>

<h2>Tambah Data Album Favorite Kamu</h2>
<form action="album_proses.php" method="POST">
<table>
        <tr>
			<td>NAMA</td>
			<td><input type="text" name="i_nama"></td>
		</tr>
        <tr>
			<td>ARTIST</td>
			<td>
                <select name="i_id_artist">
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td></td>
			<td><input type="submit" name="b_input" value="SIMPAN"></td>
		</tr>
</table>
</form>