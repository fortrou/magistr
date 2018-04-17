<?php
	/**
	 * dev by @fortrou
	 * class User for Online-shkola
	 *
	 * @registr_user($data) - user registration
	 * @auth_user($data) - user authorization
	 * @get_field($id, $field) - get one field
	 * @get_fields_array($id, $fields_array) - get array of fields according to second param
	 * @delete_user($id) - user delete
	 * @update_user($id, $data) - user update
	 *
	 **/
	class User {
		private $user_data = array();
		
		function __conctruct($data) {
			$this->user_data = $data;
		}
		public static function registr_user($data = array()) {
			if(empty($data) || empty($data['user_email']) || empty($data['user_password'])) throw new Exception("Incorrect data");
			global $mysqli;
			
			$sql = sprintf("SELECT id FROM mag_users WHERE user_email = '%s'", $data['user_email']);
			$res = $mysqli->query($sql);
			if($res->num_rows) throw new Exception("Already created account with this email");
			
			foreach($data as $key => $value) {
				print($key . " - " . $value . "<br>");
				if($key == 'action') continue;
				if($key == 'password-re-enter') continue;
				if($key == 'user_avatar') print('12312412');
			}
		}

	}
?>