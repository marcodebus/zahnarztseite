<?php
session_start();
include('./inc/config.php');

$Behandlung = false;
$galerie = false;


$Seite = "index.php";
$Title = lang('IndexTitle');
$Ueber = lang('IndexUeber');
$Side = lang('IndexSidebar');
$Meta = lang('IndexMETADescr');
$FixContact = "";



include('./inc/head.php');
if (isset($_SESSION["myvar"])) {
include('./inc/headerbehandlung.php');
}
else {
include('./inc/header.php');
}
//include('./inc/headerSlider.php');
//include('./inc/zufallsKontaktBild.php');

?>


<!--Anfang Slider -->

<!--ende Slider-->


				<img src="https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_gruppenbild-2000x1126.jpeg"	width="100%" title="Logo Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Log Zahnarzt Alzenau Dr. Bernhard Fuchs" style="margin-top:30px">





            <section class="background-white  text-center">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10 col-md-9">
                            <h1 class="color-primary fs-2 fs-lg-3"><strong><?php echo lang('IndexUeber1');?></strong></h1>
                            <p class="px-lg-4 mt-3"></p>


							<?php
								$icon = "icon-Tooth";
								include('./inc/unterstrich.php');
								echo lang('IndexText1');
							?>
							<img class="radius-secondary" width ="50%" title="Zahnarztpraxis Alzenau Dr. Bernhard Fuchs" alt=" Zahnarzt Alzenau Dr. Bernhard Fuchs" src="<?php echo lang('begruesungsbild');?>" alt="" />
						</div>
					</div>



                    <!--/.row-->
                </div>
                <!--/.container-->
            </section>


            <?php
				include('./inc/gruende.php');
				include('./inc/blauerBalkenAnrufen.php');
			?>



	 <section class="background-11">
                <div class="container"  >
                    <h3 class="text-center fs-2 fs-md-3"><?php echo lang('Kontakt');?></h3>
						<!--Unterstrich-->
					<div style=" text-align: center;">
						<?php
								$icon = "icon-Tooth";
								include('./inc/unterstrich.php');
						?>
					</div>







					<div class="row">


						 <div class="col-lg-7 px-lg-5 mt-6 mt-lg-0 time-zon" data-zanim-timeline="{}" data-zanim-trigger="scroll">


							<div class="overflow-hidden">
                                <div class="" data-zanim='{"delay":0.1}'>
										 <h4 class="fs-0 fs-lg-1">
                                      <img src="assets/bilder/icons/home.png" title="Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Zahnarzt Alzenau Dr. Bernhard Fuchs"  style=""><?php echo lang('Name');?></h4>
                                </div>
                            </div>


							<div class="overflow-hidden">
                                <div class="" data-zanim='{"delay":0.1}'>
                                   <h5 class="fs-0 fs-lg-1">
                                   <img src="assets/bilder/icons/telefon.png" title="Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Zahnarzt Alzenau Dr. Bernhard Fuchs"  style=""><?php echo lang('Telefon');?></h5>

                                </div>
                            </div>

							<div class="overflow-hidden">
                                <div class="" data-zanim='{"delay":0.1}'>
								<h5 class="fs-0 fs-lg-1">
                                       <img src="assets/bilder/icons/fax.png" title="Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Zahnarzt Alzenau Dr. Bernhard Fuchs"  style=""><?php echo lang('Fax');?></h5>
                                </div>
                            </div>


							<div class="overflow-hidden">
                                <div class="" data-zanim='{"delay":0.1}'>
										 <h5 class="fs-0 fs-lg-1">
                                     	<img src="assets/bilder/icons/mail.png" title="Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Zahnarzt Alzenau Dr. Bernhard Fuchs"  style=""><?php echo lang('Email');?></h5>
                                </div>
                            </div>


							<div class="overflow-hidden">
                                <div class="" data-zanim='{"delay":0.1}'>

									<h5 class="fs-0 fs-lg-1">

									<img src="assets/bilder/icons/uhr.png" title="Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Zahnarzt Alzenau Dr. Bernhard Fuchs"  style=""><?php echo lang('Open');?></h5>
									<div style="">
							<div class="col-lg-12">
                            <div class="  radius-secondary" align="left" style="padding-left:43px;" >

								<div style="overflow-x:auto;">



									<table>



										<?php
											$array =  array('Mo','Di','Mi','Do','Fr');
											$i =0;
											while ($i <5){

											     echo"<tr><td>";
												 echo lang($array[$i]);
												echo"</td><td>";
												 echo lang($array[$i].'1');
												//echo"</td><td>";
												 echo lang('und');
												//echo"</td><td>";
												 echo lang($array[$i].'2');
												//echo"</td><td>";
												 echo lang('Uhr');
												//echo"</td><td>";
												 echo"</td></tr>";


											$i = $i+1;
											}

										?>

										
  						
										
										
					





								</table>
									
								<div class="col-lg-12  .color-9" style="background-color:#4590e7; padding-top: 20px; padding-bottom: 1px; margin-bottom: 10px; border-radius:20px;">
									<p align="center" style="color:white;">
										<?php echo lang('OeffnungszeitenText');?>
									</p>
								</div><?php echo lang('NotdienstText');?>
									
									
									
								</div>

							</div>
                        </div>

									</div>
                                </div>
                            </div>

                        </div>

						 <div class="col-lg-5 pr-0 pr-lg-3">
                            <br><br><img title="Zahnarzt Alzenau Dr. Bernhard Fuchs" class="radius-secondary" src="<?php
								 										   //include("./inc/zufallsKontaktBild.php");
								 									       //echo rotate("./assets/bilder/kontaktbilder/");
																		echo "https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/webbilder/rauchtelefon.jpg";

								 									?>"
									alt="Zahnarzt Alzenau Dr. Bernhard Fuchs Bewertung">
                        </div>

                    </div>

                    <!--/.row-->
                </div>
                <!--/.container-->
            </section>























<?php
include('./inc/terminGanzeBreite.php');
include('./inc/footer.php');
?>