 

<div class="analytics_list">

	<?php $total = array_sum($list_array); $counter = 0; foreach ($list_array as $key => $value) { if ($counter < 3) { ?>
				
	<div class="item">
		<div class="title"><?php echo $key; ?><span><?php echo $value; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo round((($value/$total)*100),0); ?>%</span></div>
		<div class="bar_holder">
			<div class="bar" style="width:<?php echo (($value/$total)*100); ?>%;"><div class="background"></div><div class="dot"></div></div>
		</div>
	</div>

	<?php } else { break; } $counter++; } ?>

</div>


<div class="analytics_list analytics_list_more">

	<?php $counter = 0; foreach ($list_array as $key => $value) { if ($counter >= 3 && $counter < 25) { ?>
				
	<div class="item">
		<div class="title"><?php echo $key; ?><span><?php echo $value; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo round((($value/$total)*100),0); ?>%</span></div>
		<div class="bar_holder">
			<div class="bar" style="width:<?php echo (($value/$total)*100); ?>%;"><div class="background"></div><div class="dot"></div></div>
		</div>
	</div>

	<?php } else { if ($counter >= 25) { break; } } $counter++; } ?>

</div>


<div class="analytics_list_button"></div>

 