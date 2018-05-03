<?php
	/**
	 * dev by @fortrou
	 * class StaticPages for Online-shkola
	 * @create_static($data) - create and write in db
	 * @redact_static($data) - redact and rewrite in db
	 * @show_static($id) - show static info
	 * @delete_static($id) - deleting static info
	 *
	 **/

	class StaticPages {
		public static function create_static($data) {
			if(empty($data)) throw new Exception("Incorrect data");
			global $mysqli;

			$insert_keys = '';
			$insert_values = '';
			foreach($data as $key => $value) {
				if($key == 'action') continue;
				
				$insert_keys .= $key . ', ';
				if(is_numeric($value))
					$insert_values .= $value . ', ';
				else
					$insert_values .= "'" . htmlspecialchars($value) . "', ";
			}
			$insert_keys = rtrim($insert_keys, ', ');
			$insert_values = rtrim($insert_values, ', ');

			if(empty($insert_keys) || empty($insert_values)) throw new Exception("Sorry error in proccess");
			$sql = sprintf("INSERT INTO mag_statics(%s) VALUES(%s)", $insert_keys, $insert_values);
			$res = $mysqli->query($sql);
			if($mysqli->affected_rows == 0) throw new Exception("Sorry error with creating");
			$sql = "SELECT last_insert_id() AS id";
			$res = $mysqli->query($sql);
			if($res->num_rows != 0) {
				$row = $res->fetch_assoc();
				return $row['id'];
			}
			return false;
		}
		public static function redact_static($data) {
			if(empty($data)) throw new Exception("Incorrect data");
			global $mysqli;

			$update_values = '';
			foreach($data as $key => $value) {
				if($key == 'action') continue;
				if($key == 'id') continue;
				
				if(is_numeric($value))
					$update_values .= "$key = "  . $value . ', ';
				else
					$update_values .= "$key = '" . htmlspecialchars($value) . "', ";
			}
			$update_values = rtrim($update_values, ', ');

			if(empty($update_values)) throw new Exception("Sorry error in proccess");
			$sql = sprintf("UPDATE mag_statics SET %s WHERE id = %s", $update_values, $data['id']);
			$res = $mysqli->query($sql);
			if($mysqli->affected_rows == 0) throw new Exception("Sorry error with redacting");
			return true;
		}
	}
?>