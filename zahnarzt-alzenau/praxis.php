<?php
error_reporting(0);
session_start();
include('./inc/config.php');
$Title = lang('PraxisTitle');
$Ueber =  lang('PraxisUeber');
$Side = lang('PraxisSidebar');
$Meta = lang('PraxisMETADescr');
$Kontakttext = "Sie möchten einen Termin in unserer Praxis vereinbaren? Rufen Sie uns bitte an!";
$galerie = true;
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
        <div class="row text-center">
            <div class="col">
                <h1 class="fs-2 fs-md-3 fw-600"><?php echo lang('PraxisUeber1');?></h1>


                <?php
							    $icon = "icon-Tooth";
								include('./inc/unterstrich.php');
						?>
            </div>
        </div>

        <div class="row no-gutters pos-relative mt-4 mt-lg-0">
            <div class="elixir-caret d-none d-lg-block"></div>
            <div class="col-lg-6 py-3 py-lg-0 mb-0 order-lg-2" style="min-height:400px;">
                <div class="background-holder radius-tl-secondary radius-tl-lg-0 radius-tr-secondary radius-tr-lg-0"
                    style="background-image:url(<?php echo lang('BildPraxis');?>);"> </div>
                <!--/.background-holder-->
            </div>
            <div
                class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary radius-br-lg-0">
                <div class="d-flex align-items-center h-100">
                    <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h2 data-zanim='{"delay":0}'><?php echo lang('PraxisUeber2');?></h2>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mt-3" data-zanim='{"delay":0.1}'><?php echo lang('PraxisText1');?></p>
                        </div>
                        <div class="overflow-hidden">
                            <div data-zanim='{"delay":0.2}'>
                                <a class="d-flex align-items-center"
                                    href="angstpatient-lachgas-tiefschlaf-vollnarkose.php">
                                    <?php echo lang('LinkunterTextPraxis');?>
                                    <div class="overflow-hidden ml-2">
                                        <span class="d-inline-block"
                                            data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!--/.row-->
    </div>
    <!--/.container-->
</section>



<?php
include('./inc/neupatientenBlau.php');

include('./inc/praxisgruende.php');
?>

<div class="row mt-6">
    <div class="col">
        <h2 class="text-center fs-2 fs-md-3"><?php echo lang('PraxisGalerieUeber'); ?></h2>

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



        <?php
								$all_files = glob("./assets/bilder/praxisgalerie/*.*");
								$j = 0;
								 echo "<div class=\"row\"> ";
								  for ($i=0; $i<count($all_files); $i++)
									{
									  $image_name = $all_files[$i];
									  $supported_format = array('gif','jpg','jpeg','png');
									  $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
									  if (in_array($ext, $supported_format))
										  {



										  if($j % 3  == 0 ){

 												 	echo "
													<div class=\"column\">
										  			 <img src=\"".$image_name ."\" alt=\"".$image_name."\" title=\"Zahnarzt Fuchs in Alzenau der Praxis \" style=\"width:100%\">
												    ";

										  }else if($j % 3  == 2){

											 echo " <img src=\"".$image_name ."\" alt=\"".$image_name."\"  title=\"Zahnarzt Fuchs Alzenau Ihr Zahnarzt für Alzenau\" style=\"width:100%\">
											 		</div>";

										  }else{
											   echo "<img src=\"".$image_name ."\" alt=\"".$image_name."\"  title=\"Zahnarzt Fuchs Alzenau Ihr Zahnarzt für Alzenau\" style=\"width:100%\">";
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

<?php
		include('./inc/terminSection.php');
    include('./inc/footer.php');
	?>