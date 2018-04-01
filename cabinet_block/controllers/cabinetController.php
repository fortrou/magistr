<?php 
	require_once(MODEL . 'cabinetModel.php');
	class cabinet {
		private $userData = array();
		function __construct( $user_data = array() ) {
			if(!empty($user_data)) $this->userData = $user_data;
		}
		public static function get_MainForSession() {
			if(!empty($this->userData)) {
				cabinetModel::get_MainForSession($this->userData);
			}
		}
		public static function get_registrationForm() {
			require_once(VIEW . "sessionfree/registration_form.php");
		}
	}
?>