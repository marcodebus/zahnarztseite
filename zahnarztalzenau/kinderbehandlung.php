<?php
include('./inc/config.php');
$Title = lang('KBTitle');
$Ueber = lang('KBUeber');
$Side = lang('KBSidebar');
$Meta = lang('KBMETADescr');
$Kontakttext = "";
$FixContact =lang('KBBild3');

	$Seite= "kinderbehandlung.php";
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

				 <div class="col-lg-12 py-3 py-lg-0" align="center" style="background-color:white; background-position: top;">
				  <img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php echo lang('KBBildFuchs');?>">
				 </div>
               <div class="col-lg-6 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div align="center">



						<div align="center" style="padding-top:40px" >
						 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php echo lang('KBBild1');?>">
						</div>
						 </div>
                     </div>
				</div>
				<div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>




					<h2 class="fs-5">

						<font face="kinder" color="#3b8ced"><?php echo lang('KBUeber1');?></font>


						</h2>
					   <p>

					 <?php echo lang('KBText1');?>
					</p>
                        </div>





				   		<div class="col-lg-12 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
							<h2 class="fs-2"><?php echo lang('KBUeber2');?></h2>
					   <p><?php echo lang('KBText2');?>


					</p>

					<div class="col-lg-12 px-5 radius-tr-lg-secondary  .color-9" style="background-color:#4590e7; padding-top: 8px; margin-bottom: 8px; padding-bottom:1px; color:white; border-radius:20px; ">

											 <p align="center" style="color:white;">
												 <?php echo lang('KBText3');?></p>
					</div>



					<a href="./assets/bilder/downloads/Infobogen-Kinderbehandlung.pdf"> Infobogen mit Tips zur Kinderbehandlung</a>
						</div>











				    <div class="col-lg-12 py-3 py-lg-0" align="center" style="background-color:white; background-position: top;">
				  <img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php echo lang('KBBildFuchs');?>">
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
