
<?php
include('./inc/config.php');
$Title = lang('LGTitle');
$Ueber = lang('LGUeber');
$Side = lang('LGSidebar');
$Meta = lang('LGMETADescr');
$Kontakttext = "Wenn sie Angst vor dem Zahnarzt haben und eine Lösung für ihr Problem brauchen, dann rufen Sie uns bitte an!";

	$Seite= "parodontitis-zahnfleischentzuendung.php";
	//$Behandlung = true;
	include('./inc/head.php');
	include('./inc/header.php');
?>

     <section class="background-11">
                <div class="container">

					<?php include('./inc/grauerBalken.php'); ?>

               <div class="row no-gutters">

				   <div align="center" style="padding-top:40px" >

						</div>

               <div class="col-lg-6 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div align="center">

												<div align="center" style="padding-top:40px" >
												 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src=" <?php echo lang('LGBild1');?>">
												</div>



						 </div>
                     </div>
				</div>
				<div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>

					<h2 class="fs-2" align="center">
						<?php echo lang('LGUeber1');?>
					</h2>
					 	<?php echo lang('LGText');?>

						<div align="center" style="padding-top:40px" >
							<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src=" <?php echo lang('LGBild2');?>">
						</div>

                        </div>

				<div class="col-lg-12 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>

					<h2 class="fs-2" align="center">
						 <?php echo lang('LGUeber2');?> <br>

						</h2>
					    <?php echo lang('LGText2');?>



					<h2 class="fs-2" align="center">
						 <?php echo lang('LGUeber3');?> <br>

						</h2>
					    <?php echo lang('LGText3');?>

                        </div>

				 <!--<div class="col-lg-6 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div align="center">

						<div align="center" style="padding-top:40px" >
						 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src=" <?php echo lang('LGBild2');?>">
						</div>
						 </div>
                     </div>
				</div>-->

				   		<div class="col-lg-12 px-5 py-6 my-lg-0 radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0 .color-9"style="background-color:#4590e7; border-radius:20px; " >

					   <p align="center" style="color:white;">
						   <?php echo lang('LGBlau');?>
						</p>
						</div>
						</div>



						<?php
							include('./inc/termin.php');
		 				?>

				</div>
    </section>




<?php
	include('./inc/footer.php');
?>
