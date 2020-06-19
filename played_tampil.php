<h2>Played List</h2>
<a href="index.php?page=played_input">Tambah</a>


<?php

$pla = new App\Played();
$rows = $pla->tampil();

?>

<table>
	<tr>
		<td>PLAYED</td>
		<td>ARTIST ID</td>
		<td>ALBUM ID</td>
		<td>TRACK ID</td>
		<td>DELETE</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['played']; ?></td>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['album_id']; ?></td>
			<td><?php echo $row['track_id']; ?></td>
			<td><a href="index.php?page=played_proses&delete-id=<?php echo $row['played'];?>">Delete</td>
		</tr>
		<?php } ?>
	
</table>
