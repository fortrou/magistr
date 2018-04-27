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
			return false;
		}
		public static function get_staticList() {
			global $mysqli;
			$sql = "SELECT * FROM mag_statics WHERE 1 = 1 ORDER BY static_date DESC";
			$res = $mysqli->query($sql);
			if($res->num_rows != 0) {
				$result = array( "news"	   => array(),
								 "statics" => array() );
				while($row = $res->fetch_assoc()) {
					if($row['static_type'] == 1) {
						$result['news'][] = $row;
					} else if($row['static_type'] == 2) {
						$result['statics'][] = $row;
					}
				}
				return $result;
			}
			return false;
		}
	}