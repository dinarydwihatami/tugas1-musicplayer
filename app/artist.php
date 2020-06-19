<?php

namespace App;

class Artist extends Controller {
	public function __construct(){
		parent::__construct();
	}

public function input() {
	$artist = $_POST['artist_name'];

	$sql = "INSERT INTO tb_artist (artist_name) VALUES (:artist_name)";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":artist_name" , $artist);
	$stmt->execute();

	return false;
}

public function tampil() {
	$sql = "SELECT * FROM tb_artist";
	$stmt = $this->db->prepare($sql);
	$stmt->execute();

	$data = [];

	while ($row = $stmt->fetch()) {
		$data[] = $row;
	}
	return $data;
}

public function edit($id) {
	$sql = "SELECT * FROM tb_artist WHERE artist_id=:artist_id";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":artist_id", $id);
	$stmt->execute();

	$row = $stmt->fetch();

	return $row;	
}

public function update() {
	$artist = $_POST['artist_name'];
	$id = $_POST['artist_id'];

	$sql = "UPDATE tb_artist SET artist_name=:artist_name WHERE artist_id=:artist_id";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":artist_name", $artist);
	$stmt->bindParam(":artist_id", $id);
	$stmt->execute();

	return false;
}

public function delete($id) {

	$sql = "DELETE FROM tb_artist WHERE artist_id=:artist_id";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":artist_id", $id);
	$stmt->execute();
	return false;
}
}