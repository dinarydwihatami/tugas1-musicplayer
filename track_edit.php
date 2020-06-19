<h2>Track Edit</h2>
<?php


$id = $_GET['id'];

$tra = new App\Track();
$row = $tra->edit($id);
?>

<form method="POST" action="track_proses.php">
	<input type="hidden" name="track_id" value="<?php echo $id; ?>";
	<table>
		<tr>
			<td>TRACK NAME</td>
			<td><input type="text" name="track_name" value="<?php echo $row['track_name']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
	
</form>