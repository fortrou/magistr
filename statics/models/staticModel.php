<?php 
	/**
	 * cabinetModel
	 * class cabinetModel
	 * dev by @fortrou
	 **/
	class staticModel {
		public static function get_static($slug) {
			$search_field = '';
			if(is_numeric($slug)) $search_field = ' AND id = ' . $slug;
			global $mysqli;
			$sql = "SELECT * FROM mag_statics WHERE 1 = 1 " . $search_field;
			$res = $mysqli->query($sql);
			if($res->num_rows == 0) return false;
			if($res->num_rows == 1) {
				$row = $res->fetch_assoc();
				return $row;
			}
		}
	}