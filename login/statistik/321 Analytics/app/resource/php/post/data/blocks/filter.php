<?php




	// Analytics Filter String

	$analytics_filter_string = " WHERE ";

	foreach ($_POST as $filter_name => $filter_value)
	{ 
		if ($filter_value != "all")
		{
			$analytics_filter_string .= " AND " . trim(str_replace("filter_","",$filter_name)) . "='" . trim($filter_value) . "'";
		}
	}

	$analytics_filter_string = str_replace(" WHERE  AND "," WHERE ",$analytics_filter_string);
	trim($analytics_filter_string);




	// Analytics Timeframe Start and End

	if (isset($_POST["visitor_enter_year"]) && $_POST["visitor_enter_year"] != "all")
	{
		$analytics_data_start = 1;
		$analytics_data_end = 12;

		$analytics_select_string = "visitor_enter_month";
		$analytics_group_string = "visitor_enter_month";

		if (isset($_POST["visitor_enter_month"]) && $_POST["visitor_enter_month"] != "all")
		{
			$analytics_data_start = 1;
			$analytics_data_end = 31;

			$analytics_select_string = "visitor_enter_day";
			$analytics_group_string = "visitor_enter_day";
			
			if (isset($_POST["visitor_enter_day"]) && $_POST["visitor_enter_day"] != "all")
			{
				$analytics_data_start = 0;
				$analytics_data_end = 23;

				$analytics_select_string = "visitor_enter_hour";
				$analytics_group_string = "visitor_enter_hour";
				
				if (isset($_POST["visitor_enter_hour"]) && $_POST["visitor_enter_hour"] != "all")
				{
					$analytics_data_start = 0;
					$analytics_data_end = 59;	

					$analytics_select_string = "visitor_enter_minute";
					$analytics_group_string = "visitor_enter_minute";
				}
			}
		}
	}

	$analytics_group_string = " GROUP BY " . $analytics_group_string;

?>