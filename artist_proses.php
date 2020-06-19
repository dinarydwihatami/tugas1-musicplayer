<?php

include_once "app/Controller.php";
include "app/artist.php";

$art = new App\Artist();

if ($_POST['btn-simpan']) {
	$art->input();
	header("location:index.php?page=artist_tampil");
}

if ($_POST['btn-edit']) {
	$art->update();
	header("location:index.php?page=artist_tampil");
}

if ($_GET['delete-id']) {
	$art->delete($_GET['delete-id']);
	header("location:index.php?page=artist_tampil");
}



