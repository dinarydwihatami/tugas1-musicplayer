<h2>Album Input</h2>

<?php

$alb = new App\Album();
$art = new App\Artist();
$dat = $art->tampil();

?>

<form method="POST" action="album_proses.php">
	<table>
		<tr>
			<td>ARTIST</td>
			<td>
				<select name="artist_id">
					<?php foreach ($dat as $row) {?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name'];?></option>
					<?php } ?>
					
				</select>
			</td>
		</tr>

		<tr>
			<td>ALBUM NAME</td>
			<td><input type="text" name="album_name"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SAVE"></td>
		</tr>
	</table>
	
</form>