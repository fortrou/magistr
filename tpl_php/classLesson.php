<?php
	/**
	 * class lesson
	 * dev by @fortrou
	 * createLesson($data)
	 * updateLesson($id, $data)
	 * deleteLesson($id)
	 *
	 *
	 **/
	class Lesson {
		public static function createLesson($data) {

		}
		public static function updateLesson($id, $data) {

		}
		public static function deleteLesson($id) {
			
		}
		static public function Create($ar = array()) {
			//var_dump($ar);
			$db = Database::getInstance();
			$mysqli = $db->getConnection();

			$sql = "INSERT INTO os_lessons ( ";

			foreach ($ar as $f => $v) 
			{
				if ( $f == 'send') continue;
				if ( $f == 'control'){ 
					$f_q .= "is_control, ";
					$l_q .= "'$v', "; 
					continue;
				}
				if ( $f == 'class' ) continue;

				$f_q .= $f . ', ';

				if ( $f != 'links_ua' && $f != 'links_ru' ){
					//print("a");
					$temp = $db->clear($v);
				}
				else{
					$temp = $v;	
				}

				$l_q .= "'$temp', ";
			}

			$f_q = rtrim($f_q, ', ');
			$l_q = rtrim($l_q, ', ');

			$sql .= $f_q . " ) VALUES ( " . $l_q . ' )';

			
			//print($sql);
			$mysqli->query($sql) or die($mysqli->error);
			if ($mysqli->affected_rows > 0) {
				$lessonId = $mysqli->insert_id;
				return $lessonId;
			} else {
				return false;
			}
			return $mysqli->affected_rows > 0 ? $mysqli->insert_id : false;
		}
	}


?>