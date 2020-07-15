
<?php
include('./inc/config.php');
$Title = lang('HZTitle');
$Ueber = lang('HZUeber');
$Side = lang('HZSidebar');
$Meta = lang('HZMETADescr');
$FixContact = "";
$Kontakttext = "Wenn sie sich für hochwertigen Zahnersatz interessieren, dann rufen Sie uns bitte an.";

	$Seite= "hochwertiger-zahnersatz.php";
	//$Behandlung = true;


	include('./inc/head.php');
	include('./inc/header.php');
?>


     <section class="background-11">
                <div class="container">

					<?php include('./inc/grauerBalken.php');



					?>




               <div class="row no-gutters">
					<!--<div class="col-lg-1 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">

					</div>-->
               <div class="col-lg-6 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div data-zanim-timeline="{}" data-zanim-trigger="scroll">

							<img  style="background-color:white; margin:10px; border-radius:5%;"	width="100%" src="<?php echo lang('ZEBild1'); ?>">




						 </div>
                     </div>
				</div>
				<div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                       <h2 class="fs-2"><br><?php echo lang('ZEUeber1'); ?></h2>
					   <p>
					<?php echo lang('ZEtext1'); ?>
					</p>
                        </div>





				  <div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                       <h2 class="fs-2"><br><?php echo lang('ZEUeber2'); ?></h2>

					  <p>
					 <?php echo lang('ZEtext2'); ?>
					  </p>


                        </div>

				     <div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
				   	<div align="center">
								<img  style="background-color:white; margin:10px; border-radius:5%;"	width="95%" src="<?php echo lang('ZEBild2'); ?>">

					 </div>
					<h2 class="fs-2 ">Bequeme Ratenzahlung</h2><br><p>Zusammen mit unserer Abrechnungsgesellschaft bieten wir Ihnen die Möglichkeit, ihre Zahnersatz -Rechnung in bequemen Raten zu bezahlen .
					</p>


					<div align="center">
						<?php echo lang('ZELinkAbrechnungsgesellschaft'); ?>
					</div>


				   </div>
                    </div>


					 <?php
						//include('./inc/gruende.php');
					include('./inc/termin.php');?>


				</div>



                <!--/.container-->
            </section>




<?php

	include('./inc/footer.php');
?>
