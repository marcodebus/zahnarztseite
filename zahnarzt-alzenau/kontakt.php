<?php
session_start();
include('./inc/config.php');
$Title = lang('KontaktTitle');
$Ueber = lang('KontaktUeber');
$Side = lang('KontaktSidebar');
$Meta = lang('KontaktMETADescr');
$Kontakttext = "Zur Terminvereinbarung rufen Sie uns bitte an!";


	$Seite= "kontakt.php";
	include('./inc/head.php');
	if (isset($_SESSION["myvar"])) {
include('./inc/headerbehandlung.php');
}
else {
include('./inc/header.php');
}

?>






			<section class="background-11">




				<div class="container">

					<?php
						include('./inc/grauerBalken.php');
					?>











					<div class="row">
						<div class="col-xs-0 col-sm-0 col-lg-2 col-xl-2"></div>
						 <div class="col text-right col-xs-12 col-sm-12 col-lg-8 col-xl-8">
								<img width="100%" align="center" style="padding:20px; border-radius: 10px;" src="<?php echo lang('KontaktBildObenMittig'); ?>">
						</div>
						<div class="col-xs-0 col-sm-0 col-lg-2 col-xl-2"></div>
					</div>

					<div class="row">



						 <div class="col-lg-12 col-xl-5 col-sm-12 col-md-12 pr-0 pr-lg-3">
							  <h3 class="text-center fs-2 fs-md-3"><br><br><?php echo lang('KontaktUUeber'); ?></h3>
								<!--Unterstrich-->



									<div style=" text-align: center;">
										<?php
											$icon ="icon-Tooth";
											include('./inc/unterstrich.php');
										?>
									</div>



							 <?php echo lang('IframeGoogle'); ?>

                        </div>












                        <div class="col-lg-12 col-xl-6 col-sm-12 col-md-12 pr-0 pr-lg-3">
                           <?php

													 	include('./inc/kontaktBtn.php');
														?>
														<div class="col-lg-12  .color-9" style="background-color:#4590e7; padding-top: 8px; padding-bottom: 1px; margin-bottom: 10px; border-radius:20px;">

																		<p align="center" style="color:white;">
																			<?php echo lang('OeffnungszeitenText');?>
																		</p>
														</div>
                        </div>




                    </div>


                </div>
                <!--/.container-->
            </section>


	<?php
		$bild ="./assets/bilder/webbilder/zahnarzt_fuchs_alzenau_gruppenbild.jpeg";
		include('./inc/terminSection.php');
		include('./inc/footer.php');
	?>
