<?php

include_once "app/Controller.php";
include "app/track.php";

$tra = new App\Track();

if ($_POST['btn-simpan']) {
	$tra->input();
	header("location:index.php?page=track_tampil");
}

if ($_POST['btn-edit']) {
	$tra->update();
	header("location:index.php?page=track_tampil");
}

if ($_GET['delete-id']) {
	$tra->delete($_GET['delete-id']);
	header("location:index.php?page=track_tampil");
}



