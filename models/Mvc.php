<?php
class Mvc extends Model
{
	public function getMvc()
	{
		$array = [];

		$sql = "SELECT * FROM estudo_mvc";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0):
			$array = $sql->fetchAll();
		endif;

		return $array;
	}
}