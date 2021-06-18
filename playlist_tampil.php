<?php

$played = new App\Played();

$rows = $played->tampil();

?>

<h2>Data Play Music Kamu</h2>
	<table>
		<tr>
			<td>ARTIST</td>
			<td>ALBUM</td>
			<td>TRACK</td>
			<td>PLAYED</td>
			<td>HAPUS</td>
            
		</tr>
		<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_name']; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['track_name']; ?></td>
			<td><?php echo $row['played']; ?></td>
		<td><a href="index.php?page=hapus_playedk&id=<?php echo $row['track_id']; ?>">Hapus</a></td>
		</tr>
		<?php } ?>
	</table>
   
