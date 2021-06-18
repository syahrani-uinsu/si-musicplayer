<?php

$track = new App\Track();

$rows = $track->tampil();

?>

<h2>Data Track Kamu</h2>
	<table>
		<tr>
			<td>NO</td>
			<td>NAMA TRACK</td>
			<td>No - ARTIST</td>
			<td>No - ALBUM</td>
			<td></td>
            
		</tr>
		<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['track_id']; ?></td>
			<td><?php echo $row['track_name']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><?php echo $row['album_name']; ?></td>
    
		<td><a href="index.php?page=played_input">PLAY</a></td>
		</tr>
		<?php } ?>
	</table>
    <a href="index.php?page=track_input">Tambah</a>
