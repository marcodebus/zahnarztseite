<?php
session_start();
include('./inc/config.php');
$Title = lang('BehandlungTitle');
$Ueber = lang('BehandlungUeber');
$Side = lang('BehandlungSidebar');
$Meta = lang('BehandlungMETADescr');
$Kontakttext = "Für einen Behandlungstermin in unserer Praxis rufen Sie uns bitte an!";
$FixContact = "";

include('./inc/head.php');
include('./inc/headerbehandlung.php');

$_SESSION["myvar"] = "1";


?>


<p id="SliderBild"></p>

<script>
	window.onload = function(){

	if(screen.width < 800){
    	var x = "";
		document.getElementById("SliderBild").innerHTML = x;
    }else{

   		var x = "<img style=\"margin-top:50px;\" title=\"Zahnarzt Fuchs Alzenau Smile Dr. Fuchs\" alt=\"Zahnarzt Fuchs Alzenau Smile Lachen\" src=\"<?php echo lang('headersliderBehandlung');?>\" width =\"100%\">";
  	document.getElementById("SliderBild").innerHTML = x;
    }

}
</script>
<section class="background-11">


	<div style=" text-align: center;">
						<h1 class="fs-2">Von der Prophylaxe bis zur Implantatprothetik bieten wir ihnen <br><small class="fs-1">das gesamte Spektrum der modernen Zahnheilkunde in unserer <strong>Praxis in Alzenau</strong> an.</small></h1>
							<img src="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/zahnarzt_fuchs_alzenau_zähne.jpg" width="75%">


    <h2 class="text-center fs-2 fs-md-3"><?php echo lang('BehandlungUUeber1');?></h2>

			<?php
					$icon = "icon-Heart";
					include('./inc/unterstrich.php');
			?>


		</div>



					<div class="row">

							 <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 col-xl-6 px-lg-12 mt-12 mt-lg-12\" data-zanim-timeline="{}" data-zanim-trigger="scroll">

			<?php
			$bild=array("",);
			$ueberschrift =	array("",);
			$text =	array("",);
			$link = array("",);
				$i =1;
				while ($i < 11){
					$bildNr = "BB".$i;
					$textNr = "BT".$i;
					$ueberNr = "BU".$i;
					$linkNr = "BL".$i;
					array_push($bild,lang($bildNr));
					array_push($ueberschrift,lang($ueberNr));
					array_push($text,lang($textNr));
					array_push($link,lang($linkNr));
					$i = $i +1	;
				}
			//print_r($a);
			$i= 1; // Da 0 "" Leerwert enthält (Array Initialisierung

			while ($i < count($bild)){

				if ($i === 6){ // Da Beginnend Bei 1 und Wechsel nach dem 5.
					echo " </div>";
					echo "<div class=\"
				col-lg-12 col-md-12 col-xs-12 col-sm-12 col-xl-6 px-lg-12 mt-12 mt-lg-12\" data-zanim-timeline=\"{}\" data-zanim-trigger=\"scroll\">";
				}

					echo "<div class=\"overflow-hidden\">

								<div class=\"px-4 px-sm-0 mt-5\" data-zanim='{\"delay\":0.1}'>
                                     <div style=\"margin-bottom: 10px; padding:10px\">







										<img class=\"behandlung\" width=\"220px\"height=\"220px\"
										src=\"".$bild[$i]."\" title=\"".$ueberschrift[$i]."\" alt\"".$ueberschrift[$i]."\" style=\"  border-radius: 50%;
										margin-right: 20px; margin-left: 20px; margin-bottom:0%; float:left;\">


										<h3 class=\"fs-1 fs-lg-1\">

										".$ueberschrift[$i]."</h3>

										 </div>

										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
											<p class=\"fs-0 mt-3 px-lg-3\">".$text[$i]."</p>
										</div>

										<div class=\"col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12 \" style=\"text-align:right;\">
											<a href=\"".$link[$i]."\" title=\"".$ueberschrift[$i]."\" class=\"btn btn-icon btn-outline-primary btn-icon-left btn-capsule\">
											<span class=\"icon-Tooth\">
											</span> Mehr Erfahren
										</a>
										</div>
										<br>
                                </div>
                            </div>";


			$i = $i +1;
			}

			?>
						</div>
                    </div>
            </section>
<?php
include('./inc/terminSection.php');
include('./inc/footer.php');
?>
