
<?php
include('./inc/config.php');
$Title = lang('PuZTitle');
$Ueber = lang('PuZUeber');
$Side = lang('PuZSidebar');
$Meta = lang('PuZMETADescr');
$Kontakttext = "Sie interessieren sich für Prophylaxe und Professionelle Zahnreinigung? Rufen Sie uns einfach an!"; 


	$Seite= "prophylaxe-zahnreinigung.php";
	//$Behandlung = true;


	include('./inc/head.php');
	include('./inc/header.php');
?>


     <section class="background-11">
                <div class="container">
					<?php include('./inc/grauerBalken.php'); ?>
               <div class="row no-gutters">

               <div class="col-lg-6 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div data-zanim-timeline="{}" data-zanim-trigger="scroll">
							<img  style="background-color:white; margin:10px; border-radius:5%;"	width="100%" src="<?php echo lang('PuZBild1');?>">

						</div>
                     </div>
				</div>
				<div class="col-lg-6 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                       <h2 class="fs-2"><?php echo lang('PuZUeber1');?></h2>
					   <p>
						 				<?php echo lang('PuZText1');?>



                        </div>





				   		<div class="col-lg-12 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                       <h2 class="fs-2"><?php echo lang('PuZUeber2');?></h2>
					  <?php echo lang('PuZText2');?>

						<div align="center">
								<img  style="background-color:white; margin:10px; border-radius:5%;"	width="60%" src="<?php echo lang('PuZBild2');?>">
						</div>

                        </div>





                    </div>


					 <?php include('./inc/termin.php');?>


				</div>



                <!--/.container-->
            </section>




<?php

	include('./inc/footer.php');
?>
