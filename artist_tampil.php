<?php

$artist = new App\Artist();
$rows = $artist->tampil();

?>
<h2>Data Artist</h2>
	<table>
		<tr>
			<td>NO</td>
			<td>NAMA</td>
			<td>EDIT</td>
		</tr>

		<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="index.php?page=edit_artist&id=<?php echo $row['artist_id']; ?>">Edit</a></td>
	
		</tr>
		<?php } ?>
	</table>
<a href="index.php?page=artist_input">Tambah</a>
