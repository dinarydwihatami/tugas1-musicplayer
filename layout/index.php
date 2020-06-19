<?php
		session_start();
		if (!isset($_SESSION['nama'])) {
				header('location:login.php');
			}
 ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>MusicStar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
<div class="container">
	<div class="header">
			<img src="<?php echo ASSET; ?>images/musicstar.jpg">
	</div>

	<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=artist_tampil">Artist</a>
			<a href="index.php?page=album_tampil">Album</a>
			<a href="index.php?page=track_tampil">Track</a>
			<a href="index.php?page=played_tampil">Played</a>
			<a href="logout.php">Logout</a>
	</div>

	<div class="main">

		<?php

			if (isset($_GET['page'])) {
			include $_GET['page'] . ".php";
		} else {
			include "main.php";
		}

		?>
		
	</div>
			
	<div class="footer">
			Copyright 2020 Dinary Dwihatami
	</div>
</div>
	
		



</body>
</html>
