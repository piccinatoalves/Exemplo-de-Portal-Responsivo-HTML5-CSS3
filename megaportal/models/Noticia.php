<?php
class noticia extends model {


	public function getNoticia(){
		array();

		$sql = "SELECT * FROM noticias ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;

	}

}