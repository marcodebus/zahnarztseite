<div class="analytics_pie_chart_background center_horizontal"></div>

<?php

	if ($percentage < 50)
	{
		$x_point = cos((180*($percentage/50)) / 180 * 3.141) * 50 + 50; 
		$y_point = sin((180*($percentage/50)) / 180 * 3.141) * 50 + 50;
 
?>

<svg class="analytics_pie_chart center_horizontal" viewBox="0 0 100 100" preserveAspectRatio="none" vector-effect="non-scaling-stroke" style="transform:rotate(-90deg);-webkit-transform:rotate(-90deg);">

	<path d="M50,50 L100,50 A50,50 0 0,1 <?php echo  $x_point . ',' . $y_point; ?> z" style="fill:url('#gradient_pie_less'); stroke-width:0;"/>

</svg>

<?php

	}
	else
	{
		$x_point = cos((180*(($percentage-50)/50)) / 180 * 3.141) * 50 + 50; 
		$y_point = sin((180*(($percentage-50)/50)) / 180 * 3.141) * 50 + 50;

?>

<svg class="analytics_pie_chart center_horizontal" viewBox="0 0 100 100" preserveAspectRatio="none" vector-effect="non-scaling-stroke" style="transform:rotate(90deg);-webkit-transform:rotate(90deg);">

	<path d="M50,50 L0,50 A50,50 0 0,1 100,50 z" style="fill:url('#gradient_pie_more'); stroke-width: 0"/>
	<path d="M50,50 L100,50 A50,50 0 0,1 <?php echo  $x_point . ',' . $y_point; ?> z" style="fill:url('#gradient_pie_more'); stroke-width:0;"/>

</svg>

<?php

	}

?>

<div class="analytics_pie_chart_mask center_horizontal"><?php echo $percentage; ?>%</div>