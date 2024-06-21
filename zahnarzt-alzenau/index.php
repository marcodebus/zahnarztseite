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

<!--https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_gruppenbild-2000x1126.jpeg-->
				<br><img src="../zahnarzt-alzenau/assets/bilder/GruppenbildMitBg.jpg"	width="100%" title="Logo Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Log Zahnarzt Alzenau Dr. Bernhard Fuchs" style="margin-top:30px">





            <section class="background-white  text-center">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10 col-md-9">
                            <h1 class="color-primary fs-2 fs-lg-3"><strong><?php echo lang('IndexUeber1');?></strong></h1>
                            <p class="px-lg-4 mt-3"></p>


							<?php
								$icon = "icon-Tooth";
								include('./inc/unterstrich.php');

							?>
				

				
				
				
				
				<!--<br><br><a class="video-modal btn btn-icon btn-outline-primary btn-icon-left " href="https://www.youtube.com/watch?v=uDbga9Kg8ew" data-start="0" data-end="45">
				<span class="icon-Youtube "></span>Praxis Video</a>-->

							<div class="col-lg-12 px-5 py-6 my-lg-0" style="background-color:#ffeee; border-radius:20px; ">
								
								
											<!--	<iframe width="100%" height="315" src="https://www.youtube.com/embed/uDbga9Kg8ew" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
 
		



					


<h4>Sehr geehrte Patienten,</h4>
    <p> 
       <strong> Ich beende meine Praxistätigkeit und gehe in den Ruhestand.<br></strong>
        Die Praxis wird demnächst geschlossen. 
    </p>
    <p>
        Die Behandlungsunterlagen wird <br>
        <strong>Herr Dr. Sebastian Beissler, Aschaffenburger Str. 12, 63867 Johannesberg, Tel. NR. 06021-425926</strong>, 
        übernehmen. Er hat sich auch dazu bereit erklärt, Sie in meinem Sinne weiter zu behandeln.
    </p>
    <p>
        Ich danke ihnen für ihre langjährige Treue und die schöne Zeit die ich mit ihnen in meiner Praxis verbringen durfte.
    </p>
    <p>
        Alles Liebe und Gute<br>
        Ihr Dr. Bernhard Fuchs
    </p>

								
	<!--							
<h4>Sehr geehrte Patienten,
<br>
	wir machen Urlaub bis 10. April 2023</h4>
<p><br><br>
Die Vertretung übernimmt die <br>
Gemeinschaftspraxis Dr. Bock & Behne,<br>
Im Breitfeld 59, 63776 Mömbris,<br>
Telefonnummer: 06029/994323<br>
<br><br>
An den Feiertagen steht für Sie der Notdienst 
unter der Telefonnummer 06021/80700 bereit.
<br><br>
Wir wünschen Ihnen schöne Osterfeiertage und
sind ab Dienstag, dem 11. April 2023, wieder für 
Sie da.
<br><br>
Ihre Zahnarztpraxis 
<br><br>
								Dr. Bernhard Fuchs</p>
-->
								
								
								
								<!--<h4>Sehr geehrte Patienten,<br><br>
									unsere Praxis ist bis zum <br>01.01.2023<br>  geschlossen.<br><br></h4>
								<h5>
								In dringenden Fällen steht der <br> zahnärztliche Notdienst  
								unter der <br> Nummer: 06021-80700  für Sie bereit.
								
								<br><br>Ein frohes Weihnachtsfest und einen guten Rutsch ins Neue Jahr
									
									<br><br>wünscht Ihnen ihr Praxisteam<br><br>-->

							
								
								</h5>
								
				
				
								<!--<h2 class="fs-2">Aktuelle Informationen zur Corona-Pandemie</h2>
								<ol style="text-align:left; margin-left:50px">
								<li>Unsere Praxis ist weiterhin für Sie geöffnet</li>
								<li>Wir behandeln mit erhöhten Sicherheitsmaßnahmen</li>
								<li>Unser Team ist gegen COVID-19 geimpft.</li>
								</ol>
												<br><img src="../zahnarzt-alzenau/assets/bilder/covid.png"	width="40%" title="Covid Zahnarzt Alzenau Dr. Bernhard Fuchs" alt="Covid Zahnarzt Alzenau Dr. Bernhard Fuchs" >

									<a class="btn btn-icon btn-outline-primary btn-icon-left " href="corona.php">
											<span class="icon-Tooth "></span>Weitere Informationen</a>-->
							</div>


							<?php
								/*echo '<br><a href="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/corona.php">
											<img  width="75%" title="Corona Pandemie Zahnarztpraxis Alzenau Dr. Bernhard Fuchs" alt=" Zahnarzt Alzenau Dr. Bernhard Fuchs"
											src="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/images/corona_zahnarzt-alzenau.jpeg"/>
											</a>';*/
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
												$var = lang($array[$i].'2');
												if($var !== ''){
													echo lang('und');
													//echo"</td><td>";
													 echo lang($array[$i].'2');
													//echo"</td><td>";
												}
												 echo lang('Uhr');
												//echo"</td><td>";
												 echo"</td></tr>";


											$i = $i+1;
											}

										?>











								</table>
<?php /*
								<div class="col-lg-12  .color-9" style="background-color:#4590e7; padding-top: 20px; padding-bottom: 1px; margin-bottom: 10px; border-radius:20px;">
									<p align="center" style="color:white;">
										<?php echo lang('OeffnungszeitenText');?>
									</p>
								</div>
									*/?>
									<br>
									<?php echo lang('NotdienstText');?>



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












						<!-- Button trigger modal -->
						<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
						  Corona Pandemie Erhöhte Sicherheitsmaßnahmen
						</button>
						-->
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><h4>Corona Pandemie</h4> <br> <h5 align="center">Erhöhte Sicherheitsmaßnahmen in unserer Praxis</h5>

						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
										<ul>
 									 <li>Hatten Sie Kontakt mit einem bestätigten Corona-Virus-Fall?</li><br>
 									 <li>Waren Sie in den letzten zwei Wochen in einem Gebiet,
 							in dem das Coronavirus bestätigt wurde?</li><br>
 							<li>haben Sie Anzeichen einer möglichen Coronavirus-Infektion
 				 (z.B. Atemnot, Husten, Fieber, Halsschmerzen)</li>
 				</ul>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nein</button>
						        <button type="button" class="btn btn-primary"><a href="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/corona.php" style="color: white;">Eine Frage mit JA beantwortet</a></button>
						      </div>
						    </div>
						  </div>
						</div>










<?php
include('./inc/terminGanzeBreite.php');
include('./inc/footer.php');
?>
