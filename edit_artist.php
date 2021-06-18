<?php

require_once "inc/config.php";

$artist = new App\Artist();

$id = $_GET['id'];

$row = $artist->edit($id);

?>

<h2>Edit Data Artist </h2>

<form action="artist_proses.php" method="POST">
<input type="hidden" name="i_id" value="<?php echo $id; ?>">
<table>
        <tr>
			<td>NAMA</td>
			<td><input type="text" name="i_nama"></td>
		</tr>
        <tr>
			<td></td>
			<td><input type="submit" name="b_edit" value="UPDATE"></td>
		</tr>
</table>
</form>