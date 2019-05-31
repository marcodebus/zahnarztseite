
<?php
include('./inc/config.php');
$Title = lang('WFTitle');
$Ueber = lang('WFUeber');
$Side = lang('WFSidebar');
$Meta = lang('WFMETADescr');
$FixContact = "";


	$Seite= "weisse-fuellungen.php";
	//$Behandlung = true;


	include('./inc/head.php');
	include('./inc/header.php');
?>


     <section class="background-11">
                <div class="container">

					<?php include('./inc/grauerBalken.php'); ?>

               <div class="row no-gutters">
					<!--<div class="col-lg-1 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">

					</div>-->
               <div class="col-lg-6 col-md-6 col-sm-12 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div style="text-align:center;" data-zanim-timeline="{}"data-zanim-trigger="scroll">
							<div align="center">
								<img  style="background-color:white; margin:10px; border-radius:5%;"
								 width="100%" src="<?php echo lang('WFBild1'); ?>">
							</div>

							<div align="center" style="float:left; width: 16%;"><hr/></div>
							<div style="float:right; width: 16%;"><hr/></div>
							<p class=".color-7" align="center"><?php echo lang('WFBildUnter'); ?></p>

						<div align="center" style="padding-top:40px" >
						 	<!--<img style="background-color:white; margin:10px; border-radius:5%;"	width="55%" src="<?php // echo lang(''); ?>">-->
						</div>
						 </div>
                     </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12  px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                       <h2 class="fs-2"><?php echo lang('WFUeber1'); ?></h2>

<?php echo lang('WFText1'); ?>


						<div align="center">
							<img  style="background-color:white; margin:10px; border-radius:5%;"	width="60%" src="<?php echo lang('WFBild2'); ?>">
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
