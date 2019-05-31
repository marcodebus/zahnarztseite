<?php
	
	$database_structure = array();




	// Table: Analytics

	$database_structure["analytics"] = array();



	// Dataset IDs

	array_push($database_structure["analytics"],"visitor_visitor_id");
	array_push($database_structure["analytics"],"visitor_session_id");
	array_push($database_structure["analytics"],"visitor_pageview_id");



	// Dataset Visitor Data

	array_push($database_structure["analytics"],"visitor_visitor_sessions");
	array_push($database_structure["analytics"],"visitor_visitor_session");

	array_push($database_structure["analytics"],"visitor_visitor_pageviews");
	array_push($database_structure["analytics"],"visitor_visitor_pageview");

	array_push($database_structure["analytics"],"visitor_visitor_time");

	array_push($database_structure["analytics"],"visitor_visitor_pages");

	array_push($database_structure["analytics"],"visitor_visitor_first_page");
	array_push($database_structure["analytics"],"visitor_visitor_last_page");



	// Dataset Session Data

	array_push($database_structure["analytics"],"visitor_session_pageviews");
	array_push($database_structure["analytics"],"visitor_session_pageview");

	array_push($database_structure["analytics"],"visitor_session_time");

	array_push($database_structure["analytics"],"visitor_session_pages");
	array_push($database_structure["analytics"],"visitor_session_landingpage");
	array_push($database_structure["analytics"],"visitor_session_exitpage");

	array_push($database_structure["analytics"],"visitor_session_first_page");
	array_push($database_structure["analytics"],"visitor_session_last_page");




	// Dataset Pageview Data

	// Dataset Enter Time

	array_push($database_structure["analytics"],"visitor_enter_timestamp");
	array_push($database_structure["analytics"],"visitor_enter_id");
	array_push($database_structure["analytics"],"visitor_enter_year");
	array_push($database_structure["analytics"],"visitor_enter_month");
	array_push($database_structure["analytics"],"visitor_enter_weekday");
	array_push($database_structure["analytics"],"visitor_enter_day");
	array_push($database_structure["analytics"],"visitor_enter_hour");
	array_push($database_structure["analytics"],"visitor_enter_minute");


	// Dataset Leave Time

	array_push($database_structure["analytics"],"visitor_leave_timestamp");
	array_push($database_structure["analytics"],"visitor_leave_id");


	// Dataset Geolocation

	array_push($database_structure["analytics"],"visitor_country");
	array_push($database_structure["analytics"],"visitor_country_code");
	array_push($database_structure["analytics"],"visitor_region");
	array_push($database_structure["analytics"],"visitor_region_code");
	array_push($database_structure["analytics"],"visitor_city");
	array_push($database_structure["analytics"],"visitor_zip");
	array_push($database_structure["analytics"],"visitor_lat");
	array_push($database_structure["analytics"],"visitor_lon");
	array_push($database_structure["analytics"],"visitor_timezone");
	array_push($database_structure["analytics"],"visitor_isp");
	array_push($database_structure["analytics"],"visitor_language");


	// Dataset Technology

	array_push($database_structure["analytics"],"visitor_device");
	array_push($database_structure["analytics"],"visitor_device_brand");
	array_push($database_structure["analytics"],"visitor_device_model");
	array_push($database_structure["analytics"],"visitor_os");
	array_push($database_structure["analytics"],"visitor_os_version");
	array_push($database_structure["analytics"],"visitor_browser");
	array_push($database_structure["analytics"],"visitor_browser_version");
	array_push($database_structure["analytics"],"visitor_resolution");
	array_push($database_structure["analytics"],"visitor_viewport");
	array_push($database_structure["analytics"],"visitor_document");


	// Dataset Referrer

	array_push($database_structure["analytics"],"visitor_referrer_url");
	array_push($database_structure["analytics"],"visitor_referrer_domain");
	array_push($database_structure["analytics"],"visitor_referrer_type");
	array_push($database_structure["analytics"],"visitor_referrer_name");


	// Dataset Page

	array_push($database_structure["analytics"],"visitor_url");
	array_push($database_structure["analytics"],"visitor_domain");
	array_push($database_structure["analytics"],"visitor_page_path");


	// Dataset Time

	array_push($database_structure["analytics"],"visitor_pageview_time");


	// Dataset Scroll

	array_push($database_structure["analytics"],"visitor_max_scroll");
	array_push($database_structure["analytics"],"visitor_avg_scroll");


	// Dataset Count

	array_push($database_structure["analytics"],"visitor_click_count");
	array_push($database_structure["analytics"],"visitor_right_click_count");
	array_push($database_structure["analytics"],"visitor_key_count");


	// Dataset Heatmap

	array_push($database_structure["analytics"],"visitor_scroll_heatmap");
	array_push($database_structure["analytics"],"visitor_mouse_heatmap");
	array_push($database_structure["analytics"],"visitor_click_heatmap");


	// Dataset Click

	array_push($database_structure["analytics"],"visitor_clicks");
	array_push($database_structure["analytics"],"visitor_click_elements");



	// Dataset Video

	array_push($database_structure["analytics"],"visitor_videos");


	// Dataset Form

	array_push($database_structure["analytics"],"visitor_forms");


	// Dataset Input

	array_push($database_structure["analytics"],"visitor_inputs");


	// Dataset Select

	array_push($database_structure["analytics"],"visitor_selects");


	// Dataset Record

	array_push($database_structure["analytics"],"visitor_record_viewport");
	array_push($database_structure["analytics"],"visitor_record_document");
	array_push($database_structure["analytics"],"visitor_record_scroll");
	array_push($database_structure["analytics"],"visitor_record_mouse");
	array_push($database_structure["analytics"],"visitor_record_click");
	array_push($database_structure["analytics"],"visitor_record_right_click");
	array_push($database_structure["analytics"],"visitor_record_key");


	// Dataset Last

	array_push($database_structure["analytics"],"visitor_last_viewport"); 
	array_push($database_structure["analytics"],"visitor_last_document");
	array_push($database_structure["analytics"],"visitor_last_scroll");
	array_push($database_structure["analytics"],"visitor_last_mouse");
	array_push($database_structure["analytics"],"visitor_last_click");


	// Dataset Leave

	array_push($database_structure["analytics"],"visitor_leave_url");
	array_push($database_structure["analytics"],"visitor_leave_domain");
	array_push($database_structure["analytics"],"visitor_leave_page");
	array_push($database_structure["analytics"],"visitor_leave_type");
	array_push($database_structure["analytics"],"visitor_leave_name");


	// Dataset Update

	array_push($database_structure["analytics"],"visitor_pageview_update");

?>