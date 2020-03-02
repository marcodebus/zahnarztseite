

<?php
include('./inc/config.php');

$Title = lang('AEZTitle');
$Ueber = lang('AEZUeber');
$Side = lang('AEZSidebar');
$Meta = lang('AEZMETADescr');
$Kontakttext = "Wenn Sie schöne weiße Zähne haben wollen, rufen Sie uns doch einfach an und vereinbaren einen Beratungstermin bei uns!";
//echo $Title . "<br>".$Ueberschrift  . "<br>". $Sidebar  . "<br>" . $Meta;
$FixContact = "";
	$Seite= "aestetische-zahnheilkunde.php";
	//$Behandlung = true;


	include('./inc/head.php');
	include('./inc/header.php');
?>


     <section class="background-11">
                <div class="container">

					<?php include('./inc/grauerBalken.php'); ?>

               <div class="row no-gutters">

               <div class="col-lg-4 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
                     <div class="d-flex align-items-center h-100">
                     	<div data-zanim-timeline="{}" align="center" data-zanim-trigger="scroll">
							<img  style="background-color:white; margin:0px; border-radius:50%;"	width="350px" src="<?php echo lang('AZBild1');?>">
							<!--<img  style="background-color:white;margin-top:40px; border-radius:5%;"	width="100%" src="<?php/* echo lang('AZBild2');*/?>

">-->
						</div>
                     </div>
				</div>
				<div class="col-lg-7 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
									radius-bl-secondary radius-bl-lg-0">
					<div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; "> </div>
                       <h2 class="fs-2"><br><?php echo lang('AZUeber');?></h2>
					   <p>

						<?php echo lang('AZText');?>
						<div class="col-lg-12 radius-tr-lg-secondary  .color-9" style="padding-top:10px; padding-bottom:10px; background-color:#4590e7; color:white; border-radius:20px; ">

											   <p align="center" style="color:white;">
												   <?php echo lang('AZText2');?></p>
						</div>

						<blockquote class="blockquote-reverse my-5 font-2">
							<p class="fs-2 color-4 lh-2 font-italic"><?php echo lang('AZBlockquote');?></p>
						</blockquote>




                        </div>
                    </div>


					 <?php include('./inc/termin.php');?>


				</div>



                <!--/.container-->
            </section>




<?php

	include('./inc/footer.php');
?>
