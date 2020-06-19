<?php

namespace App;

class Played extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function input() {
		$artist = $_POST['artist_id'];
		$album = $_POST['album_id'];
		$track = $_POST['track_id'];

		$sql = "INSERT INTO tb_played (artist_id, album_id, track_id) VALUES (:artist_id, :album_id, :track_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id" , $artist);
		$stmt->bindParam(":album_id" , $album);
		$stmt->bindParam(":track_id" , $track);
		$stmt->execute();

	return false;

	}

	public function tampil() {
		$sql = "SELECT * FROM tb_played";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}
		return $data;
	}

	public function ar()
		{
			$sql = "SELECT * FROM tb_artist";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$data = [];
			while ($rows = $stmt->fetch()) {
				$data[] = $rows;
			}
			return $data;
		}

	public function al()
		{
			$sql = "SELECT * FROM tb_album";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$data = [];
			while ($rows = $stmt->fetch()) {
				$data[] = $rows;
			}
			return $data;
		}

		public function tr()
		{
			$sql = "SELECT * FROM tb_track";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$data = [];
			while ($rows = $stmt->fetch()) {
				$data[] = $rows;
			}
			return $data;
		}


	public function delete($id) {
			$sql = "DELETE FROM tb_played WHERE played=:played";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":played", $id);
			$stmt->execute();
	return false;
	}
}