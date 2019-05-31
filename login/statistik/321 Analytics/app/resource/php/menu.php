<div class="analytics_menu center_horizontal">

	<div class="menu_title" style="margin:10px 0 10px 0;">Metrics</div>
	
	<div class="analytics_metric" data="live"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/live.png');"></div></div>Live</div></div>
	
	<div class="analytics_metric" data="traffic"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/traffic.png');"></div></div>Traffic</div></div>
	
	<div class="analytics_metric" data="referrers"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/referrers.png');"></div></div>Referrers</div></div>
	
	<div class="analytics_metric" data="geography"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/geography.png');"></div></div>Geography</div></div>
	
	<div class="analytics_metric" data="technology"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/technology.png');"></div></div>Technology</div></div>
	
	<div class="analytics_metric" data="pages"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/pages.png');"></div></div>Pages</div></div>
	
	<div class="analytics_metric" data="behaviour"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/behaviour.png');"></div></div>Behaviour</div></div>
	
	<div class="analytics_metric" data="interaction"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/interaction.png');"></div></div>Interaction</div></div>
	
	<!-- <div class="analytics_metric" data="records"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/records.png');"></div></div>Records</div></div> -->




	<div class="menu_title" style="margin:40px 0 10px 0;">Filters</div>


	<form class="analytics_filters center_horizontal" id="analytics_filters">




	<div class="analytics_filters_box">

		<select class="analytics_filter" name="visitor_page_path" id="visitor_page_path">
			<option value="all">All Pages</option>

			<?php

				$pages = $database -> query("SELECT " . "visitor_page_path" . ", COUNT(" . "visitor_page_path" . ") FROM analytics GROUP BY " . "visitor_page_path" . " ORDER BY COUNT(*) DESC LIMIT 100") -> fetchAll();

				foreach ($pages as $page)
				{
					if ($page["visitor_page_path"] != "")
					{
						echo "<option value=\"" . $page["visitor_page_path"] . "\">" . $page["visitor_page_path"] . "</option>";
					}
				}

			?>

		</select>

	</div>




	<div class="analytics_filters_box">

		<select class="analytics_filter top_select" name="visitor_enter_year" id="visitor_enter_year">
			<option value="2018" <?php if (date("Y") == "2018") {echo "selected";} ?>>2018</option>
			<option value="2019" <?php if (date("Y") == "2019") {echo "selected";} ?>>2019</option>
			<option value="2020" <?php if (date("Y") == "2020") {echo "selected";} ?>>2020</option>
			<option value="2021" <?php if (date("Y") == "2021") {echo "selected";} ?>>2021</option>
			<option value="2022" <?php if (date("Y") == "2022") {echo "selected";} ?>>2022</option>
			<option value="2023" <?php if (date("Y") == "2023") {echo "selected";} ?>>2023</option>
			<option value="2024" <?php if (date("Y") == "2024") {echo "selected";} ?>>2024</option>
			<option value="2025" <?php if (date("Y") == "2025") {echo "selected";} ?>>2025</option>
		</select>

		<select class="analytics_filter" name="visitor_enter_month" id="visitor_enter_month">
			<option value="all">All Months</option>
			<option value="01">January</option>
			<option value="02">February</option>
			<option value="03">March</option>
			<option value="04">April</option>
			<option value="05">May</option>
			<option value="06">June</option>
			<option value="07">July</option>
			<option value="08">August</option>
			<option value="09">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select>

		<select class="analytics_filter" name="visitor_enter_day" id="visitor_enter_day">
			<option value="all">All Days</option>
			<option value="01">1</option>
			<option value="02">2</option>
			<option value="03">3</option>
			<option value="04">4</option>
			<option value="05">5</option>
			<option value="06">6</option>
			<option value="07">7</option>
			<option value="08">8</option>
			<option value="09">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>

		<select class="analytics_filter" name="visitor_enter_hour" id="visitor_enter_hour">
			<option value="all">All Times</option>
			<option value="00">00:00</option>
			<option value="01">01:00</option>
			<option value="02">02:00</option>
			<option value="03">03:00</option>
			<option value="04">04:00</option>
			<option value="05">05:00</option>
			<option value="06">06:00</option>
			<option value="07">07:00</option>
			<option value="08">08:00</option>
			<option value="09">09:00</option>
			<option value="10">10:00</option>
			<option value="11">11:00</option>
			<option value="12">12:00</option>
			<option value="13">13:00</option>
			<option value="14">14:00</option>
			<option value="15">15:00</option>
			<option value="16">16:00</option>
			<option value="17">17:00</option>
			<option value="18">18:00</option>
			<option value="19">19:00</option>
			<option value="20">20:00</option>
			<option value="21">21:00</option>
			<option value="22">22:00</option>
			<option value="23">23:00</option>
		</select>

		<select class="analytics_filter" name="visitor_enter_weekday" id="visitor_enter_weekday">
			<option value="all">All Weekdays</option>
			<option value="1">Monday</option>
			<option value="2">Tuesday</option>
			<option value="3">Wendnesday</option>
			<option value="4">Thursday</option>
			<option value="5">Friday</option>
			<option value="6">Saturday</option>
			<option value="0">Sunday</option>
		</select>

	</div>




	<div class="analytics_filters_box" style="display:none;">

		<select class="analytics_filter" name="visitor_language" id="visitor_language">
			<option value="all">All Languages</option>

			<?php

				$languages = $database -> query("SELECT " . "visitor_language" . ", COUNT(" . "visitor_language" . ") FROM analytics GROUP BY " . "visitor_language" . " ORDER BY COUNT(*) DESC LIMIT 100") -> fetchAll();

				foreach ($languages as $language)
				{
					echo "<option value=\"" . $language["visitor_language"] . "\">" . $language["visitor_language"] . "</option>";
				}

			?>
		</select>

		<select class="analytics_filter" name="visitor_country" id="visitor_country">
			<option value="all">All Countries</option>

			<?php

				$countries = $database -> query("SELECT " . "visitor_country" . ", COUNT(" . "visitor_country" . ") FROM analytics GROUP BY " . "visitor_country" . " ORDER BY COUNT(*) DESC LIMIT 100") -> fetchAll();

				foreach ($countries as $country)
				{
					echo "<option value=\"" . $country["visitor_country"] . "\">" . $country["visitor_country"] . "</option>";
				}

			?>
		</select>

		<select class="analytics_filter" name="visitor_region" id="visitor_region">
			<option value="all">All Regions</option>

			<?php

				$regions = $database -> query("SELECT " . "visitor_region" . ", COUNT(" . "visitor_region" . ") FROM analytics GROUP BY " . "visitor_region" . " ORDER BY COUNT(*) DESC LIMIT 100") -> fetchAll();

				foreach ($regions as $region)
				{
					echo "<option value=\"" . $region["visitor_region"] . "\">" . $region["visitor_region"] . "</option>";
				}

			?>
		</select>

		<select class="analytics_filter" name="visitor_city" id="visitor_city">
			<option value="all">All Cities</option>

			<?php

				$cities = $database -> query("SELECT " . "visitor_city" . ", COUNT(" . "visitor_city" . ") FROM analytics GROUP BY " . "visitor_city" . " ORDER BY COUNT(*) DESC LIMIT 100") -> fetchAll();

				foreach ($cities as $city)
				{
					echo "<option value=\"" . $city["visitor_city"] . "\">" . $city["visitor_city"] . "</option>";
				}

			?>
		</select>

	</div>




	<div class="analytics_filters_box" style="display:none;">

		<select class="analytics_filter" name="visitor_referrer_type" id="visitor_referrer_type">
			<option value="all">All Referrers</option>
			<option value="direct">Direct</option>
			<option value="website">Websites</option>
			<option value="search">Search</option>
			<option value="social">Social</option>
		</select>

		<select class="analytics_filter" name="visitor_referrer_domain" id="visitor_referrer_domain">
			<option value="all">All Websites</option>

			<?php

				$websites = $database -> query("SELECT " . "visitor_referrer_domain" . ", COUNT(" . "visitor_referrer_domain" . ") FROM analytics WHERE " . "visitor_referrer_type" . "='website' GROUP BY " . "visitor_referrer_domain" . " ORDER BY COUNT(*) DESC LIMIT 100") -> fetchAll();

				foreach ($websites as $website)
				{
					if ($website["visitor_referrer_domain"] != "")
					{
						echo "<option value=\"" . $website["visitor_referrer_domain"] . "\">" . $website["visitor_referrer_domain"] . "</option>";
					}
				}

			?>

		</select>

		<select class="analytics_filter" name="visitor_referrer_name" id="visitor_referrer_name">
			<option value="all">All Search Engines</option>
			<option value="google">Google</option>
			<option value="yahoo">Yahoo</option>
			<option value="bing">Bing</option>
			<option value="baidu">Baidu</option>
			<option value="aol">Aol</option>
		</select>

		<select class="analytics_filter" name="visitor_referrer_name" id="visitor_referrer_name">
			<option value="all">All Social Platforms</option>
			<option value="facebook">Facebook</option>
			<option value="twitter">Twitter</option>
			<option value="youtube">YouTube</option>
			<option value="instagram">Instagram</option>
			<option value="snapchat">Snapchat</option>
			<option value="reddit">Reddit</option>
			<option value="linkedin">LinkedIn</option>
			<option value="xing">Xing</option>
			<option value="pinterest">Pinterest</option>
			<option value="tumblr">Tumblr</option>
			<option value="vine">Vine</option>
			<option value="meetup">Meetup</option>
			<option value="quora">Quora</option>
		</select>

	</div>




	<div class="analytics_filters_box" style="display:none;">

		<select class="analytics_filter" name="visitor_device" id="visitor_device">
			<option value="all">All Devices</option>
			<option value="Desktop">Desktop</option>
			<option value="Tablet">Tablet</option>
			<option value="Phone">Phone</option>
		</select>

		<select class="analytics_filter" name="visitor_os" id="visitor_os">
			<option value="all">All Operating Systems</option>
			<option value="Windows">Windows</option>
			<option value="Mac OS">Mac OS</option>
			<option value="iOS">iOS</option>
			<option value="Android">Android</option>
			<option value="Linux">Linux</option>
		</select>

		<select class="analytics_filter" name="visitor_browser" id="visitor_browser">
			<option value="all">All Browsers</option>
			<option value="Chrome">Chrome</option>
			<option value="Firefox">Firefox</option>
			<option value="Safari">Safari</option>
			<option value="Internet Explorer">Internet Explorer</option>
			<option value="Edge">Edge</option>
		</select>

		<select class="analytics_filter" name="visitor_resolution" id="visitor_resolution">
			<option value="all">All Resolutions</option>

			<?php

				$resolutions = $database -> query("SELECT " . "visitor_resolution" . ", COUNT(" . "visitor_resolution" . ") FROM analytics GROUP BY " . "visitor_resolution" . " ORDER BY COUNT(*) DESC LIMIT 100") -> fetchAll();

				foreach ($resolutions as $resolution)
				{
					echo "<option value=\"" . $resolution["visitor_resolution"] . "\">" . $resolution["visitor_resolution"] . "</option>";
				}

			?>

		</select>

	</div>

</form>

	<div class="menu_title" style="margin:40px 0 10px 0;">More</div>
	
	<div class="analytics_button" data="code"><div class="label center_total"><div class="icon"><div class="image" style="background-image:url('<?php echo $application_url; ?>/app/resource/img/code.png');"></div></div>Analytics Code</div></div>


</div>