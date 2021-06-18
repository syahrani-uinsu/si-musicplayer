<?php

$played = new App\Played();
$rows = $played->tampil();

?>        
<h2>Lets Play Your Music</h2>
<form action="play_proses.php" method="POST">
<table>
		<tr>
			<td>Artist</td>
			<td>
            <?php $artist = new App\Artist();
            $rows = $artist->tampil();
            ?>
                <select name="i_id_artist">
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td>Album</td>
			<td>
                <select name="i_id_album">
                <?php
				$album = new App\Album();
				$rows = $album->tampil();
				?>
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td>TRACK</td>
            <td><select name="i_id_track">
            <?php
            $track = new App\Track();
            $rows = $track->tampil();
            ?>
                <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td>PLAYED</td>    
			<td><input type="datetime-local" name="i_played"></td>
		</tr>
        
        <tr>
			<td></td>
			<td><input type="submit" name="b_input" value="SIMPAN"></td>
		</tr>
</table>
</form>