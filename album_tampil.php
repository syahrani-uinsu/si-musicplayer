<?php

$album = new App\Album();

$rows = $album->tampil();

?>

<h2>Data Album Favorite Kamu</h2>
	<table>
		<tr>
			<td>NO</td>
			<td>NAMA ALBUM</td>
			<td>No - ARTIST</td>
			<td>EDIT</td>
            
		</tr>
		<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['album_id']; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['artist_id']; ?> - <?php echo $row['artist_name']; ?></td>
		<td><a href="index.php?page=hapus_album&id=<?php echo $row['album_id']; ?>">Hapus</a></td>
		</tr>
		<?php } ?>
	</table>
    <a href="index.php?page=album_input">Tambah</a>
