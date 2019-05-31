<?php




	// Click Heatmap Desktop

	$click_heatmap_desktop = $database -> query("SELECT " . "visitor_click_heatmap" . " FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Desktop' AND NOT " . "visitor_click_heatmap" . "='' AND NOT " . "visitor_click_heatmap" . "='NaN' AND " . "visitor_click_heatmap" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$heatmap_desktop_array = array();

	foreach ($click_heatmap_desktop as $heatmap)
	{
		$heatmap_buffer = json_decode($heatmap);

		foreach ($heatmap_buffer as $key => $value)
		{
			$key = str_replace("\"","",$key);

			if (array_key_exists($key,$heatmap_desktop_array))
			{
				$heatmap_desktop_array[$key] += $value;
			}
			else
			{
				$heatmap_desktop_array[$key] = $value;
			}
		}
	}

	$heatmap_desktop_array["0x0"] = 0;
 
	$click_heatmap_desktop = null;
	$click_heatmap_desktop = "[";

	foreach ($heatmap_desktop_array as $key => $value)
	{
		$click_heatmap_desktop .= "[";
		$click_heatmap_desktop .= str_replace("x",",",$key);
		$click_heatmap_desktop .= ",";
		$click_heatmap_desktop .= $value;
		$click_heatmap_desktop .= "],";
	}

	rtrim($click_heatmap_desktop,",");
	$click_heatmap_desktop .= "]";

	$analytics_data["click_heatmap_desktop"] = $click_heatmap_desktop;





	// Click Heatmap Tablet

	$click_heatmap_tablet = $database -> query("SELECT " . "visitor_click_heatmap" . " FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Tablet' AND NOT " . "visitor_click_heatmap" . "='' AND NOT " . "visitor_click_heatmap" . "='NaN' AND " . "visitor_click_heatmap" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$heatmap_tablet_array = array();

	foreach ($click_heatmap_tablet as $heatmap)
	{
		$heatmap_buffer = json_decode($heatmap);

		foreach ($heatmap_buffer as $key => $value)
		{
			$key = str_replace("\"","",$key);

			if (array_key_exists($key,$heatmap_tablet_array))
			{
				$heatmap_tablet_array[$key] += $value;
			}
			else
			{
				$heatmap_tablet_array[$key] = $value;
			}
		}
	}

	$heatmap_tablet_array["0x0"] = 0;
 
	$click_heatmap_tablet = null;
	$click_heatmap_tablet = "[";

	foreach ($heatmap_tablet_array as $key => $value)
	{
		$click_heatmap_tablet .= "[";
		$click_heatmap_tablet .= str_replace("x",",",$key);
		$click_heatmap_tablet .= ",";
		$click_heatmap_tablet .= $value;
		$click_heatmap_tablet .= "],";
	}

	rtrim($click_heatmap_tablet,",");
	$click_heatmap_tablet .= "]";

	$analytics_data["click_heatmap_tablet"] = $click_heatmap_tablet;





	// Click Heatmap Phone

	$click_heatmap_phone = $database -> query("SELECT " . "visitor_click_heatmap" . " FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Phone' AND NOT " . "visitor_click_heatmap" . "='' AND NOT " . "visitor_click_heatmap" . "='NaN' AND " . "visitor_click_heatmap" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$heatmap_phone_array = array();

	foreach ($click_heatmap_phone as $heatmap)
	{
		$heatmap_buffer = json_decode($heatmap);

		foreach ($heatmap_buffer as $key => $value)
		{
			$key = str_replace("\"","",$key);

			if (array_key_exists($key,$heatmap_phone_array))
			{
				$heatmap_phone_array[$key] += $value;
			}
			else
			{
				$heatmap_phone_array[$key] = $value;
			}
		}
	}

	$heatmap_phone_array["0x0"] = 0;
 
	$click_heatmap_phone = null;
	$click_heatmap_phone = "[";

	foreach ($heatmap_phone_array as $key => $value)
	{
		$click_heatmap_phone .= "[";
		$click_heatmap_phone .= str_replace("x",",",$key);
		$click_heatmap_phone .= ",";
		$click_heatmap_phone .= $value;
		$click_heatmap_phone .= "],";
	}

	rtrim($click_heatmap_phone,",");
	$click_heatmap_phone .= "]";

	$analytics_data["click_heatmap_phone"] = $click_heatmap_phone;





	// Click Elements

	$click_elements = $database -> query("SELECT " . "visitor_click_elements" . " FROM analytics " . $analytics_filter_string . " AND NOT " . "visitor_click_elements" . "='' AND NOT " . "visitor_click_elements" . "='NaN' AND NOT " . "visitor_click_elements" . "='[]' AND " . "visitor_click_elements" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$click_elements_array = array();

	foreach ($click_elements as $elements)
	{
		$elements_buffer = explode(",",htmlspecialchars(ltrim(rtrim($elements,"]"),"[")));

		foreach ($elements_buffer as $key => $value)
		{
			array_push($click_elements_array,ltrim(rtrim($value,"\""),"\""));
		}
	}
 
	$click_elements_array = array_count_values($click_elements_array);
	arsort($click_elements_array);

	$analytics_data["click_elements"] = $click_elements_array;




	if (strpos($_POST["visitor_page_path"],"?") !== false)
	{
		$analytics_extension = "&321analytics=true";
	}
	else
	{
		$analytics_extension = "?321analytics=true";
	}











	// Mouse Heatmap

	$mouse_heatmap = $database -> query("SELECT " . "visitor_mouse_heatmap" . " FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Desktop' AND NOT " . "visitor_mouse_heatmap" . "='' AND NOT " . "visitor_mouse_heatmap" . "='NaN' AND " . "visitor_mouse_heatmap" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$mouse_heatmap_array = array();

	foreach ($mouse_heatmap as $heatmap)
	{
		$heatmap_buffer = json_decode($heatmap);

		foreach ($heatmap_buffer as $key => $value)
		{
			$key = str_replace("\"","",$key);

			if (array_key_exists($key,$mouse_heatmap_array))
			{
				$mouse_heatmap_array[$key] += $value;
			}
			else
			{
				$mouse_heatmap_array[$key] = $value;
			}
		}
	}

	$mouse_heatmap_array["0x0"] = 0;
 
	$mouse_heatmap = null;
	$mouse_heatmap = "[";

	foreach ($mouse_heatmap_array as $key => $value)
	{
		$mouse_heatmap .= "[";
		$mouse_heatmap .= str_replace("x",",",$key);
		$mouse_heatmap .= ",";
		$mouse_heatmap .= $value;
		$mouse_heatmap .= "],";
	}

	rtrim($mouse_heatmap,",");
	$mouse_heatmap .= "]";

	$analytics_data["mouse_heatmap"] = $mouse_heatmap;












	// Desktop

	// Scroll Heatmap

	$scroll_heatmap = $database -> query("SELECT " . "visitor_scroll_heatmap" . " FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Desktop' AND NOT " . "visitor_scroll_heatmap" . "='' AND NOT " . "visitor_scroll_heatmap" . "='NaN' AND " . "visitor_scroll_heatmap" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$heatmap_array = array();

	foreach ($scroll_heatmap as $heatmap)
	{
		$heatmap_buffer = json_decode($heatmap);

		foreach ($heatmap_buffer as $key => $value)
		{
			$key = intval(str_replace("\"","",$key));

			if (array_key_exists($key,$heatmap_array))
			{
				$heatmap_array[$key] += $value;
			}
			else
			{
				$heatmap_array[$key] = $value;
			}
		}
	}

	$scroll_heatmap = null;

	for ($i = 0; $i <= 100; $i++) 
	{ 
		$scroll_heatmap[floor($i/5)*5] += $heatmap_array[$i];
	}

	for ($i = 0; $i <= 20; $i++) { if (!array_key_exists($i*5, $scroll_heatmap)) { $scroll_heatmap[$i*5] = 0; } }

	$analytics_data["desktop_scroll_heatmap"] = $scroll_heatmap;


	// Max Scroll Heatmap

	$max_scroll = $database -> query("SELECT CAST((" . "visitor_max_scroll" . "/5) + 0.5 AS INT)*5 as scroll, COUNT(*) FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Desktop' AND NOT " . "visitor_max_scroll" . "='' AND NOT " . "visitor_max_scroll" . "='NaN' AND " . "visitor_max_scroll" . " IS NOT NULL GROUP BY scroll") -> fetchAll(PDO::FETCH_KEY_PAIR);

	for ($i = 0; $i <= 20; $i++) { if (!array_key_exists($i*5, $max_scroll)) { $max_scroll[$i*5] = 0; } }

	for ($i = 20; $i >= 1; $i--) { $max_scroll[($i-1)*5] += $max_scroll[$i*5];  }

	ksort($max_scroll);

	$analytics_data["desktop_max_scroll_heatmap"] = $max_scroll;












	// Tablet

	// Scroll Heatmap

	$scroll_heatmap = $database -> query("SELECT " . "visitor_scroll_heatmap" . " FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Tablet' AND NOT " . "visitor_scroll_heatmap" . "='' AND NOT " . "visitor_scroll_heatmap" . "='NaN' AND " . "visitor_scroll_heatmap" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$heatmap_array = array();

	foreach ($scroll_heatmap as $heatmap)
	{
		$heatmap_buffer = json_decode($heatmap);

		foreach ($heatmap_buffer as $key => $value)
		{
			$key = intval(str_replace("\"","",$key));

			if (array_key_exists($key,$heatmap_array))
			{
				$heatmap_array[$key] += $value;
			}
			else
			{
				$heatmap_array[$key] = $value;
			}
		}
	}

	$scroll_heatmap = null;

	for ($i = 0; $i <= 100; $i++) 
	{ 
		$scroll_heatmap[floor($i/5)*5] += $heatmap_array[$i];
	}

	for ($i = 0; $i <= 20; $i++) { if (!array_key_exists($i*5, $scroll_heatmap)) { $scroll_heatmap[$i*5] = 0; } }

	$analytics_data["tablet_scroll_heatmap"] = $scroll_heatmap;


	// Max Scroll Heatmap

	$max_scroll = $database -> query("SELECT CAST((" . "visitor_max_scroll" . "/5) + 0.5 AS INT)*5 as scroll, COUNT(*) FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Tablet' AND NOT " . "visitor_max_scroll" . "='' AND NOT " . "visitor_max_scroll" . "='NaN' AND " . "visitor_max_scroll" . " IS NOT NULL GROUP BY scroll") -> fetchAll(PDO::FETCH_KEY_PAIR);

	for ($i = 0; $i <= 20; $i++) { if (!array_key_exists($i*5, $max_scroll)) { $max_scroll[$i*5] = 0; } }

	for ($i = 20; $i >= 1; $i--) { $max_scroll[($i-1)*5] += $max_scroll[$i*5];  }

	ksort($max_scroll);

	$analytics_data["tablet_max_scroll_heatmap"] = $max_scroll;












	// Phone

	// Scroll Heatmap

	$scroll_heatmap = $database -> query("SELECT " . "visitor_scroll_heatmap" . " FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Phone' AND NOT " . "visitor_scroll_heatmap" . "='' AND NOT " . "visitor_scroll_heatmap" . "='NaN' AND " . "visitor_scroll_heatmap" . " IS NOT NULL") -> fetchAll(PDO::FETCH_COLUMN, 0);

	$heatmap_array = array();

	foreach ($scroll_heatmap as $heatmap)
	{
		$heatmap_buffer = json_decode($heatmap);

		foreach ($heatmap_buffer as $key => $value)
		{
			$key = intval(str_replace("\"","",$key));

			if (array_key_exists($key,$heatmap_array))
			{
				$heatmap_array[$key] += $value;
			}
			else
			{
				$heatmap_array[$key] = $value;
			}
		}
	}

	$scroll_heatmap = null;

	for ($i = 0; $i <= 100; $i++) 
	{ 
		$scroll_heatmap[floor($i/5)*5] += $heatmap_array[$i];
	}

	for ($i = 0; $i <= 20; $i++) { if (!array_key_exists($i*5, $scroll_heatmap)) { $scroll_heatmap[$i*5] = 0; } }

	$analytics_data["phone_scroll_heatmap"] = $scroll_heatmap;


	// Max Scroll Heatmap

	$max_scroll = $database -> query("SELECT CAST((" . "visitor_max_scroll" . "/5) + 0.5 AS INT)*5 as scroll, COUNT(*) FROM analytics " . $analytics_filter_string . " AND " . "visitor_device" . "='Phone' AND NOT " . "visitor_max_scroll" . "='' AND NOT " . "visitor_max_scroll" . "='NaN' AND " . "visitor_max_scroll" . " IS NOT NULL GROUP BY scroll") -> fetchAll(PDO::FETCH_KEY_PAIR);

	for ($i = 0; $i <= 20; $i++) { if (!array_key_exists($i*5, $max_scroll)) { $max_scroll[$i*5] = 0; } }

	for ($i = 20; $i >= 1; $i--) { $max_scroll[($i-1)*5] += $max_scroll[$i*5];  }

	ksort($max_scroll);

	$analytics_data["phone_max_scroll_heatmap"] = $max_scroll;




	if (strpos($_POST["visitor_page_path"],"?") !== false)
	{
		$analytics_extension = "&321analytics=true";
	}
	else
	{
		$analytics_extension = "?321analytics=true";
	}

?>




<?php include("app/resource/php/post/data/blocks/svg.php"); ?>












<div class="analytics_holder analytics_holder_heatmap center_horizontal">

	<div class="heatmap_content_box">
		<div class="analytics_scroll_holder center_horizontal" id="heatmap_container">
			<div class="analytics_scroll_holder_inner">
				<div class="analytics_scroll_holder_content">

					<div class="analytics_page_holder">
						<iframe scrolling="no" frameborder="0" class="analytics_page" src="<?php echo $application_domain . "/" . $_POST["visitor_page_path"] . $analytics_extension; ?>" page_width="1440"></iframe>
					</div>



					<div class="analytics_heatmap_holder" id="desktop_attention">

						<canvas id="desktop_overall" class="analytics_scroll_heatmap analytics_scroll_heatmap_blur"></canvas>

						<script style="display:none;">
							var canvas = document.getElementById("desktop_overall");
							var canvas_content = canvas.getContext("2d");
							
							<?php $heatmap = $analytics_data["desktop_scroll_heatmap"]; $heatmap_counter = 0; foreach ($heatmap as $scroll => $count) { $opacity = round(($count/max($heatmap)),2); $r = round((76 + ($opacity * 178)),0); $g = round((132 - ($opacity * 48)),0); $b = round((255 - ($opacity * 158)),0); $a = 0.4 + round($opacity*0.6,2); ?>

							canvas_content.fillStyle="rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,<?php echo $a; ?>)";
							canvas_content.fillRect(0,(<?php echo $heatmap_counter; ?> * (canvas.height * 0.0476)),(canvas.width),(canvas.height * 0.0476));

							<?php $heatmap_counter += 1; } ?>
						</script>

						<div class="analytics_scroll_heatmap_label_holder">
							<?php foreach ($heatmap as $scroll => $count) { ?>

							<div class="analytics_scroll_heatmap_label"><div class="analytics_scroll_heatmap_label_text"><?php echo round((($count/array_sum($heatmap))*100),0); ?>%</div></div>

							<?php } ?>
						</div>

					</div>



					<div class="analytics_heatmap_holder" id="desktop_scroll" style="display:none;">

						<canvas id="desktop_max" class="analytics_scroll_heatmap analytics_scroll_heatmap_blur"></canvas>

						<script style="display:none;">
							var canvas = document.getElementById("desktop_max");
							var canvas_content = canvas.getContext("2d");
							
							<?php $heatmap = $analytics_data["desktop_max_scroll_heatmap"]; $heatmap_counter = 0; foreach ($heatmap as $scroll => $count) { $opacity = round(($count/max($heatmap)),2); $r = round((76 + ($opacity * 178)),0); $g = round((132 - ($opacity * 48)),0); $b = round((255 - ($opacity * 158)),0); $a = 0.4 + round($opacity*0.6,2); ?>

							canvas_content.fillStyle="rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,<?php echo $a; ?>)";
							canvas_content.fillRect(0,(<?php echo $heatmap_counter; ?> * (canvas.height * 0.0476)),(canvas.width),(canvas.height * 0.0476));

							<?php $heatmap_counter += 1; } ?>
						</script>
						
						<div class="analytics_scroll_heatmap_label_holder">
							<?php foreach ($heatmap as $scroll => $count) { ?>

							<div class="analytics_scroll_heatmap_label"><div class="analytics_scroll_heatmap_label_text"><?php echo round((($count/max($heatmap))*100),0); ?>%</div></div>

							<?php } ?>
						</div>

					</div>



					<div class="analytics_heatmap_holder" id="tablet_attention" style="display:none;">

						<canvas id="tablet_overall" class="analytics_scroll_heatmap analytics_scroll_heatmap_blur"></canvas>

						<script style="display:none;">
							var canvas = document.getElementById("tablet_overall");
							var canvas_content = canvas.getContext("2d");
							
							<?php $heatmap = $analytics_data["tablet_scroll_heatmap"]; $heatmap_counter = 0; foreach ($heatmap as $scroll => $count) { $opacity = round(($count/max($heatmap)),2); $r = round((76 + ($opacity * 178)),0); $g = round((132 - ($opacity * 48)),0); $b = round((255 - ($opacity * 158)),0); $a = 0.4 + round($opacity*0.6,2); ?>

							canvas_content.fillStyle="rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,<?php echo $a; ?>)";
							canvas_content.fillRect(0,(<?php echo $heatmap_counter; ?> * (canvas.height * 0.0476)),(canvas.width),(canvas.height * 0.0476));

							<?php $heatmap_counter += 1; } ?>
						</script>
						
						<div class="analytics_scroll_heatmap_label_holder">
							<?php foreach ($heatmap as $scroll => $count) { ?>

							<div class="analytics_scroll_heatmap_label"><div class="analytics_scroll_heatmap_label_text"><?php echo round((($count/array_sum($heatmap))*100),0); ?>%</div></div>

							<?php } ?>
						</div>

					</div>



					<div class="analytics_heatmap_holder" id="tablet_scroll" style="display:none;">

						<canvas id="tablet_max" class="analytics_scroll_heatmap analytics_scroll_heatmap_blur"></canvas>

						<script style="display:none;">
							var canvas = document.getElementById("tablet_max");
							var canvas_content = canvas.getContext("2d");
							
							<?php $heatmap = $analytics_data["tablet_max_scroll_heatmap"]; $heatmap_counter = 0; foreach ($heatmap as $scroll => $count) { $opacity = round(($count/max($heatmap)),2); $r = round((76 + ($opacity * 178)),0); $g = round((132 - ($opacity * 48)),0); $b = round((255 - ($opacity * 158)),0); $a = 0.4 + round($opacity*0.6,2); ?>

							canvas_content.fillStyle="rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,<?php echo $a; ?>)";
							canvas_content.fillRect(0,(<?php echo $heatmap_counter; ?> * (canvas.height * 0.0476)),(canvas.width),(canvas.height * 0.0476));

							<?php $heatmap_counter += 1; } ?>
						</script>
						
						<div class="analytics_scroll_heatmap_label_holder">
							<?php foreach ($heatmap as $scroll => $count) { ?>

							<div class="analytics_scroll_heatmap_label"><div class="analytics_scroll_heatmap_label_text"><?php echo round((($count/max($heatmap))*100),0); ?>%</div></div>

							<?php } ?>
						</div>

					</div>



					<div class="analytics_heatmap_holder" id="phone_attention" style="display:none;">

						<canvas id="phone_overall" class="analytics_scroll_heatmap analytics_scroll_heatmap_blur"></canvas>

						<script style="display:none;">
							var canvas = document.getElementById("phone_overall");
							var canvas_content = canvas.getContext("2d");
							
							<?php $heatmap = $analytics_data["phone_scroll_heatmap"]; $heatmap_counter = 0; foreach ($heatmap as $scroll => $count) { $opacity = round(($count/max($heatmap)),2); $r = round((76 + ($opacity * 178)),0); $g = round((132 - ($opacity * 48)),0); $b = round((255 - ($opacity * 158)),0); $a = 0.4 + round($opacity*0.6,2); ?>

							canvas_content.fillStyle="rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,<?php echo $a; ?>)";
							canvas_content.fillRect(0,(<?php echo $heatmap_counter; ?> * (canvas.height * 0.0476)),(canvas.width),(canvas.height * 0.0476));

							<?php $heatmap_counter += 1; } ?>
						</script>
						
						<div class="analytics_scroll_heatmap_label_holder">
							<?php foreach ($heatmap as $scroll => $count) { ?>

							<div class="analytics_scroll_heatmap_label"><div class="analytics_scroll_heatmap_label_text"><?php echo round((($count/array_sum($heatmap))*100),0); ?>%</div></div>

							<?php } ?>
						</div>

					</div>



					<div class="analytics_heatmap_holder" id="phone_scroll" style="display:none;">

						<canvas id="phone_max" class="analytics_scroll_heatmap analytics_scroll_heatmap_blur"></canvas>

						<script style="display:none;">
							var canvas = document.getElementById("phone_max");
							var canvas_content = canvas.getContext("2d");
							
							<?php $heatmap = $analytics_data["phone_max_scroll_heatmap"]; $heatmap_counter = 0; foreach ($heatmap as $scroll => $count) { $opacity = round(($count/max($heatmap)),2); $r = round((76 + ($opacity * 178)),0); $g = round((132 - ($opacity * 48)),0); $b = round((255 - ($opacity * 158)),0); $a = 0.4 + round($opacity*0.6,2); ?>

							canvas_content.fillStyle="rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,<?php echo $a; ?>)";
							canvas_content.fillRect(0,(<?php echo $heatmap_counter; ?> * (canvas.height * 0.0476)),(canvas.width),(canvas.height * 0.0476));

							<?php $heatmap_counter += 1; } ?>
						</script>
						
						<div class="analytics_scroll_heatmap_label_holder">
							<?php foreach ($heatmap as $scroll => $count) { ?>

							<div class="analytics_scroll_heatmap_label"><div class="analytics_scroll_heatmap_label_text"><?php echo round((($count/max($heatmap))*100),0); ?>%</div></div>

							<?php } ?>
						</div>

					</div>



					<div class="analytics_heatmap_holder" id="desktop_move" style="display:none;">

						<canvas id="mouse_attention_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["mouse_attention_heatmap"] = <?php echo $analytics_data["mouse_heatmap"]; ?>;
							heatmap_max["mouse_attention_heatmap"] = <?php echo max($mouse_heatmap_array); ?>;
						</script>

					</div>




					<div class="analytics_heatmap_holder" id="desktop_activity" style="display:none;">

						<canvas id="desktop_click_region_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["desktop_click_region_heatmap"] = <?php echo $analytics_data["click_heatmap_desktop"]; ?>;
							heatmap_max["desktop_click_region_heatmap"] = <?php echo max($heatmap_desktop_array); ?>;
						</script>

					</div>



					<!-- <div class="analytics_heatmap_holder" id="desktop_click" style="display:none;">

						<canvas id="desktop_click_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["desktop_click_heatmap"] = <?php echo $analytics_data["click_heatmap_desktop"]; ?>;
							heatmap_max["desktop_click_heatmap"] = <?php echo max($heatmap_desktop_array); ?>;
						</script>

					</div> -->



					<div class="analytics_heatmap_holder" id="tablet_activity" style="display:none;">

						<canvas id="tablet_click_region_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["tablet_click_region_heatmap"] = <?php echo $analytics_data["click_heatmap_tablet"]; ?>;
							heatmap_max["tablet_click_region_heatmap"] = <?php echo max($heatmap_tablet_array); ?>;
						</script>

					</div>



					<!-- <div class="analytics_heatmap_holder" id="tablet_click" style="display:none;">

						<canvas id="tablet_click_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["tablet_click_heatmap"] = <?php echo $analytics_data["click_heatmap_tablet"]; ?>;
							heatmap_max["tablet_click_heatmap"] = <?php echo max($heatmap_tablet_array); ?>;
						</script>

					</div> -->



					<div class="analytics_heatmap_holder" id="phone_activity" style="display:none;">

						<canvas id="phone_click_region_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["phone_click_region_heatmap"] = <?php echo $analytics_data["click_heatmap_phone"]; ?>;
							heatmap_max["phone_click_region_heatmap"] = <?php echo max($heatmap_phone_array); ?>;
						</script>

					</div>



					<!-- <div class="analytics_heatmap_holder" id="phone_click" style="display:none;">

						<canvas id="phone_click_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["phone_click_heatmap"] = <?php echo $analytics_data["click_heatmap_phone"]; ?>;
							heatmap_max["phone_click_heatmap"] = <?php echo max($heatmap_phone_array); ?>;
						</script>

					</div> -->



				</div>
			</div>
		</div>
	</div>
</div>

<div class="analytics_heatmap_switch analytics_heatmap_switch_quart analytics_heatmap_switch_desktop center_horizontal">
	<!-- <div class="button" target-heatmap="desktop_move" target-width="1440">Desktop Move</div> -->
	<div class="button" target-heatmap="desktop_attention" target-width="1440"><div class="label center_horizontal">Attention</div></div>
	<div class="button" target-heatmap="desktop_scroll" target-width="1440"><div class="label center_horizontal">Scroll</div></div>
	<div class="button" target-heatmap="desktop_move" target-width="1440"><div class="label center_horizontal">Mouse</div></div>
	<div class="button" target-heatmap="desktop_activity" target-width="1440"><div class="label center_horizontal">Clicks</div></div>
	<!-- <div class="button" target-heatmap="desktop_click" target-width="1440">Desktop Clicks</div> -->
</div>

<div class="analytics_heatmap_switch analytics_heatmap_switch_tablet center_horizontal">
	<div class="button" target-heatmap="tablet_attention" target-width="770"><div class="label center_horizontal">Attention</div></div>
	<div class="button" target-heatmap="tablet_scroll" target-width="770"><div class="label center_horizontal">Scroll</div></div>
	<div class="button" target-heatmap="tablet_activity" target-width="770"><div class="label center_horizontal">Clicks</div></div>
	<!-- <div class="button" target-heatmap="tablet_click" target-width="770">Tablet Taps</div> -->
</div>

<div class="analytics_heatmap_switch analytics_heatmap_switch_phone center_horizontal">
	<div class="button" target-heatmap="phone_attention" target-width="380"><div class="label center_horizontal">Attention</div></div>
	<div class="button" target-heatmap="phone_scroll" target-width="380"><div class="label center_horizontal">Scroll</div></div>
	<div class="button" target-heatmap="phone_activity" target-width="380"><div class="label center_horizontal">Clicks</div></div>
	<!-- <div class="button" target-heatmap="phone_click" target-width="380">Phone Taps</div> -->
</div>



<!-- <div class="analytics_holder center_horizontal">

	<div class="analytics_box">
		<div class="title">Elements</div>
		<?php $list_array = $analytics_data["click_elements"]; include("app/resource/php/post/data/charts/list.php"); ?>
	</div>

</div> -->
