
<?php
include('./inc/config.php');
$Title = lang('METitle');
$Ueber = lang('MEUeber');
$Side = lang('MESidebar');
$Meta = lang('MEMETADescr');
$Kontakttext ="Steht bei Ihnen eine Wurzelkanalbehandlung an? Wollen Sie eine Behandlung nach modernsten Methoden, dann vereinbaren Sie bitte einen Termin bei uns!";


	$Seite= "moderne-endodontie-wurzelkanalbehandlung.php";
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
						 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php echo lang('MEBild1'); ?>">
						</div>
						 </div>
                     </div>
				</div>
				<div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>

					<h2 class="fs-2" align="center">
						<?php echo lang('MEUeber1'); ?>


						</h2>
						<p>
					<?php echo lang('METext1'); ?>


					   <p>
							 <div align="center" style="padding-top:0px" >
						 	 <img style="background-color:white; margin:10px; margin-top: 35px; border-radius:5%;"	width="60%" src="<?php echo lang('MEBild3'); ?>">
						 	</div>

        </div>










				    <!--<div class="col-lg-12 py-3 py-lg-0" style="background-color:white; background-position: top;">

				   	<div style="float:left; width: 35%;"><hr/></div>
							<div style="float:right; width: 35%;"><hr/></div>
							<p class=".color-7" align="center"><?php echo lang('MEUUeber1'); ?></p>
				   </div>






					 <div class="col-lg-4 col-md-4 col-sm-12  py-3 py-lg-0" style="background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div align="center">

						<div align="center" style="padding-top:0px" >
						 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php //echo lang('MEBild2'); ?>">
						</div>
						 </div>
                     </div>
				  </div>

				   <div class="col-lg-4 col-md-4 col-sm-12  py-3 py-lg-0" style="background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div align="center">

						<div align="center" style="padding-top:0px" >
						 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php //echo lang('MEBild3'); ?>">
						</div>
						 </div>
                     </div>
				  </div>

				   <div class="col-lg-4 col-md-4 col-sm-12 py-3 py-lg-0" style="background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div align="center">

						<div align="center" style="padding-top:0px" >
						 	<img style="background-color:white; margin:10px; border-radius:5%;"	width="80%" src="<?php //echo lang('MEBild4'); ?>">
						</div>
						 </div>
                     </div>
				  </div>

				-->



			<!--	<div class="col-lg-12 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
			<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; ">
			</div>
-->






<div class="col-lg-12 px-5  background-white radius-tr-lg-secondary radius-br-secondary">
					<h2 class="fs-2" align="center">
						 <?php echo lang('MEUeber2'); ?><br>

						</h2>


						<?php echo lang('MeText2'); ?>






						</div>

					 <?php

					include('./inc/termin.php');?>


				</div>



                <!--/.container-->
            </section>




<?php

	include('./inc/footer.php');
?>
