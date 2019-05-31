<?php

	function data_function_1($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $analytics_select_string . ",COUNT(DISTINCT " . $key . ") FROM analytics " . $analytics_filter_string . $analytics_group_string) -> fetchAll(PDO::FETCH_KEY_PAIR); 

		for ($i = $analytics_data_start; $i <= $analytics_data_end; $i++) { if ($i < 10) { if (!array_key_exists("0" . $i, $data)) { $data["0" . $i] = 0; } } else { if (!array_key_exists($i, $data)) { $data[$i] = 0; } } }

		ksort($data);

		return $data;
	}

	function data_function_2($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . "visitor_referrer_name" . ",COUNT(DISTINCT " . "visitor_session_id" . ") FROM analytics " . $analytics_filter_string . " " . $website_filter_string . " AND " . "visitor_referrer_type" . "='" . $key . "' GROUP BY " . "visitor_referrer_name" . " ORDER BY COUNT(*) DESC") -> fetchAll(PDO::FETCH_KEY_PAIR); 

		arsort($data);

		return $data;
	}

	function data_function_3($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $analytics_select_string . ",COUNT(DISTINCT " . "visitor_session_id" . ") FROM analytics " . $analytics_filter_string . " AND " . "visitor_referrer_type" . "='" . $key . "'" . $analytics_group_string) -> fetchAll(PDO::FETCH_KEY_PAIR); 

		for ($i = $analytics_data_start; $i <= $analytics_data_end; $i++) { if ($i < 10) { if (!array_key_exists("0" . $i, $data)) { $data["0" . $i] = 0; } } else { if (!array_key_exists($i, $data)) { $data[$i] = 0; } } }

		ksort($data);

		return $data;
	}




	$visitors = data_function_1("visitor_visitor_id");
	$sessions = data_function_1("visitor_session_id");
	$pageviews = data_function_1("visitor_pageview_id");

	$direct_traffic = $database -> query("SELECT COUNT(DISTINCT " . "visitor_session_id" . ") FROM analytics " . $analytics_filter_string . " AND " . "visitor_referrer_domain" . "=''") -> fetchColumn();
	$website_traffic = data_function_2("website");
	$search_traffic = data_function_2("search");
	$social_traffic = data_function_2("social");

	$direct_sessions = data_function_3("direct");
	$website_sessions = data_function_3("website");
	$search_sessions = data_function_3("search");
	$social_sessions = data_function_3("social");

?>




<?php include("app/resource/php/post/data/blocks/svg.php"); ?>




<div class="analytics_holder center_horizontal" style="display:none;">

	<div class="analytics_box">
		<div class="chart dynamic_stack_chart dynamic_line_chart_large" id="traffic_by_date"></div>

		<script>

			<?php if (count($sessions) == 12) { ?>
				chart_labels["traffic_by_date"] = ["January","February","March","April","Mai","June","July","August","September","October","November","December"];
			<?php } else { ?>
				chart_labels["traffic_by_date"] = [<?php foreach ($sessions as $key => $data) { echo $key . ","; } ?>];
			<?php } ?>
			
			chart_data["traffic_by_date"] = [[<?php foreach ($direct_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($website_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($search_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($social_sessions as $key => $data) { echo $data . ","; } ?>]];
	
		</script>

		<div class="legend center_horizontal">
			<div class="item"><div class="dot"></div>Direct</div>
			<div class="item"><div class="dot"></div>Webseiten</div>
			<div class="item"><div class="dot"></div>Suchmaschinen</div>
			<div class="item"><div class="dot"></div>Soziale Netzwerke</div>
		</div>
	</div>

</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_quart">
		<div class="title">Direkt</div>
		<div class="chart chart_pie"><?php $percentage = round((($direct_traffic/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>


	<div class="analytics_box analytics_box_quart">
		<div class="title">Websiten-Links</div>
		<div class="chart chart_pie"><?php $percentage = round((((array_sum($sessions) - ($direct_traffic + array_sum($search_traffic) + array_sum($social_traffic)))/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>


	<div class="analytics_box analytics_box_quart">
		<div class="title">Google Suche</div>
		<div class="chart chart_pie"><?php $percentage = round(((array_sum($search_traffic)/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>


	<div class="analytics_box analytics_box_quart">
		<div class="title">Soziale Netze</div>
		<div class="chart chart_pie"><?php $percentage = round(((array_sum($social_traffic)/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">Webseiten</div>
		<?php $list_array = $website_traffic; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">Suche</div>
		<?php $list_array = $search_traffic; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">Sozial</div>
		<?php $list_array = $social_traffic; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>