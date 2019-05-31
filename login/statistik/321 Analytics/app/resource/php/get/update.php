<?php





	$search_sites = array("google" => "google","goo" => "google","bing" => "bing","yahoo" => "yahoo","baidu" => "baidu","ask" => "ask","aol" => "aol","wow" => "wow","webcrawler" => "webcrawler","mywebsearch" => "mywebsearch","infospace" => "infospace","duckduckgo" => "duckduckgo","yandex" => "yandex");

	$social_sites = array("facebook" => "facebook","fb" => "facebook","twitter" => "twitter","t.co" => "twitter","youtube" => "youtube","instagram" => "instagram","snap" => "snapchat","snapchat" => "snapchat","reddit" => "reddit","linkedin" => "linkedin","xing" => "xing","pinterest" => "pinterest","tumblr" => "tumblr","vine" => "vine","meetup" => "meetup","quora" => "quora");
 



















	// Visitor Update Function
	
		$visitor_visitor_time = $database -> query("SELECT MAX(" . "visitor_visitor_time" . ") FROM analytics WHERE " . "visitor_visitor_id" . "='" . trim($_GET["visitor_visitor_id"]) . "' ORDER BY " . "visitor_enter_id" . " DESC LIMIT 1") -> fetchColumn();
		
		$visitor_session_time = $database -> query("SELECT MAX(" . "visitor_session_time" . ") FROM analytics WHERE " . "visitor_visitor_id" . "='" . trim($_GET["visitor_visitor_id"]) . "' AND " . "visitor_session_id" . "='" . trim($_GET["visitor_session_id"]) . "' ORDER BY " . "visitor_enter_id" . " DESC LIMIT 1") -> fetchColumn();

		$visitor_pageview_time = $database -> query("SELECT MAX(" . "visitor_pageview_time" . ") FROM analytics WHERE " . "visitor_visitor_id" . "='" . trim($_GET["visitor_visitor_id"]) . "' AND " . "visitor_session_id" . "='" . trim($_GET["visitor_session_id"]) . "' AND " . "visitor_pageview_id" . "='" . trim($_GET["visitor_pageview_id"]) . "' ORDER BY " . "visitor_enter_id" . " DESC LIMIT 1") -> fetchColumn();
		




		// Data Array

		$analytics = array();




		// Add Precalculated Data From Post Values To Array

		foreach($_GET as $key => $value)  
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

		$analytics["visitor_visitor_time"] = $visitor_visitor_time + ($_GET["visitor_pageview_time"] - $visitor_pageview_time);
		$analytics["visitor_session_time"] = $visitor_session_time + ($_GET["visitor_pageview_time"] - $visitor_pageview_time);


		// Dataset Update

		$analytics["visitor_pageview_update"] = date("YmdHis");


		// Dataset Leave

		if (isset($_GET["visitor_leave_url"]))
		{
			$analytics["visitor_leave_domain"] = get_domain(trim($_GET["visitor_leave_url"]));
			$analytics["visitor_leave_page"] = get_page(trim($_GET["visitor_leave_url"]));
			$analytics["visitor_leave_type"] = visitor_leave_type(get_domain(trim($_GET["visitor_leave_url"])));
			$analytics["visitor_leave_name"] = visitor_leave_name(get_domain(trim($_GET["visitor_leave_url"])));
		}



		// Write To Database

		$sql = "UPDATE analytics SET ";
		foreach ($analytics as $key => $value) {$sql .= $key . "='" . $value . "',";}
		$sql = rtrim($sql,",");
		$sql .= " WHERE " . "visitor_visitor_id" . "='" . trim($_GET["visitor_visitor_id"]) . "' AND " . "visitor_session_id" . "='" . trim($_GET["visitor_session_id"]) . "' AND " . "visitor_pageview_id" . "='" . trim($_GET["visitor_pageview_id"]) . "'";
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_visitor_time" . "='" . $analytics["visitor_visitor_time"] . "' WHERE " . "visitor_visitor_id" . "='" . trim($_GET["visitor_visitor_id"]) . "'";
	
		$database -> exec($sql); 


		$sql = "UPDATE analytics SET " . "visitor_session_time" . "='" . $analytics["visitor_session_time"] . "' WHERE " . "visitor_session_id" . "='" . trim($_GET["visitor_session_id"]) . "'";
	
		$database -> exec($sql); 















	


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