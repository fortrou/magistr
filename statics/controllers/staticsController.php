<?php 
	require_once(MODEL . 'staticModel.php');
	class statics {
		public static function empty_method() {
			header("Location: " . PROTOCOL . SITE_NAME);
		}
		public static function get_staticsCreation() {
			require_once(VIEW . "sessionmust/static-create.php");
		}
		public static function get_staticsView() {
			global $third_level_slug, $keywords, $description;
			if(empty($third_level_slug)) $this::empty_method();
			$data = staticModel::get_static($third_level_slug);
			if(!empty($data['static_keywords'])) {
				$keywords = $data['static_keywords'];
			}
			if(!empty($data['static_description'])) {
				$description = $data['static_description'];
			}
			require_once(VIEW . "sessionfree/static-view.php");
		}
		public static function get_staticsListForAdmin() {
			$data = staticModel::get_staticList();
			require_once(VIEW . "sessionmust/static-list.php");
		}
	}
?>