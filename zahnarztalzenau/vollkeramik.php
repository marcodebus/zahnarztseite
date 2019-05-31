
<?php
include('./inc/config.php');
$Title = lang('VKTitle');
$Ueber = lang('VKUeber');
$Side = lang('VKSidebar');
$Meta = lang('VKMETADescr');
$FixContact = "";


	$Seite= "vollkeramik.php";
	//$Behandlung = true;


	include('./inc/head.php');
	include('./inc/header.php');
?>


     <section class="background-11">
                <div class="container">

					<?php include('./inc/grauerBalken.php'); ?>

               <div class="row no-gutters">
               <div class="col-lg-6 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div data-zanim-timeline="{}" data-zanim-trigger="scroll">
							<img  style="background-color:white; margin:10px; border-radius:5%;"	width="100%" src="<?php echo lang('VKBild1');?>">
						 </div>
                     </div>
				</div>
				<div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                       <h2 class="fs-2"><br><?php echo lang('VKUeber1');?></h2>


							<?php echo lang('VKText1');?>
                        </div>
                    </div>
					 <?php include('./inc/termin.php');?>
				</div>

            </section>




<?php

	include('./inc/footer.php');
?>
