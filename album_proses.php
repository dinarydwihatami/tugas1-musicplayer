<?php

include_once "app/Controller.php";
include "app/album.php";

$alb = new App\Album();

if ($_POST['btn-simpan']) {
	$alb->input();
	header("location:index.php?page=album_tampil");
}

if ($_POST['btn-edit']) {
	$alb->update();
	header("location:index.php?page=album_tampil");
}

if ($_GET['delete-id']) {
	$alb->delete($_GET['delete-id']);
	header("location:index.php?page=album_tampil");
}



