<h2>Played Input</h2>

<?php



$pla = new App\Played();
$dat1 = $pla->ar();
$dat2 = $pla->al();
$dat3 = $pla->tr();
$pla = new App\Played();
$dat4 = $pla->tampil();


?>

<form method="POST" action="played_proses.php">
	<table>
		<tr>
			<td>TRACK NAME</td>
			<td><input type="text" name="track_name"></td>
		</tr>
		<tr>
			<td>ARTIST</td>
			<td>
				<select name="artist_id">
					<?php foreach ($dat1 as $row) {?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name'];?></option>
					<?php } ?>
					
				</select>
			</td>
		</tr>

		<tr>
			<td>ALBUM</td>
			<td>
				<select name="album_id">
					<?php foreach ($dat2 as $row) {?>
					<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name'];?></option>
					<?php } ?>
					
				</select>
			</td>
		</tr>

		<tr>
			<td>TRACK</td>
			<td>
				<select name="track_id">
					<?php foreach ($dat3 as $row) {?>
					<option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_name'];?></option>
					<?php } ?>
					
				</select>
			</td>
		</tr>

		
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SAVE"></td>
		</tr>
	</table>
	
</form>