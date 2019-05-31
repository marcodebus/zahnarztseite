<?php
$myTZ = 'Europe/Berlin';  
$time_format = 'H:i '; 
$latitude  = 49.9648; //North
$longitude = 9.1647; //West
$zenith = 90+(50/60); // True sunrise/sunset
// Set timezone in PHP5/PHP4 manner
if (!function_exists('date_default_timezone_set')) {
        putenv("TZ=" . $myTZ);
} else {
        date_default_timezone_set("$myTZ");
}
	$tzoffset = date("Z")/60 / 60;
	$dayornight = day_or_night();
	$sunrise = date_sunrise(time(), SUNFUNCS_RET_STRING, $latitude, $longitude, $zenith, $tzoffset);
	$sunrise_time = date($time_format, strtotime(date("Y-m-d") . ' '. $sunrise));
	$sunset = date_sunset(time(), SUNFUNCS_RET_STRING, $latitude, $longitude, $zenith, $tzoffset);
	$sunset_time = date($time_format, strtotime(date("Y-m-d") . ' '. $sunset));

		if($dayornight == 'night') {
			  $hintergrundBild = "./assets/bilder/sliderNacht.jpg";
		}else{
			 $hintergrundBild = "./assets/bilder/sliderTag.jpg";
		}


function day_or_night() {
   global $latitude, $longitude, $tzoffset, $zenith;

   $sunrise_epoch = date_sunrise(time(), SUNFUNCS_RET_TIMESTAMP, $latitude, $longitude, $zenith, $tzoffset);
   $sunset_epoch  = date_sunset(time(), SUNFUNCS_RET_TIMESTAMP, $latitude, $longitude, $zenith, $tzoffset);
   $time_epoch = time();
   if ($time_epoch >= $sunset_epoch or $time_epoch <= $sunrise_epoch) {
          return 'night';
   } else {
          return 'day';
   }
}
?>

<div class="">
	  		<div style="
						background: url(<?php echo $hintergrundBild;?>) no-repeat center; 
  						background-size: cover;
 						height: 500px;
						position: relative;
 						">
				<!--<p id="SliderBild"></p>-->
				</div>
			</div>











<script>
	/*window.onload = function(){
	
	if(screen.width < 800){
    	var x = "<img id=\"slide\"  style=\" position:absolute; left:0%; bottom:0;\" height=\"60%\"src=\"./assets/bilder/GRUPPENBILD.png\">";

  document.getElementById("SliderBild").innerHTML = x;
    }else{
    
   		var x = "<img id=\"slide\"  style=\" position:absolute; left:40%; bottom:0;\" height=\"400px\"src=\"./assets/bilder/GRUPPENBILD.png\">";
  document.getElementById("SliderBild").innerHTML = x;
    }
  
}*/
</script>

		




