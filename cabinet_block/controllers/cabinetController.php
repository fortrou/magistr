<?php 
	require_once(MODEL . 'cabinetModel.php');
	class cabinet {
		private $userData = array();
		function __construct( $user_data = array() ) {
			if(!empty($user_data)) $this->userData = $user_data;
		}
		public static function get_MainForSession() {
			global $user_cookie;
			//if(empty($user_cookie)) header("Location:/cabinet_block/auth");
			$active = '';
			cabinetModel::get_MainForSession($userData);
			require_once(VIEW . "sessionmust/cabinet.php");
		}
		public static function get_registrationForm() {
			require_once(VIEW . "sessionfree/registration_form.php");
		}
		public static function get_authorizationForm() {
			require_once(VIEW . "sessionfree/authorization_form.php");
		}
	}
?>