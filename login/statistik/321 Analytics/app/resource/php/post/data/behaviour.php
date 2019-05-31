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

		return $database -> query("SELECT COUNT(DISTINCT " . $key . ") FROM analytics " . $analytics_filter_string . " AND visitor_visitor_pageview='1'") -> fetchColumn();
	}

	function data_function_3($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $key . ",COUNT(DISTINCT visitor_session_id) FROM analytics " . $analytics_filter_string . " GROUP BY " . $key) -> fetchAll(PDO::FETCH_KEY_PAIR);
		
		$data = array_count_values($data);
		ksort($data);

		return $data;
	}

	function data_function_4($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $key . ",COUNT(*) FROM analytics " . $analytics_filter_string . " GROUP BY " . $key) -> fetchAll(PDO::FETCH_KEY_PAIR);

		$data = array_count_values($data);
		ksort($data);

		return $data;
	}

	function data_function_5($key,$divident)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		return round((($database -> query("SELECT COUNT(*) FROM (SELECT COUNT(*),SUM(" . "visitor_pageview_time" . ") FROM analytics " . $analytics_filter_string . " GROUP BY " . $key . " HAVING COUNT(*)=1 AND SUM(" . "visitor_pageview_time" . ")<10)") -> fetchColumn())/array_sum($divident))*100,2);
	}

	function data_function_6($key)
	{ 
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . $key . ",SUM(" . "visitor_pageview_time" . ") FROM analytics " . $analytics_filter_string . " GROUP BY " . $key . " HAVING SUM(" . "visitor_pageview_time" . ")<14400") -> fetchAll(PDO::FETCH_KEY_PAIR);

		$data = round(array_sum($data)/count($data),0);

		return sprintf('%02d:%02d:%02d', ($data/3600),($data/60%60), $data%60);
	}

	function data_function_7()
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT AVG(" . "visitor_pageview_time" . ") FROM analytics " . $analytics_filter_string . " AND " . "visitor_pageview_time" . "<14400") -> fetchColumn();

		return sprintf('%02d:%02d:%02d', ($data/3600),($data/60%60), $data%60);
	}

	function data_function_8($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;
	
		$data = $database -> query("SELECT CAST((time/15) + 0.5 AS INT) as time, COUNT(*) FROM (SELECT SUM(" . "visitor_pageview_time" . ") as time FROM analytics " . $analytics_filter_string . " GROUP BY " . $key . ") GROUP BY time") -> fetchAll(PDO::FETCH_KEY_PAIR);

		$buffer = array();

		foreach ($data as $time => $count)
		{
			$buffer[sprintf('%02d:%02d:%02d', (($time * 15)/3600),(($time * 15)/60%60), ($time * 15)%60) . " - " . sprintf('%02d:%02d:%02d', ((($time + 1) * 15)/3600),((($time + 1) * 15)/60%60), (($time + 1) * 15)%60)] = $count;
		}

		return $buffer;
	} 

	function data_function_9()
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;
	
		$data = $database -> query("SELECT CAST((" . "visitor_pageview_time" . "/15) + 0.5 AS INT) as time, COUNT(*) FROM analytics " . $analytics_filter_string . " GROUP BY time") -> fetchAll(PDO::FETCH_KEY_PAIR);

		$buffer = array();

		foreach ($data as $time => $count)
		{
			$buffer[sprintf('%02d:%02d:%02d', (($time * 15)/3600),(($time * 15)/60%60), ($time * 15)%60) . " - " . sprintf('%02d:%02d:%02d', ((($time + 1) * 15)/3600),((($time + 1) * 15)/60%60), (($time + 1) * 15)%60)] = $count;
		}

		return $buffer;
	}

	function data_function_10($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;
	
		$data = $database -> query("SELECT " . $analytics_select_string . ",AVG(" . $key . ") FROM analytics " . $analytics_filter_string . " AND " . $key . "<3600" . $analytics_group_string) -> fetchAll(PDO::FETCH_KEY_PAIR);

		for ($i = $analytics_data_start; $i <= $analytics_data_end; $i++) { if ($i < 10) { if (!array_key_exists("0" . $i, $data)) { $data["0" . $i] = 0; } } else { if (!array_key_exists($i, $data)) { $data[$i] = 0; } } }

		ksort($data);

		return $data;
	}




	$visitors = data_function_1("visitor_visitor_id");
	$sessions = data_function_1("visitor_session_id");
	$pageviews = data_function_1("visitor_pageview_id");

	$new_visitors = data_function_2("visitor_visitor_id");

	$visitor_sessions = data_function_3("visitor_visitor_id");
	$visitor_pageviews = data_function_4("visitor_visitor_id");	
	$session_pageviews = data_function_4("visitor_session_id");

	$visitor_bouncerate = data_function_5("visitor_visitor_id",$visitors);
	$session_bouncerate = data_function_5("visitor_session_id",$sessions);
	$pageview_bouncerate = data_function_5("visitor_pageview_id",$pageviews);

	$visitor_time_average = data_function_6("visitor_visitor_id");
	$session_time_average = data_function_6("visitor_session_id");
	$pageview_time_average = data_function_7();

	$visitor_time_distribution = data_function_8("visitor_visitor_id");
	$session_time_distribution = data_function_8("visitor_session_id");
	$pageview_time_distribution = data_function_9();

	$visitor_time_timeline = data_function_10("visitor_visitor_time");
	$session_time_timeline = data_function_10("visitor_session_time");
	$pageview_time_timeline = data_function_10("visitor_pageview_time");

