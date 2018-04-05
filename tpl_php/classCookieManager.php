<?php
	class cookieManager {
		private $cookie_data = array();
		//конструктор-парсер куки
		function __construct($cookie_name, $decode_method) {
			if(isset($_COOKIE[$cookie_name])) {
				$this->cookie_data = $decode_method($_COOKIE[$cookie_name]);
			}
		}
		//установка кук
		public function set_cookie($name, $value, $time) {

		}
		//удаление кук
		public function unset_cookie($cookie_name = '') {
			if($cookie_name == '') return false;
			setcookie($cookie_name, "", time()-1000*60*60*24*7 );
			setcookie($cookie_name, "", time()-1000*60*60*24*7, '/');
			$flag = true;
			while($flag) {
				if(isset($_COOKIE[$cookie_name])) {
					setcookie($cookie_name, "", time()-1000*60*60*24*7 );
					$flag = false;
				}
			}
			return false;
		}
	}
?>