<?php

	function data_function_1($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end,$country_codes;

		$data = $database -> query("SELECT " . "visitor_language" . ",COUNT(DISTINCT " . "visitor_session_id" . ") FROM analytics " . $analytics_filter_string . " GROUP BY " . "visitor_language" . " ORDER BY COUNT(*) DESC") -> fetchAll(PDO::FETCH_KEY_PAIR);

		$buffer = "";
		foreach ($country_codes as $key => $value) { $buffer .= "\"" . strtoupper($key) . "\":\"" . $value . "\","; }

		return $data;
	}

	function data_function_3($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $key . ",COUNT(DISTINCT " . "visitor_session_id" . ") FROM analytics " . $analytics_filter_string . " AND NOT " . $key . "='' GROUP BY " . $key . " ORDER BY COUNT(*) DESC") -> fetchAll(PDO::FETCH_KEY_PAIR);
		arsort($data);

		return $data;
	}


			

	// City Markers

	$visitor_markers = $database -> query("SELECT " . "visitor_lat" . "," . "visitor_lon" . " FROM analytics " . $analytics_filter_string . " AND NOT " . "visitor_lat" . "='' AND NOT " . "visitor_lon" . "='' GROUP BY " . "visitor_session_id") -> fetchAll(PDO::FETCH_KEY_PAIR);
	$marker_buffer = array();

	foreach ($visitor_markers as $lat => $lon)
	{
		array_push($marker_buffer,$lat . "," . $lon);
	}

	$marker_data = "[";
	$marker_count = 0;

	foreach ($marker_buffer as $key => $value) 
	{
		if ($marker_count < 2000)
		{
			$marker_data .= "{latLng: [" . $value . "], name: \"" . $key . "\"},";
		}

		$marker_count += 1;	
	}

	$map_markers = rtrim($marker_data,",") . "]";


	$visitor_language = data_function_3("visitor_language");
	$visitor_country = data_function_3("visitor_country");
	$visitor_region = data_function_3("visitor_region");
	$visitor_city = data_function_3("visitor_city");

?>




<div class="analytics_holder center_horizontal" style="margin-bottom:20px;">

	<div class="analytics_box">

	    <div class="analytics_map">
			<div class="map dynamic_map" id="geography"></div>
		</div>

	    <script style="display:none;">

	    	map_countries["geography"] = {};  
			map_markers["geography"] = <?php echo $map_markers; ?>;  

	    </script>
	</div>

</div>  




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Sprachen</div>
		<div class="value"><?php echo array_keys($visitor_language)[0]; ?></div>
		<?php $list_array = $visitor_language; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Länder</div>
		<div class="value"><?php echo array_keys($visitor_country)[0]; ?></div>
		<?php $list_array = $visitor_country; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>  




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Regionen</div>
		<div class="value"><?php echo array_keys($visitor_region)[0]; ?></div>
		<?php $list_array = $visitor_region; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Städte</div>
		<div class="value"><?php echo array_keys($visitor_city)[0]; ?></div>
		<?php $list_array = $visitor_city; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div> 