<?php
	function transliteration($query_string) {
		$result = $query_string;
		$transliteration_table = array( "А|а" => "A|a",
										"Б|б" => "B|b",
										"В|в" => "V|v",
										"Г|г" => "G|g",
										"Д|д" => "D|d",
										"Е|е" => "JE|je",
										"Ё|ё" => "JE|je",
										"Ж|ж" => "ZH|zh",
										"З|з" => "Z|z",
										"И|и" => "I|i",
										"Й|й" => "J|j",
										"К|к" => "K|k",
										"Л|л" => "L|l",
										"М|м" => "M|m",
										"Н|н" => "N|n",
										"О|о" => "O|o",
										"П|п" => "P|p",
										"Р|р" => "R|r",
										"С|с" => "S|s",
										"Т|т" => "T|t",
										"У|у" => "U|u",
										"Ф|ф" => "F|f",
										"Х|х" => "KH|kh",
										"Ц|ц" => "TS|ts",
										"Ч|ч" => "CH|ch",
										"Ш|ш" => "SH|sh",
										"Щ|щ" => "SHCH|shch",
										"Ь|ь" => "_|_",
										"Ъ|ъ" => "_|_",
										"Э|э" => "E|e",
										"Ю|ю" => "JU|ju",
										"Я|я" => "Ja|ja",
										" | " => "_|_",
										"=|-" => "_|_",
										"І|і" => "I|i",
										"Ї|ї" => "JI|ji",
										"Є|є" => "JE|je"
									  );
		foreach ($transliteration_table as $key => $value) {
			$key_explode_1 = explode('|', $key)[0];
			$key_explode_2 = explode('|', $key)[1];
			$value_explode_1 = explode('|', $transliteration_table[$key])[0];
			$value_explode_2 = explode('|', $transliteration_table[$key])[1];
			$result = str_replace($key_explode_1,$value_explode_1,$result);
			$result = str_replace($key_explode_2,$value_explode_2,$result);

		}
		return $result;
	}
	function plural_form($number, $after) {
		$cases = array (2, 0, 1, 1, 1, 2);
		return $number.' '.$after[ ($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)] ];
	}
	function define_week_start_and_end($what, $timestamp)
	{
        $time_stamp = $timestamp;
        $cur_day = getdate($time_stamp); 
        $month_day = $cur_day['mday'];        
        $month_num = $cur_day['mon'];        
        $year_num = $cur_day['year'];        
        $day_num = $cur_day['wday'];
        if($day_num!=0) {
            $week_start = $month_day-$day_num+1;
        }
        else {
            $week_start = $month_day-6;
        }
        $week_end = $week_start+6;
        $week_start_month_num = $month_num;
        $week_end_month_num = $month_num;
        $week_start_year_num = $year_num;
        $week_end_year_num = $year_num;
        
        if($week_start < 1) {
            if($month_num == 1) {
                $week_start_year_num--;
                $week_start_month_num = 12;
            }
            else {
                $week_start_month_num--;
            }
            $last_day_in_previous_month = 31;
            while(!checkdate($week_start_month_num, $last_day_in_previous_month, $week_start_year_num)) {
                $last_day_in_previous_month--;
            }
            $week_start += $last_day_in_previous_month;
        }

        $last_day_in_month = 31;
        while (!checkdate($week_start_month_num, $last_day_in_month, $week_start_year_num)) {
            $last_day_in_month--;
        }

        if ($week_end > $last_day_in_month) {
            if ($month_num == 12) {
                $week_end_year_num++;
                $week_end_month_num = 1;
            }
            else {
                $week_end_month_num++;
            }
            $week_end = $week_end-$last_day_in_month;
        }
        $week_start_time_stamp = gmmktime(0, 0, 0, $week_start_month_num, $week_start, $week_start_year_num);
        $week_end_time_stamp = gmmktime(23, 59, 59,  $week_end_month_num, $week_end, $week_end_year_num);

        if ($what == "start") {
            return $week_start_time_stamp;
        }
        else if ($what == "end") {
            return $week_end_time_stamp;
        }
        return NULL;
	}
	
	function get_ip() {
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip=$_SERVER['HTTP_CLIENT_IP'];
	    }
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    else {
	        $ip=$_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}

	/**
	 * cookie_ip_control() ограничение количества обновлений на сайте, исходя из $_COOKIE
	 * $session_required = 1|2, 1 - ограничениение действует для всех, 2 - ограничение действует только для неавторизованых
	 *
	 *
	 **/
	function cookie_ip_control($session_required = 1) {
		$ip = get_ip();
		if(($session_required == 2 && isset($_SESSION['data']) && !empty($_SESSION['data'])) || (strpos($_SERVER['REQUEST_URI'], 'tpl_php') !== false)) {
			return false;
		}
		if(!isset($_COOKIE['ip_trigger'])) {
			setcookie("ip_trigger",1,time()+60);
		} else {
			$amount = $_COOKIE['ip_trigger'];
			if($amount == 8) {
				die("<center><h1 style='color:red'> Try to reload it in a minute</h1></center>");
			} else {
				unset_cookie('ip_trigger');
				$amount++;
				setcookie("ip_trigger",$amount,time()+60);
			}
		}
	}
	function get_header() {
		global $first_level_slug, $second_level_slug, $third_level_slug;
		if($third_level_slug != '') {
			if(file_exists(ROOT . "/tpl_blocks/header-{$second_level_slug}-{$third_level_slug}.php")){
				require_once(ROOT . "/tpl_blocks/header-{$second_level_slug}-{$third_level_slug}.php");
			} else if(file_exists(ROOT . "/tpl_blocks/header-{$second_level_slug}.php")) {
				require_once(ROOT . "/tpl_blocks/header-{$second_level_slug}.php");
			} else {
				require_once(ROOT . "/tpl_blocks/header.php");
			}
		} else if($second_level_slug != '') {
			if(file_exists(ROOT . "/tpl_blocks/header-{$second_level_slug}.php")){
				require_once(ROOT . "/tpl_blocks/header-{$second_level_slug}.php");
			} else {
				require_once(ROOT . "/tpl_blocks/header.php");
			}
		} else {
			require_once(ROOT . "/tpl_blocks/header.php");
		}
	}
?>