<?php

	function data_function_1($key)
	{
		global $database,$analytics_select_string,$analytics_filter_string,$analytics_group_string,$analytics_data_start,$analytics_data_end;

		$data = $database -> query("SELECT " . "visitor_page_path" . ",COUNT(" . "visitor_page_path" . ") FROM analytics " . $analytics_filter_string . " AND " . "visitor_session_pageview" . "='" . $key . "' AND NOT " . "visitor_page_path" . "='' AND " . "visitor_page_path" . " IS NOT NULL " . " GROUP BY " . "visitor_page_path" . " ORDER BY COUNT(*) DESC") -> fetchAll(PDO::FETCH_KEY_PAIR); 

		return $data;
	}




	$visitor_pages = $database -> query("SELECT " . "visitor_page_path" . ",COUNT(" . "visitor_page_path" . ") FROM analytics " . $analytics_filter_string . " AND NOT " . "visitor_page_path" . "='' AND " . "visitor_page_path" . " IS NOT NULL GROUP BY " . "visitor_page_path" . " ORDER BY COUNT(*) DESC") -> fetchAll(PDO::FETCH_KEY_PAIR);

	$visitor_page_1 = data_function_1("1");
	$visitor_page_2 = data_function_1("2");
	$visitor_page_2_percentage = round(((array_sum($visitor_page_2)/array_sum($visitor_pages))*100),0);
	$visitor_page_3 = data_function_1("3");
	$visitor_page_3_percentage = round(((array_sum($visitor_page_3)/array_sum($visitor_page_2))*100),0);
	$visitor_page_4 = data_function_1("4");
	$visitor_page_4_percentage = round(((array_sum($visitor_page_4)/array_sum($visitor_page_3))*100),0);
	$visitor_page_5 = data_function_1("5");
	$visitor_page_5_percentage = round(((array_sum($visitor_page_5)/array_sum($visitor_page_4))*100),0);

	$visitor_exitpage = $database -> query("SELECT " . "visitor_session_exitpage" . ",COUNT(" . "visitor_session_exitpage" . ") FROM analytics " . $analytics_filter_string . " AND NOT " . "visitor_session_exitpage" . "='' AND " . "visitor_session_exitpage" . " IS NOT NULL GROUP BY " . "visitor_session_exitpage" . " ORDER BY COUNT(*) DESC") -> fetchAll(PDO::FETCH_KEY_PAIR); 

?>




<?php include("app/resource/php/post/data/blocks/svg.php"); ?>





<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<?php $list_array = $visitor_pages; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>





<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Startseite</div>
		<div class="value"><?php echo array_keys($visitor_page_1)[0]; ?></div>
		<?php $list_array = $visitor_page_1; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

	<div class="analytics_box analytics_box_half analytics_box_more">
		<div class="title">Endseite</div>
		<div class="value"><?php echo array_keys($visitor_exitpage)[0]; ?></div>
		<?php $list_array = $visitor_exitpage; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">Erst Gecklickte Seite</div>
		<?php $list_array = $visitor_page_1; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>



<div class="analytics_flow">
	<div class="arrow"></div>
	<div class="label center_total">Flow Rate in <?php echo $visitor_page_2_percentage; ?>%</div>
</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">Zweit Gecklickte Seite</div>
		<?php $list_array = $visitor_page_2; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>




<div class="analytics_flow">
	<div class="arrow"></div>
	<div class="label center_total">Flow Rate in: <?php echo $visitor_page_3_percentage; ?>%</div>
</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">Dritt Gecklickte Seite</div>
		<?php $list_array = $visitor_page_3; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>




<div class="analytics_flow">
	<div class="arrow"></div>
	<div class="label center_total">Flow Rate in: <?php echo $visitor_page_4_percentage; ?>%</div>
</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">4. Gecklickte Seite</div>
		<?php $list_array = $visitor_page_4; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div> 




<div class="analytics_flow">
	<div class="arrow"></div>
	<div class="label center_total">Flow Rate in: <?php echo $visitor_page_5_percentage; ?>%</div>
</div>




<div class="analytics_holder center_horizontal">

	<div class="analytics_box analytics_box_more">
		<div class="title">5. Gecklickte Seite</div>
		<?php $list_array = $visitor_page_5; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div>