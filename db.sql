CREATE TABLE tb_artist (
	artist_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
	artist_name CHAR(128) NOT NULL,
	PRIMARY KEY(artist_id)
);

CREATE TABLE tb_album (
	album_id SMALLINT(4) NOT NULL AUTO_INCREMENT,
	artist_id SMALLINT(5) NOT NULL,
	album_name CHAR(128) NOT NULL,
	PRIMARY KEY(album_id),
	FOREIGN KEY(artist_id) references tb_artist (artist_id)
);
CREATE TABLE tb_track (
	track_id SMALLINT(3) NOT NULL AUTO_INCREMENT,
	track_name CHAR(128) NOT NULL,
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULL,
	time DECIMAL(5,2),
	PRIMARY KEY(track_id),
	FOREIGN KEY(artist_id) references tb_artist (artist_id),
	FOREIGN KEY(album_id) references tb_album (album_id)

);
CREATE TABLE tb_played (
	played TIMESTAMP,
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULL,
	track_id SMALLINT(3) NOT NULL,
	PRIMARY KEY(played),
	FOREIGN KEY(artist_id) references tb_artist (artist_id),
	FOREIGN KEY(album_id) references tb_album (album_id),
	FOREIGN KEY(track_id) references tb_track (track_id)

);

CREATE TABLE tb_user (
	user_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(50) NOT NULL,
	password VARCHAR(30) NOT NULL,
	PRIMARY KEY(user_id)
);


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>MusicStar</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="layout/assets/images/musicstar.jpg">
		</div>

		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=artist_tampil">Artist</a>
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
			Copyright2020 Dinary Dwihatami
		</div>

	</div>

</body>
</html>

