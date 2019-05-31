<?php

	function data_function_1($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $analytics_select_string . ",COUNT(DISTINCT " . $key . ") FROM analytics " . $analytics_filter_string . $analytics_group_string) -> fetchAll(PDO::FETCH_KEY_PAIR); 

		for ($i = $analytics_data_start; $i <= $analytics_data_end; $i++) { if ($i < 10) { if (!array_key_exists("0" . $i, $data)) { $data["0" . $i] = 0; } } else { if (!array_key_exists($i, $data)) { $data[$i] = 0; } } }

		ksort($data);

		return $data;
	}

	function data_function_2($key,$distinct,$range_start,$range_end)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $key . ",COUNT(DISTINCT " . $distinct . ") FROM analytics " . $analytics_filter_string . " GROUP BY " . $key) -> fetchAll(PDO::FETCH_KEY_PAIR); 

		for ($i = $range_start; $i <= $range_end; $i++) { if ($i < 10) { if (!array_key_exists("0" . $i, $data)) { $data["0" . $i] = 0; } } else { if (!array_key_exists($i, $data)) { $data[$i] = 0; } } }

		ksort($data);

		return $data;
	}

	function data_function_3($key,$distinct,$range_start,$range_end)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $key . ",COUNT(DISTINCT " . $distinct . ") FROM analytics " . $analytics_filter_string . " GROUP BY " . $key) -> fetchAll(PDO::FETCH_KEY_PAIR); 

		for ($i = ($range_start+1); $i <= $range_end; $i++) { if (!array_key_exists($i, $data)) { $data[$i] = 0; } }

		if (!array_key_exists("0", $data)) { $data["0"] = 0; }

		ksort($data);

		$zero = $data["0"]; unset($data["0"]); $data["0"] = $zero;

		return $data;
	}




	$visitors = data_function_1("visitor_visitor_id");
	$sessions = data_function_1("visitor_session_id");
	$pageviews = data_function_1("visitor_pageview_id");

	$month_visitors = data_function_2("visitor_enter_month","visitor_visitor_id",1,12);
	$month_sessions = data_function_2("visitor_enter_month","visitor_session_id",1,12);
	$month_pageviews = data_function_2("visitor_enter_month","visitor_pageview_id",1,12);

	$day_visitors = data_function_2("visitor_enter_day","visitor_visitor_id",1,31);
	$day_sessions = data_function_2("visitor_enter_day","visitor_session_id",1,31);
	$day_pageviews = data_function_2("visitor_enter_day","visitor_pageview_id",1,31);

	$weekday_visitors = data_function_3("visitor_enter_weekday","visitor_visitor_id",0,6);
	$weekday_sessions = data_function_3("visitor_enter_weekday","visitor_session_id",0,6);
	$weekday_pageviews = data_function_3("visitor_enter_weekday","visitor_pageview_id",0,6);

	$time_visitors = data_function_2("visitor_enter_hour","visitor_visitor_id",0,24);
	$time_sessions = data_function_2("visitor_enter_hour","visitor_session_id",0,24);
	$time_pageviews = data_function_2("visitor_enter_hour","visitor_pageview_id",0,24);

?>




<div class="analytics_holder center_horizontal">
 
	<div class="analytics_box analytics_box_small">
		<div class="title">Besucher</div>
		<div class="value value_only"><?php echo array_sum($visitors); ?></div>
	</div>

	<div class="analytics_box analytics_box_small">
		<div class="title">Sessions</div>
		<div class="value value_only"><?php echo array_sum($sessions); ?></div>
	</div>

	<div class="analytics_box analytics_box_small">
		<div class="title">Pageviews</div>
		<div class="value value_only"><?php echo array_sum($pageviews); ?></div>
	</div>

</div>


 

<div class="analytics_holder center_horizontal">

	<div class="analytics_box">
		<div class="title">Traffic</div>
		<div class="chart dynamic_line_chart dynamic_line_chart_large" id="traffic_by_date"></div>

		<script>

			<?php if (count($visitors) == 12) { ?>
				chart_labels["traffic_by_date"] = ["January","February","March","April","Mai","June","July","August","September","October","November","December"];
			<?php } else { ?>
				chart_labels["traffic_by_date"] = [<?php foreach ($visitors as $key => $data) { echo $key . ","; } ?>];
			<?php } ?>

			chart_data["traffic_by_date"] = [[<?php foreach ($visitors as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($pageviews as $key => $data) { echo $data . ","; } ?>]];
	
		</script>

		<div class="legend center_horizontal">
			<div class="item"><div class="dot"></div>Besucher</div>
			<div class="item"><div class="dot"></div>Sessions</div>
			<div class="item"><div class="dot"></div>Pageviews</div>
		</div>
	</div>

</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half">
		<div class="title">Traffic im Monat</div>
		<div class="chart dynamic_line_chart" id="traffic_by_month"></div>

		<script>

			chart_labels["traffic_by_month"] = ["January","February","March","April","Mai","June","July","August","September","October","November","December"];
			chart_data["traffic_by_month"] = [[<?php foreach ($month_visitors as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($month_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($month_pageviews as $key => $data) { echo $data . ","; } ?>]];

		</script>

		<div class="legend center_horizontal">
			<div class="item"><div class="dot"></div>Besucher</div>
			<div class="item"><div class="dot"></div>Sessions</div>
			<div class="item"><div class="dot"></div>Pageviews</div>
		</div>
	</div>

	<div class="analytics_box analytics_box_half">
		<div class="title">Traffic in Tagen pro Monat</div>
		<div class="chart dynamic_line_chart" id="traffic_by_day"></div>

		<script>

			chart_labels["traffic_by_day"] = [<?php foreach ($day_visitors as $key => $data) { echo $key . ","; } ?>];
			chart_data["traffic_by_day"] = [[<?php foreach ($day_visitors as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($day_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($day_pageviews as $key => $data) { echo $data . ","; } ?>]];

		</script>

		<div class="legend center_horizontal">
			<div class="item"><div class="dot"></div>Besucher</div>
			<div class="item"><div class="dot"></div>Sessions</div>
			<div class="item"><div class="dot"></div>Pageviews</div>
		</div>
	</div>
</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half">
		<div class="title">Traffic je Wochentag</div>
		<div class="chart dynamic_line_chart" id="traffic_by_weekday"></div>

		<script>

			chart_labels["traffic_by_weekday"] = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
			chart_data["traffic_by_weekday"] = [[<?php foreach ($weekday_visitors as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($weekday_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($weekday_pageviews as $key => $data) { echo $data . ","; } ?>]];

		</script>

		<div class="legend center_horizontal">
			<div class="item"><div class="dot"></div>Besucher</div>
			<div class="item"><div class="dot"></div>Sessions</div>
			<div class="item"><div class="dot"></div>Pageviews</div>
		</div>
	</div>

	<div class="analytics_box analytics_box_half">
		<div class="title">Traffic pro Tag</div>	
		<div class="chart dynamic_line_chart" id="traffic_by_daytime"></div>

		<script>

			chart_labels["traffic_by_daytime"] = [<?php foreach ($time_visitors as $key => $data) { echo "\"" . $key . ":00\","; } ?>];
			chart_data["traffic_by_daytime"] = [[<?php foreach ($time_visitors as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($time_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($time_pageviews as $key => $data) { echo $data . ","; } ?>]];

		</script>

		<div class="legend center_horizontal">
			<div class="item"><div class="dot"></div>Besucher</div>
			<div class="item"><div class="dot"></div>Sessions</div>
			<div class="item"><div class="dot"></div>Pageviews</div>
		</div>
	</div>

</div>