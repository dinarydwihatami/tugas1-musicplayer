<h2>Artist Edit</h2>
<?php


$id = $_GET['id'];

$art = new App\Artist();
$row = $art->edit($id);
?>
<h2>Artist Edit</h2>

<form method="POST" action="artist_proses.php">
	<input type="hidden" name="artist_id" value="<?php echo $id; ?>";
	<table>
		<tr>
			<td>ARTIST NAME</td>
			<td><input type="text" name="artist_name" value="<?php echo $row['artist_name']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
	
</form>