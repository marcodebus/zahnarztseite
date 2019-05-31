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

		$data = $database -> query("SELECT " . $analytics_select_string . ",COUNT(DISTINCT " . "visitor_session_id" . ") FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='" . $key . "'" . $analytics_group_string) -> fetchAll(PDO::FETCH_KEY_PAIR); 

		for ($i = $analytics_data_start; $i <= $analytics_data_end; $i++) { if ($i < 10) { if (!array_key_exists("0" . $i, $data)) { $data["0" . $i] = 0; } } else { if (!array_key_exists($i, $data)) { $data[$i] = 0; } } }

		ksort($data);

		return $data;
	}

	function data_function_3($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $key . ", COUNT(DISTINCT " . "visitor_session_id" . ") FROM analytics " . $analytics_filter_string . " GROUP BY " . $key . " ORDER BY COUNT(*) DESC") -> fetchAll(PDO::FETCH_KEY_PAIR);
		
		arsort($data);

		return $data;
	}




	$sessions = data_function_1("visitor_session_id");

	$desktop_sessions = data_function_2("Desktop");
	$tablet_sessions = data_function_2("Tablet");
	$phone_sessions = data_function_2("Phone");

	$visitor_brand = data_function_3("visitor_device_brand");
	$visitor_model = data_function_3("visitor_device_model");
	$visitor_screen = data_function_3("visitor_resolution");

	$visitor_os = data_function_3("visitor_os");
	$visitor_browser = data_function_3("visitor_browser");
	$visitor_window = data_function_3("visitor_viewport");

?>




<?php include("app/resource/php/post/data/blocks/svg.php"); ?>



 

<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_micro">
		<div class="title">Desktop</div>
		<div class="chart chart_pie"><?php $percentage = round(((array_sum($desktop_sessions)/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

	<div class="analytics_box analytics_box_micro">
		<div class="title">Tablet</div>
		<div class="chart chart_pie"><?php $percentage = round(((array_sum($tablet_sessions)/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

	<div class="analytics_box analytics_box_micro">
		<div class="title">Handy</div>
		<div class="chart chart_pie"><?php $percentage = round(((array_sum($phone_sessions)/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

	<div class="analytics_box analytics_box_micro">
		<div class="title">Andere</div>
		<div class="chart chart_pie"><?php $percentage = round((((array_sum($sessions) - (array_sum($desktop_sessions) + array_sum($tablet_sessions) + array_sum($phone_sessions)))/array_sum($sessions))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

</div>




<div class="analytics_holder center_horizontal" style="display:none;">

	<div class="analytics_box">
		<div class="chart dynamic_stack_chart dynamic_line_chart_large" id="traffic_by_date" style="height:250px;"></div>

		<script>

			<?php if (count($sessions) == 12) { ?>
				chart_labels["traffic_by_date"] = ["January","February","March","April","Mai","June","July","August","September","October","November","December"];
			<?php } else { ?>
				chart_labels["traffic_by_date"] = [<?php foreach ($sessions as $key => $data) { echo $key . ","; } ?>];
			<?php } ?>

			chart_data["traffic_by_date"] = [[<?php foreach ($desktop_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($tablet_sessions as $key => $data) { echo $data . ","; } ?>],[<?php foreach ($phone_sessions as $key => $data) { echo $data . ","; } ?>]];
	
		</script>

		<div class="legend center_horizontal">
			<div class="item"><div class="dot"></div>Desktop</div>
			<div class="item"><div class="dot"></div>Tablet</div>
			<div class="item"><div class="dot"></div>Handy</div> 
		</div>
	</div>

</div>

		


<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Betriebs Systeme</div>
		<div class="value"><?php echo array_keys($visitor_os)[0]; ?></div>
		<?php $list_array = $visitor_os; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Web Browser</div>
		<div class="value"><?php echo array_keys($visitor_browser)[0]; ?></div>
		<?php $list_array = $visitor_browser; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>




<div class="analytics_holder center_horizontal analytics_traffic">
	
	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Bildschirm Verhältnisse</div>
		<div class="value"><?php echo array_keys($visitor_screen)[0]; ?></div>
		<?php $list_array = $visitor_screen; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>
	
	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Bildschirm Größe</div>
		<div class="value"><?php echo array_keys($visitor_window)[0]; ?></div>
		<?php $list_array = $visitor_window; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>