<?php

include_once "app/Controller.php";
include "app/played.php";

$pla = new App\Played();

if ($_POST['btn-simpan']) {
	$pla->input();
	header("location:index.php?page=played_tampil");
}

if ($_GET['delete-id']) {
	$pla->delete($_GET['delete-id']);
	header("location:index.php?page=played_tampil");
}



