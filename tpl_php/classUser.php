<?php
	/**
	 * dev by @fortrou
	 * class User for Online-shkola
	 *
	 * @registr_user($data) - user registration
	 * @auth_user($data) - user authorization
	 * @get_field($id, $field) - get one field
	 * @get_fieldsArray($id, $fields_array) - get array of fields according to second param
	 * @delete_user($id) - user delete
	 * @update_user($id, $data) - user update
	 * @get_userUserDataByLogin($login)
	 *
	 **/
	class User {
		private $user_data = array();
		
		function __conctruct($data) {
			$this->user_data = $data;
		}
		public static function get_userUserDataByLogin($login) {
			if(empty($login)) throw new Exception("Incorrect login to check");
			global $mysqli;

			$sql = sprintf("SELECT id FROM mag_users WHERE user_email = '%s'", $login);
			$res = $mysqli->query($sql);
			if($res->num_rows == 0) throw new Exception("No account with such nickname");
			$row = $res->fetch_assoc();
			if(empty($row)) throw new Exception("Empty string");
			return $row;
		}
		public static function registr_user($data = array()) {
			if(empty($data) || empty($data['user_email']) || empty($data['user_password'])) throw new Exception("Incorrect data");
			global $mysqli;
			
			$sql = sprintf("SELECT id FROM mag_users WHERE user_email = '%s'", $data['user_email']);
			$res = $mysqli->query($sql);
			if($res->num_rows) throw new Exception("Already created account with this email");
			
			$insert_keys = '';
			$insert_values = '';
			foreach($data as $key => $value) {
				print($key . " - " . $value . "<br>");
				if($key == 'action') continue;
				if($key == 'password-re-enter') continue;
				if($key == 'user_avatar') continue;
				if($key == 'user_password') $value = password_hash($value, PASSWORD_DEFAULT);
				
				$insert_keys .= $key . ', ';
				if(is_numeric($value))
					$insert_values .= $value . ', ';
				else
					$insert_values .= "'" . $value . "', ";
			}
			$insert_keys = rtrim($insert_keys, ', ');
			$insert_values = rtrim($insert_values, ', ');

			if(empty($insert_keys) || empty($insert_values)) throw new Exception("Sorry error in proccess");
			$sql = sprintf("INSERT INTO mag_users(%s) VALUES(%s)", $insert_keys, $insert_values);
			$res = $mysqli->query($sql);
			if($mysqli->affected_rows == 0) throw new Exception("Sorry error with creating");
			$user_data = self::get_userUserDataByLogin($data['user_email']);
			cookieManager::set_user_cookie('user_data', $user_data, 3600);
			
			
		}
	}
?>