<?php
error_reporting(0);
session_start();
include('./inc/config.php');
$Title = lang('TeamTitle');
$Ueber = lang('TeamUeber');
$Side = lang('TeamSidebar');
$Meta = lang('TeamMETADescr');
$Kontakttext = "Wenn Sie einen Termin bei uns vereinbaren möchten, dann rufen Sie uns bitte an!";
$FixContact = "";

$galerie = true;

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

        <table width="100%">
            <tr>
                <td style="width: 50%">
                    <h2><?php echo lang('TeamUeber'); ?></h2>
                </td>
                <td class="text-right" style="width: 50% "><?php //echo lang('TeamSideTable'); ?></td>
            </tr>
        </table>
        <div align="center" style="text-align:center;margin:0 auto;"
            class="col-sm-10 col-md-10 col-lg-10 col-xl-10 py-3 py-lg-0">

            <img width="100%"
                style=" margin:20px;  border-radius: 10px; display: block;  margin-left: auto;   margin-right: auto; "
                src="
							<?php echo lang('TeamBildKopf'); ?>">
        </div>
        <br><br>

        <div class="row no-gutters">




            <div align="center" class="col-xs-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 py-3 py-lg-0"
                style="background-color:white; background-position: top;">
                <div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0"
                    style="background-color:white; ">
                </div>
                <img style="background-color:white; padding:5%;" width="300px" src="<?php echo lang('TeamBildAn1'); ?>">
            </div>

            <div class="col-xs-5 col-sm-7 col-md-8 col-lg-8 col-xl-8 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">

                <div class="d-flex align-items-center h-100">
                    <div data-zanim-timeline="{}" data-zanim-trigger="scroll">

                        <h5 data-zanim='{"delay":0}'><?php echo lang('TeamMitgliedUeber1'); ?></h5>
                        <h6 class="color-7 fw-600" data-zanim='{"delay":0.1}'><?php echo lang('TeamMitgliedUUeber1'); ?>
                        </h6>
                        <?php echo lang('TeamMitgliedText1'); ?>

                    </div>
                </div>
            </div>
        </div>




        <div class="row mt-6">
            <div class="col">
                <h3 class="text-center fs-2 fs-md-3"><?php echo lang('TeamUUeber1'); ?></h3>

                <div align="center">
                    <?php
								//$icon = "icon-Tooth";
								//include('./inc/unterstrich.php');
							?>
                </div>


                <div class="col-12">
                    <div class="background-white px-3 mt-6 px-0 py-5 px-lg-5 radius-secondary">




                        <?php
			$bild=array("",);
			$ueberschrift =	array("",);
			$uueberschrift =	array("",);
			$text =	array("",);
				$i =2;
				while ($i < 6){
					$bildNr = "TeamBildAn".$i;
					$textNr = "TeamMitgliedText".$i;
					$ueberNr = "TeamMitgliedUeber".$i;
					$uueberNr = "TeamMitgliedUUeber".$i;

					array_push($bild,lang($bildNr));
					array_push($ueberschrift,lang($ueberNr));
					array_push($text,lang($textNr));
					$i = $i +1	;
				}
			//print_r($a);
			$i = 1; // Da 0 "" Leerwert enthält (Array Initialisierung
				echo "<div class=\"row\">";
			while ($i <= count($bild)-1){ // Minus 1 hinzgefuegt

                // Um Alisha Lux hinzuzufügen -2 auf minus 1 stellen und Texte hinzufügen auf config.php

  

						echo" <div class=\"col-sm-12 col-lg-6\" >
                            <div align=\"center\" class=\"background-white pb-4 h-100 radius-secondary\">
                                <img class=\"mb-4 radius-tr-secondary radius-tl-secondary\"  width=\"250px\" src=\"".$bild[$i]."\" alt=\"Profile Picture\" />
                                <div class=\"px-4\" data-zanim-timeline=\"{}\" data-zanim-trigger=\"scroll\">
                                    <div align=\"left\" class=\"overflow-hidden\">
                                        <h5 data-zanim='{\"delay\":0}'>".$ueberschrift[$i]."</h5>
                                    </div>
                                    <div align=\"left\" class=\"overflow-hidden\">
                                        <h6 class=\"fw-400 color-7\" data-zanim='{\"delay\":0.1}'>".$uueberschrift[$i]."</h6>
                                    </div>
                                    <div align=\"left\" class=\"overflow-hidden\">
                                        <p class=\"py-3 mb-0\" data-zanim='{\"delay\":0.2}'>".$text[$i]."
                                    </div>
                                </div>
                            </div>
                        </div>";

              

			$i = $i +1;
			}
								echo"  </div>";

			?>




                    </div>

                </div>
            </div>
        </div>



        <div class="row mt-6">
            <div class="col">
                <h3 class="text-center fs-2 fs-md-3"><?php echo lang('GalerieUeber'); ?></h3>

                <div align="center">
                    <?php
									$icon = "icon-Tooth";
									include('./inc/unterstrich.php');
								?>
                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="background-white px-3 mt-6 px-0 py-5 px-lg-5 radius-secondary">


               <!-- <div class="row">
                    <div class="col-12">
                        <img width="100%"
                            src="../wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_gruppenbildx-2000x1126.jpeg">
                    </div>
                </div>-->
                <?php
								$all_files = glob("./assets/bilder/teamgalerie/*.*");
								$j = 0;
								 echo "<div class=\"row\"> ";
								  for ($i=0; $i<count($all_files); $i++)
									{
									  $image_name = $all_files[$i];
									  $supported_format = array('gif','jpg','jpeg','png');
									  $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
									  if (in_array($ext, $supported_format))
										  {



										  if($j % 2  == 0 ){

 												 	echo "
													<div class=\"column\">
										  			 <img src=\"".$image_name ."\" alt=\"".$image_name."\"  style=\"width:100%\">
												    ";

										  }else if($j % 2  == 1){

											 echo " <img src=\"".$image_name ."\" alt=\"".$image_name."\"  style=\"width:100%\">
											 		</div>";

										  }else{
											   echo "<img src=\"".$image_name ."\" alt=\"".$image_name."\"  style=\"width:100%\">";
										  }

											//echo '<img src="'.$image_name .'" alt="'.$image_name.'" />'."<br /><br />";
									   } else {
											continue;
										}
									  $j = $j +1;
									}
								 echo"</div>";


								?>


            </div>
            <!--/.row-->
        </div>
    </div>

    <?php
           include('./inc/terminGanzeBreite.php');
           ?>
    <!--/.container-->
</section>

<?php

include('./inc/footer.php');
?>
