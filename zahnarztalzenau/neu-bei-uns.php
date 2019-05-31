<?php
session_start();
include('./inc/config.php');
$Title = lang('NeuTitle');
$Ueber = lang('NeuUeber');
$Side = lang('NeuSidebar');
$Meta = lang('NeuMETADescr');
$Kontakttext = "Wenn Sie zum ersten Mal zu uns in die Praxis kommen möchten, dann rufen Sie uns bitte an und vereinbaren einen Termin";


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

					<?php include('./inc/grauerBalken.php');?>

                    <div class="row no-gutters">




                 <div class="col-lg-5 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                            	<div class="d-flex align-items-center h-100">
                                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">

                                    <h5 data-zanim='{"delay":0}'><?php echo lang('NeupatientenUeber');?></h5>
																		<img src="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/neu/begruesung.jpg" style="border-radius:20px;">
									<h6 class="color-7 fw-600" data-zanim='{"delay":0.1}'><?php echo lang('NeupatientenUUeber');?></h6>
                                   <!-- <p class="my-4" data-zanim='{"delay":0.1}'>-->
									<p data-zanim='{"delay":0.1}'>
										<?php echo lang('NeupatientenText');?>
									</p>

                                </div>
                            </div>







                 </div>



                 <div class="col-lg-7 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">

					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; ">
					 </div>
                            <img  style="background-color:white; border-radius:50%;"	width="100%" src="<?php echo lang('NeupatientenBild');?>">

                        </div>
                    </div>

                    <div class="row mt-6">
                        <div class="col">
                            <h3 class="text-center fs-2 fs-md-3"><?php echo lang('NeupatientenDownloadUeber');?></h3>
                            <hr class="short" data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" /> </div>
                        <div class="col-12">
                            <div class="background-white px-3 mt-6 px-0 py-5 px-lg-5 radius-secondary">


					<div class="row">

						     <div class="col-sm-12 col-md-12 col-lg-4" style="margin: auto;">
                            <div class="background-white pb-4 h-100 radius-secondary">

                                <div class="px-4">
                                    <div class="overflow-hidden">
                                        <h5 ><?php echo lang('NeupatientenDownloadUUeber1');?><br></h5>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="fw-400 color-7"> </h6>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="py-3 mb-0" ><?php echo lang('NeupatientenDownloadUText1');?><br><br>
										<br><br><br><br><br>
										<a  href="<?php echo lang('NeupatientenAnmeldebogenPfad');?>" class="btn btn-icon btn-outline-primary btn-icon-left btn-capsule">
											<span class="icon-File-Download">
											</span> <?php echo lang('Download');?>
										</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                     <div class="col-sm-12 col-md-12 col-lg-4" style="margin: auto;">
                            <div class="background-white pb-4 h-100 radius-secondary">

                                <div class="px-4" >
                                    <div class="overflow-hidden">
                                        <h5 ><?php echo lang('NeupatientenDownloadUUeber2');?></h5>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="fw-400 color-7" ></h6>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="py-3 mb-0">
											<?php echo lang('NeupatientenDownloadUText2');?>

										<br><br><br>
										<a  href="<?php echo lang('NeupatientenChecklistePfad');?>" class="btn btn-icon btn-outline-primary btn-icon-left btn-capsule">
											<span class="icon-File-Download">
											</span><?php echo lang('Download');?>
										</a>
										<br></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

							</div>

                            </div>
                        </div>


					 </div>
                <!--/.container-->
            </section>


	<?php
include('./inc/terminSection.php');
include('./inc/footer.php');
?>
