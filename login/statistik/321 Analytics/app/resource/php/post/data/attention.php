<?php




	if (isset($_POST["visitor_page_path"]) && $_POST["visitor_page_path"] != "all")
	{











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


<?php 

	// Analytics SVG

	include("app/content/analytics/blocks/svg.php");

?>







<div class="analytics_holder analytics_holder_heatmap center_horizontal">

	<div class="heatmap_content_box">
		<div class="analytics_scroll_holder center_horizontal" id="heatmap_container">
			<div class="analytics_scroll_holder_inner">
				<div class="analytics_scroll_holder_content">

					<div class="analytics_page_holder">
						<iframe scrolling="no" frameborder="0" class="analytics_page" src="<?php echo $application_domain . "/" . $_POST["visitor_page_path"] . $analytics_extension; ?>" page_width="1440"></iframe>
					</div>



					<div class="analytics_heatmap_holder" id="desktop_move">

						<canvas id="mouse_attention_heatmap" class="analytics_scroll_heatmap analytics_dynamic_heatmap"></canvas>
						<script>
							heatmap_data["mouse_attention_heatmap"] = <?php echo $analytics_data["mouse_heatmap"]; ?>;
							heatmap_max["mouse_attention_heatmap"] = <?php echo max($mouse_heatmap_array); ?>;
						</script>

					</div>



					<div class="analytics_heatmap_holder" id="desktop_attention" style="display:none;">

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


				</div>
			</div>
		</div>
	</div>
</div>

<div class="analytics_heatmap_switch analytics_heatmap_attention_switch center_horizontal">
	<div class="button" target-heatmap="desktop_move" target-width="1440">Desktop Move</div>
	<div class="button" target-heatmap="desktop_attention" target-width="1440">Desktop Attention</div>
	<div class="button" target-heatmap="desktop_scroll" target-width="1440">Desktop Scroll</div>
	<div class="button" target-heatmap="tablet_attention" target-width="770">Tablet Attention</div>
	<div class="button" target-heatmap="tablet_scroll" target-width="770">Tablet Scroll</div>
	<div class="button" target-heatmap="phone_attention" target-width="380">Phone Attention</div>
	<div class="button" target-heatmap="phone_scroll" target-width="380">Phone Scroll</div>
</div>




<?php } else { ?>

<div class="analytics_box analytics_box_medium analytics_notification">
	<div class="icon"><div class="image"></div></div>
	Please select a page in the filters
</div>

<?php } ?>
