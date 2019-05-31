
<?php
include('./inc/config.php');
$Title = lang('PuPTitle');
$Ueber = lang('PuPUeber');
$Side = lang('PuPSidebar');
$Meta = lang('PuPMETADescr');
$Kontakttext = "Wenn sie an einer Zahnfleischerkrankung, Parodontitis oder Zahnfleischbluten leiden, rufen Sie uns bitte an! Wir helfen ihnen";


	$Seite= "parodontitis-zahnfleischentzuendung.php";
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
                     	<div align="center">

						<div align="center" style="padding-top:40px" >
						 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php echo lang('PuPBild1'); ?>">
						</div>
						 </div>
                     </div>
				</div>
				<div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> 						</div>
                       <h2 class="fs-2"><br><?php echo lang('PuPUeber1'); ?></h2>
					   <p>
						<?php echo lang('PuPText1'); ?>
                </div>





				  <div class="col-lg-12 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> 						</div>
                       <h2 class="fs-2"><br><?php echo lang('PuPUeber2'); ?></h2>
					  <?php echo lang('PuPText2'); ?>
				  </div>
                        </div>
					 <?php include('./inc/termin.php');?>
				</div>
            </section>




<?php

	include('./inc/footer.php');
?>