?>




<?php include("app/resource/php/post/data/blocks/svg.php"); ?>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half">
		<div class="title">Neue Besucher</div>
		<div class="chart chart_pie"><?php $percentage = round(((array_sum($new_visitors)/array_sum($visitors))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

	<div class="analytics_box analytics_box_half">
		<div class="title">Wiederkehrende Besucher</div>
		<div class="chart chart_pie"><?php $percentage = round((((array_sum($visitors) - array_sum($new_visitors))/array_sum($visitors))*100),2); include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Sessions Pro Besucher</div>
		<div class="value"><?php echo array_keys($visitor_sessions,max($visitor_sessions))[0]; ?></div>
		<?php $list_array = $visitor_sessions; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Pageviews Pro Besucher</div>
		<div class="value"><?php echo array_keys($session_pageviews,max($session_pageviews))[0]; ?></div>
		<?php $list_array = $session_pageviews; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div> 




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_third">
		<div class="title">Besucher Bounce Rate</div>
		<div class="chart chart_pie"><?php $percentage = $visitor_bouncerate; include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

	<div class="analytics_box analytics_box_third">
		<div class="title">Session Bounce Rate</div>
		<div class="chart chart_pie"><?php $percentage = $session_bouncerate; include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

	<div class="analytics_box analytics_box_third">
		<div class="title">Pageview Bounce Rate</div>
		<div class="chart chart_pie"><?php $percentage = $pageview_bouncerate; include("app/resource/php/post/data/charts/pie_chart.php"); ?></div>
	</div>

</div>


<!-- Location Analytics: Time Charts -->

<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_third analytics_box_more">
		<div class="title">Zeit Pro Besucher</div>
		<div class="value"><?php echo $visitor_time_average; ?></div>
		<?php $list_array = $visitor_time_distribution; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

	<div class="analytics_box analytics_box_third analytics_box_more">
		<div class="title">Zeit pro Session</div>
		<div class="value"><?php echo $session_time_average; ?></div>
		<?php $list_array = $session_time_distribution; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

	<div class="analytics_box analytics_box_third analytics_box_more">
		<div class="title">Zeit Pro Pageview</div>
		<div class="value"><?php echo $pageview_time_average; ?></div>
		<?php $list_array = $pageview_time_distribution; include("app/resource/php/post/data/charts/list.php"); ?>
	</div> 
 
</div> 


