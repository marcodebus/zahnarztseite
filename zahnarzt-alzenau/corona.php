<?php
session_start();
include('./inc/config.php');
$Title = lang('OeffnungszeitenTitle');
$Ueber = lang('OeffnungszeitenUeber');
$Side = lang('OeffnungszeitenSidebar');
$Meta = lang('OeffnungszeitenMETADescr');
$Kontakttext = "Sie möchten einen Termin bei uns vereinbaren möchten? Rufen Sie uns bitte an!";
$Seite = "oeffnungszeiten.php";
$FixContact = "";
include('./inc/head.php');
if (isset($_SESSION["myvar"])) {
include('./inc/headerbehandlung.php');
}
else {
include('./inc/header.php');
}
include('./inc/headerSlider.php');
?>








            <section class="background-11">
                <div class="container">



					<table width="100%">
						<tr>
							<td style="width: 50%"><h1 class="fs-2">Corona: Vorsicht hilft uns allen!</h1> <h2 class="fs-1">Ausbreitung des Coronavirus eindämmen</td>
							<td class="text-right fs--1" style="width: 50% "></td>
						</tr>
					</table>
                    <div class="row no-gutters">




                 <div class="col-lg-5 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                            	<div class="d-flex align-items-center h-100">

                                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">


                                <h5 data-zanim='{"delay":0}'><br>Unsere Praxis ist weiterhin für Sie geöffnet. Wir behandeln mit erhöten Sicherheitsmaßnahmen</h5>

                                  Bevor Sie unsere Praxis betreten, stellen Sie sich bitte folgende
                                  Fragen:
                                  <br><br>
                                       <ul>
                                       <li>hatten Sie Kontakt mit einem bestätigten Corona-Virus-Fall?</li>
                                       <li>waren Sie in den letzten zwei Wochen in einem Gebiet,</li>
                                  in dem das Coronavirus bestätigt wurde?</li>
                                  <li>haben Sie Anzeichen einer möglichen Coronavirus-Infektion
                             (z.B. Atemnot, Husten, Fieber, Halsschmerzen)</li>
                             <br><br></ul>
                                  <br>


									<p data-zanim='{"delay":0.1}'>

											<div class="overflow-hidden">
                                <div class="" data-zanim='{"delay":0.1}'>

									<h5 class="fs-0 fs-lg-1">

									<div style="">
							<div class="col-lg-12">
                            <div class="  radius-secondary" align="left" style="padding-left:43px;" >



							</div>
                        </div>

									</div>
                                </div>
                            </div>








									<!--</p>-->
                                    <!--<img data-zanim='{"delay":0.2}'
                                        src="assets/images/signature.png" alt="" />
                                    <h5 class="text-uppercase mt-3 fw-500 mb-1" data-zanim='{"delay":0.3}'>renal scott</h5>
                                    -->
                                </div>
                            </div>







                 </div>



                 <div class="col-lg-7 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">

							 <div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                            <img  style="background-color:white; border-radius:50%;"	width="60%" src="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/images/corona.png">

                        </div>
                    </div>







                    						<?php
                    							include('./inc/termin.php');
                    						?>







                    					 </div>
                                    <!--/.container-->
                                </section>


                    		

                        <?php
                    include('./inc/footer.php');
                    ?>
