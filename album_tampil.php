<h2>Album List</h2>
<a href="index.php?page=album_input">Tambah</a>


<?php


$alb = new App\Album();
$rows = $alb->tampil();
?>

<table>
	<tr>
		<td>NO</td>
		<td>ARTIST ID</td>
		<td>ALBUM NAME</td>
		<td>EDIT</td>
		<td>DELETE</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['album_id']; ?></td>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><a href="index.php?page=album_edit&id=<?php echo $row['album_id'];?>">Edit</td>
			<td><a href="index.php?page=album_proses&delete-id=<?php echo $row['album_id'];?>">Delete</td>
		</tr>
		<?php } ?>
	
</table>
