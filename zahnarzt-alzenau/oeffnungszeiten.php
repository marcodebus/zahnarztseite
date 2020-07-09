<?php
session_start();
include('./inc/config.php');
$Title = lang('OeffnungszeitenTitle');
$Ueber = lang('OeffnungszeitenUeber');
$Side = lang('OeffnungszeitenSidebar');
$Meta = lang('OeffnungszeitenMETADescr');
$Kontakttext = "Sie möchten einen Termin bei uns vereinbaren möchten? Rufen Sie uns bitte an!";
$Seite = "oeffnungszeiten.php";
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
    <?php include('./inc/grauerBalken.php'); ?>
    
    <div class="row no-gutters">
      <div class="col-lg-5 py-3 py-lg-0" style="min-height:400px; background-color:white; background-position: top;">
        <div class="d-flex align-items-center h-100">
          <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <h5 data-zanim='{"delay":0}'><br><?php echo lang('OeffnungszeitenSubUeber');?></h5>

            <!-- <p class="my-4" data-zanim='{"delay":0.1}'>-->
            <!-- <p data-zanim='{"delay":0.1}'>-->
              <div class="overflow-hidden">
                <div class="" data-zanim='{"delay":0.1}'>
                  <h5 class="fs-0 fs-lg-1">
                    <img src="assets/bilder/icons/uhr.png" style="padding-right:10px;"><?php echo lang('Open');?></h5>
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
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
<!--
<div class="col-lg-12  .color-9" style="background-color:#4590e7; padding-top: 8px; padding-bottom: 1px; margin-bottom: 10px; border-radius:20px;">
-->
          <br>
          <p align="center" style="color:white;">
            <?php echo lang('OeffnungszeitenText');?>
          </p>
        </div>

        <h6 class="color-7 fw-600" data-zanim='{"delay":0.1}'><?php echo lang('NotdienstText');?></h6>
      </div>
    </div>
    <div class="col-lg-7 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary
radius-bl-secondary radius-bl-lg-0">

      <div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-color:white; ">
      </div>
      <img  style="background-color:white; border-radius:50%;"	width="100%" src="<?php echo lang('OeffnungszeitenBild');?>">

    </div>
</div>

















<?php
include('./inc/termin.php');
?>







</div>
<!--/.container-->
</section>


<section class="">
<div class="container"><a href="https://www.notdienst-zahn.de">
<img  src="./assets/bilder/notdienst.png" width="100%" height="">
</div>
<!--/.container-->
</section>

<?php
include('./inc/footer.php');
?>
