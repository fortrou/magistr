<?php 
	require_once(MODEL . 'lessonModel.php');
	class lesson {
		private $userData = array();
		function __construct( $user_data = array() ) {
			if(!empty($user_data)) $this->userData = $user_data;
		}
		public static function create_lesson() {
			require_once(VIEW . "sessionmust/lesson-create.php");
		}
		public static function update_lesson() {
			require_once(VIEW . "sessionmust/lesson-redact.php");
		}
	}
?>