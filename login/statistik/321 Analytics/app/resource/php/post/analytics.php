<?php





	$search_sites = array("google" => "google","goo" => "google","bing" => "bing","yahoo" => "yahoo","baidu" => "baidu","ask" => "ask","aol" => "aol","wow" => "wow","webcrawler" => "webcrawler","mywebsearch" => "mywebsearch","infospace" => "infospace","duckduckgo" => "duckduckgo","yandex" => "yandex");

	$social_sites = array("facebook" => "facebook","fb" => "facebook","twitter" => "twitter","t.co" => "twitter","youtube" => "youtube","instagram" => "instagram","snap" => "snapchat","snapchat" => "snapchat","reddit" => "reddit","linkedin" => "linkedin","xing" => "xing","pinterest" => "pinterest","tumblr" => "tumblr","vine" => "vine","meetup" => "meetup","quora" => "quora");
 


















 


	// Visitor Enter Function
	
	if ($_POST["action"] == "visitor_enter")
	{
		$analytics = array();

		$visitor_data = $database -> query("SELECT * FROM analytics WHERE visitor_visitor_id='" . trim($_POST["visitor_visitor_id"]) . "'") -> fetchAll();




		$url = "http://ip-api.com/json/" . trim($_POST["visitor_ip"]);

		if (function_exists('curl_exec'))
		{
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);
			curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
			$visitor_ip_data = curl_exec($curl);
			curl_close($curl);
		}
		else if (function_exists('file_get_contents'))
		{
			$visitor_ip_data = file_get_contents($url);
		}
		else if(function_exists('fopen') && function_exists('stream_get_contents'))
		{
			$handle = fopen($url, "r");
			$visitor_ip_data = stream_get_contents($handle);
		}

		$visitor_ip_data = json_decode(utf8_encode(trim($visitor_ip_data)));
		$visitor_ip_info = array();

		foreach ($visitor_ip_data as $key => $value)
		{
			$visitor_ip_info[$key] = $value;
		}





		$visitor_visitor_pageview = 0;
		$visitor_session_pageview = 0;

		$session_buffer = array();
		$visitor_visitor_session = 0;

		$visitor_visitor_pages = array();
		$visitor_session_pages = array();

		foreach ($visitor_data as $visitor)
		{
			$visitor_visitor_pageview += 1;

			if (!in_array($visitor["visitor_page_path"],$visitor_visitor_pages))
			{
				array_push($visitor_visitor_pages,$visitor["visitor_page_path"]);
			}

			if ($visitor["visitor_session_id"] == trim($_POST["visitor_session_id"]))
			{
				$visitor_session_pageview += 1;
				$analytics["visitor_session_exitpage"] = $visitor["visitor_page_path"];

				if ($visitor_session_pageview == 1)
				{
					$analytics["visitor_session_landingpage"] = $visitor["visitor_page_path"];
				}

				if (!in_array($visitor["visitor_page_path"],$visitor_session_pages))
				{
					array_push($visitor_session_pages,$visitor["visitor_page_path"]);
				}
			}

			if (!in_array($visitor["visitor_session_id"],$session_buffer))
			{
				array_push($session_buffer,$visitor["visitor_session_id"]);
				$visitor_visitor_session += 1;
			}
		}

		if (!in_array($visitor_session_id,$session_buffer))
		{
			$visitor_visitor_session += 1;
		}







		// Add Precalculated Data From Post Values To Array

		foreach($_POST as $key => $value)  
		{ 
			if ($key != "action" && in_array($key,$database_structure["analytics"]))
			{
				$analytics[$key] = trim($value);
			}
		}  




		// Dataset Visitor Data

		$analytics["visitor_visitor_sessions"] = $visitor_visitor_session;
		$analytics["visitor_visitor_session"] = $visitor_visitor_session;

		$analytics["visitor_visitor_pageviews"] = $visitor_visitor_pageview + 1;
		$analytics["visitor_visitor_pageview"] = $visitor_visitor_pageview + 1;

		$analytics["visitor_visitor_time"] = "0";




		// Dataset Session Data

		$analytics["visitor_session_pageviews"] = $visitor_session_pageview + 1; 
		$analytics["visitor_session_pageview"] = $visitor_session_pageview + 1; 



		// Dataset Enter Time

		$analytics["visitor_enter_timestamp"] = date("d.m.Y, H:i:s");
		$analytics["visitor_enter_id"] = date("YmdHis");
		$analytics["visitor_enter_year"] = date("Y");
		$analytics["visitor_enter_month"] = date("m");
		$analytics["visitor_enter_weekday"] = date("w");
		$analytics["visitor_enter_day"] = date("d");
		$analytics["visitor_enter_hour"] = date("H");
		$analytics["visitor_enter_minute"] = date("i"); 


		// Dataset Leave Time

		$analytics["visitor_leave_timestamp"] = date("d.m.Y, H:i:s");
		$analytics["visitor_leave_id"] = date("YmdHis");

		// Dataset 6

		$analytics["visitor_pageview_time"] = "0";


		// Dataset Geolocation

		$analytics["visitor_country"] = $visitor_ip_info["country"];
		$analytics["visitor_country_code"] = $visitor_ip_info["countryCode"];
		$analytics["visitor_region"] = $visitor_ip_info["regionName"];
		$analytics["visitor_region_code"] = $visitor_ip_info["region"];
		$analytics["visitor_city"] = $visitor_ip_info["city"];
		$analytics["visitor_zip"] = $visitor_ip_info["zip"];
		$analytics["visitor_lat"] = $visitor_ip_info["lat"];
		$analytics["visitor_lon"] = $visitor_ip_info["lon"]; 
		$analytics["visitor_timezone"] = $visitor_ip_info["timezone"];
		$analytics["visitor_isp"] = $visitor_ip_info["isp"];
		$analytics["visitor_language"] = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);


		// Dataset Referrer

		$analytics["visitor_referrer_url"] = trim($_POST["visitor_referrer"]);
		$analytics["visitor_referrer_domain"] = get_domain(trim($_POST["visitor_referrer"]));
		$analytics["visitor_referrer_type"] = visitor_referrer_type(get_domain(trim($_POST["visitor_referrer"])));
		$analytics["visitor_referrer_name"] = visitor_referrer_name(get_domain(trim($_POST["visitor_referrer"])));


		// Dataset Page

		$analytics["visitor_domain"] = get_domain(trim($_POST["visitor_url"]));
		if (get_page(trim($_POST["visitor_url"])) != "" && get_page(trim($_POST["visitor_url"])) != " " && get_page(trim($_POST["visitor_url"])) != "&nbsp;")
		{
			$analytics["visitor_page_path"] = get_page(trim($_POST["visitor_url"]));
		}
		else
		{
			$analytics["visitor_page_path"] = "/";
		}

		if (!in_array($analytics["visitor_page_path"],$visitor_visitor_pages))
		{
			array_push($visitor_visitor_pages,$analytics["visitor_page_path"]);
		}

		if (!in_array($analytics["visitor_page_path"],$visitor_session_pages))
		{
			array_push($visitor_session_pages,$analytics["visitor_page_path"]);
		}

		$analytics["visitor_visitor_pages"] = json_encode($visitor_visitor_pages);
		$analytics["visitor_session_pages"] = json_encode($visitor_session_pages);


		if ($analytics["visitor_visitor_pageview"] == 1)
		{
			$analytics["visitor_visitor_first_page"] == "true";
		}

		if ($analytics["visitor_session_pageview"] == 1)
		{
			$analytics["visitor_session_first_page"] == "true";
		}


		$sql = "UPDATE analytics SET " . "visitor_visitor_last_page" . "='" . "" . "' WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "'";
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_session_last_page" . "='" . "" . "' WHERE " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]) . "'";
	
		$database -> exec($sql); 

		$analytics["visitor_visitor_last_page"] = "true";
		$analytics["visitor_session_last_page"] = "true";
 

		// Dataset Technology

		$analytics["visitor_device"] = visitor_device();
		$analytics["visitor_device_brand"] = visitor_device();
		$analytics["visitor_device_model"] = visitor_device();
		$analytics["visitor_os"] = visitor_os();
		$analytics["visitor_os_version"] = visitor_os();
		$analytics["visitor_browser"] = visitor_browser();
		$analytics["visitor_browser_version"] = visitor_browser();


		// Dataset Leave

		if (isset($_POST["visitor_leave_url"]))
		{
			$analytics["visitor_leave_domain"] = get_domain(trim($_POST["visitor_leave_url"]));
			$analytics["visitor_leave_page"] = get_page(trim($_POST["visitor_leave_url"]));
			$analytics["visitor_leave_type"] = visitor_leave_type(get_domain(trim($_POST["visitor_leave_url"])));
			$analytics["visitor_leave_name"] = visitor_leave_name(get_domain(trim($_POST["visitor_leave_url"])));
		}





		// Dataset Update

		$analytics["visitor_pageview_update"] = date("YmdHis");




		// Write To Database

		$sql = "INSERT INTO analytics (";
		foreach ($analytics as $key => $value) {$sql .= $key . ",";}
		$sql = rtrim($sql,",") . ") VALUES (";
		foreach ($analytics as $key => $value) {$sql .= "'" . $value . "',";}
		$sql = rtrim($sql,",") . ")";
	
		$database -> exec($sql); 





		$sql = "UPDATE analytics SET " . "visitor_visitor_sessions" . "='" . $analytics["visitor_visitor_sessions"] . "' WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "'";
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_visitor_pageviews" . "='" . $analytics["visitor_visitor_pageviews"] . "' WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "'";
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_visitor_pages" . "='" . $analytics["visitor_visitor_pages"] . "' WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "'";
	
		$database -> exec($sql); 





		$sql = "UPDATE analytics SET " . "visitor_session_pageviews" . "='" . $analytics["visitor_session_pageviews"] . "' WHERE " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]);
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_session_pages" . "='" . $analytics["visitor_session_pages"] . "' WHERE " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]);
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_session_landingpage" . "='" . $analytics["visitor_session_landingpage"] . "' WHERE " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]);
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_session_exitpage" . "='" . $analytics["visitor_session_exitpage"] . "' WHERE " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]);
	
		$database -> exec($sql); 

	}



























	// Visitor Update Function
	
	if ($_POST["action"] == "visitor_update")
	{
		$visitor_visitor_time = $database -> query("SELECT MAX(" . "visitor_visitor_time" . ") FROM analytics WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "' ORDER BY " . "visitor_enter_id" . " DESC LIMIT 1") -> fetchColumn();
		
		$visitor_session_time = $database -> query("SELECT MAX(" . "visitor_session_time" . ") FROM analytics WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "' AND " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]) . "' ORDER BY " . "visitor_enter_id" . " DESC LIMIT 1") -> fetchColumn();

		$visitor_pageview_time = $database -> query("SELECT MAX(" . "visitor_pageview_time" . ") FROM analytics WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "' AND " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]) . "' AND " . "visitor_pageview_id" . "='" . trim($_POST["visitor_pageview_id"]) . "' ORDER BY " . "visitor_enter_id" . " DESC LIMIT 1") -> fetchColumn();
		




		// Data Array

		$analytics = array();




		// Add Precalculated Data From Post Values To Array

		foreach($_POST as $key => $value)  
		{ 
			if ($key != "action" && $key != "visitor_visitor_id" && $key != "visitor_session_id" && $key != "visitor_pageview_id" && in_array($key,$database_structure["analytics"]))
			{
				$analytics[$key] = trim($value);
			}
		}  




		// Dataset Leave Time

		$analytics["visitor_leave_timestamp"] = date("d.m.Y, H:i:s");
		$analytics["visitor_leave_id"] = date("YmdHis");


		// Dataset Time

		$analytics["visitor_visitor_time"] = $visitor_visitor_time + ($_POST["visitor_pageview_time"] - $visitor_pageview_time);
		$analytics["visitor_session_time"] = $visitor_session_time + ($_POST["visitor_pageview_time"] - $visitor_pageview_time);


		// Dataset Update

		$analytics["visitor_pageview_update"] = date("YmdHis");


		// Dataset Leave

		if (isset($_POST["visitor_leave_url"]))
		{
			$analytics["visitor_leave_domain"] = get_domain(trim($_POST["visitor_leave_url"]));
			$analytics["visitor_leave_page"] = get_page(trim($_POST["visitor_leave_url"]));
			$analytics["visitor_leave_type"] = visitor_leave_type(get_domain(trim($_POST["visitor_leave_url"])));
			$analytics["visitor_leave_name"] = visitor_leave_name(get_domain(trim($_POST["visitor_leave_url"])));
		}



		// Write To Database

		$sql = "UPDATE analytics SET ";
		foreach ($analytics as $key => $value) {$sql .= $key . "='" . $value . "',";}
		$sql = rtrim($sql,",");
		$sql .= " WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "' AND " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]) . "' AND " . "visitor_pageview_id" . "='" . trim($_POST["visitor_pageview_id"]) . "'";
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_visitor_time" . "='" . $analytics["visitor_visitor_time"] . "' WHERE " . "visitor_visitor_id" . "='" . trim($_POST["visitor_visitor_id"]) . "'";
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_session_time" . "='" . $analytics["visitor_session_time"] . "' WHERE " . "visitor_session_id" . "='" . trim($_POST["visitor_session_id"]) . "'";
	
		$database -> exec($sql); 
	}





























	


	// Visitor Device 
	
	function visitor_device() 
	{ 
    	$user_agent = $_SERVER['HTTP_USER_AGENT'];

    	$device = "Other";

    	$device_array = array
    	(
            '/windows nt 10/i'     =>  'Desktop',
            '/windows nt 6.3/i'     =>  'Desktop',
            '/windows nt 6.2/i'     =>  'Desktop',
            '/windows nt 6.1/i'     =>  'Desktop',
            '/windows nt 6.0/i'     =>  'Desktop',
            '/windows nt 5.2/i'     =>  'Desktop',
            '/windows nt 5.1/i'     =>  'Desktop',
            '/windows xp/i'         =>  'Desktop',
            '/windows nt 5.0/i'     =>  'Desktop',
            '/windows me/i'         =>  'Desktop',
            '/win98/i'              =>  'Desktop',
            '/win95/i'              =>  'Desktop',
            '/win16/i'              =>  'Desktop',
            '/macintosh|mac os x/i' =>  'Desktop',
            '/mac_powerpc/i'        =>  'Desktop',
            '/linux/i'              =>  'Desktop',
            '/ubuntu/i'             =>  'Desktop',
            '/iphone/i'             =>  'Phone',
            '/ipod/i'               =>  'Phone',
            '/ipad/i'               =>  'Tablet',
            '/android/i'            =>  'Phone',
            '/blackberry/i'         =>  'Phone',
            '/webos/i'              =>  'Other'
        );

    	foreach ($device_array as $regex => $value) 
    	{ 
        	if (preg_match($regex, $user_agent)) 
        	{
            	$device = $value;
        	}
    	}   
    	
    	return $device;
	}

	// Visitor OS

	function visitor_os() 
	{ 
    	$user_agent = $_SERVER['HTTP_USER_AGENT'];

    	$os = "Other";

    	$os_array = array
    	(
            '/windows nt 10/i'     =>  'Windows',
            '/windows nt 6.3/i'     =>  'Windows',
            '/windows nt 6.2/i'     =>  'Windows',
            '/windows nt 6.1/i'     =>  'Windows',
            '/windows nt 6.0/i'     =>  'Windows',
            '/windows nt 5.2/i'     =>  'Windows',
            '/windows nt 5.1/i'     =>  'Windows',
            '/windows xp/i'         =>  'Windows',
            '/windows nt 5.0/i'     =>  'Windows',
            '/windows me/i'         =>  'Windows',
            '/win98/i'              =>  'Windows',
            '/win95/i'              =>  'Windows',
            '/win16/i'              =>  'Windows',
            '/macintosh|mac os x/i' =>  'Mac OS',
            '/mac_powerpc/i'        =>  'Mac OS',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Linux',
            '/iphone/i'             =>  'iOS',
            '/ipod/i'               =>  'iOS',
            '/ipad/i'               =>  'iOS',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'Other',
            '/webos/i'              =>  'Other'
        );

    	foreach ($os_array as $regex => $value) 
    	{ 
        	if (preg_match($regex, $user_agent)) 
        	{
            	$os = $value;
        	}
    	}   
    	
    	return $os;
	}

	// Visitor Browser
	
	function visitor_browser() 
	{
    	$user_agent = $_SERVER['HTTP_USER_AGENT'];

    	$browser = "Other";

    	$browser_array = array
    	(
            '/msie/i'       =>  'Internet Explorer',
            '/firefox/i'    =>  'Firefox',
            '/safari/i'     =>  'Safari',
            '/chrome/i'     =>  'Chrome',
            '/opera/i'      =>  'Opera',
            '/edge/i'       =>  'Edge',
            '/netscape/i'   =>  'Other',
            '/maxthon/i'    =>  'Other',
            '/konqueror/i'  =>  'Other',
            '/mobile/i'     =>  'Mobile'
        );

    	foreach ($browser_array as $regex => $value) 
    	{ 
       		if (preg_match($regex, $user_agent)) 
       		{
            	$browser = $value;
        	}
   	 	}
   	 	
    	return $browser;
	}









	// Visitor Domain
	
	function get_domain($url)
	{
  		$pieces = parse_url($url);
  		$domain = isset($pieces['host']) ? $pieces['host'] : '';
  		if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{0,63}\.[a-z\.]{1,6})$/i', $domain, $regs)) 
  		{
    		return $regs['domain'];
  		}
  		return false;
	}

	// Visitor Page
	
	function get_page($url)
	{
		return trim(str_replace(get_domain($url),"",str_replace("www.","",str_replace("http://","",str_replace("https://","",$url)))),"/");
	}








	// Visitor Referrer Information

	function visitor_referrer_type($referrer)
	{
		global $search_sites,$social_sites;

		if ($referrer == "")
		{
			return "direct";
		}

		$referrer = explode(".",$referrer);
		$referrer = trim(strtolower($referrer[0]));

		if (array_key_exists($referrer,$search_sites))
		{
			return "search";
		}
		else if (array_key_exists($referrer,$social_sites))
		{
			return "social";
		}
		else
		{
			return "website";
		}
	}

	function visitor_referrer_name($referrer)
	{
		global $search_sites,$social_sites;

		if ($referrer == "")
		{
			return "";
		}

		$referrer = explode(".",$referrer);
		$referrer = trim(strtolower($referrer[0]));

		if (array_key_exists($referrer,$search_sites))
		{
			return $search_sites[$referrer];
		}
		else if (array_key_exists($referrer,$social_sites))
		{
			return $social_sites[$referrer];
		}
		else
		{
			return $referrer;
		}
	}





	function visitor_leave_type($leave_url)
	{
		global $license_domain;

		if ($leave_url == "")
		{
			return "unknown";
		}

		if (strpos($leave_url,$license_domain) !== false)
		{
			return "internal";
		}
		else
		{
			return "external";
		}
	}

	function visitor_leave_name($leave_url)
	{
		if ($leave_url == "")
		{
			return "";
		}

		$leave_url = get_domain($leave_url);

		$leave_url = explode(".",$leave_url);
		$leave_url = trim(strtolower($leave_url[0]));
		
		return $leave_url;
	}


	$database = null;

?>