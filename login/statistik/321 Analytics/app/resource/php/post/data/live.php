<?php



	// Visitors	

	$visitors = $database -> query("SELECT * FROM analytics WHERE visitor_enter_id>'" . date("YmdHis",strtotime("-3 minutes")) . "' GROUP BY visitor_visitor_id") -> fetchAll(); 

	// Analytics SVG

	include("app/resource/php/post/data/blocks/svg.php");

?>





<?php

	$marker_data = "[";
	foreach ($visitors as $visitor) { if ($visitor["visitor_lat"] != "" && $visitor["visitor_lat"] != "NaN" && $visitor["visitor_lon"] != "" && $visitor["visitor_lon"] != "NaN") { $marker_data .= "{latLng: [" . $visitor["visitor_lat"] . "," . $visitor["visitor_lon"] . "], name: ''},"; } }
	$map_markers = rtrim($marker_data,",") . "]";

?> 

<div class="analytics_holder center_horizontal">

	<div class="analytics_box">

	    <div class="analytics_map">
			<div class="map dynamic_live_map" id="live_geography"></div>
		</div>

	    <script style="display:none;">

	    	map_countries["live_geography"] = {};  
			map_markers["live_geography"] = <?php echo $map_markers; ?>;  

	    </script>
	</div>

</div>  





<!-- Current online timeline -->

<?php $visitor_timeline = array(); $now = date("d.m.Y, H:i:s"); for ($i = 0; $i < 60; $i++) { $visitor_timeline[$i] = 0; } foreach ($visitors as $visitor) { $visitor_timeline[intval(floor((strtotime($now) - strtotime($visitor["visitor_enter_timestamp"]))/3))] += 1; } ?>

<div class="analytics_holder center_horizontal">

	<div class="analytics_box">
		<div class="title">Active visitors in the last 3 minutes</div> 
		<div class="value"><?php echo count($visitors); ?></div>

		<div class="analytics_live">
			<div class="chart">

				<div class="legend">
					<div class="item"><div class="label">Jetzt</div></div>
					<div class="item"><div class="label">- 00:30</div></div>
					<div class="item"><div class="label">- 01:00</div></div>
					<div class="item"><div class="label">- 01:30</div></div>
					<div class="item"><div class="label">- 02:00</div></div>
					<div class="item"><div class="label">- 02:30</div></div>
				</div>

				<div class="items">

					<?php foreach ($visitor_timeline as $time => $count) { ?>

						<div class="item"><div class="bar" style="height:<?php echo floor(($count/max($visitor_timeline))*100); ?>%;"><div class="background"></div><div class="dot"></div></div></div>

					<?php } ?>

				</div>

			</div>
		</div>

	</div>

</div>






<div class="analytics_holder center_horizontal">


	<?php $live_data_key = "visitor_language"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_third analytics_box_more">

		<div class="title">Sprache</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>


	<?php $live_data_key = "visitor_country"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_third analytics_box_more">

		<div class="title">Länder</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>


	<?php $live_data_key = "visitor_city"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_third analytics_box_more">

		<div class="title">Städte</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>

</div>





<div class="analytics_holder center_horizontal">


	<?php $live_data_key = "visitor_page_path"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_half analytics_box_more">

		<div class="title">Seiten</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>


	<?php $live_data_key = "visitor_referrer_domain"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_half analytics_box_more">
		
		<div class="title">Quellen</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>

</div>






<div class="analytics_holder center_horizontal">


	<?php $live_data_key = "visitor_device"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_third analytics_box_more">

		<div class="title">Geräte</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>


	<?php $live_data_key = "visitor_os"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_third analytics_box_more">

		<div class="title">Betriebssysteme</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>


	<?php $live_data_key = "visitor_browser"; $live_data_array = array(); foreach ($visitors as $visitor) { if (array_key_exists($visitor[$live_data_key],$live_data_array)) { $live_data_array[$visitor[$live_data_key]] += 1; } else { $live_data_array[$visitor[$live_data_key]] = 1; } } arsort($live_data_array); ?>

	<div class="analytics_box analytics_box_third analytics_box_more">

		<div class="title">Web Browser</div>
		<div class="value"><?php echo array_keys($live_data_array)[0]; ?></div>

		<?php $list_array = $live_data_array; include("app/resource/php/post/data/charts/list.php"); ?>

	</div>

</div>